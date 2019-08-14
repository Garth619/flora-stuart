<div class="internal_banner">
		
		<div class="internal_banner_content">
			
			<?php if(get_field('banner_title_default')) : ?>
				
					<span class="banner_title"><?php the_field('banner_title_default');?></span>
				
					<?php else:?>
				
					<span class="banner_title"><?php the_field( 'internal_banner_text','option'); ?></span><!-- banner_title -->
					
				<?php endif;?>
				
				<a class="internal_button" href="#consultation">
			
				<span>Request Free Evaluation</span>
					
				<img src="<?php bloginfo('template_directory');?>/images/arrow.svg"/>
			
			</a><!-- internal_button -->
			
		</div><!-- internal_banner_content -->
			
			<?php $internal_banner_image_default_override = get_field( 'internal_banner_image_default_override' ); ?>
			
			<?php $internal_banner_image = get_field( 'internal_banner_image','option'); ?>
			
			<?php if ( $internal_banner_image_default_override ) : ?>
			
			<img class="banner_bg" src="<?php echo $internal_banner_image_default_override['url']; ?>" alt="<?php echo $internal_banner_image_default_override['alt']; ?>" />
			
			<?php else: ?>
			
			<img class="banner_bg" src="<?php echo $internal_banner_image['url']; ?>" alt="<?php echo $internal_banner_image['alt']; ?>" />
			
			<?php endif; ?>
		
		</div><!-- internal_banner -->
