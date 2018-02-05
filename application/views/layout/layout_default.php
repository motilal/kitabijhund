<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo SITE_TITLE; ?> | <?php echo isset($title) ? $title : ''; ?></title>
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
    </head>
    <body> 
        <?php echo sanitize_output($this->layout->element('element/_header', $this->_ci_cached_vars, true)); ?>
        <?php echo sanitize_output($content_for_layout); ?>  
        <?php echo sanitize_output($this->layout->element('element/_footer', $this->_ci_cached_vars, true)); ?> 
    </body>
</html>
