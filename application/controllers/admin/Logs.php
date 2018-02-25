<?php

/*
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logs extends CI_Controller {

    var $viewData = array();

    public function __construct() {
        parent::__construct();
        $this->site_santry->redirect = "admin";
        $this->site_santry->allow(array());
        is_allow_admin();
        $this->layout->set_layout("admin/layout/layout_admin");
    }

    function index() {
        $this->load->helper('directory');
        $map = directory_map(APPPATH . 'logs', 1);
        $logFiles = array();
        foreach ($map as $key => $val) {
            $ext = pathinfo($val, PATHINFO_EXTENSION);
            if ($ext == 'php') {
                $logFiles[] = $val;
            }
        }
        foreach ($logFiles as $file) {
            $encfile = base64_encode($file);
            echo "<a href='" . site_url('admin/logs/detail/?file=' . $encfile) . "'>" . $file . "</a>";
        }
        die;
    }

    function detail() {
        if ($this->input->get('file') == "") {
            return;
        }
        $fileName = base64_decode($this->input->get('file'));

        $file = APPPATH . 'logs/' . $fileName;
        $errorArray = array();
        if (file_exists($file)) {
            $log = file_get_contents($file, FILE_USE_INCLUDE_PATH, null);
            $lines = explode("\n", $log);
            $lines = array_slice(array_filter($lines), 1);
            if (!empty($lines)) {
                foreach ($lines as $row) {
                    $row = json_decode($row);
                    if (!empty($row)) {
                        $errorArray[] = array('level' => isset($row->lavel) ? $row->lavel : '', 'date' => isset($row->date) ? $row->date : '', 'message' => isset($row->message) ? $row->message : '');
                    }
                }
            }
        } else {
            $this->session->set_flashdata("error", __('FileNotExist'));
            redirect('admin/logs');
        }
        $this->viewData['filename'] = $fileName;
        $this->viewData['result'] = $errorArray;
        $this->viewData['title'] = $this->viewData['pageModule'] = $this->viewData['pageHeading'] = "System Error Logs";
        $this->viewData['datatable_asset'] = true;
        $this->viewData['breadcrumb'] = array('Error Logs' => '');
        $this->layout->view("admin/log/detail", $this->viewData);
    }

}
