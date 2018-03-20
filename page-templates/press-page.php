<?php 
/*
Template Name: Press page template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<?php  
$year = date("Y", time());
$press_active = get_field('press_page_active', 'options');
?>
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber text-center">
	<h1><?php the_title(); ?></h1>
</div>
<main id="main-content"> 
	<div class="container-fluid">
<?php if ($press_active) { ?>
<?php  
$past_media_coverage = get_field('past_media_coverage', 'options');
$media_coverage = get_field('media_coverage', 'options');	
$press_quotes = get_field('press_quotes', 'options');
?>
		<article <?php post_class('pg-content'); ?>>
	
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						
						<div class="main-txt with-pad">
							<?php the_content(); ?>
							
							<?php get_template_part( 'parts/sections/section', 'socialStats' ); ?>
							
						</div>
	
					</div>
					
					<aside class="col-xs-10 col-xs-offset-1 sidebar mag-bot-50">
												
						<?php get_template_part( 'parts/panels/media', 'coverage' ); ?>
						
					</aside>
				</div>
	
		</article>
	</div>
	<?php if (!empty($media_coverage)) { ?>
	<section id="press-section" class="pg-section-full bg-col-orange pad-bot-40">
		<h2 class="section-header text-center bg-col-blue txt-col-wht tk-azo-sans-uber">Media Coverage</h2>		
	</section>		
	<?php } ?>
	
	<?php if (!empty($press_quotes)) { ?>
	<section id="press-quotes" class="pg-section-full blue-dk-border-top bg-col-orange">
		<h2 class="section-header text-center bg-col-blue-dk txt-col-orange tk-azo-sans-uber">What the press say</h2>	
		<div id="carousel-press-quotes" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<?php foreach ($press_quotes as $k => $q) { ?>
				<div class="item<?php echo ($k == 0) ? " active":""; ?>">
					<div class="quote-wrap">
						<div class="media-title text-center bold text-uppercase txt-col-blue-dk"><?php echo $q['media_title']; ?></div>
						<blockquote class="media-quote text-center bold txt-col-blue"><?php echo $q['quote']; ?></blockquote>
						<a href="<?php echo $q['article_link']; ?>" target="_blank" class="media-link block text-center bold" rel="nofollow">View the full article on the <?php echo $q['media_title']; ?> website <i class="fa fa-chevron-right fa-lg pull-right"></i></a>
					</div>
				</div>
				<?php } ?>
			 </div>
		</div>
	</section>		
	<?php } ?>

<?php } else { ?>
<main id="main-content" class="notes-bg-orange"> 
	<?php get_template_part( 'parts/messages/press', 'message' ); ?>
<?php } ?>	


</main><!-- #main-content -->
<?php endwhile; ?>
<?php endif; ?>



<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>