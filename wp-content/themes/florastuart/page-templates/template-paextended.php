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
					
					<?php if(get_field('banner_sub_title')) : ?>
					
						<span class="banner_subheader"><?php the_field( 'banner_sub_title' ); ?></span><!-- banner_subheader -->
					
					<?php endif;?>
					
					<?php ?>
			
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
				
				<?php if(get_field('faqs_ex')): ?>
					
				<div class="new_faqs_wrapper">
						
					<span class="new_faqs_header"><?php the_field( 'faqs_title_ex' ); ?></span><!-- new_faqs_header -->
						
					<div class="new_faqs_inner">
						
						<?php while(has_sub_field('faqs_ex')): ?>
						 
							<div class="new_faq_single">
								
								<span class="new_faq_question"><?php the_sub_field( 'question' ); ?></span><!-- new_faq_question -->
								
								<div class="new_faq_answer content">
									
									<?php the_sub_field( 'answer' ); ?>
																	
								</div><!-- new_faq_answer -->
								
							</div><!-- new_faq_single -->
						    
							<?php endwhile; ?>
							
					</div><!-- new_faqs_inner -->
						
				</div><!-- new_faqs_wrapper -->
				
				<?php endif; ?>
				
				<?php if(get_field('reviews_ex')): ?>
				
				<div class="new_reviews_wrapper">
					
					<span class="new_reviews_title"><?php the_field( 'reviews_title_ex' ); ?></span><!-- new_reviews_title -->
					
					<div class="new_reviews_slider">
						
						<?php while(has_sub_field('reviews_ex')): ?>
						 
							<div class="new_reviews_slide">
						
								<div class="large_testi_quotes_profile">
						
									<img class="red_arch" data-src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
									
									<?php $image = get_sub_field( 'image' ); ?>
		
									<img class="profile" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
									<img class="stars" data-src="<?php bloginfo('template_directory');?>/images/test_image_icon_02.svg"/>
						
								</div><!-- large_testi_quotes_profile -->
							
								<span class="new_reviews_description"><?php the_sub_field( 'description' ); ?></span><!-- new_reviews_description -->

								<span class="new_reviews_name"><?php the_sub_field( 'name' ); ?></span><!-- new_reviews_name -->
						
							</div><!-- new_reviews_slide -->
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						
					</div><!-- new_reviews_slider -->
					
					<div class="new_reviews_arrow_wrapper">
						
						<div class="new_reviews_arrow new_reviews_arrow_left"></div><!-- new_reviews_arrow -->
						
						<div class="new_reviews_arrow new_reviews_arrow_right"></div><!-- new_reviews_arrow -->
						
					</div><!-- new_reviews_arrow_wrapper -->
					
					
				</div><!-- new_reviews_wrapper -->

					
				<?php if(get_field('middle_content_extended')) : ?>
	
						<div class="extended_content content">
		
							<div class="extended_content_inner">
		
								<?php the_field( 'middle_content_extended' ); ?>
					
							</div><!-- extended_content_inner -->
		
						</div><!-- extended_content -->
	
					<?php endif;?>
		
			</div><!-- internal_content -->
			
			<?php get_sidebar('paextended'); ?>
			
		</div><!-- internal_container -->
		
	</div><!-- internal_wrapper -->
	
	<?php if(get_field('pa_extended_community_slider')): ?>
	
	<div class="pa_extended_community_wrapper">
		
		<div class="pa_extended_title_wrapper">
			
			<img class="pa_ed_arch" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
			
			<img class="pa_heart" src="<?php bloginfo('template_directory');?>/images/intl_givingback_icon-01.svg"/>
		
			<span class="pa_extended_community_new_title"><?php the_field( 'pa_extended_community_slider_title' ); ?></span><!-- pa_extended_community_new_title -->
		
		</div><!-- pa_extended_title_wrapper -->
		
		<div class="pa_extended_community_inner">
			
			<div class="pa_extended_community_arrow pa_extended_community_arrow_left"></div><!-- pa_extended_community_arrow -->
			
			<div class="pa_extended_community_slider">
				
				<?php while(has_sub_field('pa_extended_community_slider')): ?>
				
				<div class="pa_extended_community_slide">
					
					<img src="<?php bloginfo('template_directory');?>/images/img_09.jpg" />
								
					<div class="pa_extended_community_overlay">
								
						<span class="pa_extended_community_slide_caption">Description</span><!-- gb_slide_caption -->
								
					</div><!-- gb_slide_overlay -->
					
				</div><!-- pa_extended_community_slide -->
				
				<?php endwhile; ?>
				
			</div><!-- pa_extended_community_slider -->
			
			<div class="pa_extended_community_arrow pa_extended_community_arrow_right"></div><!-- pa_extended_community_arrow -->
			
		</div><!-- pa_extended_community_inner -->
		
	</div><!-- pa_extended_community_wrapper -->
	
	<?php endif; ?>
	
		
	<?php if(get_field('case_result_slider')): ?>
	
	<div class="extended_case_results_wrapper">
		
		<div class="extended_case_results_title_wrapper">
			
			<img class="extended_red_arch" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
			
			<img class="pa_law" src="<?php bloginfo('template_directory');?>/images/intl_attorneys_icon-01.svg"/>
		
			<span class="ex_cr_title"><?php the_field( 'bottom_title_extended' ); ?></span><!-- ex_cr_title -->
		
		</div><!-- extended_case_results_title_wrapper -->
		
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
		
		<div class="extended_bottom_content content">
			
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
