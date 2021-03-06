<?php

/*
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Form_alerts extends CI_Controller {

    var $viewData = array();
    var $per_page = DEFAULT_PAGING;

    public function __construct() {
        parent::__construct();
        $this->site_santry->redirect = "admin";
        $this->site_santry->allow(array());
        $this->layout->set_layout("admin/layout/layout_admin");
        $this->load->model(array("form_alert_model" => 'form_alert'));
    }

    public function index() {
        $this->acl->has_permission('form_alert-index');
        $condition = array();
        if ($this->input->is_ajax_request()) {
            $orderColomn = array(1 => 'title', 2 => 'created', 3 => 'category_name', 4 => 'status');
            $params = dataTableGetRequest($this->input->get(), $orderColomn);
            if (!empty($params->search)) {
                $keyword = $this->db->escape_str($params->search);
                $condition["(title like '%{$keyword}%' OR description like '%{$keyword}%' OR short_description like '%{$keyword}%')"] = null;
            }
            $result = $this->form_alert->get_list($condition, $params->limit, $params->order, TRUE);
            if ($result->data->num_rows() > 0) {
                $response['data'] = $this->showTableData($result->data->result());
            } else {
                $response['data'] = array();
            }
            $response['recordsFiltered'] = $response['recordsTotal'] = $result->num_rows;
            $this->output->set_content_type('application/json')->set_output(json_encode($response))->_display();
            exit();
        }

        $result = $this->form_alert->get_list($condition, array('start' => 0, 'limit' => $this->per_page), '', TRUE);
        if ($result->data->num_rows() > 0) {
            $this->viewData['result'] = $this->showTableData($result->data->result());
        }
        $this->viewData['title'] = "Manage Form Alert";
        $this->viewData['pageModule'] = 'Form Alert Manager';
        $this->viewData['pageHeading'] = 'Form Alert';
        $this->viewData['breadcrumb'] = array('Form Alert Manager' => '');
        $this->viewData['datatable_asset'] = true;
        $this->layout->view("admin/form_alert/index", $this->viewData);
    }

    public function manage($id = null) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manage');
        $this->viewData['title'] = "Add Form Alert";
        if ($id > 0) {
            $this->acl->has_permission('form_alert-edit');
            $this->viewData['data'] = $detail = $this->form_alert->getById($id);
            if (empty($detail)) {
                $this->session->set_flashdata("error", __('LinkExpired'));
                redirect('admin/form_alerts');
            }
            $this->viewData['title'] = "Edit Form Alert";
        } else {
            $this->acl->has_permission('form_alert-add');
        }

        if ($this->form_validation->run() === TRUE) {
            $data = array(
                "title" => $this->input->post('title'),
                "category" => $this->input->post('category'),
                "short_description" => $this->input->post('short_description'),
                "description" => $this->input->post('description', false),
                "meta_keywords" => $this->input->post("meta_keywords"),
                "meta_description" => $this->input->post("meta_description")
            );
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
                $fileUpload = $this->do_upload();
                if (isset($fileUpload['error']) && $fileUpload['error'] != "") {
                    $this->session->set_flashdata("error", $fileUpload['error']);
                    redirect("admin/form_alerts/manage/$id");
                } else {
                    @unlink(FORM_ALERT_IMG_PATH . $detail->image);
                    $data['image'] = $fileUpload['upload_data']['file_name'];
                }
            }
            if ($id > 0) {
                $data['slug'] = create_unique_slug($this->input->post('title'), 'form_alerts', 'slug', 'id', $id);
            } else {
                $data['slug'] = create_unique_slug($this->input->post('title'), 'form_alerts', 'slug');
            }
            if ($this->input->post('id') > 0) {
                $data['updated'] = date("Y-m-d H:i:s");
                $this->db->update("form_alerts", $data, array("id" => $this->input->post('id')));
                $this->session->set_flashdata("success", __('FormAlertUpdateSuccess'));
            } else {
                $data['created'] = date("Y-m-d H:i:s");
                $this->db->insert("form_alerts", $data);
                $this->session->set_flashdata("success", __('FormAlertAddSuccess'));
            }
            redirect("admin/form_alerts");
        }

        $this->viewData['ckeditor_asset'] = true;
        $this->viewData['pageModule'] = 'Add Form Alert';
        $this->viewData['breadcrumb'] = array('Form Alert Manager' => 'admin/form_alerts', $this->viewData['title'] => '');
        $this->viewData['categories_options'] = $this->form_alert->categories_options();
        $this->layout->view("admin/form_alert/manage", $this->viewData);
    }

    private function do_upload() {
        if (!is_dir(FORM_ALERT_IMG_PATH)) {
            mkdir(FORM_ALERT_IMG_PATH, TRUE);
        }
        $config['upload_path'] = FORM_ALERT_IMG_PATH;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors('', ''));
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }

    public function delete() {
        $response = array();
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $has_permission = $this->acl->has_permission('form_alert-delete', FALSE);
            if ($has_permission === TRUE) {
                $detail = $this->form_alert->getById($id);
                if ($detail->image != "") {
                    @unlink(FORM_ALERT_IMG_PATH . $detail->image);
                }
                if ($id > 0 && $this->db->where("id", $id)->delete("form_alerts")) {
                    $response['success'] = 'Form Alert deleted successfully.';
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
            $has_permission = $this->acl->has_permission('form_alert-status', FALSE);
            if ($has_permission === TRUE) {
                $id = $this->input->post('id');
                $status = $this->input->post('status');
                $form_alertsaction = '';
                if ($status == "1") {
                    $this->db->where("id", $id)->update("form_alerts", array("status" => 0));
                    $form_alertsaction = 'Inactive';
                } else if ($status == "0") {
                    $this->db->where("id", $id)->update("form_alerts", array("status" => 1));
                    $form_alertsaction = 'Active';
                }
                $response['success'] = "Form Alert $form_alertsaction Successfully.";
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    private function showTableData($data) {
        $resultData = array();
        if ($data != "") {
            foreach ($data as $key => $row) {
                $img_path = "asset/admin/images/no_image_100.jpg";
                if ($row->image != "") {
                    $getImg = getFormAlertImage($row->image, array('width' => 100, 'height' => 100));
                    if ($getImg) {
                        $img_path = $getImg;
                    }
                }
                $rowData = array();
                $rowData[0] = getPageSerial($this->input->get('length'), $this->input->get('start'), $key);
                $rowData[1] = img($img_path, FALSE, array('width' => 100));
                $rowData[2] = $row->title;
                $rowData[3] = $row->category_name;
                $rowData[4] = $this->layout->element('admin/element/_module_status', array('status' => $row->status, 'id' => $row->id, 'url' => "admin/form_alerts/changestatus", 'permissionKey' => "form_alert-status"), true);
                $editUrl = 'admin/form_alerts/manage/' . $row->id;
                $deleteUrl = 'admin/form_alerts/delete';
                $rowData[5] = $this->layout->element('admin/element/_module_action', array('id' => $row->id, 'editUrl' => $editUrl, 'deleteUrl' => $deleteUrl, 'editPermissionKey' => 'form_alert-edit', 'deletePermissionKey' => 'form_alert-delete'), true);
                $resultData[] = $rowData;
            }
        }
        return $resultData;
    }

    public function categories() {
        $this->acl->has_permission('form_alert-category-index');
        $condition = array();
        $start = (int) $this->input->get('start');
        $result = $this->form_alert->get_category_list($condition);
        $this->viewData['result'] = $result;
        $this->viewData['title'] = "Category Listing";
        $this->viewData['datatable_asset'] = true;
        $this->viewData['pageModule'] = 'Form Alert Categories';
        $this->viewData['pageHeading'] = 'Category Listing';
        $this->viewData['breadcrumb'] = array('Form Alert Manager' => 'admin/form_alerts', $this->viewData['title'] => '');
        $this->layout->view("admin/form_alert/categories", $this->viewData);
    }

    public function category_manage() {
        $this->load->library('form_validation');
        $response = array();
        if ($this->form_validation->run('manage_category') === TRUE) {
            $data = array(
                "name" => $this->input->post('name')
            );
            if ($this->input->post('id') > 0) {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'form_alerts_categories', 'slug', 'id', $this->input->post('id'));
            } else {
                $data['slug'] = create_unique_slug($this->input->post('name'), 'form_alerts_categories', 'slug');
            }
            if ($this->input->post('id') > 0) {
                $has_permission = $this->acl->has_permission('form_alert-edit-category', FALSE);
                if ($has_permission === TRUE) {
                    $this->db->update("form_alerts_categories", $data, array("id" => $this->input->post('id')));
                    $resource_id = $this->input->post('id');
                    $response['msg'] = 'Category successfully updated';
                    $response['mode'] = 'edit';
                }
            } else {
                $has_permission = $this->acl->has_permission('form_alert-add-category', FALSE);
                if ($has_permission === TRUE) {
                    $data['status'] = 1;
                    $this->db->insert("form_alerts_categories", $data);
                    $resource_id = $this->db->insert_id();
                    $response['msg'] = 'Category successfully added';
                    $response['mode'] = 'add';
                }
            }
            if ($has_permission === TRUE) {
                $detail = $this->form_alert->getCategoryById($resource_id);
                $detail->statusButtons = $this->layout->element('admin/element/_module_status', array('status' => $detail->status, 'id' => $detail->id, 'url' => "admin/form_alerts/category_changestatus", 'permissionKey' => "form_alert-category-status"), true);
                $detail->actionButtons = $this->layout->element('admin/element/_module_action', array('id' => $detail->id, 'editUrl' => 'admin/form_alerts/category_manage', 'deleteUrl' => 'admin/form_alerts/category_delete', 'editPermissionKey' => 'form_alert-category-edit', 'deletePermissionKey' => 'form_alert-category-delete'), true);
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

    public function category_delete() {
        $response = array();
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $has_permission = $this->acl->has_permission('form_alert-category-delete', FALSE);
            if ($has_permission === TRUE) {
                if ($id > 0 && $this->db->where("id", $id)->delete("form_alerts_categories")) {
                    $response['success'] = 'Form Alert category deleted successfully.';
                } else {
                    $response['error'] = 'Invalid request';
                }
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function category_changestatus() {
        $response = array();
        if ($this->input->is_ajax_request()) {
            $has_permission = $this->acl->has_permission('form_alert-category-status', FALSE);
            if ($has_permission === TRUE) {
                $id = $this->input->post('id');
                $status = $this->input->post('status');
                $form_alertsaction = '';
                if ($status == "1") {
                    $this->db->where("id", $id)->update("form_alerts_categories", array("status" => 0));
                    $form_alertsaction = 'Inactive';
                } else if ($status == "0") {
                    $this->db->where("id", $id)->update("form_alerts_categories", array("status" => 1));
                    $form_alertsaction = 'Active';
                }
                $response['success'] = "Form Alert category $form_alertsaction Successfully.";
            } else {
                $response['error'] = $has_permission;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

}

?>
