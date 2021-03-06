<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<style>

@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700,700i,900&display=swap');

@import url("https://use.typekit.net/zji7bks.css");

<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	<?php if(is_page_template('page-templates/template-home.php')) { ?>
	
	<header class="front_page">
		
		<div class="header_left">
			
			<a class="logo" href="<?php bloginfo('url');?>">
				
				<?php $firm_logo = get_field( 'firm_logo','option'); ?>
				
				<img src="<?php echo $firm_logo['url']; ?>" alt="<?php echo $firm_logo['alt']; ?>" />
	
			</a><!-- logo -->
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<div class="phone_wrapper">
				
				<span><?php the_field( 'call_247','option'); ?></span>
				
				<span><?php the_field( 'no_fee_unless_you_win','option'); ?></span>
				
				<a class="phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone', 'option')); ?>"><?php the_field( 'firm_phone','option'); ?></a>
				
			</div><!-- phone_wrapper -->
			

			<nav>
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
				
			</nav>
		
			
		</div><!-- header_right -->
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
			<span class="menu_title">Menu</span><!-- menu_bar -->
			
		</div><!-- menu_wrapper -->
		
		<div class="menu_close">
			
			<span class="close"></span><!-- close -->
			
		</div><!-- menu_close -->
		
	</header><!-- front_page -->
	
	<?php }
	
	
	if(! is_page_template('page-templates/template-home.php')) { ?>
	
	
		<header class="internal">
			
			<div class="int_header_left">
				
				<a class="int_logo" href="<?php bloginfo('url');?>">
					
					<?php $firm_logo = get_field( 'firm_logo','option'); ?>
				
					<img src="<?php echo $firm_logo['url']; ?>" alt="<?php echo $firm_logo['alt']; ?>" />
					
				</a><!-- int_logo -->
				
			</div><!-- int_header_left -->
			
			<div class="internal_nav">
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
				
			</div><!-- internal_nav -->
			
			<div class="int_header_right">
				
				<div class="int_header_right_inner">
				
					<span class="int_call"><?php the_field( 'call_247','option'); ?></span><!-- no_fees -->
				
					<span class="no_fees"><?php the_field( 'no_fee_unless_you_win','option'); ?></span><!-- no_fees -->
				
					<a class="int_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone', 'option')); ?>"><?php the_field( 'firm_phone','option'); ?></a><!-- int_phone -->
				
				</div><!-- int_header_right_inner -->
				
			</div><!-- int_header_right -->
			
			<div class="menu_wrapper">
			
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
			
				<span class="menu_title">Menu</span><!-- menu_bar -->
			
			</div><!-- menu_wrapper -->
			
			<div class="menu_close">
			
				<span class="close"></span><!-- close -->
			
			</div><!-- menu_close -->
			
		</header>
	
	
	<?php } ?>

			