<?php  
$hp_info_txt = get_field('hp_info_txt', 'options');	
?>

<?php if ($hp_info_txt != "") { ?>

<section class="col-panel bg-col-blue-dk">
	<div class="container-fluid rel">
		<div class="panel-imgs offset-imgs" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/_/img/hp-panel-imgs.png)"></div>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-1 col-md-7 col-md-offset-5">
				<div class="panel-txt txt-col-wht bold txt-cols-2">
					<?php echo $hp_info_txt; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>