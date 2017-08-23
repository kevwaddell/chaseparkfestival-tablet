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

<?php  
$sponsors_active = get_field('sponsors_active', 'options');		
?>

<?php if ($sponsors_active) { ?>
<?php  
$section_title = get_field('gbl_sponsors_section_title', 'options');	
$sponsors_and_stalls = get_field('gbl_sponsors_and_stalls', 'options');	
$sponsor_counter = 0;
$slides_count = 1;
$sponsors_total = count($sponsors_and_stalls);
$slides_total = ceil($sponsors_total / 4);
?>
<section id="sponsors-and-stalls" class="wide-panel bg-col-orange text-center">
	<h3 class="panel-header text-center bg-col-wht tk-azo-sans-uber txt-col-orange">Our Sponsors for <?php echo $main_partner_year; ?></h3>
	<div class="sponsors-outer-wrap">
		<div id="sponsor-slide-<?php echo $slides_count; ?>" class="sponsors-inner-wrap active">
			<div class="container-fluid">
			<?php foreach ($sponsors_and_stalls as $sponsor) { 
			$sponsor_counter++;	
			?>
			
			<div class="sponsor-logo bg-col-wht" style="background-image: url(<?php echo $sponsor['sponsor_logo']; ?>);">
				<?php if ( !empty($sponsor['sponsor_website']) ) { ?>
				<a href="<?php echo $sponsor['sponsor_website']; ?>" target="_blank" rel="nofollow"><span class="sr-only"><?php echo $sponsor['sponsor_name']; ?></span></a>
				<?php } else { ?>
				<span class="sr-only"><?php echo $sponsor['sponsor_name']; ?></span>
				<?php } ?>
			</div>
			
			<?php if ($sponsor_counter % 4 == 0) { 
			$slides_count++;
			?>
			</div>
		</div>
		<div id="sponsor-slide-<?php echo $slides_count; ?>" class="sponsors-inner-wrap inactive">
			<div class="container-fluid">
			<?php } ?>
			
			<?php } ?>
			</div>
		</div>
	</div>
	<?php if ($slides_total > 1) { ?>
	<div class="slides-nav tk-azo-sans-uber text-center">
		<div class="container-fluid">
			<div class="row"><div class="col-md-10 col-md-offset-1">
			<?php for($i = 1; $i <= $slides_total; $i++) { ?>
			<a href="#sponsor-slide-<?php echo $i; ?>" class="<?php echo ($i == 1) ? 'active':'inactive'; ?>"><?php echo $i; ?></a>
			<?php } ?>
			</div></div>
		</div>
	</div>
	<?php } ?>
</section>
<?php } ?>