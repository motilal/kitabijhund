<div class="row">
    <div class="col-xs-12"> 
        <div class="box">
            <div class="box-header">
                <i class="fa fa-bug"></i> 
                <h3 class="box-title"><?php echo isset($pageHeading) ? $pageHeading : '&nbsp;'; ?></h3> 
            </div>     
            <!-- /.box-header -->
            <div class="box-body">    
                <?php if (!empty($logFiles)) { ?>
                    <?php foreach ($logFiles as $file) { ?>
                        <?php $encfile = base64_encode($file); ?>
                        <div class="col-md-3 folder-file-main">
                            <div class="folder-file-view">
                                <i class="fa fa-file-text-o"></i> 
                                <a href='<?php echo site_url('admin/logs/detail/?file=' . $encfile); ?>'><?php echo $file; ?></a> 
                                <button type="button" class="close" data-file='<?php echo $file; ?>' data-href='<?php echo site_url('admin/logs/delete'); ?>' data-dismiss="alert" aria-hidden="true">×</button>
                            </div>
                        </div>
                    <?php } ?>  
                <?php } else { ?>
                    <p>No record found.</p>
                <?php } ?>
            </div>
            <!-- /.box-body --> 
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>  

<script>
    $('.folder-file-main .close').on('click', function (e) {
        e.preventDefault();
        var _this = $(this);
        if (confirm("Are you sure to wants delete this?")) {
            $.ajax({
                url: _this.data('href'),
                type: "POST",
                dataType: "json",
                data: {file: _this.data('file')},
                success: function (response) {
                    if (response.success) {
                        _this.find('.folder-file-main').remove();
                        showMessage('success', {message: response.success});
                    } else if (response.error) {
                        showMessage('error', {message: response.error});
                    }
                },
                error: function (jqXHR, exception) {
                    showMessage('error', {message: 'Uncaught Error.\n' + jqXHR.responseText});
                }
            });
        }
    });
</script>