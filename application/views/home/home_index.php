<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php echo sanitize_output($this->layout->element('element/_home_slider', $this->_ci_cached_vars, true)); ?>
        </div> 

        <div class="col-md-4">
            <div class="widget-main">
								<div class="widget-main-title">
									<h4 class="widget-title">Courses</h4>
								</div> <!-- /.widget-main-title -->
								<div class="widget-inner">
									<div class="blog-list-post clearfix">
										<div class="blog-list-thumb">
											<a href="blog-single.html"><img src="http://demo.esmeth.com/universe/Blue/images/blog/blog-small-thumb1.jpg" alt=""></a>
										</div>
										<div class="blog-list-details">
											<h5 class="blog-list-title"><a href="blog-single.html">SSC CGL</a></h5>
											<p class="blog-list-meta small-text"><span><a href="#">SSC CGL is conducted...Read More</span></p>
										</div>
									</div> <!-- /.blog-list-post -->
									<div class="blog-list-post clearfix">
										<div class="blog-list-thumb">
											<a href="blog-single.html"><img src="http://demo.esmeth.com/universe/Blue/images/blog/blog-small-thumb2.jpg" alt=""></a>
										</div>
										<div class="blog-list-details">
											<h5 class="blog-list-title"><a href="blog-single.html">Bank Po</a></h5>
											<p class="blog-list-meta small-text"><span><a href="#">For bank aspirants this.....Read More</a></span></p>
										</div>
									</div> <!-- /.blog-list-post -->
									<div class="blog-list-post clearfix">
										<div class="blog-list-thumb">
											<a href="blog-single.html"><img src="http://demo.esmeth.com/universe/Blue/images/blog/blog-small-thumb3.jpg" alt=""></a>
										</div>
										<div class="blog-list-details">
											<h5 class="blog-list-title"><a href="http://demo.esmeth.com/universe/Blue/blog-single.html">Reet</a></h5>
											<p class="blog-list-meta small-text"><span><a href="#">This exam provides.....Read More</a></span></p>
										</div>
									</div> <!-- /.blog-list-post -->
								</div> <!-- /.widget-inner -->
							</div> <!-- /.widget-main -->
							
								
							<div class="load-more-btn" style="margin-top: 8px; border-bottom: 1px solid;">
								<a href="#" style="padding: 9px 20px;">View All Courses</a>
							</div>
        </div> 
    </div>
</div>

<div class="container">
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <?php if ($latest_news->num_rows() > 0) { ?>
                        <?php $last_news = $latest_news->row(); ?>
                        <div class="widget-item">
                            <h2 class="welcome-text"><?php echo $last_news->title; ?></h2> 
                            <p>
                                <?php echo nl2br($last_news->short_description); ?>
                            </p>
                            <div class="view-details"><a href="<?php echo site_url("news/$last_news->slug"); ?>" class="lightBtn">Read More</a></div>

                        </div> <!-- /.widget-item -->
                    <?php } ?>
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
                            <?php if ($latest_news->num_rows() > 0) { ?>
                                <?php foreach ($latest_news->result() as $news) { ?>
                                    <div class="event-small-list clearfix">
                                        <div class="calendar-small">
                                            <span class="s-month"><?php echo date('M', strtotime($news->start_date)); ?></span>
                                            <span class="s-date"><?php echo date('d', strtotime($news->created)); ?></span>
                                        </div>
                                        <div class="event-small-details">
                                            <h5 class="event-small-title"><a href="<?php echo site_url("news/$news->slug"); ?>"><?php echo $news->title; ?></a></h5>
                                            <p class="event-small-meta small-text"><?php echo strlen($news->short_description) > 60 ? substr($news->short_description, 0, 60) . '...' : $news->short_description; ?> <a href="<?php echo site_url("news/$news->slug"); ?>">Read More</a></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?> 
                        </div> <!-- /.widget-inner -->

                    </div> <!-- /.widget-main -->

                    <div class="load-more-btn" style="margin-top: 8px; border-bottom: 1px solid;">
                        <a href="<?php echo site_url("news"); ?>" style="padding: 9px 20px;">View All News</a>
                    </div> 

                </div> <!-- /.col-md-6 --> 

                <!-- Show Latest Blog News -->
                <div class="col-md-6">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Form Alerts</h4>
                        </div> <!-- /.widget-main-title -->
                        <div class="widget-inner">
                            <?php if ($latest_form_alerts->num_rows() > 0) { ?>
                                <?php foreach ($latest_form_alerts->result() as $form_alerts) { ?>
                                    <div class="blog-list-post clearfix">
                                        <div class="blog-list-thumb">
                                            <a href="<?php echo site_url("form_alerts/$news->slug"); ?>"><img src="<?php echo ($form_alerts->image != "") ? getFormAlertImage($form_alerts->image, array('width' => 65, 'height' => 65)) : base_url('asset/front/images/no_image_65.jpg'); ?>" alt=""></a>
                                        </div>
                                        <div class="blog-list-details">
                                            <h5 class="blog-list-title"><a href="<?php echo site_url("form_alerts/$form_alerts->slug"); ?>"><?php echo $form_alerts->title; ?></a></h5>
                                            <p class="blog-list-meta small-text"><span><?php echo strlen($form_alerts->short_description) > 65 ? substr($form_alerts->short_description, 0, 65) . '...' : $form_alerts->short_description; ?> <a href="<?php echo site_url("form_alerts/$news->slug"); ?>">Read More</a></span></p>
                                        </div>
                                    </div> 
                                <?php } ?>
                            <?php } ?>  
                        </div> <!-- /.widget-inner -->
                    </div> <!-- /.widget-main -->

                    <div class="load-more-btn" style="margin-top: 8px; border-bottom: 1px solid;">
                        <a href="<?php echo site_url("form_alerts"); ?>" style="padding: 9px 20px;">View All Form Alerts</a>
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

        </div> 
        <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->
        <div class="col-md-4">
            <?php echo sanitize_output($this->layout->element('element/_home_sidebar', $this->_ci_cached_vars, true)); ?>
        </div>
    </div>
</div> 