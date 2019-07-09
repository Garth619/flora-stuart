<?php 

/* Template Name: About Us */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<h1 class="internal_centered_header"><?php the_title();?></h1><!-- internal_centered_header -->
	
	<div class="gb_top_wrapper">
		
		<div class="gb_top_image">
			
			<?php $giving_back_image = get_field( 'giving_back_image' ); ?>
			
			<?php if ( $giving_back_image ) { ?>
				
				<img src="<?php echo $giving_back_image['url']; ?>" alt="<?php echo $giving_back_image['alt']; ?>" />
				
			<?php } ?>
			
		</div><!-- gb_top_image -->
		
		<div class="gb_top_content content">
			
			<?php the_field( 'giving_back_content' ); ?>
			
			
			
		</div><!-- gb_top_content -->
		
	</div><!-- gb_top_wrapper -->
	
	<div class="gb_bottom_wrapper">
		
		<div class="gb_bottom_inner">
			
			<div class="gb_community_header">
			
				<span class="gb_community_title"><?php the_field( 'we_serve_our_community_title' ); ?></span><!-- gb_community_title -->
			
			</div><!-- gb_community_header -->
			
			
			
			<div class="att_bio_awards">
				
				<div class="att_bio_awards_inner">
					
					<div class="att_bio_awards_slider">
						
						<?php if(get_field('about_us_awards_slider')): ?>
						 
							<?php while(has_sub_field('about_us_awards_slider')): ?>
						 
								<div class="att_bio_awards_slide">
							
									<div class="att_bio_awards_slide_inner">
							
										<?php $awards_image = get_sub_field( 'awards_image' ); ?>
	
										<img src="<?php echo $awards_image['url']; ?>" alt="<?php echo $awards_image['alt']; ?>" />
		
										</div><!-- att_bio_awards_slide_inner -->
							
								</div><!-- att_bio_awards_slide -->
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						
					</div><!-- att_bio_slider -->
					
				</div><!-- att_bio_awards_inner -->
				
			</div><!-- att_bio_awards -->
			
			
			
			
			
			
		</div><!-- gb_bottom_inner -->
		
	</div><!-- gb_bottom_wrapper -->
	
</div><!-- internal_main -->
		
	


<?php get_footer(); ?>
