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
            $this->viewData['subject_slug'] = $slug;
            $this->viewData['title'] = $detail->name;
            if (!empty($chapters)) {
                foreach ($chapters as $key => $row) {
                    $chapters_pages = $this->chapter->get_chapters_pages(array('chapters_pages.chapter_id' => $row['id']), 'title,slug');
                    $chapters[$key]['pages'] = $chapters_pages->result_array();
                }
            }
            $this->viewData['chapters'] = $chapters;
            $this->layout->view('subject/subjects_index', $this->viewData);
        } else {
            redirect('/');
        }
    }

    /* chapter Detail page */

    public function detail($subject_slug, $chapter_slug, $pageSlug = "") {
        $subject_slug = urldecode($subject_slug);
        $this->viewData['subject_slug'] = $subject_slug;
        $sub_detail = $this->subject->getBySlag($subject_slug);
        $chapter_detail = $this->chapter->getBySlag($chapter_slug);
        if (!empty($sub_detail) && !empty($chapter_detail)) {
            $this->viewData['title'] = $chapter_detail->name;
            //$pageSlug = $this->input->get('page');
            if ($pageSlug != "") {
                $pageDetail = $this->db->get_where('chapters_pages', array('slug' => $pageSlug))->row();
            } else {
                $pageDetail = $this->db->order_by('id', 'DESC')->limit(1)->get_where('chapters_pages', array('chapter_id' => $chapter_detail->id))->row();
            }
            if ($pageDetail != "") {
                $this->viewData['pageDetail'] = $pageDetail;
                $chapters = $this->chapter->get_subjects_chapters(array('chapters_subjects.subject_id' => $sub_detail->id));
                if (!empty($chapters)) {
                    foreach ($chapters as $key => $row) {
                        $chapters_pages = $this->chapter->get_chapters_pages(array('chapters_pages.chapter_id' => $row['id']), 'title,slug');
                        $chapters[$key]['pages'] = $chapters_pages->result_array();
                    }
                }
                $this->viewData['chapters'] = $chapters;
                $this->layout->view('subject/subjects_detail', $this->viewData);
            } else {
                //redirect('/');
            }
        } else {
            redirect('/');
        }
    }

}
