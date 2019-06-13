<?php get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	<?php get_template_part( 'page-templates/template', 'banner' ); ?>
		
	<div class="internal_wrapper">
		
		<div class="internal_container two_col">
			
			<div class="internal_content content">
				
				<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
				
				<?php get_template_part( 'loop', 'page' ); ?>
				
			</div><!-- internal_content -->
			
						
			<?php get_sidebar(); ?>
			
		</div><!-- internal_container -->
		
	</div><!-- internal_wrapper -->
	
</div><!-- internal_main -->
		

<?php get_footer(); ?>
