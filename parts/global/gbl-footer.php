<?php  
/* FESTIVAL LOCATION AND DATE DATA */
$fest_location = get_field('cpf_location', 'options');
$fest_date = get_field('cpf_date', 'options');
$fest_time = get_field('cpf_time', 'options');	
	
/* TICKET DATA */
$ticket_provider_http = get_field('gbl_ticket_provider', 'options');
$ticket_provider = split("http://", $ticket_provider_http);
$tickets_url = get_field('gbl_tickets_url', 'options');

/* CONTACT DATA */
$contact_name = get_field('gbl_contact_name', 'options');
$contact_email = get_field('gbl_contact_email', 'options');
$contact_tel = get_field('gbl_contact_telephone', 'options');
$contact_tel_link = str_replace(" ", "", $contact_tel);

/* SOCIAL MEDIA LINKS DATA */
$social_links = get_field('gbl_social_links', 'options');
?>
<footer id="footer-site-info" role="contentinfo" class="bg-col-blue">
	<div class="footer-top">
		<div class="footer-bg-imgs">
			<div class="footer-guitar-bg"></div>
			<div class="footer-grass-bg"></div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-7">
					<?php wp_nav_menu(array( 
						'container' => 'false', 
						'menu' => 'Footer Main Navigation', 
						'menu_class'  => 'footer-menu clearfix list-unstyled text-uppercase',
						'fallback_cb' => false ) 
						); 
					?>
				</div>
				<div class="col-xs-5 ticket-details">
					<div class="ticket-info text-center">
						Tickets are available for purchase from<br />
						<a href="<?php echo $ticket_provider_http; ?>"><?php echo $ticket_provider[1]; ?></a>
					</div>
					<a href="<?php echo $tickets_url; ?>" target="_blank" class="btn btn-default btn-block book-tickets-btn tk-azo-sans-uber">Book Your Tickets</a>
				</div>
			</div>
			
			<div class="contact-info text-center txt-col-blue-dk"><strong>For more Information contact <?php echo $contact_name; ?> on <a href="tel:<?php echo $contact_tel_link; ?>"><?php echo $contact_tel; ?></a> or <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></strong></div>
			
			<div class="date-location clearfix tk-azo-sans-uber txt-col-wht">
				<time class="footer-date dl-item bg-col-blue pull-left"><?php echo $fest_date; ?></time>
				<div class="footer-location dl-item bg-col-orange in-block pull-left"><?php echo $fest_location; ?></div>
				<time class="footer-time dl-item bg-col-blue-dk in-block pull-right"><?php echo $fest_time; ?></time>
			</div>
			
			<?php if (!empty($social_links)) { ?>
			<div class="social-links">
				<?php foreach ($social_links as $link) { ?>
					<a href="<?php echo $link['link_url']; ?>" target="_blank"><i class="fa <?php echo $link['link_icon']; ?>"></i><span class="sr-only"><?php echo $link['link_title']; ?></span></a>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		
	</div>
	<div class="footer-base txt-col-wht">
		<div class="container">
			<div class="col-xs-6">
				<strong>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights reserved.</strong>
			</div>
			
			<div class="col-xs-6 text-right">
				<?php wp_nav_menu(array( 
					'container' => 'false', 
					'menu' => 'Legal Nav', 
					'menu_class'  => 'footer-base-menu clearfix list-unstyled bold',
					'fallback_cb' => false ) 
					); 
				?>
			</div>
		</div>
	</div>
</footer>
