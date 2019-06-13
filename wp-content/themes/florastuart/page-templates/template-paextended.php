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

				<img class="banner_bg" src="<?php echo $banner_image_extended['url']; ?>" alt="<?php echo $banner_image_extended['alt']; ?>" />
				
				<?php else:?>
				
				<img class="banner_bg" src="<?php bloginfo('template_directory');?>/images/intl_mainPA_header_img_01.jpg" />
			
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
	
	<div class="faq_wrapper">
		
		<div class="faq_inner">
			
			<div class="faq_quote_wrapper">
				
				<div class="faq_extended_slider">
					
					<div class="faq_extended_slide">
						
						<div class="faq_profile">
							
							<img class="red_img" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
							
							<?php $testimonial_profile_image = get_field( 'testimonial_profile_image_extended' ); ?>
							
							<?php if ( $testimonial_profile_image ) { ?>
							
							<img class="faq_profile_img" src="<?php echo $testimonial_profile_image['url']; ?>" alt="<?php echo $testimonial_profile_image['alt']; ?>" />
							
							<?php } ?>
							
							<img class="faq_stars" src="<?php bloginfo('template_directory');?>/images/intl_header_icon_01.svg"/>
							
							<span class="faq_quote_title"><?php the_field( 'testimonial_title_extended' ); ?></span><!-- faq_quote_title -->
							
							<span class="faq_quote_description"><?php the_field( 'testimonial_description_extended' ); ?></span><!-- faq_quote_description -->
							
							<span class="faq_profile_name"><?php the_field( 'testimonial_name_extended' ); ?></span><!-- faq_profile_name -->
							
						</div><!-- faq_profile -->
						
					</div><!-- faq_extended_slide -->
					
				</div><!-- fag_extended_slider -->
				
			</div><!-- faq_quote_wrapper -->
			
			<div class="faq_questions">
				
				<span class="faq_header"><?php the_field( 'faq_title' ); ?></span><!-- faq_header -->
				
				
				<?php if(get_field('faq_qa')): ?>
				
					<ul>
				 
					<?php while(has_sub_field('faq_qa')): ?>
				 
						<li>
						
							<span class="question"><?php the_sub_field( 'question' ); ?></span><!-- question -->
							<span class="answer"><?php the_sub_field( 'answer' ); ?></span><!-- answer -->
						
						</li>
				    
					<?php endwhile; ?>
					
					</ul>
				 
				<?php endif; ?>
				
			</div><!-- faq_questions -->
			
		</div><!-- faq_inner -->
		
	</div><!-- faq_wrapper -->
	
	<div class="extended_content">
		
		<div class="extended_content_inner content">
		
			<?php the_field( 'middle_content_extended' ); ?>
		
		</div><!-- extended_content_inner -->
		
	</div><!-- extended_content -->
	
	<div class="extended_case_results_wrapper content">
		
		<div class="extended_cr_slider_wrapper">
			
			<div class="ex_cr_arrow ex_cr_arrow_left"></div><!-- ex_cr_arrow -->
			
			<div class="ex_cr_slider">
				
				<?php if(get_field('case_result_slider')): ?>
				 
					<?php while(has_sub_field('case_result_slider')): ?>
				 
						<?php $case_result_image_extended = get_sub_field( 'case_result_image_extended' ); ?>
						
						<?php if ( $case_result_image_extended ) { ?>
						
							<div class="ex_cr_slide">
					
								<img class="ex_cr_img" src="<?php echo $case_result_image_extended['url']; ?>" alt="<?php echo $case_result_image_extended['alt']; ?>"/><!-- ex_cr_img -->
					
							</div><!-- ex_cr_slide -->
							
						<?php } ?>
						
					<?php if(get_sub_field('case_result_amount_extended')) { ?>
							
							<div class="ex_cr_slide">
					
								<div class="ex_cr_slide_content">
						
									<span class="ex_cr_amount"><?php the_sub_field( 'case_result_amount_extended' ); ?></span><!-- ex_cr_amount -->
						
									<span class="ex_cr_type"><?php the_sub_field( 'case_result_type_extended' ); ?></span><!-- ex_cr_amount -->
						
									<span class="ex_cr_description"><?php the_sub_field( 'case_result_description_extended' ); ?></span><!-- ex_cr_description -->
						
								</div><!-- ex_cr_slide_content -->
					
							</div><!-- ex_cr_slide -->
							
						<?php } ?>
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- ex_cr_slider -->
			
			<div class="ex_cr_arrow ex_cr_arrow_right"></div><!-- ex_cr_arrow -->
			
		</div><!-- extended_cr_slider_wrapper -->
		
		<div class="extended_bottom_content">
		
			<span class="ex_cr_title"><?php the_field( 'bottom_title_extended' ); ?></span><!-- ex_cr_title -->
			
			<div class="extended_bottom_content_inner">
		
				<?php the_field( 'bottom_content_extended' ); ?>
				
				<a class="get_consultation_button" href="#consultation"><?php the_field( 'bottom_button_extended' ); ?></a><!-- get_consultation_button -->
			
			</div><!-- extended_bottom_content_inner -->
		
		</div><!-- extended_bottom_content -->
		
	</div><!-- extended_case_results_wrapper -->
	
</div><!-- internal_main -->
		

<?php get_footer(); ?>
