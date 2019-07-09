<?php 

/* Template Name: PA Directory */

get_header(); ?>


	<div id="internal_trigger" class="internal_main">
	
		<h1 class="internal_centered_header"><?php the_title();?></h1><!-- internal_centered_header -->
		
		<div class="pa_directory">
			
			<div class="pa_inner">
			
			<div class="pa_col">
				
				<?php if(get_field('pa_box')): ?>
				 
					<?php while(has_sub_field('pa_box')): ?>
				 
						<div class="pa_directory_box">
				
							<div class="pa_img">
				
								<?php $pa_image = get_sub_field( 'pa_image' ); ?>
								
								<?php if ( $pa_image ) { ?>
								
									<img src="<?php echo $pa_image['url']; ?>" alt="<?php echo $pa_image['alt']; ?>" />
								
								<?php } ?>
				
							</div><!-- pa_img -->
				
							<div class="pa_lower_content">
					
								<h2><?php the_sub_field( 'pa_title' ); ?></h2>
								
								<?php if(get_sub_field('pa_subtitles')): ?>
								
									<ul>
								 
									<?php while(has_sub_field('pa_subtitles')): ?>
								 
										<li><a href="<?php the_sub_field( 'pa_page_link' ); ?>"><?php the_sub_field( 'pa_subtitle' ); ?></a></li>
								    
									<?php endwhile; ?>
									
									</ul>
								 
								<?php endif; ?>
					
							</div><!-- pa_lower_content -->
				
						</div><!-- pa_directory_box -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
			</div><!-- pa_col -->
			
			<div class="pa_col">
			
				<?php if(get_field('pa_box_two')): ?>
				 
					<?php while(has_sub_field('pa_box_two')): ?>
				 
						<div class="pa_directory_box">
				
							<div class="pa_img">
				
								<?php $pa_image = get_sub_field( 'pa_image' ); ?>
								
								<?php if ( $pa_image ) { ?>
								
									<img src="<?php echo $pa_image['url']; ?>" alt="<?php echo $pa_image['alt']; ?>" />
								
								<?php } ?>
				
							</div><!-- pa_img -->
				
							<div class="pa_lower_content">
					
								<h2><?php the_sub_field( 'pa_title' ); ?></h2>
								
								<?php if(get_sub_field('pa_subtitles')): ?>
								
									<ul>
								 
									<?php while(has_sub_field('pa_subtitles')): ?>
								 
										<li><a href="<?php the_sub_field( 'pa_page_link' ); ?>"><?php the_sub_field( 'pa_subtitle' ); ?></a></li>
								    
									<?php endwhile; ?>
									
									</ul>
								 
								<?php endif; ?>
					
							</div><!-- pa_lower_content -->
				
						</div><!-- pa_directory_box -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			
			</div><!-- pa_col -->
			
			<div class="pa_col">
				
				<?php if(get_field('pa_box_three')): ?>
				 
					<?php while(has_sub_field('pa_box_three')): ?>
				 
						<div class="pa_directory_box">
				
							<div class="pa_img">
				
								<?php $pa_image = get_sub_field( 'pa_image' ); ?>
								
								<?php if ( $pa_image ) { ?>
								
									<img src="<?php echo $pa_image['url']; ?>" alt="<?php echo $pa_image['alt']; ?>" />
								
								<?php } ?>
				
							</div><!-- pa_img -->
				
							<div class="pa_lower_content">
					
								<h2><?php the_sub_field( 'pa_title' ); ?></h2>
								
								<?php if(get_sub_field('pa_subtitles')): ?>
								
									<ul>
								 
									<?php while(has_sub_field('pa_subtitles')): ?>
								 
										<li><a href="<?php the_sub_field( 'pa_page_link' ); ?>"><?php the_sub_field( 'pa_subtitle' ); ?></a></li>
								    
									<?php endwhile; ?>
									
									</ul>
								 
								<?php endif; ?>
					
							</div><!-- pa_lower_content -->
				
						</div><!-- pa_directory_box -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
			</div><!-- pa_col -->
			
			</div><!-- pa_inner -->
						
		</div><!-- pa_directory -->
		
	</div><!-- internal_main -->
	
		


<?php get_footer(); ?>
