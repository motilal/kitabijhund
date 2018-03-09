<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    public $viewData;

    function __construct() {
        parent::__construct();
        $this->site_santry->redirect = "admin";
        $this->site_santry->allow(array("login", "logout", "forgot_password", "reset_password"));
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('language'));
        $this->layout->set_layout("admin/layout/layout_login");
    }

    public function login() {
        if ($this->ion_auth->is_admin()) {
            redirect('admin/dashboard');
        }
        if ($this->input->post()) {
            $this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
            $this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

            if ($this->form_validation->run() == TRUE) {
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'))) {
                    $this->getSubadminPermission();
                    redirect($this->input->post('request') ? $this->input->post('request') : "/admin/dashboard/?auth=verify");
                } else {
                    $this->session->set_flashdata('error', $this->ion_auth->errors());
                    redirect('admin');
                }
            }
        }
        $this->viewData['request'] = $this->input->get("request") ? base64_decode($this->input->get('request')) : "";
        $this->viewData['title'] = "Admin Login";
        $this->layout->view("admin/auth/login", $this->viewData);
    }

    public function forgot_password() {
        if ($this->ion_auth->is_admin()) {
            redirect('admin/dashboard');
        }
        $this->form_validation->set_rules('email', 'Email Address', 'required');
        if ($this->form_validation->run() == false) {
            $this->data['email'] = array(
                'name' => 'email',
                'id' => 'email'
            );
            $this->viewData['validation_message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->viewData['title'] = "Admin Forgot Password";
            $this->layout->view("admin/auth/forgot_password", $this->viewData);
        } else {
            $forgotten = $this->ion_auth->forgotten_password($this->input->post('email'));
            if ($forgotten) {
                $this->forgotPasswordEmail($forgotten);
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect("admin");
            } else {
                $this->session->set_flashdata('error', $this->ion_auth->errors());
                redirect("admin/auth/forgot_password", 'refresh');
            }
        }
    }

    private function forgotPasswordEmail($forgotten) {
        if (!empty($forgotten['identity']) && !empty($forgotten['forgotten_password_code'])) {
            $email = $forgotten['identity'];
            $code = $forgotten['forgotten_password_code'];
            $this->load->helper('email_helper');
            $replaceFrom = array('{name}', '{link}');
            $replaceTo = array($email, site_url("admin/auth/reset_password/$code"));
            sendMailByTemplate('forgot-password', $replaceFrom, $replaceTo, $email);
        }
    }

    public function reset_password($code = "") {
        $reset = $this->ion_auth->forgotten_password_complete($code);
        if ($reset) {
            $this->resetPasswordEmail($reset);
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect("admin", 'refresh');
        } else {
            $this->session->set_flashdata('error', $this->ion_auth->errors());
            redirect("admin/auth/forgot_password", 'refresh');
        }
    }

    private function resetPasswordEmail($params) {
        if (!empty($params['identity']) && !empty($params['new_password'])) {
            $email = $params['identity'];
            $password = $params['new_password'];
            $this->load->helper('email_helper');
            $replaceFrom = array('{name}', '{password}');
            $replaceTo = array($email, $password);
            sendMailByTemplate('reset-password', $replaceFrom, $replaceTo, $email);
        }
    }

    private function getSubadminPermission() {
        if ($this->ion_auth->is_subadmin() === TRUE) {
            $this->load->model(array('user_model' => 'user'));
            $user_id = $this->ion_auth->get_user_id();
            $upkeys = $this->user->get_userpermission_keys(array('user_id' => $user_id));
            if ($upkeys) {
                $actions = array();
                $group = array();
                foreach ($upkeys as $ukey) {
                    $actions[] = $ukey->key;
                    $group[] = $ukey->group;
                }
                if (!empty($group)) {
                    $group = array_unique($group);
                    $group = array_map('strtolower', $group);
                }
                $this->session->set_userdata('_subadmin_allow_actions', $actions);
                $this->session->set_userdata('_subadmin_allow_module', $group);
            }
        }
    }

    public function logout() {
        $logout = $this->ion_auth->logout();
        redirect('admin', 'refresh');
    }

}
