<?php get_header(); ?>	
<?php	
if ($wp_query->found_posts % 3 !== 0) {
$place_holders = 3 - ($wp_query->found_posts % 3);
}
?>

<?php if ( have_posts() ): ?>

<main id="main-content">
	<section id="blog-posts">
		<header class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
			<div class="container">
				<h1><?php echo get_the_title( get_option('page_for_posts')); ?></h1>
			</div>
		</header>
	<?php while ( have_posts() ) : the_post(); ?>
		<article class="grid-item" style="background-image: url(<?php bg_img($post); ?>)">
			<a href="<?php the_permalink(); ?>">
				<span class="text-uppercase tk-azo-sans-uber text-center block"><?php the_title(); ?></span>
			</a>
		</article>
		<?php endwhile; ?>
		<?php if ($place_holders > 0) { ?>
			<?php for ($i = 0; $i <  $place_holders; $i++) { ?>
			<div class="grid-item" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/_/img/post-img-placeholder.png'; ?>)"></div>
			<?php } ?>	
		<?php } ?>
	</section>
		
<div class="page-links bg-col-orange">
	<?php wp_pagenavi(); ?>
</div>	
	
<?php else: ?>

<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
	<div class="container">
		<h1><?php echo get_the_title( get_option('page_for_posts')); ?></h1>
	</div>
</div>

<main id="main-content" class="notes-bg-orange"> 
	<?php get_template_part( 'parts/messages/blog', 'message' ); ?>
	
<?php endif; ?>
</main><!-- #main-content -->

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>