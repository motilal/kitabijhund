<?php

/*
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chapter_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_list($condition = array(), $limit = array(), $order = array(), $with_num_rows = false) {
        $this->db->select("chapters.*");
        if (!empty($condition) || $condition != "") {
            $this->db->where($condition);
        }
        if (!empty($limit)) {
            $this->db->limit($limit['limit'], $limit['start']);
        }
        if (!empty($order)) {
            $this->db->order_by($order[0], $order[1]);
        } else {
            $this->db->order_by('created', 'DESC');
        }
        $data = $this->db->get("chapters");
        if ($with_num_rows == true) {
            $num_rows = $this->db->select('id')->where(!empty($condition) ? $condition : 1, TRUE)->count_all_results("chapters");
            return (object) array("data" => $data, "num_rows" => $num_rows);
        }
        return $data;
    }

    public function get_chapters_pages($condition = array()) {
        $this->db->select("chapters_pages.*");
        if (!empty($condition) || $condition != "") {
            $this->db->where($condition);
        }
        $data = $this->db->get("chapters_pages");
        return $data;
    }

    public function getById($id) {
        if (is_numeric($id) && $id > 0) {
            $result = $this->db->select("chapters.*")
                    ->get_where("chapters", array("id" => $id));
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        return false;
    }

    public function getChapterPageById($chapter_id, $page_id) {
        if (is_numeric($chapter_id) && $chapter_id > 0 && is_numeric($page_id) && $page_id > 0) {
            $result = $this->db->select("chapters_pages.*")
                    ->get_where("chapters_pages", array("id" => $page_id, 'chapter_id' => $chapter_id));
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        return false;
    }

    public function get_chapters_subjects($condition) {
        $result = $this->db->select("subjects.name,subjects.id")
                ->join('subjects', 'subjects.id=chapters_subjects.subject_id', 'INNER')
                ->where(!empty($condition) ? $condition : 1, TRUE)
                ->get("chapters_subjects");
        return $result->num_rows() > 0 ? $result->result() : null;
    }

    public function get_total_pages($condition) {
        $total = $this->db->select('id')->where(!empty($condition) ? $condition : 1, TRUE)
                ->get("chapters_pages");
        return $total->num_rows();
    }

    public function subject_options() {
        $sql = $this->db->select('name,id')->order_by('name', 'ASC')->get('subjects');
        if ($sql->num_rows() > 0) {
            $array = array();
            foreach ($sql->result() as $row) {
                $array[$row->id] = $row->name;
            }
            return $array;
        } else {
            return false;
        }
    }

}

?>
