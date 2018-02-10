<div class="container">
    <div class="row">  

        <!-- Here begin Main Content -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <?php //include'includes/top-add.php'; ?>
                </div>
            </div>
 
            <div class="row" id="result_data">
                <?php echo sanitize_output($this->layout->element('news/_element_news_index', $this->_ci_cached_vars, true)); ?>                 
            </div> <!-- /.row -->

            <?php if ($pagination != "") { ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn" id="pagination_div">
                            <?php echo $pagination; ?>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            <?php } ?>

        </div> <!-- /.col-md-8 -->

    </div> <!-- /.row -->
</div>
<script type="text/javascript">
    $(function () {
        $(document).on('click', '#pagination_div a', function (Event) {
            $(this).text('Loading..');
            Event.preventDefault();
            $("#result_data").loadILEle({
                link: this.href,
                loadType: 'page',
                method: 'get',
                blockUi: "#page",
                type: "page"
            }, function (data) {
                $(this).append(data.html);
                $("#pagination_div").html(data.pagination);
            });
        });
    });
    window.addEventListener('popstate', function (event) {
        window.location.reload();
    });
</script>
