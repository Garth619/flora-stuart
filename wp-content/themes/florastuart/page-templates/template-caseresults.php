<?php 

/* Template Name: Case Results */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<h1 class="internal_centered_header">Millions in Settlements</h1><!-- internal_centered_header -->
		
		<div class="cr_grid">
			
			<?php if(get_field('case_results_page')): ?>
			 
				<?php while(has_sub_field('case_results_page')): ?>
				
					<div class="single_cr_pair">
			 
						<?php if(get_sub_field('case_results_amount')) {?>
					
							<div class="single_cr info">
				
								<div class="inner_cr_content">
					
									<span class="single_cr_amount"><?php the_sub_field( 'case_results_amount' ); ?></span><!-- single_cr_amount -->
					
									<span class="single_cr_type"><?php the_sub_field( 'case_results_type' ); ?></span><!-- single_cr_type -->
					
									<span class="single_cr_description"><?php the_sub_field( 'case_results_excerpt' ); ?></span><!-- single_cr_description -->
						
									<span class="single_cr_description full"><?php the_sub_field( 'case_results_overlay_description' ); ?></span><!-- single_cr_description -->
					
									<span class="single_cr_read_more">Read More</span><!-- single_cr_read_more -->
					
								</div><!-- inner_cr_content -->
				
							</div><!-- single_cr -->
					
							<?php } ?>
					
							<?php $case_results_image = get_sub_field( 'case_results_image' ); ?>
					
							<?php if ( $case_results_image ) { ?>
					
								<div class="single_cr image">
				
									<img src="<?php echo $case_results_image['url']; ?>" alt="<?php echo $case_results_image['alt']; ?>" />
				
								</div><!-- single_cr -->
						
							<?php } ?>
					
						</div><!-- single_cr_pair -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- cr_grid -->
		
</div><!-- internal_main -->
					
<div class="cr_overlay">
	
	<div class="cr_overlay_inner">
		
		<div class="cr_close"></div><!-- cr_close -->
		
		<span class="cr_overlay_amount"></span><!-- cr_overlay_amount -->
		
		<span class="cr_overlay_type"></span><!-- cr_overlay_type -->
		
		<span class="cr_overlay_description"></span><!-- cr_overlay_description -->
		
	</div><!-- cr_overlay_inner -->
	
</div><!-- cr_overlay -->


<?php get_footer(); ?>
