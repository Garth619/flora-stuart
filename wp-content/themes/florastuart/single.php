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
				
				<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
				
				<div class="blog_feed">
				
					<?php get_template_part( 'loop', 'single' );?>
				
				</div><!-- blog_feed -->
				
			</div><!-- internal_content -->
			
						
			<?php get_sidebar('blog'); ?>
			
		</div><!-- internal_container -->
		
	</div><!-- internal_wrapper -->
	
</div><!-- internal_main -->
			
	


<?php get_footer(); ?>




