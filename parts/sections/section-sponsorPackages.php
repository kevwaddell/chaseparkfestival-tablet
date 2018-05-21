<?php
$sponsorship_packages_active = 	get_field('sponsorship_packages_active', 'options');
?>
<?php if ($sponsorship_packages_active) { ?>
<?php  
$sponsorship_packages = get_field('sponsorship_packages', 'options');	
$packages_total = count($sponsorship_packages);
$packages_benefit_list = get_field('packages_benefit_list', 'options');
?>

<section id="sponsor-packages" class="pg-section-full blue-border-top pad-bot-40">
	<h2 class="section-header text-center bg-col-blue txt-col-wht tk-azo-sans-uber">Sponsorship packages</h2>
	<div class="container-fluid">
		<div class="row pad-top-40">
			<div class="col-xs-10 col-xs-offset-1 col-md-7">
				<div class="package-wrap mag-bot-30">
					<div class="icon-rosette"></div>
					<h3 class="tk-azo-sans-uber txt-col-blue-dk text-uppercase mag-bot-0"><?php echo $sponsorship_packages[0]['package_type']; ?></h3>
					<p class="price bold txt-col-orange">&pound;<?php echo $sponsorship_packages[0]['package_price']; ?></p>	
					<ul class="list-unstyled ticks-list">
						<?php foreach ($sponsorship_packages[0]['package_options'] as $option) { ?>
							<li><?php echo $option['package_option']; ?>.</li>
						<?php } ?>
					</ul>
				</div>
				
				<div class="package-wrap mag-bot-30">
					<div class="icon-rosette"></div>
					<h3 class="tk-azo-sans-uber txt-col-blue-dk text-uppercase mag-bot-0"><?php echo $sponsorship_packages[1]['package_type']; ?></h3>
					<p class="price bold txt-col-orange">&pound;<?php echo $sponsorship_packages[1]['package_price']; ?></p>	
					<ul class="list-unstyled ticks-list">
						<?php foreach ($sponsorship_packages[1]['package_options'] as $option) { ?>
							<li><?php echo $option['package_option']; ?>.</li>
						<?php } ?>
					</ul>
				</div>
				<div class="package-wrap mag-bot-30">
					<div class="icon-rosette"></div>
					<h3 class="tk-azo-sans-uber txt-col-blue-dk text-uppercase mag-bot-0"><?php echo $sponsorship_packages[2]['package_type']; ?></h3>
					<p class="price bold txt-col-orange">&pound;<?php echo $sponsorship_packages[2]['package_price']; ?></p>	
					<ul class="list-unstyled ticks-list">
						<?php foreach ($sponsorship_packages[2]['package_options'] as $option) { ?>
							<li><?php echo $option['package_option']; ?>.</li>
						<?php } ?>
					</ul>
				</div>

			</div>
			<div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
				<div class="benefits-list bg-col-orange txt-col-wht">
					<span class="bold">All sponsors benefit from 
huge opportunities including:</span>
					<ul class="list-unstyled ticks-list mag-bot-0">
						<?php foreach ($packages_benefit_list as $list) { ?>
							<li><?php echo $list['benefit_item']; ?>.</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>