<?php

/**
 * Description of Chapters
 *
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chapters extends CI_Controller {

    var $viewData = array();

    public function __construct() {
        parent::__construct();
        $this->site_santry->redirect = "admin";
        $this->site_santry->allow(array());
        $this->load->model(array('chapter_model' => 'chapter'));
        $this->layout->set_layout("admin/layout/layout_admin");
        $this->viewData['pageModule'] = 'Chapter Manager';
    }

    public function index() {
        $this->acl->has_permission('chapter-index');
        $condition = array();
        if ($this->input->get('download') == 'report') {
            $result = $this->chapter->get_list($condition);
            $csv_array[] = array('name' => 'Name', 'status' => 'Status');
            foreach ($result->result() as $row) {
                $this->load->helper('csv');
                $csv_array[] = array('name' => $row->name, 'status' => $row->status == 1 ? 'Active' : 'InActive');
            }
            $Today = date('dmY');
            array_to_csv($csv_array, "ChapterListing_$Today.csv");
            exit();
        }
        $start = (int) $this->input->get('start');
        $result = $this->chapter->get_list($condition);
        $this->viewData['result'] = $result;
        $this->viewData['title'] = "Chapter Listing";
        $this->viewData['datatable_asset'] = true;
        $this->viewData['pageHeading'] = 'Chapter Listing';
        $this->viewData['breadcrumb'] = array('Chapter Manager' => 'admin/chapters', $this->viewData['title'] => '');
        $this->layout->view("admin/chapter/index", $this->viewData);
    }

    public function manage($id = null) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manage');
        $this->viewData['title'] = "Add Static Page";
        if ($id > 0) {
            $this->acl->has_permission('page-edit');
            $this->viewData['data'] = $data = $this->page->getById($id);
            if (empty($data)) {
                $this->session->set_flashdata("error", getLangText('LinkExpired'));
                redirect('admin/pages');
            }
            $this->viewData['title'] = "Edit Chapter";
        } else {
            $this->acl->has_permission('chapter-add');
        }

        if ($this->form_validation->run() === TRUE) {
            pr($this->input->post());
            die;
            $data = array(
                "name" => $this->input->post('title')
            );
            if ($id > 0) {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'chapters', 'slug', 'id', $id);
            } else {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'chapters', 'slug');
            }
            if ($this->input->post('id') > 0) {
                $data['update'] = date("Y-m-d H:i:s");
                $this->db->update("chapters", $data, array("id" => $this->input->post('id')));
                $this->session->set_flashdata("success", getLangText('ChapterUpdateSuccess'));
            } else {
                $data['created'] = date("Y-m-d H:i:s");
                $this->db->insert("chapters", $data);
                $this->session->set_flashdata("success", getLangText('ChapterAddSuccess'));
            }
            redirect("admin/chapters");
        }

        $this->viewData['ckeditor_asset'] = true;
        $this->viewData['pageModule'] = 'Add New Chapter';
        $this->viewData['breadcrumb'] = array('Chapter Manager' => 'admin/chapters', $this->viewData['title'] => '');
        $this->viewData['subject_options'] = $this->chapter->subject_options();
        $this->layout->view("admin/chapter/manage", $this->viewData);
    }

    public function delete() {
        $response = array();
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $has_permission = $this->acl->has_permission('chapter-delete', FALSE);
            if ($has_permission === TRUE) {
                if ($id > 0 && $this->db->where("id", $id)->delete("chapters")) {
                    $response['success'] = 'Chapter deleted successfully.';
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
            $has_permission = $this->acl->has_permission('chapter-status', FALSE);
            if ($has_permission === TRUE) {
                $id = $this->input->post('id');
                $status = $this->input->post('status');
                $pageaction = '';
                if ($status == "1") {
                    $this->db->where("id", $id)->update("chapters", array("status" => 0));
                    $pageaction = 'Inactive';
                } else if ($status == "0") {
                    $this->db->where("id", $id)->update("chapters", array("status" => 1));
                    $pageaction = 'Active';
                }
                $response['success'] = "Chapter $pageaction Successfully.";
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

}
