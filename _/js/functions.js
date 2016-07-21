jQuery(document).ready(function( $ ) {
	//console.log("Ready to go");
	var slider_target = 0;
	var slider_pos = parseInt($('.artists-slider-inner').css('left'));
	var slider_outer_w = $('.artists-slider-outer').outerWidth();
	var slider_inner_w = $('.artists-slider-inner').outerWidth();
	/* MAIN NAVIGATION BUTTON ACTIONS */
	
	$('button#main-nav-btn').on('touchstart' ,function(){
		
		var nav_h = $('#main-nav').find('.nav-wrapper').outerHeight();
		
		//console.log(nav_h);
			
		if ($('#main-nav').hasClass('nav-closed')) {
			
			$('#main-nav').animate({height: nav_h+"px"}, 500, function(){
				$('#main-nav').removeClass('nav-closed').addClass('nav-open').removeAttr('style');	
			});
			
		} else {
				
			$('#main-nav').animate({height: "0px"}, 500, function(){
				$('#main-nav').removeClass('nav-open').addClass('nav-closed').removeAttr('style');	
			});
			
		}
		
		return false;	
	});

	
	$('button#close-nav-btn').on('touchstart' ,function(){
		
		if ($('#main-nav').hasClass('nav-open')) {
			$('#main-nav').animate({height: "0px"}, 500, function(){
				$('#main-nav').removeClass('nav-open').addClass('nav-closed').removeAttr('style');	
			});
		}
			
		return false;	
	});
	
	/* 	SLIDER NAV BUTTONS 
		Nav button functions for Artists profiles slider and
		Sponsors and stall logo slider
	*/
	
	/* ARTISTS PROFILE SLIDER */
	$('.slider-nav-btns').on('touchstart', 'button' ,function(){
		
		var direct = $(this).data().direction;
		var this_btn = $(this);
		var slider_move = $('.slider-item').outerWidth();
		
		if (direct === "right") {
			
			slider_target = slider_pos - slider_move;
			
			if ( Math.abs(slider_target) > ( slider_inner_w - slider_outer_w) ) {
			slider_target = ( slider_outer_w - slider_inner_w );	
			$(this_btn).removeClass('show').addClass('hidden');
			}
			
			$('.artists-slider-inner').animate({left: slider_target + 'px'}, 500, function(){
				$(this_btn).siblings().removeClass('hidden').addClass('show');
				slider_pos = parseInt($('.artists-slider-inner').css('left'));
				
				if (( slider_pos + slider_inner_w ) < slider_outer_w) {
				$(this_btn).removeClass('show').addClass('hidden');
				}
			});	
				
		}
		
		if (direct === "left") {
			
			slider_target = slider_pos + slider_move;
			
			if (slider_target >= 0) {
			slider_target = 0;
			$(this_btn).removeClass('show').addClass('hidden');
			}
			
			$('.artists-slider-inner').animate({left: slider_target + 'px'}, 500, function(){
				$(this_btn).siblings().removeClass('hidden').addClass('show');
				slider_pos = parseInt($('.artists-slider-inner').css('left'));
			});	
		}
				
		return false;	
	});
	
	window.addEventListener("resize", function() {
	// Get screen size (inner/outerWidth, inner/outerHeight)
		slider_outer_w = $('.artists-slider-outer').outerWidth();
		slider_inner_w = $('.artists-slider-inner').outerWidth();
		slider_target = 0;
		$('.artists-slider-inner').css({left: '0px'});
		slider_pos = parseInt($('.artists-slider-inner').css('left'));
	}, false);
	
	/* SPONSORS LOGOS SLIDER */
	
	$('#sponsors-and-stalls').on('touchstart', '.slides-nav a' ,function(){
		var next_slide_id = $(this).attr('href');
		var current_slide = $('.sponsors-outer-wrap').find('div.active');
		var next_slide = $(next_slide_id);
		var next_pos = parseInt($(next_slide).css('left'));
		var mov_left = '-100%';
		
		if (next_pos < 0) {
		mov_left = 	'+100%';
		}
		
		$(this).siblings().toggleClass('active inactive');
		$(this).toggleClass('active inactive');
		
		$(next_slide).animate({left: '0%'}, 500, function(){
			$(this).removeClass('inactive').addClass('active');	
		});
		
		$(current_slide).animate({left: mov_left}, 500, function(){
			$(this).removeClass('active').addClass('inactive');	
		});		
		return false;	
	});

	/* GALLERY IMAGES FUNCTIONS */
	
	//Image Viewer Pop up function
	$('.img-grid').on('touchstart', '.grid-item a' ,function(){
		
		var img_viewer = $('.img-viewer');
		var current_img = $(this).attr('href');
		var current_img_id = $(this).parent().attr('id');
		var current_caption = $(this).attr('title');
		var prev_img = $(this).parent().prev().attr('id');
		var next_img = $(this).parent().next().attr('id');
				
		//console.log(current_img);
		
		if (prev_img === undefined) {
		prev_img = $(this).parent().siblings().last().attr('id');
		//console.log(prev_img);	
		}
		
		if (next_img === undefined) {
		next_img = $(this).parent().siblings().first().attr('id');
		//console.log(next_img);	
		}

		
		$('.cpf-wrapper').toggleClass('img-viewer-open');
		$(img_viewer).find('.img').attr('data-current-img', current_img_id);
		$(img_viewer).find('.img').attr('data-prev-img', prev_img);
		$(img_viewer).find('.img').attr('data-next-img', next_img);
		$(img_viewer).find('.img-caption').text(current_caption);
		$(img_viewer).find('.img').append('<img src="'+current_img+'" />');
		
		$(img_viewer).removeClass('inactive').addClass('fadeInUpBig').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).removeClass('fadeInUpBig').addClass('active');
		});
		
		return false;
	});
	
	//Image Viewer Pop up Close function
	$('button#close-img-viewer').on('touchstart', function(){
		
		var img_viewer = $('.img-viewer');
		
		$(img_viewer).removeClass('active').addClass('fadeOutDown').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).removeClass('fadeOutDown').addClass('inactive');
			$(img_viewer).find('.img img').remove();
			$(img_viewer).find('.img-caption').empty();
			$('.cpf-wrapper').toggleClass('img-viewer-open');
		});

		return false;
	});
	
	//Image Viewer Next Image button function
	
	$('.img-viewer').on('touchstart', 'button.view-nav-btn' ,function(){
		
		var img_viewer = $('.img-viewer');
		
		var page = $(this).data().pg;
		var current_img = $(this).siblings('.img').attr('data-current-img');
		var new_img = current_img;
		var prev_img = $(this).siblings('.img').attr('data-prev-img');
		var next_img = $(this).siblings('.img').attr('data-next-img');
		
		//console.log(current_img);	
		//console.log(page);	
		
		if (page === "prev") {
		new_img = prev_img;	
		next_img = current_img;	
		prev_img = $('#'+prev_img).prev().attr('id');
			if (prev_img === undefined) {
			prev_img = $('#'+new_img).siblings().last().attr('id');
			}
		}
		
		if (page === "next") {
		new_img = next_img;	
		next_img = $('#'+next_img).next().attr('id');	
		prev_img = current_img;	
			if (next_img === undefined) {
			next_img = $('#'+new_img).siblings().first().attr('id');		
			}
		}
		
		var img_src = $('#'+new_img).find('a').attr('href');
		var img = new Image();
		$(img).attr({src: img_src});
		var img_caption = $('#'+new_img).find('a').attr('title');
		$(this).siblings('.img').attr('data-current-img', new_img);
		$(this).siblings('.img').attr('data-prev-img', prev_img);
		$(this).siblings('.img').attr('data-next-img', next_img);
		
		
		$('.img').addClass('zoomOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(img_viewer).find('img').remove();
			$(img_viewer).find('.img-caption').empty();
			
			if (img.complete || img.readyState === 4) {
				$(this).append(img);	
				$(img_viewer).find('.img-caption').text(img_caption);
				$(this).removeClass('zoomOut').addClass('zoomIn');
			}
			
		});
		
		return false;

	});
	
	//View more button
	$('#gallery-view-more-btn').on('touchstart' ,function(){
		var total_sections = $('.img-grid').find('.grid-section').length;
		var open_count = $('.img-grid').find('.grid-section.open').length;
		var next = $('.grid-section').eq(open_count);
		var pos = $(next).offset().top;
		
		$(next).removeClass('closed').addClass('open');	
		
		$('html, body').animate({ scrollTop: pos }, 500);	
		
		if ($(next).index() === total_sections - 1) {
		$(this).addClass('hidden');
		$(this).next().removeClass('hidden');
		//console.log($(next).index());	
		}	

		return false;	
	});	
	
	$('#gallery-view-less-btn').on('touchstart', function(){
		var first_section = $('.img-grid').find('.grid-section:first-child');
		var pos = $(first_section).offset().top;
		
		$('.img-grid').find('.grid-section').not(first_section).removeClass('open').addClass('closed');
		$(this).addClass('hidden');
		$(this).prev().removeClass('hidden');
		
		$('html, body').animate({ scrollTop: pos }, 500);		
		
		return false;	
	});	

});