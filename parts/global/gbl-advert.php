<?php 
$main_partners_active = get_field( 'main_partners_active', 'options' );
?>

<?php if ($main_partners_active) { ?>
<?php 
$main_partner_name = get_field( 'main_partner_name', 'options' );
$main_partner_website = get_field( 'main_partner_website', 'options' );
$main_partner_advert = get_field( 'main_partner_advert', 'options' );
$main_partner_color = get_field( 'main_partner_color', 'options' );
?>
<section id="main-partner-advert" style="background-color: <?php echo $main_partner_color; ?>;">
	<div class="container-fluid">
		<a href="<?php echo $main_partner_website; ?>" target="_blank" title="Visit: <?php echo $main_partner_name; ?> website" style="background-image: url(<?php echo $main_partner_advert; ?>);" class="main-partner-link">
			<span class="sr-only"><?php echo $main_partner_name; ?></span>
		</a>
	</div>
	</section>
			
<?php } ?>