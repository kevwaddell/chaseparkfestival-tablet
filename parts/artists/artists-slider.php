<?php
$artists_args = array(
'post_type'	=> 'artist_page',
'post_parent'	=> $post->post_parent,
'posts_per_page'	=> -1,
'exclude'	=> $post->ID,
'orderby'	=> 'menu_order',
'order'	=> 'ASC'
);	

$artists = get_posts($artists_args);	
?>

<?php if ($artists) { 
$inner_w = 300 * count($artists);
?>
<section id="artists-slider">
	<div class="strip-header bg-col-orange text-uppercase tk-azo-sans-uber">
		<div class="container-fluid">
			<h2 class="txt-col-wht">Artist Profiles</h2>
		</div>
	</div>
	
	<div class="slider-nav-btns">
		<button id="scroller-left-btn" class="hidden" data-direction="left"><i class="fa fa-chevron-left fa-2x"></i><span class="sr-only">Previous</span></button>
		<button id="scroller-right-btn" class="show" data-direction="right"><i class="fa fa-chevron-right fa-2x"></i><span class="sr-only">Next</span></button>
	</div>
	
	<div class="artists-slider-outer">
		<div class="artists-slider-inner" style="width:<?php echo $inner_w; ?>px;">
			<?php foreach ($artists as $artist) { ?>
			<div class="slider-item" style="background-image: url(<?php bg_img($artist, 'medium'); ?>)">
				<a href="<?php echo get_the_permalink($artist); ?>" class="text-center text-uppercase tk-azo-sans-uber"><span><?php echo get_the_title($artist); ?></span></a>
			</div>
			<?php } ?>	
		</div>
	</div>

</section>
<?php } ?>
