<?php get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<?php get_template_part( 'page-templates/template', 'banner' ); ?>
	
	<div class="internal_wrapper">
		
		<div class="internal_container two_col">
			
			<div class="internal_content content">
				
				<h1 class="internal_header"><?php the_field( 'blog_title','option'); ?></h1><!-- internal_header -->
				
				<div class="blog_feed">
				
					<?php get_template_part( 'loop', 'index' ); ?>
				
				</div><!-- blog_feed -->
				
			</div><!-- internal_content -->
			
						
			<?php get_sidebar('blog'); ?>
			
		</div><!-- internal_container -->
		
	</div><!-- internal_wrapper -->
	
</div><!-- internal_main -->
		

<?php get_footer(); ?>
