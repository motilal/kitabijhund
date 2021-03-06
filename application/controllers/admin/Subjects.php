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
        $this->load->model(array('sub_course_model' => 'sub_course'));
        $this->viewData['sub_course_options'] = $this->sub_course->sub_course_options();
        $this->viewData['breadcrumb'] = array('Subject Manager' => 'admin/subjects', $this->viewData['title'] => '');
        $this->layout->view("admin/subject/index", $this->viewData);
    }

    public function manage() {
        $this->load->model(array('sub_course_model' => 'sub_course'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manage');
        $response = array();
        if ($this->form_validation->run() === TRUE) {
            $data = array(
                "name" => $this->input->post('name')
            );
            $sub_courses = "";
            if (is_array($this->input->post('sub_course')) && $this->input->post('sub_course') != "") {
                $sub_courses = $this->input->post('sub_course');
            }
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
                    if ($sub_courses != "") {
                        $this->db->where('subject_id', $this->input->post('id'))->where_not_in('sub_course_id', $sub_courses)->delete('subject_subcourses');
                        $exist_sub_courses_subjects = $this->db->select('sub_course_id')->where('subject_id', $this->input->post('id'))->where_in('sub_course_id', $sub_courses)->get('subject_subcourses')->result_array();
                        $exist_sub_courses = array();
                        if (!empty($exist_sub_courses_subjects)) {
                            foreach ($exist_sub_courses_subjects as $value) {
                                $exist_sub_courses[] = $value['sub_course_id'];
                            }
                            $sub_courses = array_diff($sub_courses, $exist_sub_courses);
                        }
                        foreach ($sub_courses as $value) {
                            $cs_data[] = array(
                                'subject_id' => $this->input->post('id'),
                                'sub_course_id' => $value
                            );
                        }
                        if (!empty($cs_data)) {
                            $this->db->insert_batch('subject_subcourses', $cs_data);
                        }
                    }
                    $resource_id = $this->input->post('id');
                    $response['msg'] = __('SubjectUpdateSuccess');
                    $response['mode'] = 'edit';
                }
            } else {
                $has_permission = $this->acl->has_permission('subject-add', FALSE);
                if ($has_permission === TRUE) {
                    $data['status'] = 1;
                    $data['created'] = date("Y-m-d H:i:s");
                    $this->db->insert("subjects", $data);
                    $resource_id = $this->db->insert_id();
                    if ($sub_courses != "") {
                        foreach ($sub_courses as $value) {
                            $cs_data[] = array(
                                'subject_id' => $resource_id,
                                'sub_course_id' => $value
                            );
                        }
                        if (!empty($cs_data)) {
                            $this->db->insert_batch('subject_subcourses', $cs_data);
                        }
                    }
                    $response['msg'] = __('SubjectAddSuccess');
                    $response['mode'] = 'add';
                }
            }
            if ($has_permission === TRUE) {
                $detail = $this->subject->getById($resource_id);
                $detail->created = date(DATE_FORMATE, strtotime($detail->created));
                $detail->statusButtons = $this->layout->element('admin/element/_module_status', array('status' => $detail->status, 'id' => $detail->id, 'url' => "admin/subjects/changestatus", 'permissionKey' => "subject-status"), true);
                $detail->actionButtons = $this->layout->element('admin/element/_module_action', array('id' => $detail->id, 'editUrl' => 'admin/subjects/manage', 'deleteUrl' => 'admin/subjects/delete', 'editPermissionKey' => 'subject-edit', 'deletePermissionKey' => 'subject-delete'), true);

                $sub_courses = $this->sub_course->get_subject_subcourses(array('subject_id' => $detail->id));
                $sub_courses_ids = filterAssocArray($sub_courses, 'id');
                $sub_courses = filterAssocArray($sub_courses, 'name');
                $sub_coursesString = empty($sub_courses) ? '' : implode(',', $sub_courses);
                $sub_courses_idsString = empty($sub_courses_ids) ? '' : json_encode($sub_courses_ids);

                $detail->sub_courses = $sub_coursesString . '<div class="sub_courses" style="display:none;">' . $sub_courses_idsString . '</div>';
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
                    $response['success'] = __('SubjectDeleteSuccess');
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
            $has_permission = $this->acl->has_permission('subject-status', FALSE);
            if ($has_permission === TRUE) {
                $id = $this->input->post('id');
                $status = $this->input->post('status');
                if ($status == "1") {
                    $this->db->where("id", $id)->update("subjects", array("status" => 0));
                    $response['success'] = __('SubjectInactiveSuccess');
                } else if ($status == "0") {
                    $this->db->where("id", $id)->update("subjects", array("status" => 1));
                    $response['success'] = __('SubjectActiveSuccess');
                }
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

}
