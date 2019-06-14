<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	<h1 class="internal_centered_header"><?php the_title();?></h1><!-- internal_centered_header -->
	
	<div class="testimonials_wrapper">
		
		<div class="testimonials_inner">
			
			<div class="testi_vid">
					
				<a href="https://www.youtube.com/embed/<?php the_field( 'youtube_id' ); ?>?autoplay=1" data-lity>
					
					<?php $video_thumbnail = get_field( 'video_thumbnail' ); ?>
					
					<img class="video_thumb" src="<?php echo $video_thumbnail['url']; ?>" alt="<?php echo $video_thumbnail['alt']; ?>" />
					
					<div class="testi_play_wrapper">
			
						<div class="play_outer">
				
							<div class="play_inner"></div><!-- play_inner -->
				
						</div><!-- play_outer -->
			
					</div><!-- testi_play_wrapper -->
					
					<div class="test_vid_overlay"></div><!-- test_vid_overlay -->
					
				</a>
				
			</div><!-- testi_vid -->
			
			<span class="testi_quote"><?php the_field( 'testimonial_video_quote' ); ?></span><!-- testi_quote -->
			
			<div class="top_testi_wrapper">
				
				<?php if(get_field('top_testimonials')): ?>
				 
					<?php while(has_sub_field('top_testimonials')): ?>
				 
						<div class="single_top_testi">
					
							<div class="single_top_profile">
						
								<img class="redline" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
								
								<?php $profile_image = get_sub_field( 'profile_image' ); ?>
								
								<img class="testi_profile" src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
						
								<img class="testi_stars" src="<?php bloginfo('template_directory');?>/images/stars-orange.svg"/>
						
							</div><!-- single_top_profile -->
					
							<span class="single_top_quote"><?php the_sub_field( 'testimonials_quote' ); ?></span><!-- single_top_quote -->
					
							<span class="single_top_description"><?php the_sub_field( 'testimonial_description' ); ?></span><!-- single_top_description -->
					
							<span class="single_top_name"><?php the_sub_field( 'testimonial_name' ); ?></span><!-- single_top_name -->
					
					</div><!-- single_top_testi -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- top_testi_wrapper -->
			
		</div><!-- testimonials_inner -->
		
	</div><!-- testimonials_wrapper -->
	
	<div class="bottom_testi_wrapper">
				
		<div class="bottom_testi_inner">
				
			<div class="bottom_test_title">
					
				<img class="redline" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
					
				<img class="star" src="<?php bloginfo('template_directory');?>/images/intl_test_icon-01.svg"/>
				
				<span>Hear what more clients are saying about us</span>
					
			</div><!-- bottom_test_title -->
			
			<div class="bottom_test_grid">
				
				<div class="bottom_test_col bottom_test_col_one">
					
					<?php if(get_field('bottom_testimonials_column_one_copy')): ?>
					 
						<?php while(has_sub_field('bottom_testimonials_column_one_copy')): ?>
					 
							<div class="single_bottom_testi">
						
								<img src="<?php bloginfo('template_directory');?>/images/stars-orange.svg"/>
						
								<span class="single_bottom_description"><?php the_sub_field( 'testimonials_quote' ); ?></span><!-- single_bottom_description -->
						
								<span class="single_bottom_name"><?php the_sub_field( 'testimonials_name' ); ?></span><!-- single_bottom_name -->
						
							</div><!-- single_bottom_testi -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- bottom_test_col -->
				
				<div class="bottom_test_col bottom_test_col_two">
					
					<?php if(get_field('bottom_testimonials_column_two')): ?>
					 
						<?php while(has_sub_field('bottom_testimonials_column_two')): ?>
					 
							<div class="single_bottom_testi">
						
								<img src="<?php bloginfo('template_directory');?>/images/stars-orange.svg"/>
						
								<span class="single_bottom_description"><?php the_sub_field( 'testimonials_quote' ); ?></span><!-- single_bottom_description -->
						
								<span class="single_bottom_name"><?php the_sub_field( 'testimonials_name' ); ?></span><!-- single_bottom_name -->
						
							</div><!-- single_bottom_testi -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- bottom_test_col -->
				
				<div class="bottom_test_col bottom_test_col_three">
					
					<?php if(get_field('bottom_testimonials_column_three')): ?>
					 
						<?php while(has_sub_field('bottom_testimonials_column_three')): ?>
					 
							<div class="single_bottom_testi">
						
								<img src="<?php bloginfo('template_directory');?>/images/stars-orange.svg"/>
						
								<span class="single_bottom_description"><?php the_sub_field( 'testimonials_quote' ); ?></span><!-- single_bottom_description -->
						
								<span class="single_bottom_name"><?php the_sub_field( 'testimonials_name' ); ?></span><!-- single_bottom_name -->
						
							</div><!-- single_bottom_testi -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- bottom_test_col -->
				
			</div><!-- bottom_test_grid -->
				
		</div><!-- bottom_testi_inner -->
		
		<a id="load_more" class="testimonials_button">View More Testimonials</a><!-- testimonials_button -->
				
	</div><!-- bottom_testi_wrapper -->

</div><!-- internal_main -->
		
<?php get_footer(); ?>


<script type="text/javascript">

jQuery(document).ready(function($){
	
	
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
	

}); // Document Ready

</script>
