<?php

/**
 * Description of Courses
 *
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Courses extends CI_Controller {

    var $viewData = array();

    public function __construct() {
        parent::__construct();  
        $this->site_santry->redirect = "admin";
        $this->site_santry->allow(array());
        $this->load->model(array('course_model' => 'course'));
        $this->layout->set_layout("admin/layout/layout_admin");
        $this->viewData['pageModule'] = 'Course Manager';
    }

    public function index() {
        $this->acl->has_permission('course-index');
        $condition = array();
        if ($this->input->get('download') == 'report') {
            $result = $this->course->get_list($condition);
            $csv_array[] = array('name' => 'Name', 'status' => 'Status');
            foreach ($result->result() as $row) {
                $this->load->helper('csv');
                $csv_array[] = array('name' => $row->name, 'status' => $row->status == 1 ? 'Active' : 'InActive');
            }
            $Today = date('dmY');
            array_to_csv($csv_array, "CourseListing_$Today.csv");
            exit();
        }
        $start = (int) $this->input->get('start');
        $result = $this->course->get_list($condition);
        $this->viewData['result'] = $result;
        $this->viewData['title'] = "Course Listing";
        $this->viewData['datatable_asset'] = true;
        $this->viewData['pageHeading'] = 'Course Listing';
        $this->viewData['breadcrumb'] = array('Course Manager' => 'admin/courses', $this->viewData['title'] => '');
        $this->layout->view("admin/course/index", $this->viewData);
    }

    public function manage() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manage');
        $response = array();
        if ($this->form_validation->run() === TRUE) {
            $data = array(
                "name" => $this->input->post('name')
            );
            if ($this->input->post('id') > 0) {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'courses', 'slug', 'id', $this->input->post('id'));
            } else {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'courses', 'slug');
            }
            if ($this->input->post('id') > 0) {
                $has_permission = $this->acl->has_permission('course-edit', FALSE);
                if ($has_permission === TRUE) {
                    $data['updated'] = date("Y-m-d H:i:s");
                    $this->db->update("courses", $data, array("id" => $this->input->post('id')));
                    $resource_id = $this->input->post('id');
                    $response['msg'] = __('CourseUpdateSuccess');
                    $response['mode'] = 'edit';
                }
            } else {
                $has_permission = $this->acl->has_permission('course-add', FALSE);
                if ($has_permission === TRUE) {
                    $data['status'] = 1;
                    $data['created'] = date("Y-m-d H:i:s");
                    $this->db->insert("courses", $data);
                    $resource_id = $this->db->insert_id();
                    $response['msg'] = __('CourseAddSuccess');
                    $response['mode'] = 'add';
                }
            }
            if ($has_permission === TRUE) {
                $detail = $this->course->getById($resource_id);
                $detail->created = date(DATE_FORMATE, strtotime($detail->created));
                $detail->statusButtons = $this->layout->element('admin/element/_module_status', array('status' => $detail->status, 'id' => $detail->id, 'url' => "admin/courses/changestatus", 'permissionKey' => "course-status"), true);
                $detail->actionButtons = $this->layout->element('admin/element/_module_action', array('id' => $detail->id, 'editUrl' => 'admin/courses/manage', 'deleteUrl' => 'admin/courses/delete', 'editPermissionKey' => 'course-edit', 'deletePermissionKey' => 'course-delete'), true);
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
            $has_permission = $this->acl->has_permission('course-delete', FALSE);
            if ($has_permission === TRUE) {
                if ($id > 0 && $this->db->where("id", $id)->delete("courses")) {
                    $response['success'] = __('CourseDeleteSuccess');
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
            $has_permission = $this->acl->has_permission('course-status', FALSE);
            if ($has_permission === TRUE) {
                $id = $this->input->post('id');
                $status = $this->input->post('status');
                if ($status == "1") {
                    $this->db->where("id", $id)->update("courses", array("status" => 0));
                    $response['success'] = __('CourseInactiveSuccess');
                } else if ($status == "0") {
                    $this->db->where("id", $id)->update("courses", array("status" => 1));
                    $response['success'] = __('CourseActiveSuccess');
                }
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

}
