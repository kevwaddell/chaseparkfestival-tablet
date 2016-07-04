<?php
$p_and_d_coverage = get_field('p_and_d_coverage', 'options');
$broadcast_coverage = get_field('broadcast_coverage', 'options');	
$gbl_press_email = get_field('gbl_press_email', 'options');
$gbl_press_tel = get_field('gbl_press_tel', 'options');
$contact_page = get_page_by_title("Contact us");
?>

<div class="info-panel blue-grad with-icon">
	<i class="icon fa fa-bullhorn bg-col-blue-dk txt-col-wht text-center"></i>
	<h3 class="txt-col-orange text-center tk-azo-sans-uber">Past Media Coverage</h3>
	<div class="panel-inner col-list-2">
		
		<?php if (!empty($p_and_d_coverage)) { ?>
		<span class="panel-label block bg-col-wht text-center txt-col-blue tk-azo-sans-uber">Print/Digital</span>
		<ul class="list-unstyled list-arrows txt-col-wht">
			<?php foreach ($p_and_d_coverage as $pd) { ?>
			<li><?php echo $pd['pd_coverage_title']; ?></li>
			<?php } ?>
		</ul>		
		<?php } ?>
		

		<?php if (!empty($broadcast_coverage)) { ?>
		<span class="panel-label block bg-col-wht text-center txt-col-blue tk-azo-sans-uber">Broadcast</span>
		<ul class="list-unstyled list-arrows txt-col-wht">
			<?php foreach ($broadcast_coverage as $bc) { ?>
			<li><?php echo $bc['bc_coverage_title']; ?></li>
			<?php } ?>
		</ul>		
		<?php } ?>
		
	</div>
	<div class="panel-inner pad-top-20">
		<span class="panel-label block bg-col-wht text-center txt-col-blue tk-azo-sans-uber">For press enquiries contact</span>
		<div class="contact-info-sml panel-email text-center bold"><a href="mailto:<?php echo $gbl_press_email; ?>"><?php echo $gbl_press_email; ?></a></div>
		<div class="contact-info-sml panel-tel text-center txt-col-wht bold mag-bot-10"><?php echo $gbl_press_tel; ?></div>
		<a href="<?php echo get_permalink($contact_page->ID); ?>" class="enquiry-btn btn btn-default btn-block btn-lg tk-azo-sans-uber">Or use our online form <i class="fa fa-chevron-right"></i></a>
	</div>
</div>
