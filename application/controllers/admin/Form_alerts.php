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
            $orderColomn = array(1 => 'title', 2 => 'created', 3 => 'status');
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
                $this->session->set_flashdata("error", getLangText('LinkExpired'));
                redirect('admin/form_alerts');
            }
            $this->viewData['title'] = "Edit Form Alert";
        } else {
            $this->acl->has_permission('form_alert-add');
        }

        if ($this->form_validation->run() === TRUE) {
            $data = array(
                "title" => $this->input->post('title'),
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
                $data['update'] = date("Y-m-d H:i:s");
                $this->db->update("form_alerts", $data, array("id" => $this->input->post('id')));
                $this->session->set_flashdata("success", getLangText('FormAlertUpdateSuccess'));
            } else {
                $data['created'] = date("Y-m-d H:i:s");
                $this->db->insert("form_alerts", $data);
                $this->session->set_flashdata("success", getLangText('FormAlertAddSuccess'));
            }
            redirect("admin/form_alerts");
        }

        $this->viewData['ckeditor_asset'] = true;
        $this->viewData['pageModule'] = 'Add Form Alert';
        $this->viewData['breadcrumb'] = array('Form Alert Manager' => 'admin/form_alerts', $this->viewData['title'] => '');
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
                    $img_path = "uploads/form_alert/$row->image";
                }
                $rowData = array();
                $rowData[0] = getPageSerial($this->input->get('length'), $this->input->get('start'), $key);
                $rowData[1] = img($img_path, FALSE, array('width' => 100));
                $rowData[2] = $row->title;
                $rowData[3] = $this->layout->element('admin/element/_module_status', array('status' => $row->status, 'id' => $row->id, 'url' => "admin/form_alerts/changestatus", 'permissionKey' => "form_alert-status"), true);
                $editUrl = 'admin/form_alerts/manage/' . $row->id;
                $deleteUrl = 'admin/form_alerts/delete';
                $rowData[4] = $this->layout->element('admin/element/_module_action', array('id' => $row->id, 'editUrl' => $editUrl, 'deleteUrl' => $deleteUrl, 'editPermissionKey' => 'form_alert-edit', 'deletePermissionKey' => 'form_alert-delete'), true);
                $resultData[] = $rowData;
            }
        }
        return $resultData;
    }

}

?>
