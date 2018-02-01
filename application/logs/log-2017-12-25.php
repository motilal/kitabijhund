<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-12-25 04:07:31 --> Could not find the language line "login_identity_label"
ERROR - 2017-12-25 04:07:31 --> Could not find the language line "login_password_label"
ERROR - 2017-12-25 05:16:40 --> 404 Page Not Found: admin/Users/index
ERROR - 2017-12-25 05:16:47 --> 404 Page Not Found: admin/Users/subadmins
ERROR - 2017-12-25 05:17:39 --> Severity: error --> Exception: Unable to locate the model you have specified: User_model E:\xampp\htdocs\dev\management\system\core\Loader.php 344
ERROR - 2017-12-25 05:27:51 --> Query error: Unknown column 'users_group.group_id' in 'field list' - Invalid query: SELECT `users`.*, `users_group`.`group_id`, `groups`.`name` as `group name`
FROM `users`
LEFT JOIN `users_groups` as `ug` ON `users`.`id` = `ug`.`user_id`
LEFT JOIN `groups` as `grp` ON `ug`.`group_id` = `grp`.`id`
ORDER BY `created_on` DESC
 LIMIT 10
ERROR - 2017-12-25 05:28:14 --> Severity: Notice --> Undefined property: stdClass::$created E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 74
ERROR - 2017-12-25 05:28:14 --> Severity: Notice --> Undefined property: stdClass::$status E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 75
ERROR - 2017-12-25 05:28:14 --> Severity: Notice --> Undefined property: stdClass::$created E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 74
ERROR - 2017-12-25 05:28:14 --> Severity: Notice --> Undefined property: stdClass::$status E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 75
ERROR - 2017-12-25 05:28:14 --> Severity: Notice --> Undefined offset: 6 E:\xampp\htdocs\dev\management\application\views\admin\user\index.php 38
ERROR - 2017-12-25 05:28:14 --> Severity: Notice --> Undefined offset: 6 E:\xampp\htdocs\dev\management\application\views\admin\user\index.php 38
ERROR - 2017-12-25 05:28:15 --> Severity: Notice --> Undefined property: stdClass::$created E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 74
ERROR - 2017-12-25 05:28:15 --> Severity: Notice --> Undefined property: stdClass::$status E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 75
ERROR - 2017-12-25 05:28:16 --> Severity: Notice --> Undefined property: stdClass::$created E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 74
ERROR - 2017-12-25 05:28:16 --> Severity: Notice --> Undefined property: stdClass::$status E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 75
ERROR - 2017-12-25 05:28:28 --> Severity: Notice --> Undefined property: stdClass::$status E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 75
ERROR - 2017-12-25 05:28:28 --> Severity: Notice --> Undefined property: stdClass::$status E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 75
ERROR - 2017-12-25 05:28:28 --> Severity: Notice --> Undefined offset: 6 E:\xampp\htdocs\dev\management\application\views\admin\user\index.php 38
ERROR - 2017-12-25 05:28:28 --> Severity: Notice --> Undefined offset: 6 E:\xampp\htdocs\dev\management\application\views\admin\user\index.php 38
ERROR - 2017-12-25 05:28:30 --> Severity: Notice --> Undefined property: stdClass::$status E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 75
ERROR - 2017-12-25 05:28:30 --> Severity: Notice --> Undefined property: stdClass::$status E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 75
ERROR - 2017-12-25 05:29:03 --> Severity: Notice --> Undefined offset: 6 E:\xampp\htdocs\dev\management\application\views\admin\user\index.php 38
ERROR - 2017-12-25 05:29:03 --> Severity: Notice --> Undefined offset: 6 E:\xampp\htdocs\dev\management\application\views\admin\user\index.php 38
ERROR - 2017-12-25 05:29:30 --> Severity: Notice --> Undefined offset: 6 E:\xampp\htdocs\dev\management\application\views\admin\user\index.php 38
ERROR - 2017-12-25 05:29:30 --> Severity: Notice --> Undefined offset: 6 E:\xampp\htdocs\dev\management\application\views\admin\user\index.php 38
ERROR - 2017-12-25 05:37:19 --> Query error: Unknown column 'grp.name' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `users`
WHERE `grp`.`name` = 'subadmin'
ERROR - 2017-12-25 05:39:24 --> Query error: Column 'id' in field list is ambiguous - Invalid query: SELECT `id`
FROM `users`
LEFT JOIN `users_groups` as `ug` ON `users`.`id` = `ug`.`user_id`
LEFT JOIN `groups` as `grp` ON `ug`.`group_id` = `grp`.`id`
WHERE `grp`.`name` = 'subadmin'
ERROR - 2017-12-25 05:39:29 --> Query error: Column 'id' in field list is ambiguous - Invalid query: SELECT `id`
FROM `users`
LEFT JOIN `users_groups` as `ug` ON `users`.`id` = `ug`.`user_id`
LEFT JOIN `groups` as `grp` ON `ug`.`group_id` = `grp`.`id`
WHERE `grp`.`name` = 'subadmin'
ERROR - 2017-12-25 05:40:00 --> Query error: Unknown column 'status' in 'order clause' - Invalid query: SELECT `users`.*, `ug`.`group_id`, `grp`.`name` as `group name`
FROM `users`
LEFT JOIN `users_groups` as `ug` ON `users`.`id` = `ug`.`user_id`
LEFT JOIN `groups` as `grp` ON `ug`.`group_id` = `grp`.`id`
WHERE `grp`.`name` = 'subadmin'
GROUP BY `users`.`id`
ORDER BY `status` ASC
 LIMIT 10
ERROR - 2017-12-25 05:40:38 --> 404 Page Not Found: Asset/admin
ERROR - 2017-12-25 05:41:30 --> 404 Page Not Found: admin/Users/index
ERROR - 2017-12-25 05:43:39 --> 404 Page Not Found: admin/Users/subadmins
ERROR - 2017-12-25 08:27:20 --> Could not find the language line "login_identity_label"
ERROR - 2017-12-25 08:27:20 --> Could not find the language line "login_password_label"
ERROR - 2017-12-25 08:27:20 --> Severity: Error --> Call to undefined function form_passwprd() E:\xampp\htdocs\dev\management\application\views\admin\user\manage.php 47
ERROR - 2017-12-25 08:51:59 --> Could not find the language line "form_validation__validate_email"
ERROR - 2017-12-25 08:52:09 --> Could not find the language line "form_validation__validate_email"
ERROR - 2017-12-25 08:57:54 --> Severity: Notice --> Undefined variable: email1 E:\xampp\htdocs\dev\management\application\controllers\admin\Users.php 150
ERROR - 2017-12-25 09:00:17 --> 404 Page Not Found: admin/Users/manage_subadmins
ERROR - 2017-12-25 09:01:02 --> 404 Page Not Found: admin/Users/add_subadmins
ERROR - 2017-12-25 09:08:29 --> 404 Page Not Found: admin/Users/index
ERROR - 2017-12-25 09:11:18 --> 404 Page Not Found: admin/Users/add_subadmins
ERROR - 2017-12-25 09:45:44 --> 404 Page Not Found: admin/Users/manage
ERROR - 2017-12-25 10:10:21 --> 404 Page Not Found: 
ERROR - 2017-12-25 10:13:37 --> 404 Page Not Found: admin/Users/sub_admins
ERROR - 2017-12-25 10:15:12 --> 404 Page Not Found: admin/Users/manage
ERROR - 2017-12-25 10:23:25 --> Query error: Column 'email' cannot be null - Invalid query: INSERT INTO `users` (`first_name`, `last_name`, `phone`, `email`, `username`, `password`, `ip_address`, `created_on`, `active`) VALUES ('sdf', 'sfds', '', NULL, NULL, 0, '127.0.0.1', 1514193805, 1)
ERROR - 2017-12-25 10:25:29 --> Severity: error --> Exception: Undefined method Ion_auth::update_user() called E:\xampp\htdocs\dev\management\application\libraries\Ion_auth.php 100
ERROR - 2017-12-25 10:27:29 --> Severity: error --> Exception: Undefined method Ion_auth::update_user() called E:\xampp\htdocs\dev\management\application\libraries\Ion_auth.php 100
ERROR - 2017-12-25 10:27:50 --> Severity: error --> Exception: The model name you are loading is the name of a resource that is already being used: ion_auth E:\xampp\htdocs\dev\management\system\core\Loader.php 275
ERROR - 2017-12-25 10:39:01 --> Query error: Unknown column 'end_date' in 'order clause' - Invalid query: SELECT `users`.*, `ug`.`group_id`, `grp`.`name` as `group name`
FROM `users`
LEFT JOIN `users_groups` as `ug` ON `users`.`id` = `ug`.`user_id`
LEFT JOIN `groups` as `grp` ON `ug`.`group_id` = `grp`.`id`
WHERE `grp`.`id` = '3'
GROUP BY `users`.`id`
ORDER BY `end_date` ASC
 LIMIT 10
ERROR - 2017-12-25 10:40:54 --> Query error: Unknown column 'status' in 'order clause' - Invalid query: SELECT `users`.*, `ug`.`group_id`, `grp`.`name` as `group name`
FROM `users`
LEFT JOIN `users_groups` as `ug` ON `users`.`id` = `ug`.`user_id`
LEFT JOIN `groups` as `grp` ON `ug`.`group_id` = `grp`.`id`
WHERE `grp`.`id` = '3'
GROUP BY `users`.`id`
ORDER BY `status` ASC
 LIMIT 10
ERROR - 2017-12-25 13:08:29 --> Could not find the language line "login_identity_label"
ERROR - 2017-12-25 13:08:29 --> Could not find the language line "login_password_label"
