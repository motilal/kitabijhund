<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

    var $viewData = array();
    var $per_page = 3;

    public function __construct() {
        parent::__construct();
        $this->layout->set_layout("layout/layout_default");
        $this->load->model(array('subject_model' => 'subject', 'chapter_model' => 'chapter'));
    }

    public function index($slug = "") {
        $slug = urldecode($slug);
        $detail = $this->subject->getBySlag($slug);
        if (!empty($detail)) {
            $chapters = $this->chapter->get_subjects_chapters(array('chapters_subjects.subject_id' => $detail->id));
            $this->viewData['chapters'] = $chapters;
            if (!empty($chapters)) {
                foreach ($chapters as $key => $row) {
                    $chapters_pages = $this->chapter->get_chapters_pages(array('chapters_pages.chapter_id' => $row['id']), 'title,slug');
                    $chapters[$key]['pages'] = $chapters_pages->result_array();
                }
            }
            pr($chapters);
            die;
            $this->layout->view('subject/subjects_index', $this->viewData);
        } else {
            redirect('/');
        }
    }

}
