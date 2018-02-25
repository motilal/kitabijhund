<?php

/*
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sub_course_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_list($condition = array(), $order = array()) {
        $this->db->select("sub_courses.*,courses.name as course_name");
        if (!empty($condition)) {
            $this->db->where($condition);
        }
        if (!empty($order)) {
            $this->db->order_by($order[0], $order[1]);
        }
        $this->db->join("courses", "courses.id = sub_courses.course_id", "left");
        $data = $this->db->get("sub_courses");
        return $data;
    }

    public function getById($id, $join = false) {
        if (is_numeric($id) && $id > 0) {
            if ($join) {
                $this->db->select("sub_courses.*,courses.name as course_name");
            } else {
                $this->db->select("sub_courses.*");
            }
            if ($join) {
                $this->db->join("courses", "courses.id = sub_courses.course_id", "left");
            }
            $result = $this->db->get_where("sub_courses", array("sub_courses.id" => $id));
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        return false;
    }

    public function getBySlag($type = "") {
        if ($type != "") {
            $result = $this->db->select("sub_courses.*")
                    ->get_where("sub_courses", array("slug" => $type, "status" => 1));
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        return false;
    }

    public function sub_course_options() {
        $sql = $this->db->select('name,id')->order_by('name', 'ASC')->get('sub_courses');
        if ($sql->num_rows() > 0) {
            $array = array('' => 'Select Sub Course');
            foreach ($sql->result() as $row) {
                $array[$row->id] = $row->name;
            }
            return $array;
        } else {
            return false;
        }
    }

    public function get_subject_subcourses($condition) {
        $result = $this->db->select("sub_courses.name,sub_courses.id")
                ->join('sub_courses', 'sub_courses.id=subject_subcourses.sub_course_id', 'INNER')
                ->where(!empty($condition) ? $condition : 1, TRUE)
                ->get("subject_subcourses");
        return $result->num_rows() > 0 ? $result->result() : null;
    }

}

?>
