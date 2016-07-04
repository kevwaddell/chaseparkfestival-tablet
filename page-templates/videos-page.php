<?php 
/*
Template Name: Videos page template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<?php  
$year = date("Y", time());
$videos_active = get_field('videos_active');
?>
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
	<div class="container-fluid">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<main id="main-content"> 
	<div class="container-fluid">
<?php if ($videos_active) { ?>
<?php  
$videos = get_field('videos');	
global $wp_embed;
$video_counter = 0;
?>
	<article <?php post_class('pg-content'); ?>>

		<section id="videos-section" class="video-grid">
			<div class="row">
				<?php foreach ($videos as $video) { 
				$video_counter++;
				?>
					<div class="col-xs-6 video-wrap">
						<h3 class="txt-col-blue text-center"><?php echo $video['video_title']; ?></h3>
						<iframe width="500" height="281" src="<?php echo $video['video_url']; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php if ($video_counter == 2) { 
			$video_counter;
			?>
			</div>
			<div class="row">		
			<?php } ?>
			
				<?php } ?>
			</div>
		</div>

	</article>

<?php } else { ?>
	<?php get_template_part( 'parts/messages/video', 'message' ); ?>
<?php } ?>	
	</div>

</main><!-- #main-content -->
<?php endwhile; ?>
<?php endif; ?>



<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>