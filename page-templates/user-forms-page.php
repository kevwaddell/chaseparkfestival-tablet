<?php 
/*
Template Name: User login page template
*/
 ?>

<?php get_header('user'); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<main class="user-outer-wrap"> 
	<div class="wrap-center">
		
			<div class="user-form">
				<?php the_content(); ?>
			</div>
			
	</div>
</main><!-- #main-content -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer('user'); ?>