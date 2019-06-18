<?php get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
<div class="internal_wrapper">
		
	<div class="not_found">
			
		<h1 class="not_found_header"><?php the_field( 'not_found_title','option'); ?></h1><!-- internal_header -->
		
		<span class="error"><?php the_field( 'error_code','option'); ?></span><!-- error -->
		
		<span class="not_found_description"><?php the_field( 'not_found_description','option'); ?></span><!-- not_found_description -->
		
		<span class="not_found_button" onclick="goBack()">Go Back</span><!-- not_found_button -->
		
		<a class="not_found_button" href="<?php bloginfo('url');?>">Home</a><!-- not_found_button -->
		
	</div><!-- not_found -->
		
</div><!-- internal_wrapper -->
	
</div><!-- internal_main -->

<script type="text/javascript">
	function goBack() {
    window.history.back();
	}
</script>

<?php get_footer(); ?>