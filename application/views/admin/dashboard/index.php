<!-- Info boxes -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo $total_subjects; ?></h3> 

                <p>Subjects</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="<?php echo site_url('admin/subjects'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo $total_chapters; ?></h3>

                <p>Chapters</p>
            </div>
            <div class="icon">
                <i class="fa fa-file-text-o"></i>
            </div>
            <a href="<?php echo site_url('admin/chapters'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo $total_form_alerts; ?></h3>

                <p>Form Alerts</p>
            </div>
            <div class="icon">
                <i class="fa fa-bell"></i>
            </div>
            <a href="<?php echo site_url('admin/form_alerts'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->


<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <div class="col-md-8"> 
        <!-- /.row -->

        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Latest Form Alerts</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($latest_form_alert->num_rows() > 0) { ?>
                                <?php foreach ($latest_form_alert->result() as $key => $row) { ?>
                                    <tr>
                                        <td><a href="<?php echo site_url("form_alerts/$row->slug"); ?>" target="_blank"><?php echo $row->title; ?></a></td>
                                        <td><?php echo $row->category_name; ?></td>
                                        <td> 
                                            <?php if ($row->status == '1') { ?>
                                                <span class="label label-success">Active</span>
                                            <?php } else { ?>
                                                <span class="label label-danger">Inactive</span>
                                            <?php } ?>
                                        </td> 
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <?php if (is_allow_action('form_alert-add')) { ?>
                    <a href="<?php echo site_url('admin/form_alerts/manage'); ?>" class="btn btn-sm btn-info btn-flat pull-left">Add New Alerts</a>
                <?php } ?>
                <?php if (is_allow_action('form_alert-index')) { ?>
                    <a href="<?php echo site_url('admin/form_alerts'); ?>" class="btn btn-sm btn-default btn-flat pull-right">View All Alerts</a>
                <?php } ?>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

    <div class="col-md-4"> 


        <!-- /.box -->

        <!-- PRODUCT LIST -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Recently Added News</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <ul class="products-list product-list-in-box">
                    <?php if ($latest_news->num_rows() > 0) { ?>
                        <?php foreach ($latest_news->result() as $key => $row) { ?>
                            <?php
                            $img_path = "asset/admin/images/no_image_100.jpg";
                            if ($row->image != "") {
                                $getNewsImg = getNewsImage($row->image, array('width' => 100, 'height' => 100));
                                if ($getNewsImg) {
                                    $img_path = $getNewsImg;
                                }
                            }
                            ?>
                            <li class="item">
                                <div class="product-img">
                                    <?php echo img($img_path, FALSE, array('width' => 100)); ?>
                                </div>
                                <div class="product-info">
                                    <a href="<?php echo site_url("news/$row->slug"); ?>" target="_blank" class="product-title"><?php echo $row->title; ?>
                                        <?php if ($row->status == '1') { ?>
                                            <span class="label label-success pull-right">Active</span>
                                        <?php } else { ?>
                                            <span class="label label-danger pull-right">Inactive</span>
                                        <?php } ?>
                                    </a>
                                    <span class="product-description">
                                        <?php echo strlen($row->short_description) > 100 ? substr($row->short_description, 0, 100) . '...' : $row->short_description; ?>
                                    </span>
                                </div>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.box-body -->
            <?php if (is_allow_action('news-index')) { ?>
                <div class="box-footer text-center">
                    <a href="<?php echo site_url('admin/news'); ?>" class="uppercase">View All News</a>
                </div>
            <?php } ?>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->