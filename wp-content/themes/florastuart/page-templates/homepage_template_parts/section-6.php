<section id="section_six">
	
	<div class="sec_six_inner">
		
		<span class="sec_six_title">
			
			<?php the_field( 'section_six_title' ); ?>
		
<!-- 			We have<br/> recovered millions<br/> in settlements<br/> & verdicts -->
		
		</span><!-- sec_six_title -->
		
		<a class="sec_six_button" href="<?php the_field( 'section_six_button_link' ); ?>"><?php the_field( 'section_six_button_verbiage' ); ?></a><!-- sec_six_button -->
		
		<div class="sec_six_grid">
			
			<?php if(get_field('section_six_case_results')): ?>
			 
				<?php while(has_sub_field('section_six_case_results')): ?>
				
					<?php if(get_sub_field('amount')) {?>
				
						<div class="sec_six_box">
				
							<span class="case_title"><?php the_sub_field( 'amount' ); ?></span><!-- case_title -->
				
							<span class="case_type"><?php the_sub_field( 'type' ); ?></span><!-- case_type -->
				
							<span class="case_description"><?php the_sub_field( 'description' ); ?></span><!-- case_description -->
				
						</div><!-- sec_six_box -->
					
					<?php } ?>
					
					<?php $case_result_image = get_sub_field( 'case_result_image' ); ?>
					
					<?php if ( $case_result_image ) { ?>
			
						<div class="sec_six_box">
				
							<img data-src="<?php echo $case_result_image['url']; ?>" alt="<?php echo $case_result_image['alt']; ?>" />
				
						</div><!-- sec_six_box -->
			 
					<?php } ?>
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
		</div><!-- sec_six_grid -->
		
	</div><!-- sec_six_inner -->
	
</section><!-- section_six -->