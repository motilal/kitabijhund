<div class="result_data_item">
    <?php if ($form_alerts->num_rows() > 0) { ?>
        <?php foreach ($form_alerts->result() as $row) { ?>
            <div class="col-md-6">
                <div class="grid-event-item">
                    <div class="grid-event-header">
                        <span class="event-place small-text"><i class="fa fa-globe"></i><?php echo $row->category_name; ?></span>
                        <span class="event-date small-text"><i class="fa fa-calendar-o"></i><?php echo date('F d, Y', strtotime($row->created)); ?></span>
                    </div>
                    <div class="box-content-inner">
                        <h5 class="event-title"><a href="<?php echo site_url("form_alerts/$row->slug"); ?>"><?php echo $row->title; ?></a></h5>
                        <p><?php echo strlen($row->short_description) > 150 ? substr($row->short_description, 0, 150) . '...' : $row->short_description; ?> <a href="<?php echo site_url("form_alerts/$row->slug"); ?>">View Details</a></p>
                    </div>
                </div> <!-- /.grid-event-item -->
            </div> <!-- /.col-md-6 -->
        <?php } ?>
    <?php } ?> 
</div>