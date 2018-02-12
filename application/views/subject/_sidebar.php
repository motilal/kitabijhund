<div class="widget-main">
    <div class="widget-main-title">
        <h4 class="widget-title">Chapters</h4>
    </div> <!-- /.widget-main-title -->
    <div class="widget-inner">
        <div class="col_1_of_3 span_1_of_3">
            <ul class="dishes_list">
                <?php if (!empty($chapters)) { ?>
                    <?php foreach ($chapters as $row) { ?>
                        <li style="padding: 8px 0; border-top: none"><a href="<?php echo site_url('form_alerts?category=' . $row->slug); ?>"><?php echo $row->name; ?></a></li>
                    <?php } ?>
                <?php } ?>
                <div class="clear"> </div>
            </ul> 
        </div>
    </div> <!-- /.widget-inner -->
</div> <!-- /.widget-main -->	