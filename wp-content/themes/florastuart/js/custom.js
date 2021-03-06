// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	

	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    createWaypoint('section_one', null, null, -10, loadImages, false);
    
    createWaypoint('internal_trigger', null, null, -10, loadImages, false);



	



     /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    //function wistiaLoad() {
     // jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        //console.log('wistia load:', textStatus); // Success
     // });
   // }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)
    
        
    
    // loads wistia on click to improve initial page speed
    $('.wistia_embed').click(function () {
        //make sure to only load if Wistia is not already loaded
        let self = this
        if (typeof Wistia === 'undefined') {
            jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js", function (data, textStatus, jqxhr) {
                // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
                // a hook we can listen for. So we need to set an interval to check when it's ready 
                var interval = setInterval(function () {
                    if (jQuery(self).attr('id') && window._wq) {
                        var videoId = jQuery(self).attr('id').split('-')[1];
                        window._wq = window._wq || [];
                        _wq.push({
                            id: videoId,
                            onReady: function (video) {
                                jQuery(self).find('.wistia_click_to_play').eq(0).trigger('click');
                            }
                        });
                        clearInterval(interval);
                    }
                }, 100)
            });
        }
    });
   
    
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
		
		$('body').addClass('ready');
		

    createWaypoint('section_three', '#section_three', 'visible', 200, null, false);
    
    createWaypoint('sec_three_bottom_trigger', '#sec_three_bottom_trigger', 'visible', 600, null, false);
    
    createWaypoint('section_five', '#section_five', 'visible', 400, null, false);
    
    createWaypoint('footer_trigger', '#footer_trigger', 'visible', 400, null, false);
    
   


		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);




        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */




 
 $('.featured_slider').slick({
  infinite: true,
  slidesToShow: 3,
  mobileFirst: true,
  slidesToScroll: 3,
	arrows:false,
	autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1066,
      settings: "unslick",
     }
	]
 });
 
 
 
 $('.sec_two_slider').slick({
  infinite: true,
  slidesToShow: 1,
  mobileFirst: true,
  slidesToScroll: 1,
	arrows:false,
	dots:true,
  responsive: [
    {
      breakpoint: 1280,
      settings: "unslick",
     }
	]
 });
 
 
 
 $('.sec_five_slider').slick({
  infinite: true,
  slidesToShow: 1,
  mobileFirst: true,
  fade:true,
  slidesToScroll: 1,
	arrows:true,
	prevArrow:'.sec_five_left_arrow',
	nextArrow:'.sec_five_right_arrow',
	dots:false,

 });
 
 
 
 $('.large_testi_quotes_slider').slick({
  infinite: true,
  slidesToShow: 1,
  fade:true,
  slidesToScroll: 1,
	arrows:true,
	prevArrow:'.large_testi_quotes_left_arrow',
	nextArrow:'.large_testi_quotes_right_arrow',
	dots:false,

 });
 
 
 
 $('.new_reviews_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:true,
	fade:true,
	dots:false,
	prevArrow:'.new_reviews_arrow_left',
	nextArrow:'.new_reviews_arrow_right'
 });
 
 
 	// adds a div to center arrows 
 
 	function checksliderwidth() {
        
        if ($(window).width() <= 767) {
            
          
        	$('.sec_five_arrow').wrapAll('<div class="sec_five_arrows"></div>');
        	
        	$('.large_testi_quotes_arrow').wrapAll('<div class="large_testi_quotes_arrows"></div>');
        	   		
        		
        } 
        
    	};
    	
    
checksliderwidth();


 $('.ex_cr_slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
	arrows:true,
	dots:false,
	prevArrow:'.ex_cr_arrow_left',
	nextArrow:'.ex_cr_arrow_right',
  responsive: [
    {
      breakpoint: 1800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
     },
     {
      breakpoint: 1320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
     }
	]
 });
 
 
 
 
 $('.att_bio_slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
	arrows:true,
	dots:false,
	prevArrow:'.att_bio_arrow_left',
	nextArrow:'.att_bio_arrow_right',
  responsive: [
/*
    {
      breakpoint: 1800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
     },
*/
     {
      breakpoint: 1310,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
     }
	]
 });
 
 
 
 
 $('.pa_extended_community_slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
	arrows:true,
	dots:false,
	prevArrow:'.pa_extended_community_arrow_left',
	nextArrow:'.pa_extended_community_arrow_right',
  responsive: [
/*
    {
      breakpoint: 1800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
     },
*/
     {
      breakpoint: 1310,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
     }
	]
 });
 
 
 
 
 $('.att_bio_awards_slider').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
	arrows:false,
	dots:true,
  responsive: [
     {
      breakpoint: 1310,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
     },
     {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
     }
	]
 });
 
 
 
 $('.att_history_slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
	arrows:true,
	dots:false,
	prevArrow:'.att_history_button_left',
	nextArrow:'.att_history_button_right',
  responsive: [
/*
    {
      breakpoint: 1800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
     },
*/
     {
      breakpoint: 1310,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
     }
	]
 });
 
 
 
 
 $('.gb_slider').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
	arrows:true,
	dots:false,
	prevArrow:'.gb_arrow_left',
	nextArrow:'.gb_arrow_right',
  responsive: [
/*
    {
      breakpoint: 1800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
     },
*/
     {
      breakpoint: 1310,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
     }
	]
 });




$('.faq_extended_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	adaptiveHeight: true,
	fade:true,
	dots:true
 });
 
 
 
 

	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");



		
    
    
    
    // nav check width
    
    
    function checkNavwidth() {
        
        if ($(window).width() > 1310) {
            
          
        	$('nav, .internal_nav').addClass('desktop');
        	   		
        		
        } 
        
        else {
	        
	        $('nav ul.menu > li.menu-item-has-children > a, .internal_nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
		        
		        $(this).next('ul.sub-menu').toggleClass('open');
	          
	        });
	        
        }
        
    	};
    	
    
			checkNavwidth();
			
			
		$('.menu_wrapper').on('click', function(e) {
		  
			$('nav, .internal_nav').slideDown(300);
			
			$('.menu_close').addClass('open');
		
		});
		
		$('.menu_close').on('click', function(e) {
		  
			$('nav, .internal_nav').slideUp(300);
			
			$(this).removeClass('open');
		
		});
		
		
		// sidebar
		
		$('.sidebar_box ul.menu > li.menu-item-has-children > a').on('click', function(e) {
		  
			//$('.sidebar_box ul.menu > li.menu-item-has-children > a').removeClass('active');
			
			$(this).toggleClass('active');
			
			$(this).next('ul.sub-menu').slideToggle(200);
		
		});
		
		// current for blog sidebar
		
		
			var pgurl = window.location.href;
			
			$(".widget ul li").each(function(){
		  
		  if($(this).find('a').attr("href") == pgurl)
		    
		    $(this).addClass("active");
			
			})
		
		
		
		// faqs
		
		
		$('span.question').on('click', function(e) {
			
			$(this).next('span.answer').slideToggle(300);
		  
		});
		
		// cr
		
		$('.single_cr.info').on('click', function(e) {
		  
			$('.cr_overlay').addClass('open');
			
			var cramount = $(this).find('span.single_cr_amount').text();
			
			$('.cr_overlay_inner').find('span.cr_overlay_amount').replaceWith('<span class="cr_overlay_amount">' +cramount+ '</span>');
			
			var crtype = $(this).find('span.single_cr_type').text();
			
			$('.cr_overlay_inner').find('span.cr_overlay_type').replaceWith('<span class="cr_overlay_type">' +crtype+ '</span>');
			
			var crdescription = $(this).find('span.single_cr_description.full').text();
			
			$('.cr_overlay_inner').find('span.cr_overlay_description').replaceWith('<span class="cr_overlay_description">' +crdescription+ '</span>');
		
		});
		
		
		$('.cr_close').on('click', function(e) {
		  
			$('.cr_overlay').removeClass('open');
		
		});
		
		
		
		// form labels 
		
		function customLabel() {
		
		$("#poppy-request input, #poppy-request textarea, .sidebar_wrapper input, .sidebar_wrapper textarea").focus(function(){
    	
    	$(this).parent().prev('label').fadeOut(200);
  	
  	});
  	
  	
  	$("#poppy-request input, #poppy-request textarea, .sidebar_wrapper input, .sidebar_wrapper textarea").blur(function(){
	  	
	  	if( !$(this).val() ) {
          
        $(this).parent().prev('label').fadeIn(200);
    	
    	}
    	
    });
    
    }
    
    
    customLabel();
    
    
    jQuery(document).bind('gform_post_render', function(){
		
			customLabel();
  	
  	});
  	
  	
  // nav
  
 
  
  
 if($('nav').length >0 ){// just show on homepage class 'nav'
  
  $('.current-menu-item').addClass('active');
	

		$(function() {

        var $el, leftPos, newWidth,
            $mainNav = $('nav').find("ul.menu");

        $mainNav.append("<li id='magic-line'></li>");
        var $magicLine = $("#magic-line");



        if($('nav ul.menu > li').hasClass('active')) {
            $magicLine
                .css({
                    "left": $('nav').find("ul.menu > li.active").position().left,
                    "width": $('nav ul.menu > li.active a').width()
                }).data("origLeft", $magicLine.position().left);
        } else {
            $magicLine
                .css({
                    "left": -100,
                    "width": $('nav ul.menu > li:first a').width()
                }).data("origLeft", $magicLine.position().left);
        }




        $('nav').find("ul.menu > li:not(#magic-line)").hover(function() {
            $el = $(this);
            leftPos = $el.position().left;
            newWidth = $el.children().width();
            $magicLine.stop().animate({
                left: leftPos,
                width: newWidth
            });
        }, function() {
            $magicLine.stop().animate({
                left: $magicLine.data("origLeft"),
                width: $('nav ul.menu > li.active a').width()
            });
        });
 });
    
    
}




// load more testimonials


if($('.testimonials_wrapper').length >0 ){

		
		function slideTestimonials() {
	    
	    size_li = $(".bottom_test_col_one .single_bottom_testi, .bottom_test_col_two .single_bottom_testi, .bottom_test_col_three .single_bottom_testi").size();
   
			
	    
	    
	    if ($(window).width() >= 1280) {
		    
		    x=2;
	        
	      
	    	$('.bottom_test_col_one .single_bottom_testi:lt('+x+'), .bottom_test_col_two .single_bottom_testi:lt('+x+'), .bottom_test_col_three .single_bottom_testi:lt('+x+') ').show();
   
				$('#load_more').click(function () {
        
        	x= (x+2 <= size_li) ? x+2 : size_li;
					
					$('.bottom_test_col_one .single_bottom_testi:lt('+x+'), .bottom_test_col_two .single_bottom_testi:lt('+x+'), .bottom_test_col_three .single_bottom_testi:lt('+x+')').fadeIn();
    		
    		});
	    	   		
	    }
	    
	    else {
		    
		    x=1;
		    
		    $('#load_more').click(function () {
        
        	x= (x+1 <= size_li) ? x+1 : size_li;
					
					$('.bottom_test_col_two .single_bottom_testi:lt('+x+'), .bottom_test_col_three .single_bottom_testi:lt('+x+')').fadeIn();
    		
    		});
		    
	    }
	    
		};
		
		
		slideTestimonials();


}


// timeline animation

// https://codepen.io/annalarson/pen/GesqK

/* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.single_event').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).addClass('come_in');
                    
            }
            
        }); 
    
    });
    



  
}); // document ready