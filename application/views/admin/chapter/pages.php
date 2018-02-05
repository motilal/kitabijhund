<div class="row">
    <div class="col-xs-12"> 
        <div class="box">
            <div class="box-header">
                <i class="fa fa-file-text-o"></i> 
                <h3 class="box-title"><?php echo isset($pageHeading) ? $pageHeading : '&nbsp;'; ?></h3>
                <?php if (is_allow_action('chapter-add')) { ?>
                    <div class="box-tools pull-right">
                        <div class="btn-group" data-toggle="btn-toggle">
                            <a href="<?php echo site_url('admin/chapters/manage_pages/' . $chapter_id); ?>" class="btn btn-primary btn-sm add_new_item"><i class="fa fa-plus"></i> Add New Page </a>
                        </div>
                    </div>
                <?php } ?>
            </div>     
            <!-- /.box-header -->
            <div class="box-body"> 
                <table id="dataTables-grid" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr> 
                            <td width="10%">Sr.</td>
                            <th>Title</th>  
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows() > 0) { ?>
                            <?php foreach ($result->result() as $key => $row): ?>
                                <tr>  
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $row->title; ?></td> 
                                    <td class="action-link">  
                                        <?php echo $this->layout->element('admin/element/_module_action', array('id' => $row->id, 'editUrl' => "admin/chapters/manage_pages/$row->chapter_id/$row->id", 'editPermissionKey' => 'chapter-edit', 'deleteUrl' => "admin/chapters/delete_pages/$row->id", 'deletePermissionKey' => 'chapter-delete'), true); ?>
                                    </td> 
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
    /*
     params 
     1 sorting remove from colomns
     2 default sort order of colomn set default []
     3 default paging
     4 show sr. number or not
     */
    var datatbl = datatable_init([0, 2], [[1, 'asc']], DEFAULT_PAGING, 1);
</script>