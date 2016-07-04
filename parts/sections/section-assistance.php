<?php  
$service_info_left_text = get_field('service_info_left_text', 'options');	
$service_info_right_text = get_field('service_info_right_text', 'options');	
$service_extra_info = get_field('service_extra_info', 'options');		
?>

<section id="service-assistance-section" class="pg-section-full bg-col-orange">
		<h2 class="section-header text-center bg-col-wht txt-col-orange tk-azo-sans-uber">Service and assistance</h2>
		<div class="container">
			<div class="row">
				
				<div class="col-xs-6">
				<?php if (!empty($service_info_left_text)) { ?>
				<dl class="info-list txt-col-wht bold">
					<?php foreach ($service_info_left_text as $item) { ?>
					<dt class="text-uppercase txt-col-blue-dk"><i class="fa <?php echo $item['service_info_icon']; ?> text-center bg-col-wht txt-col-blue-dk"></i><?php echo $item['title']; ?></dt>
					<dd><?php echo $item['text']; ?></dd>
					<?php } ?>
				</dl>
				<?php } ?>
				</div>	
				
				<div class="col-xs-6">
				<?php if (!empty($service_info_right_text)) { ?>
				<dl class="info-list txt-col-wht bold">
					<?php foreach ($service_info_right_text as $item) { ?>
					<dt class="text-uppercase txt-col-blue-dk"><i class="fa <?php echo $item['service_info_icon']; ?> text-center bg-col-wht txt-col-blue-dk"></i><?php echo $item['title']; ?></dt>
					<dd><?php echo $item['text']; ?></dd>
					<?php } ?>
				</dl>
				<?php } ?>
				</div>	
			</div>	

		</div>
		<?php if ($service_extra_info) { ?>
		<div class="extra-info-panel bg-col-orange-dk">
			<div class="container text-center">
				<i class="fa fa-plus bg-col-orange text-center txt-col-wht"></i>
				<span class="txt-col-wht bold"><?php echo $service_extra_info; ?></span>
			</div>	
		</div>
		<?php } ?>
</section>
