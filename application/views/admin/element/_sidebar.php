<?php
global $UserInfo;
$segment_cntr = $this->uri->segment(2);
$segment_fun = $this->uri->segment(3);

$subadminIndex = ($segment_cntr == 'subadmins' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
$subadminAdd = ($segment_cntr == 'subadmins' && $segment_fun == 'add') ? 'active' : '';

$permissionIndex = ($segment_cntr == 'permissions' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
$permissionAdd = ($segment_cntr == 'permissions' && $segment_fun == 'manage') ? 'active' : '';

$pageIndex = ($segment_cntr == 'pages' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
$pageAdd = ($segment_cntr == 'pages' && $segment_fun == 'manage') ? 'active' : '';

$newsIndex = ($segment_cntr == 'news' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
$newsAdd = ($segment_cntr == 'news' && $segment_fun == 'manage') ? 'active' : '';

$formalertIndex = ($segment_cntr == 'form_alerts' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
$formalertCategoryIndex = ($segment_cntr == 'form_alerts' && $segment_fun == 'categories') ? 'active' : '';
$formalertAdd = ($segment_cntr == 'form_alerts' && $segment_fun == 'manage') ? 'active' : '';

$settingIndex = ($segment_cntr == 'settings' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
$settingProfile = ($segment_cntr == 'settings' && $segment_fun == 'profile') ? 'active' : '';
$flashMessageIndex = ($segment_cntr == 'flash_messages') ? 'active' : '';
$logIndex = ($segment_cntr == 'logs') ? 'active' : '';


$user_permissions = $this->session->userdata('_subadmin_module_permissions');

$courseIndex = ($segment_cntr == 'courses' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
//$subcourseIndex = ($segment_cntr == 'sub_courses' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
$subjectIndex = ($segment_cntr == 'subjects' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
$chapterIndex = ($segment_cntr == 'chapters' && ($segment_fun == 'index' || $segment_fun == '')) ? 'active' : '';
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo gravatar_url($UserInfo->email); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info"> 
                <p><?php echo $UserInfo->first_name . ' ' . $UserInfo->last_name ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> 
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo $segment_cntr == 'dashboard' ? 'active' : ''; ?>">
                <a href="<?php echo site_url('admin/dashboard'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
                </a>
            </li> 

            <?php if (is_allow_admin(FALSE)) { ?>
                <li class="treeview <?php echo $segment_cntr == 'subadmins' ? 'active menu-open' : ''; ?>">
                    <a href="#">
                        <i class="fa fa-user-secret"></i>
                        <span>SubAdmin Manager</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display:<?php echo $segment_cntr == 'subadmins' ? 'block' : 'none'; ?>;">
                        <li class="<?php echo $subadminIndex; ?>"><a href="<?php echo site_url('admin/subadmins'); ?>"><i class="fa fa-th-list"></i> Manage SubAdmins</a></li>
                        <li class="<?php echo $subadminAdd; ?>"><a href="<?php echo site_url('admin/subadmins/add'); ?>"><i class="fa fa-plus"></i> Add New SubAdmins</a></li> 
                    </ul>
                </li>
            <?php } ?>

            <li class="treeview <?php echo in_array($segment_cntr, array('courses', 'subjects', 'chapters', 'sub_courses')) ? 'active menu-open' : ''; ?>">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Study Materials</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php if (is_allow_action('course-index')) { ?>
                        <li class="<?php echo $courseIndex; ?>"><a href="<?php echo site_url('admin/courses'); ?>"><i class="fa fa-circle-o"></i> Manage Courses</a></li>
                    <?php } ?>
                    <?php /* if (is_allow_action('sub_course-index')) { ?>
                      <li class="<?php echo $subcourseIndex; ?>"><a href="<?php echo site_url('admin/sub_courses'); ?>"><i class="fa fa-circle-o"></i> Manage Sub Courses</a></li>
                      <?php } */ ?>
                    <?php if (is_allow_action('subject-index')) { ?>
                        <li class="<?php echo $subjectIndex; ?>"><a href="<?php echo site_url('admin/subjects'); ?>"><i class="fa fa-circle-o"></i> Manage Subjects</a></li>
                    <?php } ?>
                    <?php if (is_allow_action('chapter-index')) { ?>
                        <li class="<?php echo $chapterIndex; ?>"><a href="<?php echo site_url('admin/chapters'); ?>"><i class="fa fa-circle-o"></i> Manage Chapters</a></li>
                    <?php } ?>
                </ul>
            </li>

            <?php if (is_allow_module('page')) { ?>
                <li class="treeview <?php echo $segment_cntr == 'pages' ? 'active menu-open' : ''; ?>">
                    <a href="#">
                        <i class="fa fa-file-text-o"></i>
                        <span>Static Pages</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display:<?php echo $segment_cntr == 'pages' ? 'block' : 'none'; ?>;">
                        <?php if (is_allow_action('page-index')) { ?>
                            <li class="<?php echo $pageIndex; ?>"><a href="<?php echo site_url('admin/pages'); ?>"><i class="fa fa-th-list"></i> Manage Pages</a></li>
                        <?php } ?>
                        <?php if (is_allow_action('page-add')) { ?>
                            <li class="<?php echo $pageAdd; ?>"><a href="<?php echo site_url('admin/pages/manage'); ?>"><i class="fa fa-plus"></i> Add New Page</a></li> 
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?> 

            <?php if (is_allow_module('news')) { ?>
                <li class="treeview <?php echo $segment_cntr == 'news' ? 'active menu-open' : ''; ?>">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i>
                        <span>News</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display:<?php echo $segment_cntr == 'news' ? 'block' : 'none'; ?>;">
                        <?php if (is_allow_action('news-index')) { ?>
                            <li class="<?php echo $newsIndex; ?>"><a href="<?php echo site_url('admin/news'); ?>"><i class="fa fa-th-list"></i> Manage News</a></li>
                        <?php } ?>
                        <?php if (is_allow_action('news-add')) { ?>
                            <li class="<?php echo $newsAdd; ?>"><a href="<?php echo site_url('admin/news/manage'); ?>"><i class="fa fa-plus"></i> Add New News</a></li> 
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if (is_allow_module('form alerts')) { ?>
                <li class="treeview <?php echo $segment_cntr == 'form_alerts' ? 'active menu-open' : ''; ?>">
                    <a href="#">
                        <i class="fa fa-bell-o"></i>
                        <span>Form Alert</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display:<?php echo $segment_cntr == 'form_alerts' ? 'block' : 'none'; ?>;">
                        <?php if (is_allow_action('form_alert-index')) { ?>
                            <li class="<?php echo $formalertIndex; ?>"><a href="<?php echo site_url('admin/form_alerts'); ?>"><i class="fa fa-th-list"></i> Manage From Alert</a></li>
                        <?php } ?>
                        <?php if (is_allow_action('form_alert-category-index')) { ?>
                            <li class="<?php echo $formalertCategoryIndex; ?>"><a href="<?php echo site_url('admin/form_alerts/categories'); ?>"><i class="glyphicon glyphicon-tags"></i> Manage Categories</a></li>
                        <?php } ?>
                        <?php if (is_allow_action('form_alert-add')) { ?>
                            <li class="<?php echo $formalertAdd; ?>"><a href="<?php echo site_url('admin/form_alerts/manage'); ?>"><i class="fa fa-plus"></i> Add Form Alert</a></li> 
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?> 


            <li class="<?php echo $segment_cntr == 'email_templates' ? 'active' : ''; ?>">
                <a href="<?php echo site_url('admin/email_templates'); ?>">
                    <i class="fa fa-envelope-o"></i> <span>Email Templates</span> 
                </a>
            </li>



            <?php if (is_allow_admin(FALSE)) { ?>
                <li class="treeview <?php echo $segment_cntr == 'permissions' ? 'active menu-open' : ''; ?>">
                    <a href="#">
                        <i class="fa fa-lock"></i>
                        <span>Permission Manager</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display:<?php echo $segment_cntr == 'permissions' ? 'block' : 'none'; ?>;">
                        <li class="<?php echo $permissionIndex; ?>"><a href="<?php echo site_url('admin/permissions'); ?>"><i class="fa fa-th-list"></i> Manage Permissions</a></li>
                        <li class="<?php echo $permissionAdd; ?>"><a href="<?php echo site_url('admin/permissions/manage'); ?>"><i class="fa fa-plus"></i> Add New Permission</a></li> 
                    </ul>
                </li>
            <?php } ?>


            <li class="treeview <?php echo in_array($segment_cntr, array('settings', 'flash_messages', 'logs')) ? 'active menu-open' : ''; ?>">
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display:<?php echo in_array($segment_cntr, array('settings', 'flash_messages', 'logs')) ? 'block' : 'none'; ?>;"> 
                    <li class="<?php echo $settingProfile; ?>"><a href="<?php echo site_url('admin/settings/profile'); ?>"><i class="fa fa-user-plus"></i> Manage Profile</a></li>
                    <?php if (is_allow_action('settings-index')) { ?>
                        <li class="<?php echo $settingIndex; ?>">
                            <a href="<?php echo site_url('admin/settings/index'); ?>"><i class="fa fa-gear"></i> Site Settings</a>
                        </li> 
                    <?php } ?>

                    <?php if (is_allow_admin(FALSE)) { ?>
                        <li class="<?php echo $flashMessageIndex; ?>">
                            <a href="<?php echo site_url('admin/flash_messages'); ?>"><i class="glyphicon glyphicon-envelope"></i> Manage Flash Messages</a>
                        </li>    
                    <?php } ?>
                    <?php if (is_allow_admin(FALSE)) { ?>
                        <li class="<?php echo $logIndex; ?>">
                            <a href="<?php echo site_url('admin/logs'); ?>"><i class="fa fa-bug"></i> System Error Log</a>
                        </li>    
                    <?php } ?>
                </ul>
            </li>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>