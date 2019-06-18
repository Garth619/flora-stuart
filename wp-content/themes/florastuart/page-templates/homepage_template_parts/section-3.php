<section id="section_three">
	
	<div class="sec_three_inner">
		
		<h1><?php the_field( 'section_three_header' ); ?></h1>
		
		<div class="kentucky_wrapper">
			
			<img data-src="<?php bloginfo('template_directory');?>/images/content01_icon-01.svg"/>
			
		</div><!-- kentucky_wrapper -->
		
		<div class="sec_three_content content">
		
			<?php the_field( 'section_three_content' ); ?>
		
		</div><!-- sec_three_content -->
		
	</div><!-- sec_three_inner -->
	
	<div id="sec_three_bottom_trigger" class="sec_three_bottom">
				
				<div class="sec_three_image_wrapper">
					
					<?php if(get_field('section_three_image')): ?>
					 
						<?php while(has_sub_field('section_three_image')): ?>
					 
							<div>
								
								<?php $image = get_sub_field( 'image' ); ?>

								<img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		
							</div>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					<?php $section_three_tablet_image = get_field( 'section_three_tablet_image' ); ?>

					<img class="sec_three_tablet_img" data-src="<?php echo $section_three_tablet_image['url']; ?>" alt="<?php echo $section_three_tablet_image['alt']; ?>" />
					
				</div><!-- sec_three_image_wrapper -->
				
				<div class="meet_attorneys">
					
					<span class="meet_attorney_title"><?php the_field( 'meet_attorneys_title' ); ?></span><!-- meet_attorney_title -->
					
					<a class="att_button" href="<?php the_field( 'meet_flora_page_link' ); ?>">Attorney Flora Stuart</a><!-- att_button -->
					
					<a class="att_button" href="<?php the_field( 'meet_kent_page_link' ); ?>">Attorney Kent Brown</a><!-- att_button -->
					
				</div><!-- meet_attorneys -->
				
			</div><!-- sec_three_bottom -->
	
</section><!-- section_three -->