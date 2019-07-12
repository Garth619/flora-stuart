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
		
		<div class="timeline_wrapper desktop">
			
			<div class="timeline_inner">
			
				<div class="my_heritage_wrapper">
				
					<img class="redline" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
				
					<img class="tree" src="<?php bloginfo('template_directory');?>/images/intl_flora_icon-01.svg"/>
				
					<span class="my_heritage_title"><?php the_field( 'my_heritage_title_kent' ); ?></span><!-- my_heritage_title -->
				
				</div><!-- my_heritage_wrapper -->
				
				<div class="history_wrapper">
					
					<div class="history_col first">
						
						<?php if(get_field('att_timeline_brown')): 
						 
									while(has_sub_field('att_timeline_brown')):
							
										if( get_row_index() % 2 == 0 ) :
						 
										else:?>
								
								<div class="single_event">
							
									<div class="single_event_inner">
							
										<div class="single_event_overlay">
								
											<?php $single_event_image = get_sub_field( 'single_event_image' ); ?>
		
											<img src="<?php echo $single_event_image['url']; ?>" alt="<?php echo $single_event_image['alt']; ?>" />
		
										</div><!-- single_event_overlay -->
								
										<span class="single_event_year"><?php the_sub_field( 'year' ); ?></span><!-- single_event_year -->
								
										<span class="single_event_description"><?php the_sub_field( 'description' ); ?></span><!-- single_event_description -->
							
									</div><!-- single_event_inner -->
							
								</div><!-- single_event -->
								
								<?php endif;
						    
										endwhile;
						 
										endif; ?>
						
					</div><!-- history_col -->
					
					<div class="line_col"></div><!-- line_col -->
					
					<div class="history_col second">
						
						<?php if(get_field('att_timeline_brown')): 
						 
									while(has_sub_field('att_timeline_brown')):
							
										if( get_row_index() % 2 == 0 ) :?>
								
								<div class="single_event">
							
									<div class="single_event_inner">
							
										<div class="single_event_overlay">
								
											<?php $single_event_image = get_sub_field( 'single_event_image' ); ?>
		
											<img src="<?php echo $single_event_image['url']; ?>" alt="<?php echo $single_event_image['alt']; ?>" />
		
										</div><!-- single_event_overlay -->
								
										<span class="single_event_year"><?php the_sub_field( 'year' ); ?></span><!-- single_event_year -->
								
										<span class="single_event_description"><?php the_sub_field( 'description' ); ?></span><!-- single_event_description -->
							
									</div><!-- single_event_inner -->
							
								</div><!-- single_event -->
								
								<?php endif;
						    
										endwhile;
						 
										endif; ?>
						
					</div><!-- history_col -->
					
				</div><!-- history_wrapper -->
			
			</div><!-- timeline_inner -->
			
		</div><!-- timeline_wrapper -->
		
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
			
			<span class="comm_title"><?php the_field( 'att_community_title' ); ?></span><!-- comm_title -->
			
		</div><!-- att_bio_community -->
		
		<?php endif; ?>
	
</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
