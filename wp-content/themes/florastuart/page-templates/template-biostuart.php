<?php 

/* Template Name: Att Flora Templeton Stuart */

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
			
			<div class="att_bio_awards">
				
				<div class="att_bio_awards_inner">
					
					<div class="att_bio_awards_slider">
						
						<div class="att_bio_awards_slide">
							
							<div class="att_bio_awards_slide_inner">
							
								<img src="<?php bloginfo('template_directory');?>/images/intl_flora_award_01.png"/>
							
							</div><!-- att_bio_awards_slide_inner -->
							
						</div><!-- att_bio_awards_slide -->
						
						<div class="att_bio_awards_slide">
							
							<div class="att_bio_awards_slide_inner">
							
								<img src="<?php bloginfo('template_directory');?>/images/intl_flora_award_02.png"/>
							
							</div><!-- att_bio_awards_slide_inner -->
							
						</div><!-- att_bio_awards_slide -->
						
						<div class="att_bio_awards_slide">
							
							<div class="att_bio_awards_slide_inner">
							
								<img src="<?php bloginfo('template_directory');?>/images/intl_flora_award_03.png"/>
							
							</div><!-- att_bio_awards_slide_inner -->
							
						</div><!-- att_bio_awards_slide -->
						
						<div class="att_bio_awards_slide">
							
							<div class="att_bio_awards_slide_inner">
							
								<img src="<?php bloginfo('template_directory');?>/images/intl_flora_award_04.png"/>
							
							</div><!-- att_bio_awards_slide_inner -->
							
						</div><!-- att_bio_awards_slide -->
						
						<div class="att_bio_awards_slide">
							
							<div class="att_bio_awards_slide_inner">
							
								<img src="<?php bloginfo('template_directory');?>/images/intl_flora_award_05.png"/>
							
							</div><!-- att_bio_awards_slide_inner -->
							
						</div><!-- att_bio_awards_slide -->
						
					</div><!-- att_bio_slider -->
					
				</div><!-- att_bio_awards_inner -->
				
			</div><!-- att_bio_awards -->
			
			<div class="att_history_wrapper">
				
				<div class="att_history_inner">
					
					<div class="att_history_button att_history_button_left"></div><!-- att_history_button -->
					
					<div class="att_history_slider">
						
						<div class="att_history_slide">
							
							<img src="<?php bloginfo('template_directory');?>/images/intl_flora_img_01.jpg"/>
							
						</div><!-- att_history_slide -->
						
						<div class="att_history_slide">
							
							<img src="<?php bloginfo('template_directory');?>/images/intl_flora_img_02.jpg"/>
							
						</div><!-- att_history_slide -->
						
						<div class="att_history_slide">
							
							<img src="<?php bloginfo('template_directory');?>/images/intl_flora_img_03.jpg"/>
							
						</div><!-- att_history_slide -->
						
						<div class="att_history_slide">
							
							<img src="<?php bloginfo('template_directory');?>/images/intl_flora_img_03.jpg"/>
							
						</div><!-- att_history_slide -->
						
						<div class="att_history_slide">
							
							<img src="<?php bloginfo('template_directory');?>/images/intl_flora_img_03.jpg"/>
							
						</div><!-- att_history_slide -->
						
					</div><!-- att_history_slider -->
					
					<div class="att_history_button att_history_button_right"></div><!-- att_history_button -->
					
				</div><!-- att_history_inner -->
				
			</div><!-- att_history_wrapper -->
			
		</div><!-- attorney_bio_wrapper -->		
		
		</div><!-- internal_wrapper -->
		
		<div class="timeline_wrapper desktop">
			
			<div class="timeline_inner">
			
				<div class="my_heritage_wrapper">
				
					<img class="redline" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
				
					<img class="tree" src="<?php bloginfo('template_directory');?>/images/intl_flora_icon-01.svg"/>
				
					<span class="my_heritage_title">My Heritage</span><!-- my_heritage_title -->
				
				</div><!-- my_heritage_wrapper -->
				
				<div class="history_wrapper">
					
					<div class="history_col first">
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1952</span><!-- single_event_year -->
								
								<span class="single_event_description">My Mother, Elise Talmage Lieb with me</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1969</span><!-- single_event_year -->
								
								<span class="single_event_description">As a single mom, I worked my way through college and law school</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1976</span><!-- single_event_year -->
								
								<span class="single_event_description">Blazing the trail for women, I received my law degree</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
							<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1978</span><!-- single_event_year -->
								
								<span class="single_event_description">Appearances on Phil Donahue and Good Morning America</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
							<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1984</span><!-- single_event_year -->
								
								<span class="single_event_description">Getting Married</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1984</span><!-- single_event_year -->
								
								<span class="single_event_description">Getting Married</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
					</div><!-- history_col -->
					
					<div class="line_col"></div><!-- line_col -->
					
					<div class="history_col second">
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
					</div><!-- history_col -->
					
				</div><!-- history_wrapper -->
			
			</div><!-- timeline_inner -->
			
		</div><!-- timeline_wrapper -->
		
		
		<div class="timeline_wrapper tablet">
				
				<div class="timeline_inner">
					
					<div class="my_heritage_wrapper">
				
					<img class="redline" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
				
					<img class="tree" src="<?php bloginfo('template_directory');?>/images/intl_flora_icon-01.svg"/>
				
					<span class="my_heritage_title">My Heritage</span><!-- my_heritage_title -->
				
				</div><!-- my_heritage_wrapper -->
					
					<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
						
						<div class="single_event">
							
							<div class="single_event_inner">
							
								<div class="single_event_overlay">
								
									<img src="<?php bloginfo('template_directory');?>/images/single-event.jpg"/>
								
								</div><!-- single_event_overlay -->
								
								<span class="single_event_year">1929</span><!-- single_event_year -->
								
								<span class="single_event_description">My Great Grandparents, Judge Clay Elliot with Flora Elliot</span><!-- single_event_description -->
							
							</div><!-- single_event_inner -->
							
						</div><!-- single_event -->
					
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
			
			<span class="comm_title">We Serve<br class="tablet"/> Our Community</span><!-- comm_title -->
			
		</div><!-- att_bio_community -->
		
		<?php endif; ?>
	
</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
