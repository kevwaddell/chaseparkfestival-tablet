<?php
$gbl_contact_name = get_field('gbl_contact_name', 'options');
$gbl_contact_email = get_field('gbl_contact_email', 'options');
$gbl_contact_telephone = get_field('gbl_contact_telephone', 'options');
$contact_page = get_page_by_title("Contact us");
?>

<div class="info-panel panel-blue add-min-h">
	<h3 class="panel-header tk-azo-sans-uber text-center txt-col-blue mag-bot-20">Access Enquiries</h3>
	<div class="panel-inner">
		<div class="contact-info panel-name text-center txt-col-wht tk-azo-sans-uber"><?php echo $gbl_contact_name; ?></div>
		<div class="contact-info panel-email text-center bold"><a href="mailto:<?php echo $gbl_contact_email; ?>"><?php echo $gbl_contact_email; ?></a></div>
		<div class="contact-info panel-tel text-center txt-col-wht bold mag-bot-10"><?php echo $gbl_contact_telephone; ?></div>
		<a href="<?php echo get_permalink($contact_page->ID); ?>" class="enquiry-btn btn btn-default btn-block btn-lg tk-azo-sans-uber">Or use our online form <i class="fa fa-chevron-right"></i></a>
	</div>
</div>