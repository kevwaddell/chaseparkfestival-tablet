<?php get_header(); ?>	

<?php
$artists_pg = get_page_by_title("Artists");
$last_year = date('Y', strtotime('last year'));
$this_year = date('Y', time());
$current_y_post_args = array(
	'post_type'	=> 'artist_page',
	'meta_key'	=> 'festival_year',
	'meta_value'	=> $this_year,
	'post_parent'	=> 0
);	
$current_y_post = get_posts($current_y_post_args);

$prev_y_posts_args = array(
	'post_type'	=> 'artist_page',
	'meta_key'	=> 'festival_year',
	'meta_value'	=> $last_year,
	'meta_compare'	=> '<=',
	'post_parent'	=> 0,
	'post_per_page'	=> 3
);	

$prev_y_posts = get_posts($prev_y_posts_args);

//echo '<pre class="debug">';print_r($prev_y_post);echo '</pre>';

$args = array(
	'post_type'	=> 'artist_page',
	'posts_per_page' => -1,
	'post_parent'	=> $current_y_post[0]->ID,
	'orderby'	=> 'menu_order',
	'order'	=> 'ASC'
);	
$wp_query = new WP_Query( $args );	

$found_posts = $wp_query->found_posts;

//echo '<pre class="debug">';print_r($current_y_post[0]->ID);echo '</pre>';
?>

<main id="main-content"<?php echo ($found_posts == 0) ? ' class="notes-bg-orange border-bot"':''; ?>>
<?php if ( have_posts() ): ?>
	<section id="artist-posts">
		<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber text-center">
			<h1><?php echo get_the_title($artists_pg); ?> <?php echo $this_year; ?></h1>
		</div>
		
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class('grid-item'); ?> style="background-image: url(<?php bg_img($post); ?>)">
			<a href="<?php the_permalink(); ?>">
				<span class="text-uppercase tk-azo-sans-uber text-center block"><?php the_title(); ?></span>
			</a>
		</article>
<?php endwhile; ?>
	</section>
<?php else: ?>

	<?php get_template_part( 'parts/messages/artists', 'message' ); ?>

<?php endif; ?>

</main><!-- #main-content -->

<?php if ($prev_y_posts) { ?>
<nav class="more-links">
	<?php foreach ($prev_y_posts as $prev_y) { ?>
		<a href="<?php echo get_permalink($prev_y->ID); ?>" class="text-uppercase tk-azo-sans-uber">
			<span class="block container"><?php echo get_the_title($prev_y->ID); ?></span>
		</a>
	<?php } ?>	
</nav>	
<?php } ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>