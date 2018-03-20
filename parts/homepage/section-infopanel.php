<?php  
$hp_info_txt = get_field('hp_info_txt', 'options');	
?>

<?php if ($hp_info_txt != "") { ?>

<section class="col-panel bg-col-blue-dk">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-md-7">
				<div class="panel-txt txt-col-wht bold">
					<div class="panel-imgs offset-imgs" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/_/img/hp-panel-imgs-2018.png)"></div>
					<?php echo $hp_info_txt; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>