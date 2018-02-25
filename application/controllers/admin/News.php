<?php

/*
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends CI_Controller {

    var $viewData = array();
    var $per_page = DEFAULT_PAGING;

    public function __construct() {
        parent::__construct();
        $this->site_santry->redirect = "admin";
        $this->site_santry->allow(array());
        $this->layout->set_layout("admin/layout/layout_admin");
        $this->load->model(array("news_model" => 'news'));
    }

    public function index() {
        $this->acl->has_permission('news-index');
        $condition = array();
        if ($this->input->is_ajax_request()) {
            $orderColomn = array(1 => 'title', 2 => 'created', 3 => 'status');
            $params = dataTableGetRequest($this->input->get(), $orderColomn);
            if (!empty($params->search)) {
                $keyword = $this->db->escape_str($params->search);
                $condition["(title like '%{$keyword}%' OR description like '%{$keyword}%' OR short_description like '%{$keyword}%')"] = null;
            }
            $result = $this->news->get_list($condition, $params->limit, $params->order, TRUE);
            if ($result->data->num_rows() > 0) {
                $response['data'] = $this->showTableData($result->data->result());
            } else {
                $response['data'] = array();
            }
            $response['recordsFiltered'] = $response['recordsTotal'] = $result->num_rows;
            $this->output->set_content_type('application/json')->set_output(json_encode($response))->_display();
            exit();
        }

        $result = $this->news->get_list($condition, array('start' => 0, 'limit' => $this->per_page), '', TRUE);
        if ($result->data->num_rows() > 0) {
            $this->viewData['result'] = $this->showTableData($result->data->result());
        }
        $this->viewData['title'] = "Manage News";
        $this->viewData['pageModule'] = 'News Manager';
        $this->viewData['pageHeading'] = 'News';
        $this->viewData['breadcrumb'] = array('News Manager' => '');
        $this->viewData['datatable_asset'] = true;
        $this->layout->view("admin/news/index", $this->viewData);
    }

    public function manage($id = null) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manage');
        $this->viewData['title'] = "Add News";
        if ($id > 0) {
            $this->acl->has_permission('news-edit');
            $this->viewData['data'] = $detail = $this->news->getById($id);
            if (empty($detail)) {
                $this->session->set_flashdata("error", __('LinkExpired'));
                redirect('admin/news');
            }
            $this->viewData['title'] = "Edit News";
        } else {
            $this->acl->has_permission('news-add');
        }

        if ($this->form_validation->run() === TRUE) {
            $start_date = date('Y-m-d H:i:s', strtotime($this->input->post('start_date')));
            $data = array(
                "title" => $this->input->post('title'),
                "short_description" => $this->input->post('short_description'),
                "description" => $this->input->post('description', false),
                "start_date" => $start_date,
                "meta_keywords" => $this->input->post("meta_keywords"),
                "meta_description" => $this->input->post("meta_description")
            );
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
                $fileUpload = $this->do_upload();
                if (isset($fileUpload['error']) && $fileUpload['error'] != "") {
                    $this->session->set_flashdata("error", $fileUpload['error']);
                    redirect("admin/news/manage/$id");
                } else {
                    @unlink(NEWS_IMG_PATH . $detail->image);
                    $data['image'] = $fileUpload['upload_data']['file_name'];
                }
            }
            if ($id > 0) {
                $data['slug'] = create_unique_slug($this->input->post('title'), 'news', 'slug', 'id', $id);
            } else {
                $data['slug'] = create_unique_slug($this->input->post('title'), 'news', 'slug');
            }
            if ($this->input->post('id') > 0) {
                $data['updated'] = date("Y-m-d H:i:s");
                $this->db->update("news", $data, array("id" => $this->input->post('id')));
                $this->session->set_flashdata("success", getLangText('NewsUpdateSuccess'));
            } else {
                $data['created'] = date("Y-m-d H:i:s");
                $this->db->insert("news", $data);
                $this->session->set_flashdata("success", getLangText('NewsAddSuccess'));
            }
            redirect("admin/news");
        }

        $this->viewData['ckeditor_asset'] = true;
        $this->viewData['datetimepicker_asset'] = true;
        $this->viewData['pageModule'] = 'Add New News';
        $this->viewData['breadcrumb'] = array('News Manager' => 'admin/news', $this->viewData['title'] => '');
        $this->layout->view("admin/news/manage", $this->viewData);
    }

    public function delete() {
        $response = array();
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $has_permission = $this->acl->has_permission('news-delete', FALSE);
            if ($has_permission === TRUE) {
                $detail = $this->news->getById($id);
                if ($detail->image != "") {
                    @unlink(NEWS_IMG_PATH . $detail->image);
                }
                if ($id > 0 && $this->db->where("id", $id)->delete("news")) {
                    $response['success'] = 'News deleted successfully.';
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
            $has_permission = $this->acl->has_permission('news-status', FALSE);
            if ($has_permission === TRUE) {
                $id = $this->input->post('id');
                $status = $this->input->post('status');
                $newsaction = '';
                if ($status == "1") {
                    $this->db->where("id", $id)->update("news", array("status" => 0));
                    $newsaction = 'Inactive';
                } else if ($status == "0") {
                    $this->db->where("id", $id)->update("news", array("status" => 1));
                    $newsaction = 'Active';
                }
                $response['success'] = "News $newsaction Successfully.";
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
                    $getNewsImg = getNewsImage($row->image, array('width' => 100, 'height' => 100));
                    if ($getNewsImg) {
                        $img_path = $getNewsImg;
                    }
                }
                $rowData = array();
                $rowData[0] = getPageSerial($this->input->get('length'), $this->input->get('start'), $key);
                $rowData[1] = img($img_path, FALSE, array('width' => 100));
                $rowData[2] = $row->title;
                $rowData[3] = date(DATE_FORMATE, strtotime($row->start_date));
                $rowData[4] = $this->layout->element('admin/element/_module_status', array('status' => $row->status, 'id' => $row->id, 'url' => "admin/news/changestatus", 'permissionKey' => "news-status"), true);
                $editUrl = 'admin/news/manage/' . $row->id;
                $deleteUrl = 'admin/news/delete';
                $rowData[5] = $this->layout->element('admin/element/_module_action', array('id' => $row->id, 'editUrl' => $editUrl, 'deleteUrl' => $deleteUrl, 'editPermissionKey' => 'news-edit', 'deletePermissionKey' => 'news-delete'), true);
                $resultData[] = $rowData;
            }
        }
        return $resultData;
    }

    private function do_upload() {
        if (!is_dir(NEWS_IMG_PATH)) {
            mkdir(NEWS_IMG_PATH, TRUE);
        }
        $config['upload_path'] = NEWS_IMG_PATH;
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

}

?>
