<?php  
$gbl_contact_name = get_field('gbl_contact_name', 'options');
$gbl_contact_email = get_field('gbl_contact_email', 'options');
$gbl_contact_telephone = get_field('gbl_contact_telephone', 'options');
$contact_page = get_page_by_title("Contact us");
?>
<div class="info-panel panel-blue mag-bot-30">
	<div class="sponsor-icon-img"></div>
	<h3 class="txt-col-orange text-center tk-azo-sans-uber">Sponsorship enquiries</h3>
	<div class="panel-inner">
		<div class="contact-info-sml panel-name text-center txt-col-wht tk-azo-sans-uber"><?php echo $gbl_contact_name; ?></div>
		<div class="contact-info-sml panel-email text-center bold"><a href="mailto:<?php echo $gbl_contact_email; ?>"><?php echo $gbl_contact_email; ?></a></div>
		<div class="contact-info-sml panel-tel text-center txt-col-wht bold"><?php echo $gbl_contact_telephone; ?></div>
	</div>
	<a href="<?php echo get_permalink($contact_page->ID); ?>" class="contact-btn btn btn-default btn-block tk-azo-sans-uber">Use our online form</a>
</div>