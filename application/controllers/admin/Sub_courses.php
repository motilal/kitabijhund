<?php

/**
 * Description of Sub_courses
 *
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sub_courses extends CI_Controller {

    var $viewData = array();

    public function __construct() {
        parent::__construct();         
        $this->site_santry->redirect = "admin";
        $this->site_santry->allow(array());
        $this->load->model(array('sub_course_model' => 'sub_course'));
        $this->layout->set_layout("admin/layout/layout_admin");
        $this->viewData['pageModule'] = 'Sub Course Manager';
    }

    public function index() {
        $this->acl->has_permission('sub_course-index');
        $condition = array();
        $start = (int) $this->input->get('start');
        $result = $this->sub_course->get_list($condition);
        $this->viewData['result'] = $result;
        $this->viewData['title'] = "Sub Course Listing";
        $this->viewData['datatable_asset'] = true;
        $this->viewData['pageHeading'] = 'Sub Course Listing';
        $this->viewData['breadcrumb'] = array('Sub Course Manager' => 'admin/sub_courses', $this->viewData['title'] => '');
        $this->load->model(array('course_model' => 'course'));
        $this->viewData['course_options'] = $this->course->course_options();
        $this->layout->view("admin/sub_course/index", $this->viewData);
    }

    public function manage() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manage');
        $response = array();
        if ($this->form_validation->run() === TRUE) {
            $data = array(
                "name" => $this->input->post('name'),
                "course_id" => $this->input->post('course')
            );
            if ($this->input->post('id') > 0) {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'sub_courses', 'slug', 'id', $this->input->post('id'));
            } else {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'sub_courses', 'slug');
            }
            if ($this->input->post('id') > 0) {
                $has_permission = $this->acl->has_permission('sub_course-edit', FALSE);
                if ($has_permission === TRUE) {
                    $data['updated'] = date("Y-m-d H:i:s");
                    $this->db->update("sub_courses", $data, array("id" => $this->input->post('id')));
                    $resource_id = $this->input->post('id');
                    $response['msg'] = __('SubCourseUpdateSuccess');
                    $response['mode'] = 'edit';
                }
            } else {
                $has_permission = $this->acl->has_permission('sub_course-add', FALSE);
                if ($has_permission === TRUE) {
                    $data['status'] = 1;
                    $data['created'] = date("Y-m-d H:i:s");
                    $this->db->insert("sub_courses", $data);
                    $resource_id = $this->db->insert_id();
                    $response['msg'] = __('SubCourseAddSuccess');
                    $response['mode'] = 'add';
                }
            }
            if ($has_permission === TRUE) {
                $detail = $this->sub_course->getById($resource_id, $isJoin = true);
                $detail->created = date(DATE_FORMATE, strtotime($detail->created));
                $detail->statusButtons = $this->layout->element('admin/element/_module_status', array('status' => $detail->status, 'id' => $detail->id, 'url' => "admin/sub_courses/changestatus", 'permissionKey' => "sub_course-status"), true);
                $detail->actionButtons = $this->layout->element('admin/element/_module_action', array('id' => $detail->id, 'editUrl' => 'admin/sub_courses/manage', 'deleteUrl' => 'admin/sub_courses/delete', 'editPermissionKey' => 'sub_course-edit', 'deletePermissionKey' => 'sub_course-delete'), true);
                $response['data'] = $detail;
                $response['success'] = true;
            } else {
                $response['error'] = $has_permission;
            }
        } else {
            $response['validation_error'] = $this->form_validation->error_array();
        }
        $this->output->set_content_type('application/json')
                ->set_output(json_encode($response))->_display();
        exit();
    }

    public function delete() {
        $response = array();
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $has_permission = $this->acl->has_permission('sub_course-delete', FALSE);
            if ($has_permission === TRUE) {
                if ($id > 0 && $this->db->where("id", $id)->delete("sub_courses")) {
                    $response['success'] = __('SubCourseDeleteSuccess');
                } else {
                    $response['error'] = __('InvalidRequest');
                }
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function changestatus() {
        $response = array();
        if ($this->input->is_ajax_request()) {
            $has_permission = $this->acl->has_permission('sub_course-status', FALSE);
            if ($has_permission === TRUE) {
                $id = $this->input->post('id');
                $status = $this->input->post('status');
                if ($status == "1") {
                    $this->db->where("id", $id)->update("sub_courses", array("status" => 0));
                    $response['success'] = __('SubCourseInactiveSuccess');
                } else if ($status == "0") {
                    $this->db->where("id", $id)->update("sub_courses", array("status" => 1));
                    $response['success'] = __('SubCourseActiveSuccess');
                }
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

}
