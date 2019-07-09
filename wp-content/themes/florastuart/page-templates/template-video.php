<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_trigger" class="internal_main">
	
	<h1 class="internal_centered_header"><?php the_title();?></h1><!-- internal_centered_header -->
	
	<div class="internal_wrapper">
		
		<div class="video_center_wrapper">
			
			<?php if(get_field('single_video')): ?>
			 
				<?php while(has_sub_field('single_video')): ?>
			 
					<div class="single_video">
				
						<a href="https://www.youtube.com/embed/<?php the_sub_field( 'youtube_video' ); ?>?autoplay=1" data-lity>
				
							<div class="single_video_thumb_wrapper">
								
								<?php $video_thumb_ = get_sub_field( 'video_thumb_' ); ?>
								
								<?php if ( $video_thumb_ ) : ?>
								
									<img class="single_video_thumb" src="<?php echo $video_thumb_['url']; ?>" alt="<?php echo $video_thumb_['alt']; ?>" />
									
									<?php else: ?>
								
									<img class="single_video_thumb" src="https://img.youtube.com/vi/<?php the_sub_field( 'youtube_video' ); ?>/hqdefault.jpg" alt="<?php the_sub_field( 'title' ); ?> Thumb" />
								
								<?php endif ?>
								
								<div class="single_video_overlay">
							
								<div class="single_video_play_wrapper">
			
									<div class="play_outer">
				
										<div class="play_inner"></div><!-- play_inner -->
				
									</div><!-- play_outer -->
			
								</div><!-- single_video_play_wrapper -->
							
						</div><!-- single_video_overlay -->
					
					</div><!-- video_thumb_wrapper -->
					
					<span class="single_video_title"><?php the_sub_field( 'title' ); ?></span><!-- single_video_title -->
				
				</a>
				
			</div><!-- single_video -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- video_center_wrapper -->
				
	</div><!-- internal_wrapper -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
