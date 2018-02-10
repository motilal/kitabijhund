<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

    var $viewData = array();
    var $per_page = 3;

    public function __construct() {
        parent::__construct();
        $this->layout->set_layout("layout/layout_default");
        $this->load->model(array('subject_model' => 'subject'));
    }

    public function index($slug = "") {
        $slug = urldecode($slug);
        $detail = $this->subject->getBySlag($slug);
        if (!empty($detail)) {
             pr($detail); die;
        } else {
            redirect('news');
        }
    }

}
