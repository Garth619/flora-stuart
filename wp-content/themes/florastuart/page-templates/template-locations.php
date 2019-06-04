<?php 
	
	/* Template Name: Locations */
	
	get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<h1 class="internal_centered_header"><?php the_title();?></h1><!-- internal_centered_header -->
		
	<div class="location_wrapper">
			
			<div class="location_inner">
				
				<?php if(get_field('primary_locations')): ?>
				 
					<?php while(has_sub_field('primary_locations')): ?>
				 
						<div class="single_locations">
					
							<a href="<?php the_sub_field( 'location_page_link' ); ?>">
						
								<div class="single_location_img">
									
									<?php $image = get_sub_field( 'image' ); ?>
									
									<?php if ( $image ) { ?>
									
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									
									<?php } ?>
							
								</div><!-- single_location_img -->
						
								<div class="single_location_content">
							
									<span class="location_title"><?php the_sub_field( 'location_title' ); ?></span><!-- location_title -->
							
									<span class="location_adress"><?php the_sub_field( 'location_address' ); ?></span><!-- location_adress -->
							
								</div><!-- single_location_content -->
						
							</a>
					
						</div><!-- single_locations -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- location_inner -->
			
	</div><!-- location_wrapper -->
	
	<div class="bottom_location_wrapper">
		
		<div class="bottom_location_inner">
			
			<div class="bottom_location_title_wrapper">
				
				<img class="redline" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
				
				<img class="usa" src="<?php bloginfo('template_directory');?>/images/intl_locations_icon-01.svg"/>
				
				<span class="bottom_location_header"><?php the_field( 'bottom_location_header' ); ?></span><!-- bottom_location_header -->
				
				<span class="bottom_location_subheader"><?php the_field( 'bottom_location_subheader' ); ?></span><!-- bottom_location_subheader -->
			</div><!-- bottom_location_title_wrapper -->
			
			<div class="bottom_location_grid">
				
				<?php if(get_field('bottom_locations')): ?>
				 
					<?php while(has_sub_field('bottom_locations')): ?>
				 
						<div class="bottom_single_location">
						
							<a href="<?php the_sub_field( 'location_page_link' ); ?>">
							
								<div class="bottom_location_img">
								
									<?php $image = get_sub_field( 'image' ); ?>
									
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								
									<div class="bottom_location_overlay">
								
										<span>Explore <br/>This Location</span>
								
									</div><!-- bottom_location_overlay -->
								
								</div><!-- bottom_location_img -->
						
								<div class="bottom_location_content">
							
									<span class="bottom_location_title"><?php the_sub_field( 'location_title' ); ?></span><!-- bottom_location_title -->
							
								</div><!-- bottom_location_content -->
							
							</a>
						
						</div><!-- bottom_single_location -->
					
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
					
			</div><!-- bottom_location_grid -->
			
		</div><!-- bottom_location_inner -->
		
	</div><!-- bottom_location_wrapper -->
				
</div><!-- internal_main -->
		

<?php get_footer(); ?>
