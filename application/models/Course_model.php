<?php

/*
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Course_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_list($condition = array(), $order = array()) {
        $this->db->select("courses.*");
        if (!empty($condition)) {
            $this->db->where($condition);
        }
        if (!empty($order)) {
            $this->db->order_by($order[0], $order[1]);
        }
        $data = $this->db->get("courses");
        return $data;
    }

    public function getById($id) {
        if (is_numeric($id) && $id > 0) {
            $result = $this->db->select("courses.*")
                    ->get_where("courses", array("id" => $id));
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        return false;
    }

    public function getBySlag($type = "") {
        if ($type != "") {
            $result = $this->db->select("courses.*")
                    ->get_where("courses", array("slug" => $type, "status" => 1));
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        return false;
    }

    public function course_options() {
        $sql = $this->db->select('name,id')->order_by('name', 'ASC')->get('courses');
        if ($sql->num_rows() > 0) {
            $array = array('' => 'Select Course');
            foreach ($sql->result() as $row) {
                $array[$row->id] = $row->name;
            }
            return $array;
        } else {
            return false;
        }
    }

    public function get_subject_courses($condition) {
        $result = $this->db->select("courses.name,courses.id")
                ->join('courses', 'courses.id=subjects_courses.course_id', 'INNER')
                ->where(!empty($condition) ? $condition : 1, TRUE)
                ->get("subjects_courses");
        return $result->num_rows() > 0 ? $result->result() : null;
    }

}

?>
