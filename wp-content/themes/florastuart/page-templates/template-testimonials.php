<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	<h1 class="internal_centered_header"><?php the_title();?></h1><!-- internal_centered_header -->
	
	<div class="testimonials_wrapper">
		
		<div class="testimonials_inner">
			
			<div class="testi_vid">
					
				<a href="https://www.youtube.com/embed/jofuRDGkZY4?autoplay=1" data-lity>
					
					<img class="video_thumb" src="<?php bloginfo('template_directory');?>/images/video.jpg"/>
					
					<div class="testi_play_wrapper">
			
						<div class="play_outer">
				
							<div class="play_inner"></div><!-- play_inner -->
				
						</div><!-- play_outer -->
			
					</div><!-- play_wrapper -->
					
					<div class="test_vid_overlay">
						
						
						
					</div><!-- test_vid_overlay -->
					
				</a>
				
			</div><!-- testi_vid -->
			
		</div><!-- testimonials_inner -->
		
	</div><!-- testimonials_wrapper -->
						
</div><!-- internal_main -->
		
<?php get_footer(); ?>
