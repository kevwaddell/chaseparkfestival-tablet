<?php 
$main_partners_active = get_field( 'main_partners_active', 'options' );	
?>
<?php if ($main_partners_active) { ?>
	<?php 
	$main_partner_name = get_field( 'main_partner_name', 'options' );
	$main_partner_website = get_field( 'main_partner_website', 'options' );
	$main_partner_logo = get_field( 'main_partner_logo', 'options' );
	$main_partner_text = get_field( 'main_partner_text', 'options' );
	$main_partner_year = get_field( 'main_partner_year', 'options' );
	$main_partner_color = get_field( 'main_partner_color', 'options' );
	$no_http = explode('http://', $main_partner_website);
	?>
	<section id="main-partner-panel" class="pg-section-full" style="background-color: <?php echo $main_partner_color; ?>;">
		<h2 class="section-header text-center tk-azo-sans-uber bg-col-wht" style="color: <?php echo $main_partner_color; ?>">Our main partner for <?php echo $main_partner_year; ?></h2>
		<div class="container-fluid">
			<div class="row"><div class="col-md-10 col-md-offset-1">
			
			<figure class="partner-logo bg-col-wht pull-right">
				<img src="<?php echo $main_partner_logo; ?>" class="img-responsive">
			</figure>

			<div class="partner-txt txt-col-wht">
			<h3 class="txt-col-wht"><?php echo $main_partner_name; ?></h3>
			<?php echo $main_partner_text; ?>
			<a href="<?php echo $main_partner_website; ?>" class="btn btn-default btn-block btn-lg tk-azo-sans-uber" style="color: <?php echo $main_partner_color; ?>;"><?php echo $no_http[1]; ?></a>
			</div>
			
			</div></div>
		</div>
	</section>
				
<?php } ?>