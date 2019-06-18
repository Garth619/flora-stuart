<footer id="footer_trigger">
	
	<div class="footer_inner">
		
		<div class="field_trip_wrapper">
			
			<div class="field_trip_inner">
				
			<div class="footer_play_wrapper">
				
				<a href="https://www.youtube.com/embed/<?php the_field( 'footer_youtube_video','option'); ?>?autoplay=1" data-lity>
				
					<img class="footer_redline" data-src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
				
					<div class="play_image_wrapper">
						
						<?php $footer_video_image = get_field( 'footer_video_image','option'); ?>

						<img class="play_image" data-src="<?php echo $footer_video_image['url']; ?>" alt="<?php echo $footer_video_image['alt']; ?>" />
					
					</div><!-- play_image_wrapper -->
					
					<span class="play_tri"></span><!-- play_tri -->
				
				</a>
				
			</div><!-- footer_play_wrapper -->
			
			<?php $poppy_image = get_field( 'poppy_image','option'); ?>

			<img class="poppy_img" data-src="<?php echo $poppy_image['url']; ?>" alt="<?php echo $poppy_image['alt']; ?>" />
			
			<span class="poppy_title"><?php the_field( 'poppy_title' ); ?></span><!-- poppy_title -->
			
			<span class="comm_description"><?php the_field( 'community_description','option'); ?></span><!-- comm_description -->
			
			<a class="visit_comm" href="<?php the_field( 'community_button_page_link','option'); ?>"><?php the_field( 'community_button_verbaige','option'); ?></a><!-- visit_comm -->
			
			
			
			</div><!-- field_trip_inner -->
			
		</div><!-- field_trip_wrapper -->
		
		<div class="footer_locations">
			
			<span class="footer_location_title">Phone</span><!-- footer_location_title -->
			
			<a class="footer_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone', 'option')); ?>"><span><?php the_field( 'call_247','option'); ?></span> <span><?php the_field( 'firm_phone','option'); ?></span></a>
			
			<span class="footer_location_title">Office Locations</span><!-- footer_location_title -->
			
			<div class="locations">
				
				<div class="single_location">
					
					<span class="address"><?php the_field( 'firm_glasgow_street_address','option'); ?></span><!-- address -->
					
					<a class="get_directions" href="<?php the_field( 'firm_glasgow_directions_link','option'); ?>" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
					
				</div><!-- single_location -->
				
				<div class="single_location">
					
					<span class="address"><?php the_field( 'firm_bowling_green_street_address','option'); ?></span><!-- address -->
					
					<a class="get_directions" href="<?php the_field( 'firm_bowling_green_link','option'); ?>" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
					
				</div><!-- single_location -->
				
			</div><!-- locations -->
			
		</div><!-- footer_locations -->
		
		<div id="consultation" class="footer_form">
			
			<div class="footer_form_inner">
				
				<span class="form_title">
				
					<?php the_field( 'footer_form_verbaige','option'); ?>
				
<!-- 					Request<br class="mobile"/> your <strong>free</strong><br class="tablet"/> case<br class="mobile"/> evaluation -->
				
				</span>
				
				<span class="form_disclaimer"><?php the_field( 'footer_form_description','option'); ?></span><!-- form_disclaimer -->
			
				<?php gravity_form(1, false, false, false, '', true, 1255); ?>
				
				<span class="myrequired">*All Fields Required</span><!-- myrequired -->
			
			</div><!-- footer_form_inner -->
			
		</div><!-- footer_form -->
		
	</div><!-- footer_inner -->
	
	<div class="copyright">
		
		<ul>
			<li>&copy; <?php echo date("Y"); ?> <?php the_field( 'copyright','option'); ?></li>
			<?php if(get_field('privacy_policy','option')) { ?>
				<li><a href="<?php the_field( 'privacy_policy','option'); ?>">Privacy Policy</a></li>
			<?php } ?>
			<?php if(get_field('disclaimer','option')) { ?>
				<li><a href="<?php the_field( 'disclaimer','option'); ?>">Disclaimer</a></li>
			<?php } ?>
		</ul>
		
		<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
			
			<img data-src="<?php bloginfo('template_directory');?>/images/footer_logo-01.svg"/>
			
		</a><!-- ilawyer -->
		
	</div><!-- copyright -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
