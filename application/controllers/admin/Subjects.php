<?php

/**
 * Description of Subjects
 *
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subjects extends CI_Controller {

    var $viewData = array();

    public function __construct() {
        parent::__construct();
        $this->site_santry->redirect = "admin";
        $this->site_santry->allow(array());
        $this->load->model(array('subject_model' => 'subject'));
        $this->layout->set_layout("admin/layout/layout_admin");
        $this->viewData['pageModule'] = 'Subject Manager';
    }

    public function index() {
        $this->acl->has_permission('subject-index');
        $condition = array();
        if ($this->input->get('download') == 'report') {
            $result = $this->subject->get_list($condition);
            $csv_array[] = array('name' => 'Name', 'status' => 'Status');
            foreach ($result->result() as $row) {
                $this->load->helper('csv');
                $csv_array[] = array('name' => $row->name, 'status' => $row->status == 1 ? 'Active' : 'InActive');
            }
            $Today = date('dmY');
            array_to_csv($csv_array, "SubjectListing_$Today.csv");
            exit();
        }
        $start = (int) $this->input->get('start');
        $result = $this->subject->get_list($condition);
        $this->viewData['result'] = $result;
        $this->viewData['title'] = "Subject Listing";
        $this->viewData['datatable_asset'] = true;
        $this->viewData['pageHeading'] = 'Subject Listing';
        $this->viewData['breadcrumb'] = array('Subject Manager' => 'admin/subjects', $this->viewData['title'] => '');
        $this->layout->view("admin/subject/index", $this->viewData);
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
                $data['slug'] = create_unique_slug($this->input->post('name'), 'subjects', 'slug', 'id', $this->input->post('id'));
            } else {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'subjects', 'slug');
            }
            if ($this->input->post('id') > 0) {
                $has_permission = $this->acl->has_permission('subject-edit', FALSE);
                if ($has_permission === TRUE) {
                    $data['updated'] = date("Y-m-d H:i:s");
                    $this->db->update("subjects", $data, array("id" => $this->input->post('id')));
                    $resource_id = $this->input->post('id');
                    $response['msg'] = getLangText('SubjectUpdateSuccess');
                    $response['mode'] = 'edit';
                }
            } else {
                $has_permission = $this->acl->has_permission('subject-add', FALSE);
                if ($has_permission === TRUE) {
                    $data['status'] = 1;
                    $data['created'] = date("Y-m-d H:i:s");
                    $this->db->insert("subjects", $data);
                    $resource_id = $this->db->insert_id();
                    $response['msg'] = getLangText('SubjectAddSuccess');
                    $response['mode'] = 'add';
                }
            }
            if ($has_permission === TRUE) {
                $detail = $this->subject->getById($resource_id);
                $detail->statusButtons = $this->layout->element('admin/element/_module_status', array('status' => $detail->status, 'id' => $detail->id, 'url' => "admin/subjects/changestatus", 'permissionKey' => "subject-status"), true);
                $detail->actionButtons = $this->layout->element('admin/element/_module_action', array('id' => $detail->id, 'editUrl' => 'admin/subjects/manage', 'deleteUrl' => 'admin/subjects/delete', 'editPermissionKey' => 'subject-edit', 'deletePermissionKey' => 'subject-delete'), true);
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
            $has_permission = $this->acl->has_permission('subject-delete', FALSE);
            if ($has_permission === TRUE) {
                if ($id > 0 && $this->db->where("id", $id)->delete("subjects")) {
                    $response['success'] = 'Subject deleted successfully.';
                } else {
                    $response['error'] = 'Invalid request';
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
            $has_permission = $this->acl->has_permission('subject-status', FALSE);
            if ($has_permission === TRUE) {
                $id = $this->input->post('id');
                $status = $this->input->post('status');
                $pageaction = '';
                if ($status == "1") {
                    $this->db->where("id", $id)->update("subjects", array("status" => 0));
                    $pageaction = 'Inactive';
                } else if ($status == "0") {
                    $this->db->where("id", $id)->update("subjects", array("status" => 1));
                    $pageaction = 'Active';
                }
                $response['success'] = "Subject $pageaction Successfully.";
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

}
