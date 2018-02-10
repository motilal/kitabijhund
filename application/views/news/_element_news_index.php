<div class="result_data_item">
    <?php if ($news->num_rows() > 0) { ?>
        <?php foreach ($news->result() as $row) { ?>
            <div class="col-md-4">
                <div class="grid-event-item">
                    <div class="grid-event-header">
                         
                        <span class="event-date small-text"><i class="fa fa-calendar-o"></i><?php echo date('F d, Y', strtotime($row->start_date)); ?></span>
                    </div>
                    <div class="box-content-inner">
                        <h5 class="event-title"><a href="<?php echo site_url("news/$row->slug"); ?>"><?php echo strlen($row->title) > 45 ? substr($row->title, 0, 45) . '...' : $row->title; ?></a></h5>
                        <p><?php echo strlen($row->short_description) > 150 ? substr($row->short_description, 0, 150) . '...' : $row->short_description; ?> <a href="<?php echo site_url("news/$row->slug"); ?>">View Details</a></p>
                    </div>
                </div> <!-- /.grid-event-item -->
            </div> <!-- /.col-md-6 -->
        <?php } ?>
    <?php } ?> 
</div>