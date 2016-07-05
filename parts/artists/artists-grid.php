<?php
$this_year = date('Y', time());
$last_year = date('Y', strtotime('last year'));

$artists_args = array(
'post_type'	=> 'artist_page',
'post_parent'	=> $post->ID,
'posts_per_page'	=> -1,
'orderby'	=> 'menu_order',
'order'	=> 'ASC'
);	

$artists = get_posts($artists_args);
//echo '<pre class="debug">';print_r($artists);echo '</pre>';
$current_y_post_args = array(
	'post_type'	=> 'artist_page',
	'meta_key'	=> 'festival_year',
	'meta_value'	=> $this_year,
	'post_parent'	=> 0
);	
$current_y_post = get_posts($current_y_post_args);

$more_artists_args = array(
	'post_type'	=> 'artist_page',
	'post_parent'	=> 0,
	'exclude'	=> $post->ID,
	'meta_key'	=> 'festival_year',
	'meta_value'	=> $last_year,
	'meta_compare'	=> '<=',
);	

$more_artists = get_posts($more_artists_args);

if ($post->ID != $current_y_post[0]->ID) {
array_unshift($more_artists, $current_y_post[0]);	
}


//echo '<pre class="debug">';print_r($more_artists);echo '</pre>';

?>
<?php if ( $artists ) { ?>
<main id="main-content">
	
	<section id="artist-posts">
		<header class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber text-center">
			<h1><?php echo get_the_title($post); ?></h1>
		</header>
		
	<?php foreach ( $artists as $post ) : setup_postdata( $post ); ?>
		<article class="grid-item" style="background-image: url(<?php bg_img($post); ?>)">
			<a href="<?php the_permalink(); ?>">
				<span class="text-uppercase tk-azo-sans-uber text-center block"><?php the_title(); ?></span>
			</a>
		</article>
	<?php endforeach; 
		wp_reset_postdata();?>
	
	</section>
<?php } else { ?>
<main id="main-content"<?php echo ($post->post_parent == 0) ? ' class="notes-bg-orange"':''; ?>>
	<?php get_template_part( 'parts/artists/artists', 'message' ); ?>
<?php } ?>
</main>

<?php if ($more_artists ) { ?>
<nav class="more-links">
	<?php foreach ($more_artists as $ma) { ?>
		<a href="<?php echo get_permalink($ma->ID); ?>" class="text-uppercase tk-azo-sans-uber">
			<span class="block container"><?php echo get_the_title($ma); ?></span>
		</a>
	<?php } ?>	
</nav>	
<?php } ?>
