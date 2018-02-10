<?php

/**
 * @author Motilal Soni
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Form_alert_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_list($condition = array(), $limit = array(), $order = array(), $with_num_rows = false) {
        $this->db->select("fa.*,fac.name as category_name");
        if (!empty($condition) || $condition != "") {
            $this->db->where($condition);
        }
        if (!empty($limit)) {
            $this->db->limit($limit['limit'], $limit['start']);
        }
        if (!empty($order)) {
            $this->db->order_by($order[0], $order[1]);
        } else {
            $this->db->order_by('fa.created', 'DESC');
        }
        $data = $this->db->join('form_alerts_categories as fac', 'fac.id=fa.category', 'LEFT')->get("form_alerts as fa");
        if ($with_num_rows == true) {
            $num_rows = $this->db->select('fa.id')->where(!empty($condition) ? $condition : 1, TRUE)->join('form_alerts_categories as fac', 'fac.id=fa.category', 'LEFT')->count_all_results("form_alerts as fa");
            return (object) array("data" => $data, "num_rows" => $num_rows);
        }
        return $data;
    }

    public function getById($id) {
        if (is_numeric($id) && $id > 0) {
            $result = $this->db->select("form_alerts.*")
                    ->get_where("form_alerts", array("id" => $id));
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        return false;
    }

    public function getBySlag($type = "") {
        if ($type != "") {
            $result = $this->db->select("form_alerts.*")
                    ->get_where("form_alerts", array("slug" => $type, "status" => 1));
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        return false;
    }

    public function get_category_list($condition = array(), $order = array()) {
        $this->db->select("*");
        if (!empty($condition)) {
            $this->db->where($condition);
        }
        if (!empty($order)) {
            $this->db->order_by($order[0], $order[1]);
        }
        $data = $this->db->get("form_alerts_categories");
        return $data;
    }

    public function categories_options() {
        $sql = $this->db->select('name,id')->order_by('name', 'ASC')->where(array("status" => 1))->get('form_alerts_categories');
        if ($sql->num_rows() > 0) {
            $array = array('' => 'Select Category');
            foreach ($sql->result() as $row) {
                $array[$row->id] = $row->name;
            }
            return $array;
        } else {
            return false;
        }
    }

    public function getCategoryById($id) {
        if (is_numeric($id) && $id > 0) {
            $result = $this->db->select("*")
                    ->get_where("form_alerts_categories", array("id" => $id));
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        return false;
    }

}

?>
