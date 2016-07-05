<?php
$social_links = get_field('gbl_social_links', 'options');	
//echo '<pre>';print_r($social_links);echo '</pre>';
?>
<?php if (!empty($social_links)) { ?>
<section class="social-section-links with-pad">
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 col-md-5 col-md-offset-1">
				<a href="<?php echo $social_links[0]['link_url']; ?>" target="_blank" rel="nofollow" class="social-link facebook text-uppercase tk-azo-sans-uber"><i class="fa <?php echo $social_links[0]['link_icon']; ?> fa-3x"></i>Like Chase Park Festival on <span><?php echo $social_links[0]['link_title']; ?></span></a>
			</div>
			<div class="col-xs-6 col-md-5">
				<a href="<?php echo $social_links[1]['link_url']; ?>" target="_blank" rel="nofollow" class="social-link twitter text-uppercase tk-azo-sans-uber"><i class="fa <?php echo $social_links[1]['link_icon']; ?> fa-3x"></i>Follow Chase Park Festival on <span><?php echo $social_links[1]['link_title']; ?></span></a>
			</div>
		</div>
	</div>
	
</section>
<?php } ?>