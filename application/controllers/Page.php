<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    var $viewData = array(); 

    public function __construct() {
        parent::__construct();
        $this->layout->set_layout("layout/layout_default");
        $this->load->model(array("page_model" => 'page'));
    }

    public function index($slug = "") {
        $slug = urldecode($slug);
        $detail = $this->page->getBySlag($slug); 
        if (!empty($detail)) {
            $this->viewData['title'] = $detail->title;
            $this->viewData['meta_keywords'] = $detail->meta_keywords;
            $this->viewData['meta_description'] = $detail->meta_description;
            $this->viewData['page_detail'] = $detail;
            $this->layout->view('page/page_detail', $this->viewData);
        } else {
            redirect('');
        }
    }

}
