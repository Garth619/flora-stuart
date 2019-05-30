<?php get_header(); ?>



		

		
				
			

				
<div id="internal_trigger" class="internal_main">
	
	<div class="internal_banner">
		
		<div class="internal_banner_content">
			
			<span class="banner_title">The law firm that cares about you</span><!-- banner_title -->
			
			<a class="internal_button" href="#consultation">
				
				<span>Request Free Evaluation</span>
				
				<img src="<?php bloginfo('template_directory');?>/images/arrow.svg"/>
			
			</a><!-- internal_button -->
			
		</div><!-- internal_banner_content -->
		
		<img class="banner_bg" src="<?php bloginfo('template_directory');?>/images/intl_blog_header.jpg"/>
		
	</div><!-- internal_banner -->
	
	<div class="internal_wrapper">
		
		<div class="internal_container two_col">
			
			<div class="internal_content content">
				
			<?php
				if ( have_posts() )
				
				the_post();
			?>

			<h1 class="internal_header">
			
				<?php if ( is_day() ) : ?>
					
					<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
					
				<?php elseif ( is_month() ) : ?>
				
					<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
				
				<?php elseif ( is_year() ) : ?>
				
					<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
				
				<?php else : ?>
					
					<?php _e( 'Blog Archives', 'twentyten' ); ?>
					
				<?php endif; ?>
			
			</h1>
		
			<div class="blog_feed">
				
					<?php
		rewind_posts();

	
	get_template_part( 'loop', 'index' );
?>
				
				</div><!-- blog_feed -->
				
			</div><!-- internal_content -->
			
						
			<?php get_sidebar('blog'); ?>
			
		</div><!-- internal_container -->
		
	</div><!-- internal_wrapper -->
	
</div><!-- internal_main -->



<?php get_footer(); ?>


		




