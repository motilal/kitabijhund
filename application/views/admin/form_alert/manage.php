<div class="row">
    <div class="col-xs-12"> 
        <div class="box box-info"> 
            <!-- /.box-header -->
            <div class="box-body">

                <div class="row">
                    <?php echo form_open_multipart(null, array("id" => "manage-alert-form", "method" => "post")); ?>
                    <div class="col-lg-7">
                        <div class="form-group <?php echo form_error('title') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="title">Title <em>*</em></label>
                            <?php echo form_input("title", set_value("title", isset($data->title) ? $data->title : "", false), "id='title' class='form-control'"); ?>
                            <?php echo form_error('title'); ?>
                        </div>
                    </div> 


                    <div class="col-lg-7">
                        <div class="form-group <?php echo form_error('category') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="category">Category <em>*</em></label> 
                            <?php echo form_dropdown('category', $categories_options, set_value("category", isset($data->category) ? $data->category : "", false), 'class="form-control" id="category" style="width:100%;"'); ?> 
                            <?php echo form_error('category'); ?>
                        </div>
                    </div> 

                    <div class="col-lg-7">
                        <div class="form-group <?php echo form_error('short_description') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="short_description">Short Description <em>*</em></label>
                            <?php echo form_textarea("short_description", set_value("short_description", isset($data->short_description) ? $data->short_description : ""), "id='short_description' class='form-control' style='height:100px;'"); ?>
                            <?php echo form_error('short_description'); ?>
                        </div>
                        <div class="form-group <?php echo form_error('description') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="description">Full Description <em>*</em></label>
                            <?php echo form_textarea("description", set_value("description", isset($data->description) ? $data->description : "", false), "id='description' class='form-control editor'"); ?>
                            <?php echo form_error('description'); ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group <?php echo form_error('meta_keywords') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="meta_keywords">Meta keyword</label>
                            <?php echo form_textarea("meta_keywords", set_value("meta_keywords", isset($data->meta_keywords) ? $data->meta_keywords : ""), "id='meta_keywords' class='form-control' style='height:100px;'"); ?>
                            <?php echo form_error('meta_keywords'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('meta_description') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="meta_description">Meta description</label>
                            <?php echo form_textarea("meta_description", set_value("meta_description", isset($data->meta_description) ? $data->meta_description : ""), "id='meta_description' class='form-control' style='height:100px;'"); ?>
                            <?php echo form_error('meta_description'); ?>
                        </div>   
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-3">
                        <?php
                        if (isset($data->image) && $data->image != "") {
                            echo img(getFormAlertImage($data->image, array('width' => 100, 'height' => 100)), FALSE, array('width' => 100));
                        }
                        ?>
                        <div class="form-group">
                            <label class="control-label" for="image">Image</label>
                            <?php echo form_upload("image", '', "id='image'"); ?> 
                        </div> 
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-7">
                        <?php echo form_hidden('id', set_value('id', isset($data->id) ? $data->id : "")); ?>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo site_url("admin/form_alerts"); ?>'">Cancel</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->  
<script type="text/javascript">
    $("#category").select2();
</script>