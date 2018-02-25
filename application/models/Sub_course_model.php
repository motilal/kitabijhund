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

}

?>
