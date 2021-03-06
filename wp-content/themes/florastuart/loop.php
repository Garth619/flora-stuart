
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
	<div class="blog_post">
		
		<div class="blog_meta">
		
			<span><?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
			
			<?php echo get_the_category_list();?>
		
		</div><!-- blog_meta -->
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<div class="blog_content">
		
			<?php echo wp_trim_words( get_the_content(), 45, '...' );?>
			
		</div><!-- blog_content -->
		
		<a class="read_more_blog" href="<?php the_permalink();?>">Read More</a><!-- read_more_blog -->
		
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
		
</div><!-- blog_post -->
			
		
<?php endwhile; // end of loop ?>

<?php endif; ?>



<?php wpbeginner_numeric_posts_nav(); ?>



