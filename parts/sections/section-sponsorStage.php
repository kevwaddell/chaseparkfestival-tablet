<?php  
$stage_sponsor_active = get_field('stage_sponsorship_active', 'options');	
?>

<?php if ($stage_sponsor_active) {  
$stage_sponsor_text = get_field('stage_sponsor_text', 'options');	
$main_stage_price = get_field('main_stage_price', 'options');	
$second_stage_price = get_field('second_stage_price', 'options');	
?>

<section id="stage-sponsor-package" class="pg-section-full bg-col-blue-dk orange-border-top pad-bot-40">
	<h2 class="section-header text-center bg-col-orange txt-col-wht tk-azo-sans-uber">Stage Sponsorship</h2>
	<div class="container-fluid">
	<div class="row">
	<div class="col-xs-10 col-xs-offset-1">
		<div class="stage-sponsor-text txt-col-wht pad-top-40 mag-bot-30 bold">
			<?php echo $stage_sponsor_text; ?>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="stage-info bg-col-wht text-center">
					<h3 class="mag-bot-10 tk-azo-sans-uber text-uppercase txt-col-wht bg-col-orange pad-bot-10">Main Stage</h3>
					<p class="price txt-col-blue bold tk-azo-sans-uber">&pound;<?php echo $main_stage_price; ?></p>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="stage-info bg-col-wht text-center">
					<h3 class="mag-bot-10 tk-azo-sans-uber text-uppercase txt-col-wht bg-col-orange pad-bot-10">Second Stage</h3>
					<p class="price txt-col-blue bold tk-azo-sans-uber">&pound;<?php echo $second_stage_price; ?></p>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div>
	</div>
</section>
<?php } ?>