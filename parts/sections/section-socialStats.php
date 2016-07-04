<?php
$facebook_stat = get_field('facebook_stat', 'options');
$twitter_stat = get_field('twitter_stat', 'options');	
$social_links = get_field('gbl_social_links', 'options');	
?>

<div class="social-media-stats text-center">
	<h3 class="tk-azo-sans-uber txt-col-orange">Social Media statistsics</h3>
	<p class="bold txt-col-blue-dk">Sponsors have the opportunity to reach</p>
	<div class="row">
		<div class="col-xs-6">
			<div class="social-stat-wrap bg-col-facebook">
				<i class="fa fa-facebook fa-3x bg-col-wht mag-bot-10 txt-col-facebook"></i>
				<a href="<?php echo $social_links[0]['link_url']; ?>" target="_blank" class="block label text-uppercase" rel="nofollow">ChaseParkFestival</a>
				<span class="stat-number block tk-azo-sans-uber txt-col-orange"><?php echo $facebook_stat; ?></span>
				<span class="block label text-uppercase">Likes</span>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="social-stat-wrap bg-col-twitter">
				<i class="fa fa-twitter fa-3x bg-col-wht mag-bot-10 txt-col-twitter"></i>
				<a href="<?php echo $social_links[1]['link_url']; ?>" target="_blank" class="block label text-uppercase" rel="nofollow">ChaseParkFest</a>
				<span class="stat-number block tk-azo-sans-uber txt-col-orange"><?php echo $twitter_stat; ?></span>
				<span class="block label text-uppercase">Followers</span>
			</div>
		</div>
	</div>
</div>