<?php get_header(); ?>	

<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
	<div class="container-fluid">
		<h1><?php echo get_the_title( get_option('page_for_posts')); ?></h1>
	</div>
</div>

<?php if ( have_posts() ): ?>
<main id="main-content">
	<section id="blog-posts">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<div class="main-txt">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; ?>
	</section>
<?php else: ?>
<main id="main-content" class="notes-bg-orange"> 
	<?php get_template_part( 'parts/messages/blog', 'message' ); ?>
	
<?php endif; ?>
</main><!-- #main-content -->

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>