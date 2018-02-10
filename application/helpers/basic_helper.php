<?php

if (!function_exists('pr')) {

    function pr($data = null, $exit = false) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if ($exit === TRUE)
            die();
    }

}

if (!function_exists('load_more_pagination')) {

    /**
     *
     * @param type $url
     * @param type $total_rows
     * @param type $per_page
     * @param type $segment 
     */
    function load_more_pagination($url, $total_rows, $per_page, $segment, $nextLink = 'Load More') {
        $CI = & get_instance();
        $config['display_pages'] = $config['first_link'] = $config['last_link'] = $config['prev_link'] = $config['display_pages'] = FALSE;
        $config['next_link'] = $nextLink;
        $config['anchor_class'] = "class='view-more'";
        $config['base_url'] = site_url($url);
        $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = $segment;
        $CI->load->library("pagination");
        $CI->pagination->initialize($config);
        return $CI->pagination->create_links();
    }

}

if (!function_exists('create_pagination')) {

    /**
     *
     * @param type $url
     * @param type $total_rows
     * @param type $per_page
     * @param type $segment
     * @param type $query_string
     * @return type pagination
     */
    function create_pagination($url, $total_rows, $per_page, $segment, $query_gegments = array(), $config = array()) {
        $CI = & get_instance();
        if (empty($query_gegments)) {
            $query_gegments = $CI->input->get();
            if (isset($query_gegments['start'])) {
                unset($query_gegments['start']);
            }
        }
        $query_string = http_build_query($query_gegments);

        $config['base_url'] = site_url($url);
        $config['num_links'] = 2;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = $segment;
        $config['suffix'] = $query_string ? "&" . $query_string : "";
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = "start";
        $config['first_url'] = $query_string ? "?" . $query_string : "";
        /* design */
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:;">';
        $config['cur_tag_close'] = '</a></li>';
        $CI->load->library("pagination");
        $CI->pagination->initialize($config);
        return $CI->pagination->create_links();
    }

}

if (!function_exists('create_unique_slug')) {

    function create_unique_slug($string, $table = 'pages', $field = 'slug', $key = NULL, $value = NULL) {
        $CI = & get_instance();
        $slug = url_title(trim($string));
        $slug = strtolower($slug);
        if (empty($slug)) {
            $slug = uniqid();
        }
        $i = 0;
        $params = array();
        $params[$field] = $slug;
        if ($key)
            $params["$key !="] = $value;

        while ($CI->db->where($params)->get($table)->num_rows()) {
            if (!preg_match('/-{1}[0-9]+$/', $slug))
                $slug .= '-' . ++$i;
            else
                $slug = preg_replace('/[0-9]+$/', ++$i, $slug);

            $params [$field] = $slug;
        }
        return $slug;
    }

}

if (!function_exists('getLangText')) {

    /**
     * 
     * @param type $string
     * @return type
     */
    function getLangText($langKey) {
        $CI = & get_instance();
        return $CI->lang->line("$langKey", false);
    }

}
if (!function_exists('validateDate')) {

    function validateDate($date, $format = 'Y-m-d H:i:s') {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

}

if (!function_exists('arrayGrouping')) {

    function arrayGrouping($array = array(), $field = "") {
        if (empty($array)) {
            return false;
        }
        $p_group = array();
        foreach ($array as $row) {
            if (!in_array($row->$field, $p_group))
                $p_group[] = $row->$field;
        }
        $p_group1 = array();
        foreach ($p_group as $grp) {
            foreach ($array as $row) {
                if ($row->$field == $grp) {
                    $p_group1[$grp][] = $row;
                }
            }
        }
        return $p_group1;
    }

}

/*
  Array
  (
  [0] => stdClass Object
  (
  [name] => Hindi
  )

  [1] => stdClass Object
  (
  [name] => Physics
  )

  )
  To

  Array
  (
  [0] => Hindi
  [1] => Physics
  )

 */
if (!function_exists('filterAssocArray')) {

    function filterAssocArray($array = array(), $field = "") {
        if (empty($array)) {
            return false;
        }
        $p_group = array();
        foreach ($array as $row) {
            $p_group[] = $row->$field;
        }
        return $p_group;
    }

}


if (!function_exists('is_allow_admin')) {

    function is_allow_admin($redirect = true) {
        $CI = & get_instance();
        if ($CI->ion_auth->is_admin()) {
            return true;
        } else {
            if ($redirect) {
                $CI->session->set_flashdata("error", 'You dont have permission.');
                redirect('admin/dashboard');
            }
            return false;
        }
    }

}


if (!function_exists('is_allow_action')) {

    function is_allow_action($key = "") {
        $CI = & get_instance();
        if ($CI->ion_auth->is_admin()) {
            return TRUE;
        }
        $useractions = $CI->session->userdata('_subadmin_allow_actions');
        if (!empty($useractions) && in_array($key, $useractions)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}


if (!function_exists('is_allow_module')) {

    function is_allow_module($group = "") {
        $CI = & get_instance();
        if ($CI->ion_auth->is_admin()) {
            return TRUE;
        }
        $usermodule = $CI->session->userdata('_subadmin_allow_module');
        if (!empty($usermodule) && in_array($group, $usermodule)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
if (!function_exists('gravatar_url')) {

    function gravatar_url($email = "", $size = 160) {
        $default = base_url('asset/admin/images/theme/no-user.jpg');
        if (ENV_HOST == 'localhost') {
            return $default;
        }
        $grav_url = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "?d=" . urlencode($default) . "&s=" . $size;
        return $grav_url;
    }

}

if (!function_exists('get_site_setting')) {

    function get_site_setting($field_name = "") {
        $CI = & get_instance();
        $sql = $CI->db->select('value')->get_where('settings', array('field_name' => $field_name, 'status' => '1'));
        if ($sql->num_rows() > 0) {
            return $sql->row()->value;
        } else {
            return '';
        }
    }

}

if (!function_exists('get_all_subjects')) {

    function get_all_subjects() {
        $CI = & get_instance();
        $sql = $CI->db->select('id,name,slug')->get_where('subjects', array('status' => 1));
        if ($sql->num_rows() > 0) {
            return $sql->result();
        } else {
            return '';
        }
    }

}