<div class="container">
    <div class="row">




        <div class="col-md-8">

            <div class="row">
                <div class="col-md-12">
                    <div class="widget-main"> 
                        <div class="widget-inner"> 
                            <h3 class="archive-title">Chapters</h3>

                            <ul class="dishes_list menu-chapter">

                                <li class="menu-item-chapter" testli="sub-menu1">	

                                    <a data-toggle="collapse" href="#collapseChapter1" aria-expanded="false" aria-controls="collapseExample">
                                        Short Tricks <span class="glyphicon glyphicon-plus menu-glyphicon-chapter"></span>
                                    </a> 

                                    <ul class="sub-menu-chapter collapse" id="collapseChapter1">	
                                        <li class="sub-menu-item-chapter">
                                            <a id="introduction-page1" href="/topic-detail/Short-Tricks/Page-1">Page 1</a>
                                        </li>

                                        <li class="sub-menu-item-chapter">
                                            <a id="introduction-page2" href="/topic-detail/Short-Tricks/Page-2">Page 2 </a>
                                        </li>

                                        <li class="sub-menu-item-chapter">
                                            <a  id="introduction-page3" href="/topic-detail/Short-Tricks/Page-3">Page 3</a>
                                        </li>
                                    </ul>
                                    <div class="clear"> </div>
                                </li> 

                            </ul>


                            <!--                            <ul class="">
                            <?php if (!empty($chapters)) { ?>
                                <?php foreach ($chapters as $row) { ?>
                                                                                                                                                                                                                    <li style="padding: 8px 0; border-top: none"><a href="<?php echo site_url('form_alerts?category=' . $row->slug); ?>"><?php echo $row->name; ?></a></li>
                                <?php } ?>
                            <?php } ?>
                                                            <div class="clear"> </div>
                                                        </ul> -->
                        </div> <!-- /.widget-inner -->
                    </div> <!-- /.widget-main -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row --> 
        </div>


        <!-- Here begin Sidebar -->
        <div class="col-md-4">
            <?php echo sanitize_output($this->layout->element('subject/_sidebar', $this->_ci_cached_vars, true)); ?> 
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