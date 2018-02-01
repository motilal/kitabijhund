			$(document).ready(function() {
			
				$(".sfHover").hover( function () {
					$(this).find(".sub-menu").css("display", "block");
				}, function() {
					$(this).find(".sub-menu").css("display", "none");
				});
				
				
				
				/************** FlexSlider *********************/

				$(window).load(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						touch: true,
						controlNav: false,
						prevText: "&nbsp;",  
						nextText: "&nbsp;" 
					});
				});

				$('.carousel').carousel({
				  interval: 300
				})

				
				
				
				
			});