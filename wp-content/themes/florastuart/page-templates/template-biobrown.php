<?php 

/* Template Name: Att Kent Brown */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<div class="internal_wrapper">
		
		<div class="att_bio_wrapper">
			
			<div class="att_bio_inner">
				
				<div class="att_bio_sidebar">
					
					<?php $att_bio_image = get_field( 'att_bio_image' ); ?>
					
					<?php if ( $att_bio_image ) { ?>
					
					<img src="<?php echo $att_bio_image['url']; ?>" alt="<?php echo $att_bio_image['alt']; ?>" />
					
					<?php } ?>
					
				</div><!-- att_bio_sidebar -->
				
				<div class="att_bio_content content">
					
					<h1 class="att_header"><?php the_title();?></h1><!-- att_header -->
					
					<span class="att_postion"><?php the_field( 'att_position' ); ?></span><!-- att_postion -->
					
					<?php the_field( 'att_bi_content' ); ?>
					
				</div><!-- att_bio_content -->
				
			</div><!-- attorney_bio_inner -->
			
		</div><!-- attorney_bio_wrapper -->
		
		</div><!-- internal_wrapper -->
		
		<?php if(get_field('att_bio_community_slider')): ?>
	
		<div class="att_bio_community">
			
			<div class="att_bio_community_inner">
				
				<div class="att_bio_arrow att_bio_arrow_left"></div><!-- att_bio_arrow -->
				
				<div class="att_bio_slider">
					
					<?php while(has_sub_field('att_bio_community_slider')): ?>
					 
							<div class="att_bio_slide">
								
								<?php $image = get_sub_field( 'image' ); ?>
						
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
							</div><!-- att_bio_slide -->
					    
						<?php endwhile; ?>
					 
					</div><!-- att_bio_slider -->
				
				<div class="att_bio_arrow att_bio_arrow_right"></div><!-- att_bio_arrow -->
				
			</div><!-- att_bio_community_inner -->
			
			<span class="comm_title">We Serve<br class="tablet"/> Our Community</span><!-- comm_title -->
			
		</div><!-- att_bio_community -->
		
		<?php endif; ?>
	
</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
