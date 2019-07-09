<section id="section_one">
	
	
	<div class="inner_sec_one">
		
		<div class="sec_one_content">
			
			<a class="tablet_logo" href="<?php bloginfo('url');?>">
				
				<?php $firm_logo = get_field( 'firm_logo','option'); ?>
				
				<img src="<?php echo $firm_logo['url']; ?>" alt="<?php echo $firm_logo['alt']; ?>" />
				
			</a><!-- tablet_logo -->
		
			<span class="sec_one_header"><?php the_field( 'section_one_title' ); ?></span><!-- sec_one_header -->
		
			<a class="free_consulation" href="#consultation">
			
				<?php echo file_get_contents("wp-content/themes/florastuart/images/arrow.svg"); ?>
			
			</a><!-- free_consulation -->
		
			<span class="featured_on"><?php the_field( 'featured_story_title' ); ?></span><!-- featured_on -->
		
			<div class="featured_wrapper">
			
				<div class="featured_slider">
					
					<?php if(get_field('featured_story_slider')): ?>
					 
						<?php while(has_sub_field('featured_story_slider')): ?>
					 
							<div class="featured_slide">
						
								<div class="featured_inner_slide">
					
									<?php $logo = get_sub_field( 'logo' ); ?>
		
									<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
						
								</div><!-- featured_inner_slide -->
					
							</div><!-- featured_slide -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				
				</div><!-- featured_slider -->
			
			</div><!-- featured_wrapper -->
		
		</div><!-- sec_one_content -->
		
		<div class="play_wrapper">
			
			<a class="" href="https://www.youtube.com/embed/<?php the_field( 'section_one_youtube_video' ); ?>
?autoplay=1" data-lity>
				
				<img class="play_text" src="<?php bloginfo('template_directory');?>/images/play_text.svg"/>
			
				<div class="play_outer">
				
					<div class="play_inner"></div><!-- play_inner -->
				
				</div><!-- play_outer -->
			
			</a>
			
		</div><!-- play_wrapper -->
		
	</div><!-- inner_sec_one -->



	
	<picture>
	
		<?php 
			
			$desktop_image = get_field( 'desktop_image' ); 
		
			$tablet_image = get_field( 'tablet_image' ); 
		
			$mobile_image = get_field( 'mobile_image' ); 
		
			$mobile_image_webp = get_field( 'mobile_image_webp' );
		
		?>
		
		<source type="image/webp" media="(max-width: 500px)" srcset="<?php echo $mobile_image_webp['url']; ?>">
		
		<source type="image/jpg" media="(max-width: 500px)" srcset="<?php echo $mobile_image['url']; ?>">
			
		<source type="image/jpg" media="(max-width: 935px)" srcset="<?php echo $tablet_image['url']; ?>">
				
		<img class="hero" src="<?php echo $desktop_image['url']; ?>" alt="<?php echo $desktop_image['alt']; ?>"/>
	
	</picture>
	
</section><!-- section_one -->

