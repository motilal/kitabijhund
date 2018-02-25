<div class="container">
    <div class="row"> 
        <div class="col-md-8"> 
            <div class="row">
                <div class="col-md-12">
                    <div class="widget-main"> 
                        <div class="widget-inner"> 
                            <h3 class="archive-title">Chapters</h3>

                            <ul class="dishes_list menu-chapter">
                                <?php if (!empty($chapters)) { ?>
                                    <?php foreach ($chapters as $key => $row) { ?>
                                        <li class="menu-item-chapter">	

                                            <?php if (count($row['pages']) > 1) { ?>
                                                <a data-toggle="collapse" href="#collapseChapter<?php echo $key; ?>" aria-expanded="false" aria-controls="collapseExample">
                                                    <?php echo $row['name']; ?>  
                                                    <span class="glyphicon glyphicon-plus menu-glyphicon-chapter"></span> 
                                                </a> 

                                                <ul class="sub-menu-chapter collapse" id="collapseChapter<?php echo $key; ?>">	
                                                    <?php foreach ($row['pages'] as $page) { ?> 
                                                        <li class="sub-menu-item-chapter">
                                                            <a href="<?php echo site_url("chapter/$subject_slug/{$row['slug']}/{$page['slug']}"); ?>"><?php echo $page['title']; ?></a>
                                                        </li>
                                                    <?php } ?> 
                                                </ul>
                                                <div class="clear"> </div>
                                            <?php } else if (count($row['pages']) == 1) { ?>
                                                <a href="<?php echo site_url("chapter/$subject_slug/{$row['slug']}"); ?>"><?php echo $row['name']; ?></a>
                                            <?php } ?> 
                                        </li> 
                                    <?php } ?>
                                <?php } ?>  
                            </ul> 

                        </div> <!-- /.widget-inner -->
                    </div> <!-- /.widget-main -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row --> 
        </div>


        <!-- Here begin Sidebar -->
        <div class="col-md-4">
            <?php //echo sanitize_output($this->layout->element('subject/_sidebar', $this->_ci_cached_vars, true));    ?> 
        </div> <!-- /.col-md-4 --> 
    </div> <!-- /.row -->
</div> 
<style>
    .archive-title {
        font-size: 18px;
        font-weight: 700;
        margin: 0 0 15px 0;
    } 
    ul.sub-menu-chapter{
        padding-left:20px;
        list-style: none;
    }
    .menu-item-chapter{
        border-top: none;
    }
    .sub-menu-item-chapter{
        padding: 2px 0;
    }
    .menu-glyphicon-chapter{
        float: right; margin: 2px 10px;
    }
</style>
<script>
</script>