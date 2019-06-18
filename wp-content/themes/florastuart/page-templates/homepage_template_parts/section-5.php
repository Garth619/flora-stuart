<section id="section_five">
	
	<div class="sec_five_inner">
		
		<span class="sec_five_title"><?php the_field( 'section_five_title' ); ?></span><!-- sec_five_title -->
		
		<div class="sec_five_slider_wrapper">
			
			<div class="sec_five_slider">
				
				<?php if(get_field('section_five_quotes')): ?>
				 
					<?php while(has_sub_field('section_five_quotes')): ?>
				 
						<div class="sec_five_slide">
					
							<div class="sec_five_profile">
						
								<img class="red_arch" data-src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
								
								<?php $profile_image = get_sub_field( 'profile_image' ); ?>
		
								<img class="profile" data-src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
						
								<img class="stars" data-src="<?php bloginfo('template_directory');?>/images/test_image_icon_02.svg"/>
						
						</div><!-- sec_five_profile -->
					
					<span class="sec_five_slide_title"><?php the_sub_field( 'quote_header' ); ?></span><!-- sec_five_slide_title -->
					
					<span class="sec_five_description"><?php the_sub_field( 'quote_content' ); ?></span><!-- sec_five_description -->
					
					<span class="sec_five_name"><?php the_sub_field( 'quote_name' ); ?></span><!-- sec_five_name -->
					
				</div><!-- sec_five_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
								
			</div><!-- sec_five_slider -->
			
	
				
				<div class="sec_five_arrow sec_five_left_arrow"></div><!-- sec_five_left_arrow -->
				
				<div class="sec_five_arrow sec_five_right_arrow"></div><!-- sec_five_right_arrow -->
				
		
			
		</div><!-- sec_five_slider_wrapper -->
		
	</div><!-- sec_five_inner -->
	
</section><!-- section_five -->