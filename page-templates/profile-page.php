<?php 
/*
Template Name: User profile page template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber text-center">
	<h1><?php the_title(); ?></h1>
</div>

<main id="main-content" class="notes-bg-orange"> 
	<div class="container-fluid">
		<article <?php post_class('pg-content'); ?>>
		
			<div class="main-txt">
				<?php the_content(); ?>
			</div>
			
		</article>
	</div>
</main><!-- #main-content -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>