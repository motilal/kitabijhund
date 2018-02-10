<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form_alerts extends CI_Controller {

    var $viewData = array();
    var $per_page = 3;

    public function __construct() {
        parent::__construct();
        $this->layout->set_layout("layout/layout_default");
        $this->load->model(array("form_alert_model" => 'form_alert'));
    }

    public function index($start = 0) {
        $this->viewData['title'] = "Form Alerts";
        $condition = array('fa.status' => '1');
        if ($this->input->get('category') != "") {
            $condition ['fac.slug'] = urldecode($this->input->get('category'));
        }
        $form_alerts = $this->form_alert->get_list($condition, array('start' => $start, 'limit' => $this->per_page), '', TRUE);
        $this->viewData['form_alerts'] = $form_alerts->data;
        $pagination = load_more_pagination('form_alerts/index', $form_alerts->num_rows, $this->per_page, $segment = 3);
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
                                "html" => sanitize_output(mb_convert_encoding($this->layout->element('form_alert/_element_form_alerts_index', $this->viewData, true), "HTML-ENTITIES", "UTF-8")),
                                "pagination" => $pagination,
                                "totalitems" => $form_alerts->num_rows)
                            ) . "]"
            );
            return;
        }
        $this->viewData['categories'] = $this->form_alert->get_category_list(array('status' => '1'));
        $this->layout->view('form_alert/form_alerts_index', $this->viewData);
    }

    public function detail($slug = "") {
        $slug = urldecode($slug);
        $detail = $this->form_alert->getBySlag($slug);
        if (!empty($detail)) {
            $this->viewData['title'] = $detail->title;
            $this->viewData['meta_keywords'] = $detail->meta_keywords;
            $this->viewData['meta_description'] = $detail->meta_description;
            $this->viewData['form_alert_detail'] = $detail;
            $this->layout->view('form_alert/form_alert_detail', $this->viewData);
        } else {
            redirect('form_alerts');
        }
    }

}
