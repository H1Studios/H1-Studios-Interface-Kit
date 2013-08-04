!function ($) {

	$(document).ready(function() {
		
	});
	
	$(window).on("load", function() {
		
		init();
		
	});
	
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Initialize Application                                                    */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function init() {
		
		// Define namespace
		
		$.h1studios = {};
		
		// Define variables
		
		$.h1studios.stage = $("#stage");
		
		// Disable certain links in docs
		
		$('[href^=#]').click(function (e) {
			
			e.preventDefault();
			
		});
		
		// Establish default window resize event
		
		$(window).resize(function () { 
			
			window_resize();
			
		});
		
		window_resize();
		
		// Establish default window scroll event
		
		$(window).scroll(function () { 
			
			window_scroll();
			
		});
		
		window_scroll();
		
		// Listen for changes in Modal Box Content
		
		$('.modal-body-inner').mutate('height', function (element, info) {  
			
			modal_resize();
			
		});
		
		// Initialize Bootstrap Dropdown Plugn
		
		$().dropdown();
		
		// Setup Mobile Header Dropdowns
		
		$('#header-toolbar-nav-toggle').click(function (e) {
			
			if($(this).hasClass('open')) {
				
				$(this).removeClass('open');
				$('#nav').removeClass('open');
				
			} else {
				
				$(this).addClass('open');
				$('#nav').addClass('open');
				
			}
			
		});
		
		// Initialize Bootstrap Tooltip Plugn
		
		$('.has-tooltip').each(function() {
			
			if($(this).hasClass('tooltip-on-focus')) {
					
				$(this).tooltip({
					
					'html'		: true,
					'trigger'	: 'focus'
					
				});
				
			} else {
					
				$(this).tooltip({
					
					'html'		: true,
					'trigger'	: 'hover'
					
				});
				
			}
				
		});
		
		// Retina Image Replacement
		
		retina_image_replace();
		
		// Update Fit Square Elements
		
		$('.size-to-fit').sizeToFit();
		
		// Center objects
		
		$('.fill-vertical').fillVertical();
		$('.center-vertical').centerVertical();
		$('.center-horizontal').centerHorizontal();
		
		// ------------------------------
		// Pretty Print
		// ------------------------------
		
		window.prettyPrint && prettyPrint();
		
		// Simulate placeholders for older browsers
		
		simulate_placeholders()
		
		// Call Page Specific init() functions
		
		init_pages();
		
		// Call Forms Specific form handler functions
		
		init_formhandlers();
		
	}
	
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Initialize Current Page                                                   */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function init_pages() {
		
		if($.h1studios.stage.hasClass("home")) {
			
			init_home();
				
		}
				
	}
	
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Draw Home Page                                                            */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function init_home() {
				
		$(window).scroll(function () { 
			
			init_home_resize();
			
		});
		
		$(window).resize(function () { 
			
			init_home_resize();
			
		});
		
		init_home_resize();
		
		$('.waypoint').waypoint(function() {
			
			$(this).addClass('waypoint-reached');
			
		}, {
			
			offset			:	'25%',
			onlyOnScroll	:	true
			
   		});
		
	}
	
	function init_home_resize() {
		
		// Resize Introduction Background Video
		
		var introduction_background = $('#introduction #introduction-background');
		var introduction_background_video = $('#introduction #introduction-background-video');
		
		var width_original = 1280;
		var height_original = 720;
		
		var new_width = introduction_background.width();
		var new_height = height_original * (new_width / width_original);
		
		if(new_height < introduction_background.height()) {
			
			var new_height = introduction_background.height();
			var new_width = width_original * (new_height / height_original);
			
		}
		
		introduction_background_video.css({
			
			'position':		'absolute',
			'left':			'50%',
			'top':			'50%',
			'margin-left':	-(new_width / 2),
			'margin-top':	-(new_height / 2),
			'width':		new_width,
			'height':		new_height
			
		});	
		
	}
	
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Initialize all visible forms                                              */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function init_formhandlers() {
		
	}
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Replace Images for Retina Displays                                        */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function retina_image_replace() {
		
		var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
		
		if (pixelRatio > 1) {
			
			$('img.retina').each(function() {
				
				var new_file = $(this).attr('src').replace(".", "@2x.");
				
				if(url_exists(new_file)) {
					
					$(this).attr('src', new_file);
					
				}
				
			});
			
		}
		
	}
	
	function url_exists(url) {
		
		var http = new XMLHttpRequest();
		http.open('HEAD', url, false);
		http.send();
		
		return http.status != 404;
		
	}
	
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Resolve placeholder text in older browsers                                */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function simulate_placeholders() {
		
		var input = document.createElement("input");
		
		if(('placeholder' in input) == false) {
			
			$('[placeholder]').focus(function() {
				
				var i = $(this);
				
				if(i.val() == i.attr('placeholder')) {
					
					i.val('').removeClass('placeholder');
					
					if(i.hasClass('password')) {
						
						i.removeClass('password');
						this.type='password';
						
					}
							
				}
				
			}).blur(function() {
				
				var i = $(this);	
				
				if(i.val() == '' || i.val() == i.attr('placeholder')) {
					
					if(this.type=='password') {
						
						i.addClass('password');
						this.type='text';
						
					}
					
					i.addClass('placeholder').val(i.attr('placeholder'));
					
				}
				
			}).blur().parents('form').submit(function() {
				
				$(this).find('[placeholder]').each(function() {
					
					var i = $(this);
					
					if(i.val() == i.attr('placeholder')) {
						
						i.val('');
						
					}
					
				})
				
			});
			
		}
				
	}
	
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Resize Modals                                                             */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function modal_resize() {
		
		$('.modal').each(function(index, value) { 
			
			// Add display:block for resizing calculations
			
			if($(this).hasClass('fade') && !$(this).hasClass('in')) {
				
				$(this).css({
					
					display:    'block'
					
				});
				
			}
			
			var modal_header = $(this).find('.modal-header');
			var modal_footer = $(this).find('.modal-footer');
			var modal_body = $(this).find('.modal-body');
			var modal_body_inner = $(this).find('.modal-body-inner');
			
			var window_height = $(window).height();
			var modal_header_height = modal_header.outerHeight();
			var modal_footer_height = modal_footer.outerHeight();
			var modal_body_height = modal_body.height();
			var modal_body_padding = modal_body.outerHeight() - modal_body_height;
			var modal_body_inner_height = modal_body_inner.outerHeight();
			var modal_total_height = modal_header_height + modal_body_padding + modal_body_inner_height + modal_footer_height;
			var modal_margins = 15;
			
			if ((modal_total_height + (2 * modal_margins)) > window_height) {
				
				modal_body.css({
					
					'height'	:	window_height - modal_header_height - modal_body_padding - modal_footer_height - (2 * modal_margins)
					
				});
				
			} else {
				
				modal_body.css({
					
					'height'	:	modal_body_inner_height
					
				});
				
			}
			
			$(this).css({
				
				'margin-top'	:	-1 * ($(this).outerHeight() / 2)
				
			});
			
			// Remove display:block for resizing calculations to avoid element covering screen
			
			if($(this).hasClass('fade') && !$(this).hasClass('in')) {
				
				$(this).css({
					
					display:    'none'
					
				});
				
			}
			
		});
		
	}
	
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Window Resize                                                             */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function window_resize() {
		
		if($(window).width() >= 768) {
			
			$('#nav-links').show();
			$('#nav-btns').find('.btn').removeClass('btn-small');
			
			$('#nav-links').find('.dropdown-toggle').unbind().each(function() {
				
				$(this).click(function (e) {
				
					return true;
					
				});
				
			});
			
		} else {
			
			$('#nav-links').hide();
			$('#nav-btns').find('.btn').addClass('btn-small');
			
			$('#nav-links').find('.dropdown-toggle').each(function() {
				
				$(this).click(function (e) {
				
					e.preventDefault();
					
				});
				
			});
			
		}
		
		modal_resize();
		
		// Update Fit Square Elements
		
		$('.size-to-fit').sizeToFit();
		
		// Center objects
		
		$('.fill-vertical').fillVertical();
		$('.center-vertical').centerVertical();
		$('.center-horizontal').centerHorizontal();
		
	}
	
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Window Scroll                                                             */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function window_scroll() {
			
	}
	
	/* ==================================================================================================== */
	/*                                                                                                      */
	/* Get Browser Dimensions                                                    */
	/*                                                                                                      */
	/* ==================================================================================================== */
	
	function get_browserDimensions() {
		
		var dimensions = {
			
			width: 0,
			height: 0
			
		};
		
		if ($(window)) {
			
			dimensions.width = $(window).width();
			dimensions.height = $(window).height();
			
		}
		
		return dimensions;
		
	}
	
	$.fn.fillVertical = function() {
		
		return this.each(function(i) {
			
			var innerHeight = $(this).height();
			var paddingHeight = $(this).outerHeight() - innerHeight;
			var contentHeight = $(this).find(".fit-content").height();
			var newHeight = $(window).height() - paddingHeight;
			var minHeight = $(this).data('fill-min-height');
			
			if (contentHeight > newHeight) {
				
				newHeight = contentHeight;
				
			}
			
			if (newHeight < minHeight) {
				
				newHeight = minHeight;
				
			}
			
			// Change height
			
			$(this).height(newHeight);
			
		});
		
	}
	
	$.fn.centerVertical = function() {
		
		return this.each(function(i){
			
			var parent = $(this).parent();
			var h = $(this).height();
			var oh = $(this).outerHeight();
			var mt = (h + (oh - h)) / 2;
			
			$(this).css({
				
				"margin-top":	"-" + mt + "px",
				"top":			"50%",
				"position":		"absolute"
				
			});
			
			parent.css({
				
				"position":		"relative"
				
			});
			
		});	
		
	};
	
	$.fn.centerHorizontal = function() {
		
		return this.each(function(i){
			
			var parent = $(this).parent();
			var w = $(this).width();
			var ow = $(this).outerWidth();
			var ml = (w + (ow - w)) / 2;
			
			$(this).css({
				
				"margin-left":	"-" + ml + "px",
				"left":			"50%",
				"position":		"absolute"
				
			});
			
			parent.css({
				
				"position":		"relative"
				
			});
			
		});	
		
	};
	
	$.fn.sizeToFit = function() {
		
		return this.each(function(i){
			
			var ratio = $(this).data('size-to-fit-ratio');
			
			switch ($(this).data('size-to-fit')) {
					
				case 'height':
					
					var new_height = $(this).parent().height();
					var new_width = new_height * ratio;
					
					break;
					
				case 'width':
				default:
					
					var new_width = $(this).parent().width();
					var new_height = new_width * ratio;
					
					break;
				
			};
			
			$(this).css("width", new_width);
			$(this).css("height", new_height);
			
		});	
		
	};
	
}(window.jQuery)