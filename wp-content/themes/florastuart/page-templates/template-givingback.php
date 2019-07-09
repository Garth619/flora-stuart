<?php 

/* Template Name: Giving Back */

get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<h1 class="internal_centered_header"><?php the_title();?></h1><!-- internal_centered_header -->
	
	<div class="gb_top_wrapper">
		
		<div class="gb_top_image">
			
			<?php $giving_back_image = get_field( 'giving_back_image' ); ?>
			
			<?php if ( $giving_back_image ) { ?>
				
				<img src="<?php echo $giving_back_image['url']; ?>" alt="<?php echo $giving_back_image['alt']; ?>" />
				
			<?php } ?>
			
		</div><!-- gb_top_image -->
		
		<div class="gb_top_content content">
			
			<?php the_field( 'giving_back_content' ); ?>
			
			
			
		</div><!-- gb_top_content -->
		
	</div><!-- gb_top_wrapper -->
	
	<div class="sponsorship_wrapper">
		
		<div class="sponsorship_inner">
		
			<span class="sponsorship_header"><?php the_field( 'sponsorships_title' ); ?></span><!-- sponsorship_header -->
		
			<div class="sponsorship_list">
				
				<?php if(get_field('featured_sponsorships')): ?>
				 
					<?php while(has_sub_field('featured_sponsorships')): ?>
				 
						<div class="single_sponsorship">
					
							<div class="single_sponsorship_inner">
				
								<span class="single_sponsorship_title"><?php the_sub_field( 'featured_sponsorship_title' ); ?></span><!-- single_sponsorship_title -->
				
								<span class="single_sponsorship_subtitle"><?php the_sub_field( 'featured_sponsorship_subtitle' ); ?></span><!-- single_sponsorship_subtitle -->
					
							</div><!-- single_sponsorship_inner -->
			
						</div><!-- single_sponsorship -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
			</div><!-- sponsorship_list -->
		
		</div><!-- sponsorship_inner -->
		
		<div class="sponsorship_businesses">
			
			<?php if(get_field('sponsorship_lists')): ?>
			
				<ul>
			 
				<?php while(has_sub_field('sponsorship_lists')): ?>
				
					<?php if(get_sub_field('sponsorship_website_link')) :?>
					
						<li><a href="<?php the_sub_field( 'sponsorship_website_link' ); ?>" target="_blank" rel="noopener"><?php the_sub_field( 'sponsorship' ); ?></a></li>
						
						<?php else:?>
						
						<li><?php the_sub_field( 'sponsorship' ); ?></li>
					
					<?php endif;?>
			 
				<?php endwhile; ?>
				
				</ul>
			 
			<?php endif; ?>
			
		</div><!-- sponsorship_businesses -->
		
	</div><!-- sponsorship_wrapper -->
	
	<div class="gb_bottom_wrapper">
		
		<div class="gb_bottom_inner">
			
			<div class="gb_community_header">
			
				<img class="redline" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
			
				<img class="heart" src="<?php bloginfo('template_directory');?>/images/intl_givingback_icon-01.svg"/>
			
				<span class="gb_community_title"><?php the_field( 'we_serve_our_community_title' ); ?></span><!-- gb_community_title -->
			
			</div><!-- gb_community_header -->
			
			<div class="gb_slider_wrapper">
				
				<div class="gb_arrow gb_arrow_left"></div><!-- gb_arrow -->
				
				<div class="gb_slider">
					
					<?php if(get_field('giving_back_slider')): ?>
					 
						<?php while(has_sub_field('giving_back_slider')): ?>
						
							<div class="gb_slide">
						
								<div class="gb_slide_inner">
							
									<?php $giving_back_slide = get_sub_field( 'giving_back_slide' ); ?>
		
									<img src="<?php echo $giving_back_slide['url']; ?>" alt="<?php echo $giving_back_slide['alt']; ?>" />
							
									<div class="gb_slide_overlay">
								
										<span class="gb_slide_caption"><?php the_sub_field( 'image_caption' ); ?></span><!-- gb_slide_caption -->
								
									</div><!-- gb_slide_overlay -->
							
								</div><!-- gb_slide_inner -->
						
							</div><!-- gb_slide -->
							
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- gb_slider -->
				
				<div class="gb_arrow gb_arrow_right"></div><!-- gb_arrow -->
				
			</div><!-- gb_slider_wrapper -->
			
			<div id="poppy-request" class="gb_form_wrapper">
				
				<span class="gb_form_title"><?php the_field( 'invite_poppy_form_title' ); ?></span><!-- gb_form_title -->
				
				<div class="gb_form">
					
					<?php gravity_form(5, false, false, false, '', true, 42444); ?>
					
					<span class="poppy_required">*All Fields Required</span><!-- poppy_required -->
					
				</div><!-- gb_form -->
				
			</div><!-- gb_form_wrapper -->
			
		</div><!-- gb_bottom_inner -->
		
	</div><!-- gb_bottom_wrapper -->
	
</div><!-- internal_main -->
		
	


<?php get_footer(); ?>
