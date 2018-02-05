<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'pages/manage' => array(
        array(
            'field' => 'title',
            'label' => 'Page title',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'meta_keywords',
            'label' => 'Meta keywords',
            'rules' => "trim|max_length[1024]"
        ),
        array(
            'field' => 'meta_description',
            'label' => 'Meta description',
            'rules' => "trim|max_length[1024]"
        )
    ),
    'news/manage' => array(
        array(
            'field' => 'title',
            'label' => 'News Title',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'short_description',
            'label' => 'Short Description',
            'rules' => 'trim|required|max_length[2000]'
        ),
        array(
            'field' => 'start_date',
            'label' => 'Start Date',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'description',
            'label' => 'Full Description',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'meta_keywords',
            'label' => 'Meta keywords',
            'rules' => "trim|max_length[1024]"
        ),
        array(
            'field' => 'meta_description',
            'label' => 'Meta description',
            'rules' => "trim|max_length[1024]"
        )
    ),
    'form_alerts/manage' => array(
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'short_description',
            'label' => 'Short Description',
            'rules' => 'trim|required|max_length[2000]'
        ),
        array(
            'field' => 'description',
            'label' => 'Full Description',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'meta_keywords',
            'label' => 'Meta keywords',
            'rules' => "trim|max_length[1024]"
        ),
        array(
            'field' => 'meta_description',
            'label' => 'Meta description',
            'rules' => "trim|max_length[1024]"
        )
    ),
    'email_templates/manage' => array(
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'subject',
            'label' => 'Subject',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'variable',
            'label' => 'Variable',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'body',
            'label' => 'Body',
            'rules' => 'trim|required'
        )
    ),
    'add_subadmins' => array(
        array(
            'field' => 'first_name',
            'label' => 'First Name',
            'rules' => "trim|required|max_length[50]"
        ),
        array(
            'field' => 'last_name',
            'label' => 'Last Name',
            'rules' => "trim|max_length[50]"
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => "trim|required|valid_email|max_length[254]|callback__validate_email"
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => "trim|max_length[20]"
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'cpassword',
            'label' => 'Confrim Password',
            'rules' => "trim|matches[password]"
        )
    ),
    'edit_subadmins' => array(
        array(
            'field' => 'first_name',
            'label' => 'First Name',
            'rules' => "trim|required|max_length[50]"
        ),
        array(
            'field' => 'last_name',
            'label' => 'Last Name',
            'rules' => "trim|max_length[50]"
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => "trim|max_length[20]"
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => "trim|max_length[255]"
        ),
        array(
            'field' => 'cpassword',
            'label' => 'Confrim Password',
            'rules' => "trim|matches[password]"
        )
    ),
    'permissions/manage' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'key',
            'label' => 'Key',
            'rules' => "trim|required|max_length[255]|callback__validate_permission_key"
        ),
        array(
            'field' => 'group',
            'label' => 'group',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'order',
            'label' => 'Order',
            'rules' => "trim|max_length[11]"
        )
    ),
    'change_admin_password' => array(
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|callback__validate_password'
        ),
        array(
            'field' => 'new_password',
            'label' => 'New Password',
            'rules' => 'trim|required|min_length[6]|max_length[40]'
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'Confirm Password',
            'rules' => 'trim|required|min_length[6]|max_length[40]|matches[new_password]'
        )
    ),
    'subjects/manage' => array(
        array(
            'field' => 'name',
            'label' => 'Subject Name',
            'rules' => "trim|required|max_length[200]"
        )
    ),
    'chapters/manage' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'subject[]',
            'label' => 'Subject',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'order',
            'label' => 'Order',
            'rules' => "trim|max_length[11]"
        )
    ),
    'manage_chapter_pages' => array(
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => "trim|required|max_length[255]"
        ),
        array(
            'field' => 'content',
            'label' => 'Content',
            'rules' => "trim|required"
        ),
        array(
            'field' => 'qa',
            'label' => 'Question Answer',
            'rules' => "trim"
        )
    )
);
$config['error_prefix'] = '<div class="help-block">';
$config['error_suffix'] = '</div>';
