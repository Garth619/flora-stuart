<?php get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
<div class="internal_wrapper">
		
	<div class="not_found">
			
		<h1 class="not_found_header">Page Not Found</h1><!-- internal_header -->
		
		<span class="error">Error code 404</span><!-- error -->
		
		<span class="not_found_description">The page you are looking for was either not found or does not exist.<br/> Try refreshing the page or click the button below to go back to the Homepage.</span><!-- not_found_description -->
		
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