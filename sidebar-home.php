<?php  
$hp_artist_list_active = get_field('hp_artist_list_active', 'options');	
/* SOCIAL MEDIA LINKS DATA */
$social_links = get_field('gbl_social_links', 'options');	
?>

<aside class="col-xs-5 sidebar">
	<div class="info-panel blue-grad with-icon">
		<i class="icon fa fa-microphone bg-col-blue-dk txt-col-wht text-center"></i>
		<h3 class="txt-col-orange text-center tk-azo-sans-uber">Artist Line up</h3>
		<?php if ($hp_artist_list_active) { 
		$artists = get_field('hp_artists', 'options');		
		?>
		
		<ul class="artist-list list-unstyled text-center text-uppercase mag-bot-0">
			<?php foreach ($artists as $artist) { ?>
			<li>
			<?php if (get_post_status ( $artist['artist'] ) == 'publish') { ?>
				<a href="<?php echo get_permalink($artist['artist']); ?>">
				<?php if (empty($artist['logo'])) { ?>
				<?php echo get_the_title($artist['artist']); ?>	
				<?php } else { ?>
				<img src="<?php echo $artist['logo']['sizes']['large']; ?>" alt="<?php echo get_the_title($artist['artist']); ?>" />
				<?php } ?>
				</a>		
			<?php } else { ?>
				<span class="txt-col-wht"><?php echo get_the_title($artist['artist']); ?></span>
			<?php } ?>
			</li>
			<?php } ?>
		</ul>

		<?php } else { ?>
		<div class="well text-center bg-col-orange txt-col-wht bold">
			
			<figure class="line-up-img">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/_/img/line-up-panel-imgs.png" class="img-responsive" />
			</figure>
			
			<p>The line up for this years <span class="txt-col-blue-dk">Chase Park Festival</span> will be available soon.</p>
			
			<?php if ($social_links) { ?>
			<p>Keep up to date by following us on <span class="txt-col-blue-dk">Twitter</span> or Liking us on <span class="txt-col-blue-dk">Facebook</span></p>
			
			<div class="social-links">
				<?php foreach ($social_links as $link) { ?>
					<a href="<?php echo $link['link_url']; ?>" target="_blank"><i class="fa <?php echo $link['link_icon']; ?>"></i><span class="sr-only"><?php echo $link['link_title']; ?></span></a>
				<?php } ?>
			</div>
			<?php } ?>
			
		</div>
		<?php } ?>
				
	</div>
</aside>