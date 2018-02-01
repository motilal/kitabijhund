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
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-slideshow">
                        <div class="flexslider">
                            <ul class="slides">
                                <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                                    <img src="http://demo.esmeth.com/universe/Blue/images/slide1.jpg" draggable="false">
                                    <div class="slider-caption">
                                        <h2><a href="blog-single.html">When a Doctorâ€™s Visit Is a Guilt Trip</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                    </div>
                                </li>
                                <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                    <img src="http://demo.esmeth.com/universe/Blue/images/slide2.jpg" draggable="false">
                                    <div class="slider-caption">
                                        <h2><a href="blog-single.html">Unlocking the scrolls of Herculaneum</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                    </div>
                                </li>
                                <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                    <img src="http://demo.esmeth.com/universe/Blue/images/slide3.jpg" draggable="false">
                                    <div class="slider-caption">
                                        <h2><a href="blog-single.html">Corin Sworn wins Max Mara Art Prize</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                    </div>
                                </li>
                            </ul> 
                        </div> 
                    </div> 
                </div> 

                <div class="col-md-4">
                    <div class="widget-item">
                        <div class="request-information">
                            <h4 class="widget-title">Request Information</h4>
                            <form class="request-info clearfix"> 
                                <div class="full-row">
                                    <label for="phone">Full Phone:</label>
                                    <input type="text" id="yourname" name="yourname">
                                </div> <!-- /.full-row -->

                                <div class="full-row">
                                    <label for="yourname">First Name:</label>
                                    <input type="text" id="yourname" name="yourname">
                                </div> <!-- /.full-row -->

                                <div class="full-row">
                                    <label for="yourname">Last Name:</label>
                                    <input type="text" id="yourname" name="yourname">
                                </div> <!-- /.full-row -->

                                <div class="full-row">
                                    <label for="email-id">Email Address:</label>
                                    <input type="text" id="email-id" name="email-id">
                                </div> <!-- /.full-row -->

                                <div class="full-row">
                                    <div class="submit_field">
                                        <span class="small-text pull-left">Subscribe to our newsletter</span>
                                        <input class="mainBtn pull-right" type="submit" name="" value="Submit Request">
                                    </div> <!-- /.submit-field -->
                                </div> <!-- /.full-row -->


                            </form> <!-- /.request-info -->
                        </div> <!-- /.request-information -->
                    </div> <!-- /.widget-item -->
                </div> <!-- /.col-md-4 -->
            </div>
        </div>

        <div class="container">
            <div class="row">

                <!-- Here begin Main Content -->
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget-item">
                                <h2 class="welcome-text">20 May 2017 - Current Affairs</h2>		

                                <p>
                                    1. Mumbai Indians created history by becoming the first team to win the IPL for a record three times, when they beat Rising Pune Supergiant, the team they had lost to thrice earlier in the tournament, by one run in the final in Hyderabad on Sunday night. MI defended a modest 130-run target on the back of a magnificent bowling effort from Mitchell Johnson who, playing his fifth game of the season, successfully defended 11 off the last over and finished with 3/26 to outshine an equally impressive knock from Steve Smith (51). This is also the first time since 2008 that a team finishing first in the Points Table has lifted the trophy.
                                    </br>
                                    </br>
                                    2. May 21stÂ is observed asÂ Anti-Terrorism DayÂ in the memory of former Indian PM Mr Rajiv Gandhi who passed away on this day. On this day in theÂ year 1991,Â former Indiaâ€™sÂ PM Rajiv GandhiÂ was killed brutally by terrorist attacks. Rajiv Gandhi, the former Prime Minister of India, while conducting an election campaign in Sriperumbudur (located near Chennai) in Tamil Nadu was assassinated by a suicide bomber on 21 May 1991.Â He was 46 years of age.Â Along with him, the bombing also took the lives of 18 other citizens and seriously injured 43. This tragedy was blamed on the members of the Sri Lankan militant organisation,Â LTTE (Liberation Tigers of Tamil Elam).Â 
                                </p>
                                <div class="view-details"><a href="event-single.html" class="lightBtn">Read More</a></div>

                            </div> <!-- /.widget-item -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->

                    <div class="row">


                        <!-- Show Latest Events List -->
                        <div class="col-md-6">
                            <div class="widget-main">
                                <div class="widget-main-title">
                                    <h4 class="widget-title">News</h4>
                                </div> <!-- /.widget-main-title -->
                                <div class="widget-inner">
                                    <div class="event-small-list clearfix">
                                        <div class="calendar-small">
                                            <span class="s-month">May</span>
                                            <span class="s-date">22</span>
                                        </div>
                                        <div class="event-small-details">
                                            <h5 class="event-small-title"><a href="event-single.html">Current Affairs - 21-05-2017</a></h5>
                                            <p class="event-small-meta small-text">1. Mumbai Indians created history by becoming the first...Read More</p>
                                        </div>
                                    </div>
                                    <div class="event-small-list clearfix">
                                        <div class="calendar-small">
                                            <span class="s-month">May</span>
                                            <span class="s-date">21</span>
                                        </div>
                                        <div class="event-small-details">
                                            <h5 class="event-small-title"><a href="event-single.html">Current Affairs - 20-05-2017</a></h5>
                                            <p class="event-small-meta small-text">Posner Center 4:30 PM to 6:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="event-small-list clearfix">
                                        <div class="calendar-small">
                                            <span class="s-month">May</span>
                                            <span class="s-date">20</span>
                                        </div>
                                        <div class="event-small-details">
                                            <h5 class="event-small-title"><a href="event-single.html">Current Affairs - 19-05-2017</a></h5>
                                            <p class="event-small-meta small-text">A70 Cyert Hall 12:00 PM to 1:00 PM</p>
                                        </div>
                                    </div>

                                </div> <!-- /.widget-inner -->

                            </div> <!-- /.widget-main -->


                            <div class="load-more-btn" style="margin-top: 8px; border-bottom: 1px solid;">
                                <a href="#" style="padding: 9px 20px;">View All News</a>
                            </div>


                        </div> <!-- /.col-md-6 -->




                        <!-- Show Latest Blog News -->
                        <div class="col-md-6">
                            <div class="widget-main">
                                <div class="widget-main-title">
                                    <h4 class="widget-title">Form Alerts</h4>
                                </div> <!-- /.widget-main-title -->
                                <div class="widget-inner">
                                    <div class="blog-list-post clearfix">
                                        <div class="blog-list-thumb">
                                            <a href="blog-single.html"><img src="http://demo.esmeth.com/universe/Blue/images/blog/blog-small-thumb1.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-list-details">
                                            <h5 class="blog-list-title"><a href="blog-single.html">SBI PO Notification out</a></h5>
                                            <p class="blog-list-meta small-text"><span><a href="#">State Bank of India announced the vaccencies for...Read More</span></p>
                                        </div>
                                    </div> <!-- /.blog-list-post -->
                                    <div class="blog-list-post clearfix">
                                        <div class="blog-list-thumb">
                                            <a href="blog-single.html"><img src="http://demo.esmeth.com/universe/Blue/images/blog/blog-small-thumb2.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-list-details">
                                            <h5 class="blog-list-title"><a href="blog-single.html">Visiting Artists: Giles Bailey</a></h5>
                                            <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                        </div>
                                    </div> <!-- /.blog-list-post -->
                                    <div class="blog-list-post clearfix">
                                        <div class="blog-list-thumb">
                                            <a href="blog-single.html"><img src="http://demo.esmeth.com/universe/Blue/images/blog/blog-small-thumb3.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-list-details">
                                            <h5 class="blog-list-title"><a href="http://demo.esmeth.com/universe/Blue/blog-single.html">Workshop: Theories of the Image</a></h5>
                                            <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                        </div>
                                    </div> <!-- /.blog-list-post -->
                                </div> <!-- /.widget-inner -->
                            </div> <!-- /.widget-main -->

                            <div class="load-more-btn" style="margin-top: 8px; border-bottom: 1px solid;">
                                <a href="#" style="padding: 9px 20px;">View All Form Alerts</a>
                            </div>

                        </div> <!-- /col-md-6 -->



                    </div> <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget-main">
                                <div class="widget-main-title">
                                    <h4 class="widget-title">Our Campus</h4>
                                </div> <!-- /.widget-main-title -->
                                <div class="widget-inner">
                                    <div class="our-campus clearfix">
                                        <ul>
                                            <li><img src="http://demo.esmeth.com/universe/Blue/images/campus/campus-logo1.jpg" alt=""></li>
                                            <li><img src="http://demo.esmeth.com/universe/Blue/images/campus/campus-logo2.jpg" alt=""></li>
                                            <li><img src="http://demo.esmeth.com/universe/Blue/images/campus/campus-logo3.jpg" alt=""></li>
                                            <li><img src="http://demo.esmeth.com/universe/Blue/images/campus/campus-logo4.jpg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- /.widget-main -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->

                </div> <!-- /.col-md-8 -->

                <!-- Here begin Sidebar -->
                <div class="col-md-4">

                    <div class="add-social-plugin-block" style="margin-top: 30px">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- kitabijhund_responsive_google_add -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-8429213110258511"
                             data-ad-slot="9694752789"
                             data-ad-format="auto"></ins>
                        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>




                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Our Gallery</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="gallery-small-thumbs clearfix">
                                <div class="thumb-small-gallery closed" style="opacity: 1;">
                                    <a class="fancybox" rel="gallery1" href="images/gallery/gallery1.jpg" title="Gallery Tittle One">
                                        <img src="http://demo.esmeth.com/universe/Blue/images/gallery/gallery-small-thumb1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="thumb-small-gallery closed" style="opacity: 1;">
                                    <a class="fancybox" rel="gallery1" href="images/gallery/gallery2.jpg" title="Gallery Tittle One">
                                        <img src="http://demo.esmeth.com/universe/Blue/images/gallery/gallery-small-thumb2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="thumb-small-gallery closed" style="opacity: 1;">
                                    <a class="fancybox" rel="gallery1" href="images/gallery/gallery3.jpg" title="Gallery Tittle One">
                                        <img src="http://demo.esmeth.com/universe/Blue/images/gallery/gallery-small-thumb3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="thumb-small-gallery closed" style="opacity: 1;">
                                    <a class="fancybox" rel="gallery1" href="images/gallery/gallery4.jpg" title="Gallery Tittle One">
                                        <img src="http://demo.esmeth.com/universe/Blue/images/gallery/gallery-small-thumb4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="thumb-small-gallery closed" style="opacity: 1;">
                                    <a class="fancybox" rel="gallery1" href="images/gallery/gallery5.jpg" title="Gallery Tittle One">
                                        <img src="http://demo.esmeth.com/universe/Blue/images/gallery/gallery-small-thumb5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="thumb-small-gallery closed" style="opacity: 1;">
                                    <a class="fancybox" rel="gallery1" href="images/gallery/gallery6.jpg" title="Gallery Tittle One">
                                        <img src="http://demo.esmeth.com/universe/Blue/images/gallery/gallery-small-thumb6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="thumb-small-gallery closed" style="opacity: 1;">
                                    <a class="fancybox" rel="gallery1" href="images/gallery/gallery7.jpg" title="Gallery Tittle One">
                                        <img src="http://demo.esmeth.com/universe/Blue/images/gallery/gallery-small-thumb7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="thumb-small-gallery closed" style="opacity: 1;">
                                    <a class="fancybox" rel="gallery1" href="images/gallery/gallery8.jpg" title="Gallery Tittle One">
                                        <img src="http://demo.esmeth.com/universe/Blue/images/gallery/gallery-small-thumb8.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!-- /.galler-small-thumbs -->
                        </div> <!-- /.widget-inner -->
                    </div> <!-- /.widget-main --> 

                    <div class="add-social-plugin-block" style="margin-top: 30px">
                        <div class="fb-page" data-href="https://www.facebook.com/kitabijhund/" data-tabs="timeline" data-width="360" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kitabijhund/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kitabijhund/">kitabijhund.com</a></blockquote></div>
                    </div> 
                </div>
            </div>
        </div> 
        <?php echo sanitize_output($this->layout->element('element/_footer', $this->_ci_cached_vars, true)); ?> 
    </body>
</html>
