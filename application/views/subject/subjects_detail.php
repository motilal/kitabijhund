<div class="container">
    <div class="row">  
        <div class="col-md-4">
            <?php echo sanitize_output($this->layout->element('subject/_sidebar', $this->_ci_cached_vars, true)); ?> 
        </div> <!-- /.col-md-4 --> 

        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <?php //include'includes/top-add.php'; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="event-container clearfix">

                        <div class="right-event-content">
                            <h2 class="event-title"><?php echo $pageDetail->title; ?></h2>  
                            <div class="detail-content">
                                <?php echo $pageDetail->content; ?><br>
                                <?php echo $pageDetail->question_answer; ?>
                            </div>  
                            <div class="comments-div" style="width: 100%;float: left;">
                                <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-numposts="5"></div>
                            </div>
                        </div> <!-- /.right-event-content -->
                    </div> <!-- /.event-container -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 --> 



    </div> <!-- /.row -->
</div> 