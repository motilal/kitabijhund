<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public $viewData;

    function __construct() {
        parent::__construct();
        $this->site_santry->redirect = "admin";
        $this->site_santry->allow();
        $this->layout->set_layout("admin/layout/layout_admin");
    }

    public function index($flag = "") {
        $this->load->model(array("news_model" => 'news', "form_alert_model" => 'form_alert'));
        $this->viewData['title'] = "Dashboard";
        $this->viewData['total_subjects'] = $this->db->select('id')->where(array('status' => 1))->get('subjects')->num_rows();
        $this->viewData['total_chapters'] = $this->db->select('id')->where(array('status' => 1))->get('chapters')->num_rows();
        $this->viewData['total_form_alerts'] = $this->db->select('id')->where(array('status' => 1))->get('form_alerts')->num_rows();
        $this->viewData['latest_news'] = $this->news->get_list(array(), array('start' => 0, 'limit' => 4));
        $this->viewData['latest_form_alert'] = $this->form_alert->get_list(array(), array('start' => 0, 'limit' => 6));
        $this->layout->view('admin/dashboard/index', $this->viewData);
    }

}
