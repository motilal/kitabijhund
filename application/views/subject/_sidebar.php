<div class="widget-main">
    <div class="widget-main-title">
        <h4 class="widget-title">Chapters</h4>
    </div> <!-- /.widget-main-title -->
    <div class="widget-inner">
        <div class="col_1_of_3 span_1_of_3">
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
        </div>
    </div> <!-- /.widget-inner -->
</div> <!-- /.widget-main -->	