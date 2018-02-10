<div class="container">
    <div class="row"> 
        

        <!-- Here begin Main Content -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <?php //include'includes/top-add.php'; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="event-container clearfix">

                        <div class="right-event-content">
                            <h2 class="event-title"><?php echo $news_detail->title; ?></h2> 
                            <span class="event-time"><?php echo date('l d F Y', strtotime($news_detail->start_date)); ?></span>
                            <div class="detail-content">
                                <?php echo $news_detail->description; ?>
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