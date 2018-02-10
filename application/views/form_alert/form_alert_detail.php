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
                            <h2 class="event-title"><?php echo $form_alert_detail->title; ?></h2> 
                            <span class="event-time"><?php echo date('l d F Y', strtotime($form_alert_detail->created)); ?></span>
                            <div class="detail-content">
                                <?php echo $form_alert_detail->description; ?>
                            </div>  
                        </div> <!-- /.right-event-content -->
                    </div> <!-- /.event-container -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 --> 

    </div> <!-- /.row -->
</div>