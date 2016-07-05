<?php
$around_site_text = get_field('around_site_text', 'options');	
?>

<div class="info-panel panel-orange add-min-h mag-bot-30">
	<h3 class="panel-header tk-azo-sans-uber text-center txt-col-orange mag-bot-20">Around the site</h3>
	<div class="panel-inner">
		<div class="panel-imgs-2 mag-bot-20">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/_/img/around-site-left.jpg" width="48%" />
			<img src="<?php bloginfo('stylesheet_directory'); ?>/_/img/around-site-right.jpg" class="pull-right" width="48%" />
		</div>
		
		<div class="panel-text txt-col-wht text-center bold">
			<?php echo $around_site_text; ?>
		</div>
		
	</div>
</div>