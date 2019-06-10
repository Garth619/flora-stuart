<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>


<div id="internal_trigger" class="internal_main">
	
	
	<div class="internal_wrapper">
		
		<div class="contact_wrapper">
			
			<div class="contact_left">
				
				<h1 class="contact_header"><?php the_title();?></h1><!-- contact_header -->
				
				<div class="contact_phone_row">
					
					<span class="contact_title">Phone</span><!-- contact_title -->
					
					<a class="contact_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('phone_number')); ?>"><?php the_field( 'phone_number_verbiage' ); ?> <?php the_field( 'phone_number' ); ?></a><!-- contact_phone -->
					
				</div><!-- contact_phone_row -->
				
				<span class="contact_title locations">Office Locations</span><!-- contact_title -->
				
				<div class="office_locations_row">
					
					<div class="contact_single_location">
						
						<span class="contact_address"><?php the_field( 'address_one' ); ?></span><!-- contact_address -->
						
						<a class="contact_get_directions" href="<?php the_field( 'address_one_link' ); ?>" target="_blank" rel="noopener">Get Directions</a><!-- contact_get_directions -->
						
					</div><!-- contact_single_location -->
					
					<div class="contact_single_location">
						
						<span class="contact_address"><?php the_field( 'address_two' ); ?></span><!-- contact_address -->
						
						<a class="contact_get_directions" href="<?php the_field( 'address_two_link' ); ?>" target="_blank" rel="noopener">Get Directions</a><!-- contact_get_directions -->
						
					</div><!-- contact_single_location -->
					
				</div><!-- office_locations_row -->
				
			</div><!-- contact_left -->
			
			<div class="contact_right">
				
				<?php $contact_image = get_field( 'contact_image' ); ?>
				
				<img src="<?php echo $contact_image['url']; ?>" alt="<?php echo $contact_image['alt']; ?>" />
				
			</div><!-- contact_right -->
			
		</div><!-- contact_wrapper -->
				
	</div><!-- internal_wrapper -->
	
	<div class="google_map">
		
		<?php the_field( 'iframe' ); ?>
		
	</div><!-- google_map -->
	
</div><!-- internal_main -->


			
<?php get_footer(); ?>