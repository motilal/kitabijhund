<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    var $viewData = array();

    public function __construct() {
        parent::__construct();
        $this->layout->set_layout("layout/layout_default");
    }

    public function index() {
        $this->load->model(array("form_alert_model" => 'form_alert', "news_model" => 'news'));
        $this->viewData['title'] = "Tyari Jeet Ki";

        $form_alerts = $this->form_alert->get_list(array('fa.status' => '1'), array('start' => 0, 'limit' => 3), '', FALSE);
        $this->viewData['latest_form_alerts'] = $form_alerts;

        $news = $this->news->get_list(array('status' => '1'), array('start' => 0, 'limit' => 3), '', FALSE);
        $this->viewData['latest_news'] = $news; 

        $this->layout->view('home/home_index', $this->viewData);
    }

}
