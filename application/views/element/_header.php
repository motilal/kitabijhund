<style>
    .search-form form input{
        padding: 20px;
        margin: 6px;
    }
    .main-navigation {
        margin-top: 15px;
    }
</style> 
<header class="site-header">

    <div class="nav-bar-main" role="navigation">
        <div class="container">
            <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                <ul class="main-menu sf-menu sf-js-enabled sf-arrows">
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('news'); ?>">Current Affairs</a></li>
                    <?php $subjects = get_all_subjects(); ?>
                    <li class="sfHover">
                        <a href="#" class="sf-with-ul">Subjects<i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu animated fadeInRight" style="display: none;"> 
                            <?php if (!empty($subjects)) { ?>
                                <?php foreach ($subjects as $sub) { ?>
                                    <li><a href="<?php echo site_url("subject/$sub->slug"); ?>"><?php echo $sub->name; ?></a></li>
                                <?php } ?>
                            <?php } ?>  
                        </ul>
                    </li>

                    <li><a href="<?php echo site_url('form_alerts'); ?>">Form Alerts</a></li>

                    <li><a href="contact.html">Discussions</a></li>
                </ul> <!-- /.main-menu -->



                <div class="search-form pull-right">
                    <form name="search_form" method="get" action="#" class="search_form">
                        <input type="text" name="s" placeholder="Search Library..." title="Search the site..." class="field_search">
                    </form>
                </div>

                <!--<ul class="social-icons pull-right">
                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="RSS"><i class="fa fa-rss"></i></a></li>
                </ul>--> <!-- /.social-icons -->
            </nav> <!-- /.main-navigation -->
        </div> <!-- /.container -->
    </div> <!-- /.nav-bar-main --> 
</header>