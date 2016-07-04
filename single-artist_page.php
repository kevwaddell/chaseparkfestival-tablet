<?php get_header(); ?>	

<?php if ($post->post_parent == 0) { ?>

	<?php get_template_part( 'parts/artists/artists', 'grid' ); ?>
	
<?php } else { ?>
	
	<?php get_template_part( 'parts/artists/artists', 'profile' ); ?>
	
<?php } ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>