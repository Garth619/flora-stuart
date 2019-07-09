<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	<h1 class="internal_centered_header"><?php the_title();?></h1><!-- internal_centered_header -->
	
	<div class="meet_attorneys_content content">
		
		<div class="meet_attorneys_content_inner">
		
			<?php the_field( 'meet_our_attorneys_content' ); ?>
		
		</div><!-- meet_attorneys_content_inner -->
		
	</div><!-- meet_attorneys_top_content -->
	
	<div class="meet_attorneys_wrapper">
		
		<div class="meet_attorneys_inner">
			
			<?php $attorneys = get_field( 'attorneys' ); ?>
			
			<?php if ( $attorneys ): ?>
			
			<?php foreach ( $attorneys as $post ):  ?>
			
			<?php setup_postdata ( $post ); ?>
					
					<div class="single_attorney">
				
						<a href="<?php the_permalink();?>">
				
							<div class="single_att_img">
					
								<?php $att_bio_image_stuart = get_field( 'att_bio_image_stuart' ); ?>
								
								<?php if ( $att_bio_image_stuart ) { ?>
								
									<img src="<?php echo $att_bio_image_stuart['url']; ?>" alt="<?php echo $att_bio_image_stuart['alt']; ?>" />
								
								<?php } ?>
								
								<?php $att_bio_image = get_field( 'att_bio_image' ); ?>
								
								<?php if ( $att_bio_image ) { ?>
									
									<img src="<?php echo $att_bio_image['url']; ?>" alt="<?php echo $att_bio_image['alt']; ?>" />
								
								<?php } ?>
					
								<div class="single_att_overlay"></div><!-- single_att_overlay -->
					
							</div><!-- single_att_img -->
				
							<div class="single_att_content">
				
								<span class="single_att_name"><?php the_title();?></span><!-- single_att_name -->
								
								<?php if(get_field('att_position_stuart')) { ?>
				
									<span class="single_att_position"><?php the_field( 'att_position_stuart' ); ?></span><!-- single_att_position -->
								
								<?php } ?>
								
								<?php if(get_field('att_position')) { ?>
				
									<span class="single_att_position"><?php the_field( 'att_position' ); ?></span><!-- single_att_position -->
								
								<?php } ?>
				
							</div><!-- single_att_content -->
				
						</a>
				
					</div><!-- single_attorney -->
			
			<?php endforeach; ?>
			
			<?php wp_reset_postdata(); ?>
			
			<?php endif; ?>
			
		</div><!-- meet_attorneys_inner -->
		
	</div><!-- meet_attorneys_wrapper -->
	
	<div class="meet_staff_wrapper">
		
		<div class="meet_staff_inner">
			
			<div class="meet_staff_title">
				
				<img class="redline" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
				
				<img class="law_icon" src="<?php bloginfo('template_directory');?>/images/intl_attorneys_icon-01.svg"/>
				
				<span class="meet_staff_header"><?php the_field( 'meet_our_staff_title' ); ?></span><!-- meet_staff_header -->
				
				<div class="meet_team_grid">
					
					<?php if(get_field('staff')): ?>
					 
						<?php while(has_sub_field('staff')): ?>
					 
							<div class="single_staffer">
						
								<?php $staff_profile_pic = get_sub_field( 'staff_profile_pic' ); ?>
								
								<?php if ( $staff_profile_pic ) : ?>
								
									<img src="<?php echo $staff_profile_pic['url']; ?>" alt="<?php echo $staff_profile_pic['alt']; ?>" />
								
								<?php else:?>
								
									<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Placeholder Image"/>
								
								<?php endif; ?>
						
								<span class="staffer_name"><?php the_sub_field( 'staff_name' ); ?></span><!-- staffer_name -->
						
								<span class="staffer_position"><?php the_sub_field( 'staff_position' ); ?></span><!-- staffer_position -->
						
							</div><!-- single_staffer -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- meet_team_grid -->
				
			</div><!-- meet_staff_title -->
			
		</div><!-- meet_staff_inner -->
		
	</div><!-- meet_staff_wrapper -->

</div><!-- internal_main -->


<?php get_footer(); ?>
