<?php 
	
	/* Template Name: PA Extended Template */
	
	get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<?php if(!get_field('remove_top_banner') == 'Yes') : ?>
	
		<div class="internal_banner extended">
		
			<div class="internal_banner_content extended">
				
				<?php if(!get_field('make_top_banner_h1_tags') == 'Yes') : ?>
				
					<?php if(get_field('banner_title_extended')) : ?>
			
						<span class="banner_title_extended"><?php the_field( 'banner_title_extended' ); ?></span><!-- banner_title -->
				
						<?php else:?>
				
						<span class="banner_title_extended">Enter Title</span><!-- banner_title -->
				
						<?php endif;?>
					
					<?php else: ?>
					
						
					<?php if(get_field('banner_title_extended')) : ?>
			
						<h1 class="banner_title_extended"><?php the_field( 'banner_title_extended' ); ?></h1><!-- banner_title -->
				
						<?php else:?>
				
						<h1 class="banner_title_extended">Enter Title</h1><!-- banner_title -->
				
						<?php endif;?>
					
					<?php endif;?>
			
			</div><!-- internal_banner_content -->
		
			<?php $banner_image_extended = get_field( 'banner_image_extended' ); ?>
			
			<?php if($banner_image_extended) :?>

				<img class="banner_bg" src="<?php echo $banner_image_extended['url']; ?>" title="<?php echo $banner_image_extended['title']; ?>" alt="<?php echo $banner_image_extended['alt']; ?>" />
				
				<?php else:?>
				
				<img class="banner_bg" src="<?php bloginfo('template_directory');?>/images/intl_mainPA_header_img_01.jpg" alt="<?php the_title();?>"/>
			
			<?php endif;?>
		
		</div><!-- internal_banner -->
	
	<?php endif;?>
	
	<div class="internal_wrapper">
		
		<div class="internal_container two_col">
			
			<div class="internal_content">
				
				<?php if(!get_field('make_top_banner_h1_tags') == 'Yes') : ?>
				
					<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
					
					<?php else: ?>
					
					<h2 class="internal_header"><?php the_title();?></h2><!-- internal_header -->
				
				<?php endif;?>
				
				<div class="content">
				
					<?php get_template_part( 'loop', 'page' ); ?>
				
				</div><!-- content -->
				
			</div><!-- internal_content -->
			
			<?php get_sidebar('paextended'); ?>
			
		</div><!-- internal_container -->
		
	</div><!-- internal_wrapper -->
	
	
	<?php if(get_field('pa_extended_testimonial_quotes')): ?>
	
		<section id="large_testi_quotes">
	
			<div class="large_testi_quotes_inner">
		
				<span class="large_testi_quotes_title"><?php the_field( 'pa_extended_testimonial_title' ); ?></span><!-- large_testi_quotes_title -->
		
					<div class="large_testi_quotes_slider_wrapper">
			
						<div class="large_testi_quotes_slider">
				
							<?php while(has_sub_field('pa_extended_testimonial_quotes')): ?>
				 
								<div class="large_testi_quotes_slide">
					
									<div class="large_testi_quotes_profile">
						
										<img class="red_arch" data-src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
								
										<?php $profile_image = get_sub_field( 'profile_image' ); ?>
		
										<img class="profile" data-src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
						
										<img class="stars" data-src="<?php bloginfo('template_directory');?>/images/test_image_icon_02.svg"/>
						
									</div><!-- large_testi_quotes_profile -->
					
									<span class="large_testi_quotes_slide_title"><?php the_sub_field( 'quote_header' ); ?></span><!-- large_testi_quotes_slide_title -->
					
									<span class="large_testi_quotes_description"><?php the_sub_field( 'quote_content' ); ?></span><!-- large_testi_quotes_description -->
					
									<span class="large_testi_quotes_name"><?php the_sub_field( 'quote_name' ); ?></span><!-- large_testi_quotes_name -->
					
								</div><!-- large_testi_quotes_slide -->
				    
							<?php endwhile; ?>
				 
						</div><!-- large_testi_quotes_slider -->
			
						<div class="large_testi_quotes_arrow large_testi_quotes_left_arrow"></div><!-- large_testi_quotes_left_arrow -->
				
						<div class="large_testi_quotes_arrow large_testi_quotes_right_arrow"></div><!-- large_testi_quotes_right_arrow -->
				
				</div><!-- large_testi_quotes_slider_wrapper -->
		
	</div><!-- large_testi_quotes_inner -->
	
</section><!-- large_testi_quotes -->

	<?php endif; ?>
		
	
	<?php if(get_field('middle_content_extended')) : ?>
	
		<div class="extended_content">
		
			<div class="extended_content_inner content">
		
				<?php the_field( 'middle_content_extended' ); ?>
					
			</div><!-- extended_content_inner -->
		
		</div><!-- extended_content -->
	
	<?php endif;?>
	
	
	
	<?php if(get_field('pa_extended_community_slider')): ?>
	
		<span class="pa_extended_community_title"><?php the_field( 'pa_extended_community_slider_title' ); ?></span><!-- pa_extended_community_title -->
	
		<div class="att_bio_community pa_extended_community_slider">
			
			<div class="att_bio_community_inner">
				
				<div class="att_bio_arrow att_bio_arrow_left"></div><!-- att_bio_arrow -->
				
				<div class="att_bio_slider">
					
					<?php while(has_sub_field('pa_extended_community_slider')): ?>
					 
							<div class="att_bio_slide">
								
								<?php $image = get_sub_field( 'image' ); ?>
						
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								
								<div class="pa_extended_community_overlay">
								
									<span class="pa_extended_community_slide_caption"><?php the_sub_field( 'description' ); ?></span><!-- gb_slide_caption -->
								
								</div><!-- gb_slide_overlay -->
						
							</div><!-- att_bio_slide -->
					    
						<?php endwhile; ?>
					 
					</div><!-- att_bio_slider -->
				
				<div class="att_bio_arrow att_bio_arrow_right"></div><!-- att_bio_arrow -->
				
			</div><!-- att_bio_community_inner -->
			
			<span class="comm_title"><?php the_field( 'att_community_title' ); ?></span><!-- comm_title -->
			
		</div><!-- att_bio_community -->
		
		<?php endif; ?>
	
	
	
	
	
	
	<?php if(get_field('case_result_slider')): ?>
	
	<span class="ex_cr_title new_task"><?php the_field( 'bottom_title_extended' ); ?></span><!-- ex_cr_title -->
	
	<div class="extended_case_results_wrapper content new_task">
		
		<div class="extended_cr_slider_wrapper">
			
			<div class="ex_cr_arrow ex_cr_arrow_left"></div><!-- ex_cr_arrow -->
			
			<div class="ex_cr_slider">
				
				<?php while(has_sub_field('case_result_slider')): ?>
					
						<?php if(get_sub_field('case_result_amount_extended')) { ?>
							
							<div class="ex_cr_slide">
					
								<div class="ex_cr_slide_content">
						
									<span class="ex_cr_amount"><?php the_sub_field( 'case_result_amount_extended' ); ?></span><!-- ex_cr_amount -->
						
									<span class="ex_cr_type"><?php the_sub_field( 'case_result_type_extended' ); ?></span><!-- ex_cr_amount -->
						
									<span class="ex_cr_description"><?php the_sub_field( 'case_result_description_extended' ); ?></span><!-- ex_cr_description -->
						
								</div><!-- ex_cr_slide_content -->
					
							</div><!-- ex_cr_slide -->
							
						<?php } ?>
				 
						<?php $case_result_image_extended = get_sub_field( 'case_result_image_extended' ); ?>
						
						<?php if ( $case_result_image_extended ) { ?>
						
							<div class="ex_cr_slide">
					
								<img class="ex_cr_img" src="<?php echo $case_result_image_extended['url']; ?>" alt="<?php echo $case_result_image_extended['alt']; ?>"/><!-- ex_cr_img -->
					
							</div><!-- ex_cr_slide -->
							
						<?php } ?>
						
					<?php endwhile; ?>
				
			</div><!-- ex_cr_slider -->
			
			<div class="ex_cr_arrow ex_cr_arrow_right"></div><!-- ex_cr_arrow -->
			
		</div><!-- extended_cr_slider_wrapper -->
		
		<div class="extended_bottom_content">
			
			<div class="extended_bottom_content_inner">
		
				<?php the_field( 'bottom_content_extended' ); ?>
				
				<a class="get_consultation_button" href="#consultation"><?php the_field( 'bottom_button_extended' ); ?></a><!-- get_consultation_button -->
			
			</div><!-- extended_bottom_content_inner -->
		
		</div><!-- extended_bottom_content -->
		
	</div><!-- extended_case_results_wrapper -->
	
	<?php endif;?>
	
	<?php if(!get_field('case_result_slider')): ?>
	
	<div class="extended_case_results_wrapper content no_slider">
		
		<div class="extended_bottom_content">
		
			<span class="ex_cr_title"><?php the_field( 'bottom_title_extended' ); ?></span><!-- ex_cr_title -->
			
			<div class="extended_bottom_content_inner">
		
				<?php the_field( 'bottom_content_extended' ); ?>
				
				<a class="get_consultation_button" href="#consultation"><?php the_field( 'bottom_button_extended' ); ?></a><!-- get_consultation_button -->
			
			</div><!-- extended_bottom_content_inner -->
		
		</div><!-- extended_bottom_content -->
		
	</div><!-- extended_case_results_wrapper -->
	
	<?php endif;?>
	
</div><!-- internal_main -->
		

<?php get_footer(); ?>
