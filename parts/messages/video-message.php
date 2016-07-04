<?php  
global $year;
$social_links = get_field('gbl_social_links', 'options');	
?>
<div class="container-fluid">
	<div class="no-content-message text-center">
		
		<figure class="message-img in-block">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/_/img/videos-message-img.png" class="img-responsive" />
		</figure>
		
		<h1 class="text-uppercase txt-col-orange tk-azo-sans-uber">Videos <?php echo $year; ?></h1>
		
		<p>Videos for <span class="txt-col-orange">Chase Park Festival</span> will be available soon.</p>
		
		<?php if ($social_links) { ?>
		<p>Keep up to date by following us on <span class="txt-col-orange">Twitter</span> or Liking us on <span class="txt-col-orange">Facebook</span></p>
		
		<div class="social-links">
			<?php foreach ($social_links as $link) { ?>
				<a href="<?php echo $link['link_url']; ?>" target="_blank"><i class="fa <?php echo $link['link_icon']; ?>"></i><span class="sr-only"><?php echo $link['link_title']; ?></span></a>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
</div>
