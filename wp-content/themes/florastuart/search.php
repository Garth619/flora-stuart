<?php get_header(); ?>




<div id="internal_trigger" class="internal_main">
	
	<?php get_template_part( 'page-templates/template', 'banner' ); ?>
		
	<div class="internal_wrapper">
		
		<div class="internal_container two_col">
			
			<div class="internal_content content">
				
				<?php if ( have_posts() ) : ?>
				
				<?php if($paged >= 2) : ?>
				
					<h1 class="internal_header">Page <?php echo $paged;?> <?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1><!-- internal_header -->
				
					<?php else: ?>
					
					<h1 class="internal_header"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1><!-- internal_header -->
					
				<?php endif;?>
				
				<?php get_template_part( 'loop', 'search' ); ?>
				
				<?php else : ?>
				
					<h1 class="internal_header">Nothing Found</h1>
					
					<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
						
					<div class="search_page_wrapper">
					
						<?php get_search_form(); ?>
					
					</div><!-- search_page_wrapper -->
					
					<?php endif; ?>			

				</div><!-- internal_content -->
			
			<?php get_sidebar(); ?>
			
		</div><!-- internal_container -->
		
	</div><!-- internal_wrapper -->
	
</div><!-- internal_main -->
		

			
		
<?php get_footer(); ?>



