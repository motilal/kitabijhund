<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    var $viewData = array();
    var $per_page = 20;

    public function __construct() {
        parent::__construct();
        $this->layout->set_layout("layout/layout_default");
        $this->load->model(array("news_model" => 'news'));
    }

    public function index($start = 0) {        
        $this->viewData['title'] = "News";
        $news = $this->news->get_list(array('status' => '1'), array('start' => $start, 'limit' => $this->per_page), '', TRUE);
        $this->viewData['news'] = $news->data;
        $pagination = load_more_pagination('news/index', $news->num_rows, $this->per_page, $segment = 3);
        $this->viewData['pagination'] = $pagination;
        if ($this->input->is_ajax_request()) {
            $this->output->set_header("Content-type: application/json; charset=utf-8", true)
                    ->set_header('X-Frame-Options: DENY')
                    ->set_header('X-XSS-Protection: 0')
                    ->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0')
                    ->set_header('Pragma: no-cache')
                    ->set_header('x-content-type-options: nosniff')
                    ->set_output(
                            "while(1);[" . json_encode(array(
                                "html" => sanitize_output(mb_convert_encoding($this->layout->element('news/_element_news_index', $this->viewData, true), "HTML-ENTITIES", "UTF-8")),
                                "pagination" => $pagination,
                                "totalitem" => $news->num_rows)
                            ) . "]"
            );
            return;
        }
        $this->layout->view('news/news_index', $this->viewData);
    }

    public function detail($slug = "") {
        $slug = urldecode($slug);
        $detail = $this->news->getBySlag($slug); 
        if (!empty($detail)) {
            $this->viewData['title'] = $detail->title;
            $this->viewData['meta_keywords'] = $detail->meta_keywords;
            $this->viewData['meta_description'] = $detail->meta_description;
            $this->viewData['news_detail'] = $detail;
            $this->layout->view('news/news_detail', $this->viewData);
        } else {
            redirect('news');
        }
    }

}
