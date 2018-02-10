<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link href="<?php echo base_url("assets/{$this->config->item('site_name')}/js/jquery-ui-1.11.2.custom/jquery-ui.min.css") ?>" rel="stylesheet"  type="text/css" property='stylesheet' />
<script src="<?= base_url("assets/{$this->config->item('site_name')}/js/jquery-ui-1.11.2.custom/jquery-ui.min.js") ?>"></script>
<script src="<?= base_url("assets/{$this->config->item('site_name')}/js/jquery.inputmask.bundle.min.js") ?>"></script>
<script src="<?= base_url("assets/{$this->config->item('site_name')}/js/masonry.pkgd.min.js") ?>"></script>

<script type="text/javascript">
    function getParameterByName(name, ls) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(ls === null ? location.search : ls);
        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
    $(function () {
        $("#CategoryMenu > li > a").on("click", function (Event) {
            $("#CategoryMenu > li > a").removeClass('active');
            $(this).addClass('active');
            $("#SearchByCat").html($(this).text() + '<span class="caret caret-icon"></span>');
            $('#category').val($(this).attr('data-sort'));
            $('#global-category').val($(this).attr('data-sort'));            
            $("form#searchfrm").submit();
            Event.preventDefault();
        });
        var defaultCatSelected = $('#CategoryMenu > li > [data-selected="true"]').text();
        if (defaultCatSelected != "") {
            $("#SearchByCat").html(defaultCatSelected + '<span class="caret caret-icon"></span>');
        } 
        
        $("#SortByDropUl > li > a").on("click", function (Event) {
            $("#SortByDropUl > li > a").removeClass('active');
            $(this).addClass('active');
            $("#SortByDrop").html($(this).text() + '<span class="caret caret-icon"></span>');
            $('#sortByInput').val($(this).attr('data-sort'));
            $("form#searchfrm").submit();
            Event.preventDefault();
        });
        var defaultCatSelected = $('#SortByDropUl > li > [data-selected="true"]').text();
        if (defaultCatSelected != "") {
            $("#SortByDropUl").html(defaultCatSelected + '<span class="caret caret-icon"></span>');
        }
        /*$("img.lazy").lazyload({effect: "fadeIn", threshold: 100, skip_invisible: false});*/

        $("#start_date, #end_date").datepicker({
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: 'dd/mm/yy',
            onSelect: function (dateText) {
                $("form#searchfrm").submit();
            }
        });
        $("#start_date").inputmask('dd/mm/yyyy', {
            "oncomplete": function () {
                $("form#searchfrm").submit();
            },
            "oncleared": function () {
                $("form#searchfrm").submit();
            }
        });
        $("#end_date").inputmask('dd/mm/yyyy', {
            "oncomplete": function () {
                $("form#searchfrm").submit();
            },
            "oncleared": function () {
                $("form#searchfrm").submit();
            }
        });


        $('a.calendar-icon').on('click', function (Event) {
            Event.preventDefault();
            var datepicker_input = $(this).attr('data-tab');
            $(datepicker_input).datepicker('show');
        });

<?php if (($this->input->get("view") == "scaffold-view")): ?>
            $('#grid').masonry({
                "itemSelector": "#grid",
                "columnWidth": '.news-item',
                "itemSelector" : '.news-item'
            });
<?php endif; ?>

        $(document).on('click', 'a.more-articles', function (Event) {
            $(this).text('Loading..');
            Event.preventDefault();
            $("#grid").loadILEle({
                link: this.href,
                loadType: 'page',
                method: 'get',
                blockUi: "#page",
                type: "page"
            }, function (data) {
                if (getParameterByName('view', null) == '' || getParameterByName('view', null) == 'scaffold-view') {
                    $.each($(data.html).get(), function (i, v) {
                        $('#grid').delay(1000).append(v).masonry('appended', v, true);
                    });
                } else {
                    $(this).append(data.html);
                }
                $("#pagination_div").html(data.pagination);
            });


        });

        $("form#searchfrm").on("submit", function (event) {
            event.preventDefault();
            $("#grid").loadILEle({
                link: <?php echo json_encode(site_url('pressrelease/index')) ?>,
                query: $(event.target).serialize(),
                method: 'get',
                blockUi: "#page",
                type: "search"
            }, function (data) {
                $(this).html(data.html);
                $("#pagination_div").html(data.pagination);
                if ($("input[name=view]").val() == "scaffold-view") {
                    $('#grid').masonry('destroy');
                    $('#grid').masonry({
                        "itemSelector": "#grid",
                        "columnWidth": '.news-item',
                        "itemSelector" : '.news-item'
                    });
                } else {
                    $('#grid').masonry('destroy');
                }
            });
        });

        $('.gray_bgsection').on("click", function (event) {
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
                if ($('.list_section').hasClass('active')) {
                    $('.list_section').removeClass('active');
                }
                $('[name="view"]').val('scaffold-view');
                $("form#searchfrm").submit();
            }
        });
        $('.list_section').on("click", function (event) {
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
                if ($('.gray_bgsection').hasClass('active')) {
                    $('.gray_bgsection').removeClass('active');
                }
                $('[name="view"]').val('list-view');
                $("form#searchfrm").submit();
            }
        });

    });


    window.addEventListener('popstate', function (event) {
        window.location.reload();
    });

    (function ($) {
        $.fn.loadILEle = function (params, func) {
            var _this = this;
            $[typeof params.method == 'string' ? params.method : 'get'](params.link, $.inArray(typeof params.query, ['string', 'object']) > -1 ? params.query : {}).always(function (response) {
                var data = {};
                try {
                    data = JSON.parse(response.responseText.substring(9))[0];
                } catch (e) {
                    alert("AJAX ERROR ===> " + e.toLocaleString());
                }
                if (data.totalnews !== null) {
                    $(".total-items").html(data.totalnews);
                }
                if (typeof history.pushState == "function") {
                    window.history.pushState({}, null, typeof params.query == "string" && params.method == "get" ? params.link + "?" + params.query : params.link);
                }
                func.call(_this, data);
            });
        };
    })($, jQuery);
</script> 


<div class="container">
    <?php echo sanitize_output($this->layout->element('pressrelease/_pressrelease_top_element')); ?> 
    <div class="row" id="grid">  
        <?php echo sanitize_output($this->layout->element('pressrelease/_element_pressrelease_index', $this->_ci_cached_vars, true)); ?> 
    </div>
    <div class="col-xs-12 more-articles-btn" id="pagination_div"> 
        <?php echo $pagination; ?>
    </div>

    <div class="bottom-resources-main">
        <div class="row nex-resources-section">
            <div class="col-xs-12 col-sm-6 col-md-6 full-width left-fix">
                <?php echo sanitize_output($this->layout->element("_element_resources")); ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 full-width right-fix">
                <?php echo sanitize_output($this->layout->element("_element_contactus")); ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</div>

