<div class="row">
    <div class="col-xs-12"> 
        <div class="box box-info"> 
            <!-- /.box-header -->
            <div class="box-body">

                <div class="row">
                    <?php echo form_open(null, array("id" => "manage-form", "method" => "post")); ?>

                    <div class="col-lg-4">
                        <div class="form-group <?php echo form_error('name') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="title">Name <em>*</em></label>
                            <?php echo form_input("name", set_value("name", isset($data->name) ? $data->name : "", false), "id='name' class='form-control'"); ?>
                            <?php echo form_error('name'); ?>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-lg-4">
                        <div class="form-group <?php echo form_error('subject[]') != "" ? 'has-error' : ''; ?>">
                            <label class="control-label" for="subject">Subject(s)</label> 
                            <?php echo form_dropdown('subject[]', $subject_options, set_value("subject[]", isset($subjects) && $subjects != "" ? $subjects : "", false), 'class="form-control" multiple="multiple" id="subject" style="width:100%;"'); ?> 
                            <?php echo form_error('subject[]'); ?>
                        </div>
                    </div>   

                    <div class="col-lg-12">
                        <?php echo form_hidden('id', set_value('id', isset($data->id) ? $data->id : "")); ?>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo site_url("admin/chapters"); ?>'">Cancel</button>
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
    $("#subject").select2({
        tags: false
    });
</script>