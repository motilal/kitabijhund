<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="<?php echo empty($meta_description) == FALSE ? $meta_description : get_site_setting('default_meta_description'); ?>">
        <meta name="keywords" content="<?php echo empty($meta_keywords) == FALSE ? $meta_keywords : get_site_setting('default_meta_keywords'); ?>">
        <meta name="author" content="<?php echo get_site_setting('default_meta_author'); ?>">
        <title><?php echo SITE_TITLE; ?> | <?php echo empty($title) == FALSE ? $title : ''; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
        <link rel="shortcut icon" href="<?php echo base_url('asset/front/images/favicon.ico'); ?>" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo base_url('asset/front/plugin/bootstrape/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/front/css/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/front/css/core.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/front/css/color-theme.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/front/css/animate.css'); ?>"> 
        <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>

        <script src="<?php echo base_url('asset/front/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('asset/front/plugin/bootstrape/js/bootstrap.min.js'); ?>"></script> 
        <script src="<?php echo base_url('asset/front/js/plugins.js'); ?>"></script>
        <script src="<?php echo base_url('asset/front/js/coreScripts.js'); ?>"></script>
        <!--Kitabi-jhund's adsense-->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-8429213110258511",
                enable_page_level_ads: true
            });
        </script>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=414244855696317&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </head>
    <body> 
        <div id="fb-root"></div>
        <?php echo sanitize_output($this->layout->element('element/_header', $this->_ci_cached_vars, true)); ?>
        <?php echo sanitize_output($content_for_layout); ?>  
        <?php echo sanitize_output($this->layout->element('element/_footer', $this->_ci_cached_vars, true)); ?> 
    </body>
</html>
