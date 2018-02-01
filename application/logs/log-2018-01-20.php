<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-20 05:57:25 --> Could not find the language line "login_identity_label"
ERROR - 2018-01-20 05:57:25 --> Could not find the language line "login_password_label"
ERROR - 2018-01-20 06:15:17 --> Query error: Unknown column 'user_id' in 'where clause' - Invalid query: SELECT *
FROM `permissions`
WHERE `user_id` = '5'
ORDER BY `order`
ERROR - 2018-01-20 06:18:08 --> Query error: Unknown column 'order' in 'order clause' - Invalid query: SELECT `id`, `permission_id`
FROM `user_permissions`
WHERE `user_id` = '5'
ORDER BY `order`
ERROR - 2018-01-20 06:18:40 --> Query error: Unknown column 'permission_ids' in 'field list' - Invalid query: SELECT `id`, `permission_ids`
FROM `user_permissions`
WHERE `user_id` = '5'
ERROR - 2018-01-20 06:25:38 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\dev\management\application\controllers\admin\Subadmins.php 173
ERROR - 2018-01-20 06:56:53 --> Severity: Notice --> Undefined property: Pages::$acl E:\xampp\htdocs\dev\management\application\controllers\admin\Pages.php 22
ERROR - 2018-01-20 06:56:53 --> Severity: Error --> Call to a member function has_permission() on null E:\xampp\htdocs\dev\management\application\controllers\admin\Pages.php 22
ERROR - 2018-01-20 07:07:50 --> Could not find the language line "login_identity_label"
ERROR - 2018-01-20 07:07:50 --> Could not find the language line "login_password_label"
ERROR - 2018-01-20 07:09:21 --> Could not find the language line "login_identity_label"
ERROR - 2018-01-20 07:09:21 --> Could not find the language line "login_password_label"
ERROR - 2018-01-20 07:09:42 --> Could not find the language line "login_identity_label"
ERROR - 2018-01-20 07:09:42 --> Could not find the language line "login_password_label"
ERROR - 2018-01-20 07:13:08 --> Could not find the language line "login_identity_label"
ERROR - 2018-01-20 07:13:08 --> Could not find the language line "login_password_label"
ERROR - 2018-01-20 07:13:23 --> Could not find the language line "login_identity_label"
ERROR - 2018-01-20 07:13:23 --> Could not find the language line "login_password_label"
ERROR - 2018-01-20 07:14:17 --> Could not find the language line "login_identity_label"
ERROR - 2018-01-20 07:14:17 --> Could not find the language line "login_password_label"
ERROR - 2018-01-20 07:14:55 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\dev\management\application\libraries\Site_santry.php 32
ERROR - 2018-01-20 07:24:35 --> Severity: Notice --> Undefined variable: permission E:\xampp\htdocs\dev\management\application\models\User_model.php 73
ERROR - 2018-01-20 07:24:35 --> Severity: Notice --> Trying to get property of non-object E:\xampp\htdocs\dev\management\application\models\User_model.php 73
ERROR - 2018-01-20 07:24:42 --> Severity: Notice --> Undefined variable: permission E:\xampp\htdocs\dev\management\application\models\User_model.php 73
ERROR - 2018-01-20 07:24:42 --> Severity: Notice --> Trying to get property of non-object E:\xampp\htdocs\dev\management\application\models\User_model.php 73
ERROR - 2018-01-20 07:25:02 --> Query error: Unknown column 'permisssion_id' in 'where clause' - Invalid query: SELECT `permission_id`
FROM `user_permissions`
WHERE `permisssion_id` = '1'
AND `user_id` = '3'
ERROR - 2018-01-20 07:31:37 --> Severity: Notice --> Undefined property: Acl::$session E:\xampp\htdocs\dev\management\application\libraries\Acl.php 40
ERROR - 2018-01-20 07:31:37 --> Severity: Error --> Call to a member function set_flashdata() on null E:\xampp\htdocs\dev\management\application\libraries\Acl.php 40
