<div class="row">
    <div class="col-xs-12"> 
        <div class="box box-info"> 
            <!-- /.box-header -->
            <div class="box-body">

                <div class="row">
                    <?php echo form_open(null, array("id" => "manage-page-form", "method" => "post")); ?>
                    <div class="col-lg-7">
                        <div class="form-group <?php echo form_error('title') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="title">Page Title <em>*</em></label>
                            <?php echo form_input("title", set_value("title", isset($data->title) ? $data->title : "", false), "id='title' class='form-control'"); ?>
                            <?php echo form_error('title'); ?>
                        </div>
                    </div> 

                    <div class="col-lg-10">
                        <div class="form-group <?php echo form_error('content') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="content">Content <em>*</em></label>
                            <?php echo form_textarea("content", set_value("content", isset($data->content) ? $data->content : "", false), "id='content' class='form-control editor'"); ?>
                            <?php echo form_error('content'); ?>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="form-group <?php echo form_error('qa') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="qa">Question Answer</label>
                            <?php echo form_textarea("qa", set_value("qa", isset($data->question_answer) ? $data->question_answer : "", false), "id='qa' class='form-control editor'"); ?>
                            <?php echo form_error('qa'); ?>
                        </div>
                    </div>                    

                    <div class="col-lg-7"> 
                        <?php echo form_hidden('id', set_value('id', isset($data->id) ? $data->id : "")); ?>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo site_url("admin/chapters/pages/5"); ?>'">Cancel</button>
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