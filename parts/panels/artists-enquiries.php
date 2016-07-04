<?php
$gbl_ae_contact_name = get_field('gbl_ae_contact_name', 'options');
$gbl_ae_contact_email = get_field('gbl_ae_contact_email', 'options');
$gbl_ae_contact_telephone = get_field('gbl_ae_contact_telephone', 'options');
?>

<div class="info-panel panel-blue">
	<h3 class="panel-header tk-azo-sans-uber text-center txt-col-orange">Artists Enquiries</h3>
	<div class="panel-inner">
		<div class="contact-info panel-name text-center txt-col-wht tk-azo-sans-uber"><?php echo $gbl_ae_contact_name; ?></div>
		<div class="contact-info panel-email text-center bold"><a href="mailto:<?php echo $gbl_ae_contact_email; ?>"><?php echo $gbl_ae_contact_email; ?></a></div>
		<div class="contact-info panel-tel text-center txt-col-wht bold"><?php echo $gbl_ae_contact_telephone; ?></div>
	</div>
</div>