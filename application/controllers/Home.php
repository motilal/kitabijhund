<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    var $viewData = array();

    public function __construct() {
        parent::__construct();
        $this->layout->set_layout("layout/layout_default");
    }

    public function index() {
        $this->viewData['title'] = "Tyari Jeet Ki";
        $this->layout->view('home/home_index', $this->viewData);
    }

}
