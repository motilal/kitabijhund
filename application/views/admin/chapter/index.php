<div class="row">
    <div class="col-xs-12"> 
        <div class="box">
            <div class="box-header">
                <i class="fa fa-globe"></i> 
                <h3 class="box-title"><?php echo isset($pageHeading) ? $pageHeading : '&nbsp;'; ?></h3>
                <div class="box-tools pull-right">
                    <div class="btn-group" data-toggle="btn-toggle">
                        <?php if (is_allow_action('chapter-add')) { ?>
                            <a href="<?php echo site_url('admin/chapters/manage'); ?>" class="btn btn-primary btn-sm add_new_item"><i class="fa fa-plus"></i> Add New Chapter </a>
                        <?php } ?> 
                    </div>
                </div>
            </div>     
            <!-- /.box-header -->
            <div class="box-body"> 
                <table id="dataTables-grid" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <td>Sr.</td>
                            <th>Chapter</th>  
                            <th>Subjects</th> 
                            <th>Total Pages</th> 
                            <th>Created</th> 
                            <th>Status</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($result) && $result != "") { ?>
                            <?php foreach ($result as $key => $row): ?>
                                <tr>
                                    <td><?php echo $row[0]; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[2]; ?></td> 
                                    <td><?php echo $row[3]; ?></td>
                                    <td><?php echo $row[4]; ?></td>  
                                    <td><?php echo $row[5]; ?></td>  
                                    <td><?php echo $row[6]; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php } ?> 
                    </tbody> 
                </table>
            </div>
            <!-- /.box-body --> 
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>  

<script>
    var current_url = '<?php echo current_url(); ?>';
    /*
     params 
     1 sorting remove from colomns
     2 default sort order of colomn set default []
     3 default paging 
     */
    var datatbl = dynamic_datatable_init(current_url, [0, 2, 3, 6], [], DEFAULT_PAGING);
</script>