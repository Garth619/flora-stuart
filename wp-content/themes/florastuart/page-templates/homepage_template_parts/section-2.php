<section id="section_two">
	
	
	<div class="sec_two_slider">
		
		<?php if(get_field('section_two_selling_points')): ?>
		 
			<?php while(has_sub_field('section_two_selling_points')): ?>
		 
				<div class="sec_two_slide <?php the_sub_field( 'class' ); ?>">
			
					<img class="redline" data-src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
					
					<?php $sec_two_svg = get_sub_field( 'sec_two_svg' ); ?>
		
					<img class="sp_icon" data-src="<?php echo $sec_two_svg['url']; ?>" alt="<?php echo $sec_two_svg['alt']; ?>" />
			
					<span class="sp_title"><?php the_sub_field( 'title' ); ?></span><!-- sp_title -->
			
					<span class="sp_description"><?php the_sub_field( 'description' ); ?></span><!-- sp_description -->
			
		</div><!-- sec_two_slide -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
				
	</div><!-- sec_two_slider -->
	
	
</section><!-- section_two -->