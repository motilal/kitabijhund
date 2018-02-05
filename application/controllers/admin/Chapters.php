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
    var $per_page = DEFAULT_PAGING;

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
        if ($this->input->is_ajax_request()) {
            $orderColomn = array(1 => 'name', 4 => 'created', 5 => 'status');
            $params = dataTableGetRequest($this->input->get(), $orderColomn);
            if (!empty($params->search)) {
                $keyword = $this->db->escape_str($params->search);
                $condition["name like '%{$keyword}%'"] = null;
            }
            $result = $this->chapter->get_list($condition, $params->limit, $params->order, TRUE);
            if ($result->data->num_rows() > 0) {
                $response['data'] = $this->showTableData($result->data->result());
            } else {
                $response['data'] = array();
            }
            $response['recordsFiltered'] = $response['recordsTotal'] = $result->num_rows;
            $this->output->set_content_type('application/json')->set_output(json_encode($response))->_display();
            exit();
        }

        $result = $this->chapter->get_list($condition, array('start' => 0, 'limit' => $this->per_page), '', TRUE);
        if ($result->data->num_rows() > 0) {
            $this->viewData['result'] = $this->showTableData($result->data->result());
        }
        $this->viewData['title'] = "Manage Chapter";
        $this->viewData['pageModule'] = 'Chapter Manager';
        $this->viewData['pageHeading'] = 'Chapters';
        $this->viewData['breadcrumb'] = array('Chapter Manager' => '');
        $this->viewData['datatable_asset'] = true;
        $this->layout->view("admin/chapter/index", $this->viewData);
    }

    private function showTableData($data) {
        $resultData = array();
        if ($data != "") {
            foreach ($data as $key => $row) {
                $rowData = array();
                $subjects = $this->chapter->get_chapters_subjects(array('chapter_id' => $row->id));
                $total_pages = $this->chapter->get_total_pages(array('chapter_id' => $row->id));
                $subjects = filterAssocArray($subjects, 'name');
                $rowData[0] = getPageSerial($this->input->get('length'), $this->input->get('start'), $key);
                $rowData[1] = $row->name;
                $rowData[2] = !empty($subjects) ? implode(',', $subjects) : '';
                $rowData[3] = $total_pages;
                $rowData[4] = date(DATE_FORMATE, strtotime($row->created));
                $rowData[5] = $this->layout->element('admin/element/_module_status', array('status' => $row->status, 'id' => $row->id, 'url' => "admin/chapters/changestatus", 'permissionKey' => "chapter-status"), true);
                $editUrl = 'admin/chapters/manage/' . $row->id;
                $viewUrl = 'admin/chapters/pages/' . $row->id;
                $deleteUrl = 'admin/chapters/delete';
                $rowData[6] = $this->layout->element('admin/element/_module_action', array('id' => $row->id, 'editUrl' => $editUrl, 'viewUrl' => $viewUrl, 'deleteUrl' => $deleteUrl, 'editPermissionKey' => 'chapter-edit', 'deletePermissionKey' => 'chapter-delete'), true);
                $resultData[] = $rowData;
            }
        }
        return $resultData;
    }

    public function manage($id = null) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manage');
        $this->viewData['title'] = "Add Chapter";
        if ($id > 0) {
            $this->acl->has_permission('chapter-edit');
            $this->viewData['data'] = $data = $this->chapter->getById($id);
            $subjects = $this->chapter->get_chapters_subjects(array('chapter_id' => $id));
            $subjects = filterAssocArray($subjects, 'id');
            $this->viewData['subjects'] = $subjects;
            if (empty($data)) {
                $this->session->set_flashdata("error", getLangText('LinkExpired'));
                redirect('admin/chapters');
            }
            $this->viewData['title'] = "Edit Chapter";
        } else {
            $this->acl->has_permission('chapter-add');
        }

        if ($this->form_validation->run() === TRUE) {
            $data = array(
                "name" => $this->input->post('name')
            );
            $subjects = "";
            if (is_array($this->input->post('subject')) && $this->input->post('subject') != "") {
                $subjects = $this->input->post('subject');
            }
            if ($id > 0) {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'chapters', 'slug', 'id', $id);
                $data['updated'] = date("Y-m-d H:i:s");
                $this->db->update("chapters", $data, array("id" => $this->input->post('id')));
                if ($subjects != "") {
                    $this->db->where('chapter_id', $this->input->post('id'))->where_not_in('subject_id', $subjects)->delete('chapters_subjects');
                    $exist_chapters_subjects = $this->db->select('subject_id')->where('chapter_id', $this->input->post('id'))->where_in('subject_id', $subjects)->get('chapters_subjects')->result_array();
                    $exist_subjects = array();
                    if (!empty($exist_chapters_subjects)) {
                        foreach ($exist_chapters_subjects as $value) {
                            $exist_subjects[] = $value['subject_id'];
                        }
                        $subjects = array_diff($subjects, $exist_subjects);
                    }
                    foreach ($subjects as $value) {
                        $cs_data[] = array(
                            'chapter_id' => $this->input->post('id'),
                            'subject_id' => $value
                        );
                    }
                    if (!empty($cs_data)) {
                        $this->db->insert_batch('chapters_subjects', $cs_data);
                    }
                }
                $this->session->set_flashdata("success", getLangText('ChapterUpdateSuccess'));
            } else {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'chapters', 'slug');
                $data['created'] = date("Y-m-d H:i:s");
                $this->db->insert("chapters", $data);
                $insert_id = $this->db->insert_id();
                if ($subjects != "") {
                    foreach ($subjects as $value) {
                        $cs_data[] = array(
                            'chapter_id' => $insert_id,
                            'subject_id' => $value
                        );
                    }
                    if (!empty($cs_data)) {
                        $this->db->insert_batch('chapters_subjects', $cs_data);
                    }
                }
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

    public function pages($chapter_id = null) {
        $condition = array();
        $detail = $this->chapter->getById($chapter_id);
        $this->viewData['detail'] = $detail;
        if (empty($detail)) {
            $this->session->set_flashdata("error", getLangText('LinkExpired'));
            redirect('admin/chapters');
        }
        $condition = array('chapter_id' => $chapter_id);
        $result = $this->chapter->get_chapters_pages($condition);
        $this->viewData['result'] = $result;
        $this->viewData['title'] = "Manage Chapter Pages";
        $this->viewData['pageModule'] = 'Chapter Pages Manager';
        $this->viewData['pageHeading'] = $detail->name;
        $this->viewData['breadcrumb'] = array('Chapter Manager' => 'admin/chapters', $this->viewData['title'] => '');
        $this->viewData['datatable_asset'] = true;
        $this->viewData['chapter_id'] = $chapter_id;
        $this->layout->view("admin/chapter/pages", $this->viewData);
    }

    public function manage_pages($chapter_id = null, $page_id = null) {
        $chapter_detail = $this->chapter->getById($chapter_id);
        if (empty($chapter_detail)) {
            $this->session->set_flashdata("error", getLangText('LinkExpired'));
            redirect('admin/chapters');
        }
        $this->load->library('form_validation');
        $this->viewData['title'] = "Add New Page";
        if ($chapter_id > 0 && $page_id > 0) {
            $this->acl->has_permission('chapter-edit');
            $this->viewData['data'] = $data = $this->chapter->getChapterPageById($chapter_id, $page_id);
            if (empty($data)) {
                $this->session->set_flashdata("error", getLangText('LinkExpired'));
                redirect('admin/chapters/manage_pages/' . $chapter_id);
            }
            $this->viewData['title'] = "Edit Chapter Page";
        } else {
            $this->acl->has_permission('chapter-add');
        }

        if ($this->form_validation->run('manage_chapter_pages') === TRUE) {
            $data = array(
                "title" => $this->input->post('title'),
                "chapter_id" => $chapter_id,
                "content" => $this->input->post('content', false),
                "question_answer" => $this->input->post('qa', false)
            );
            if ($chapter_id > 0 && $page_id > 0) {
                $data['slug'] = create_unique_slug($this->input->post('title'), 'chapters_pages', 'slug', 'id', $page_id);
                $this->db->update("chapters_pages", $data, array("id" => $this->input->post('id')));
                $this->session->set_flashdata("success", getLangText('ChapterPageUpdateSuccess'));
            } else {
                $data['slug'] = create_unique_slug($this->input->post('title'), 'chapters_pages', 'slug');
                $this->db->insert("chapters_pages", $data);
                $this->session->set_flashdata("success", getLangText('ChapterPageAddSuccess'));
            }
            redirect("admin/chapters/pages/" . $chapter_id);
        }

        $this->viewData['ckeditor_asset'] = true;
        $this->viewData['pageModule'] = 'Add New Page';
        $this->viewData['chapter_id'] = $chapter_id;
        $this->viewData['breadcrumb'] = array('Chapter Manager' => 'admin/chapters/pages/' . $chapter_id, $this->viewData['title'] => '');
        $this->layout->view("admin/chapter/manage_pages", $this->viewData);
    }

    public function delete_pages() {
        $response = array();
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $has_permission = $this->acl->has_permission('chapter-delete', FALSE);
            if ($has_permission === TRUE) {
                if ($id > 0 && $this->db->where("id", $id)->delete("chapters_pages")) {
                    $response['success'] = 'Chapter page deleted successfully.';
                } else {
                    $response['error'] = 'Invalid request';
                }
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

}
