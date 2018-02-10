<div class="widget-main">
    <div class="widget-main-title">
        <h4 class="widget-title">Categories</h4>
    </div> <!-- /.widget-main-title -->
    <div class="widget-inner">
        <div class="col_1_of_3 span_1_of_3">
            <ul class="dishes_list">
                <?php if (isset($categories) && $categories->num_rows() > 0) { ?>
                    <?php foreach ($categories->result() as $cat) { ?>
                        <li style="padding: 8px 0; border-top: none"><a href="<?php echo site_url('form_alerts?category=' . $cat->slug); ?>"><?php echo $cat->name; ?></a></li>
                    <?php } ?>
                <?php } ?>
                <div class="clear"> </div>
            </ul> 
        </div>
    </div> <!-- /.widget-inner -->
</div> <!-- /.widget-main -->	