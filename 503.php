<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head id="www-chaseparkfestival-co-uk" data-template-set="chase-park-festival-theme">
		
		<meta charset="<?php bloginfo('charset'); ?>">
		<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
		
		<meta name="viewport" content ="width=device-width,user-scalable=yes" />
		
		<title><?php bloginfo('name'); ?> &raquo; <?php echo $this->g_opt['mamo_pagetitle']; ?></title>
		
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_option('home'); ?>/favicons/apple-touch-icon-57x57.png?v=yyy7bddre9">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_option('home'); ?>/favicons/apple-touch-icon-60x60.png?v=yyy7bddre9">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_option('home'); ?>/favicons/apple-touch-icon-72x72.png?v=yyy7bddre9">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_option('home'); ?>/favicons/apple-touch-icon-76x76.png?v=yyy7bddre9">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_option('home'); ?>/favicons/apple-touch-icon-114x114.png?v=yyy7bddre9">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_option('home'); ?>/favicons/apple-touch-icon-120x120.png?v=yyy7bddre9">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_option('home'); ?>/favicons/apple-touch-icon-144x144.png?v=yyy7bddre9">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_option('home'); ?>/favicons/apple-touch-icon-152x152.png?v=yyy7bddre9">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_option('home'); ?>/favicons/apple-touch-icon-180x180.png?v=yyy7bddre9">
		<link rel="icon" type="image/png" href="<?php echo get_option('home'); ?>/favicons/favicon-32x32.png?v=yyy7bddre9" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_option('home'); ?>/favicons/android-chrome-192x192.png?v=yyy7bddre9" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo get_option('home'); ?>/favicons/favicon-96x96.png?v=yyy7bddre9" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_option('home'); ?>/favicons/favicon-16x16.png?v=yyy7bddre9" sizes="16x16">
		<link rel="manifest" href="<?php echo get_option('home'); ?>/favicons/manifest.json?v=yyy7bddre9">
		<link rel="mask-icon" href="<?php echo get_option('home'); ?>/favicons/safari-pinned-tab.svg?v=yyy7bddre9" color="#858585">
		<link rel="shortcut icon" href="<?php echo get_option('home'); ?>/favicons/favicon.ico?v=yyy7bddre9">
		<meta name="apple-mobile-web-app-title" content="Chase Park Festival">
		<meta name="application-name" content="Chase Park Festival">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png?v=yyy7bddre9">
		<meta name="theme-color" content="#ffffff">
		
		<?php wp_head(); ?>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		
		<?php $file_time = filemtime( get_stylesheet_directory().'/_/css/offline.css' ); ?>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/_/css/offline.css?timestamp=<?php echo $file_time; ?>" rel="stylesheet">
		<?php  
		/* CONTACT DATA */
		$contact_name = get_field('gbl_contact_name', 'options');
		$contact_email = get_field('gbl_contact_email', 'options');
		$contact_tel = get_field('gbl_contact_telephone', 'options');
		$contact_tel_link = str_replace(" ", "", $contact_tel);	
		
		/* FESTIVAL LOCATION AND DATE DATA */
		$fest_location = get_field('cpf_location', 'options');
		$fest_date = get_field('cpf_date', 'options');
		$fest_time = get_field('cpf_time', 'options');	
		?>
		
		<?php 
		$messages = array();
		 
		if ( isset($_POST['date']) ) {
			
			//echo '<pre>';print_r($_POST);echo '</pre>';
			
			if (trim($_POST['fullname']) == "") {
			$messages[] = array('error', 'Please Enter your full name.');	
			}
			
			if (trim($_POST['email']) == "") {
			$messages[] = array('error', 'Please enter your email address.');	
			} else {
				
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$messages[] = array('error', 'Your email address is not valid.');		
				}
			}
			
			if (empty($messages)) {
				
				$name = $_POST['fullname'];
				$email = $_POST['email'];
				$message = $_POST['message'];

				$body = file_get_contents(get_option('siteurl').'/wp-content/themes/chaseparkfestival-desktop/parts/offline/send-email.php?name='.urlencode($name).'&email='.urlencode($email).'&message='.urlencode($message));
				
				$to = "amcdonald@tlwsolicitors.co.uk";
				$subject = "Chase Park Festival 2016 online form.";
				$txt = $body;
				$headers[] = "From: Webmaster <webmaster@tlwsolicitors.co.uk>\r\n";
				$headers[] = "Bcc: Webmaster <webmaster@tlwsolicitors.co.uk>\r\n";
				$headers[] = 'Content-Type: text/html; charset=UTF-8';
				
				$send_mail = wp_mail( $to, $subject, $txt, $headers );
				
				//echo '<pre class="debug">';print_r($body);echo '</pre>';
				
				if ($send_mail) {
					$messages[] = array('success', 'Your details have been sent successfully. Thank you. <a href="/">Continue <i class="fa fa-chevron-right"></i></a>');	
				}	
				
			}
			
		}	
		
		
		?>
		
	</head>
	
	<body id="offline-503">
		
		<div class="offline-bg-imgs">
			<div class="offline-guitar-bg"></div>
			<div class="offline-grass-bg"></div>	
		</div>
		<div class="cpf-wrapper">
			<header id="branding">
				<div class="container">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div class="logo-wrap">
								<h1><span class="sr-only"><?php bloginfo('name'); ?></span></h1>	
							</div>
							<div class="date-location clearfix tk-azo-sans-uber txt-col-wht">
								<time class="date dl-item bg-col-blue pull-left"><?php echo $fest_date; ?></time>
								<div class="location dl-item bg-col-orange pull-left"><?php echo $fest_location; ?></div>
								<time class="time dl-item bg-col-blue-dk pull-left"><?php echo $fest_time; ?></time>
							</div>
						</div>
					</div>
				</div>
			</header>
			<main id="main-content">
				<div class="container">
					<div class="message">
						<?php echo $this->mamo_template_tag_message(); ?>
						<div class="contact-info text-center txt-col-orange"><strong>For more Information contact <?php echo $contact_name; ?> on<br> <a href="tel:<?php echo $contact_tel_link; ?>"><?php echo $contact_tel; ?></a> or <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a> or use the contact form below.</strong></div>
					</div>
					
					<a href="http://www.seetickets.com/event/chase-park-festival-2016/chase-park/992864" target="_blank" class="btn btn-default btn-block btn-lg tk-azo-sans-uber txt-col-wht">Buy Your Tickets</a>
					</div>
					
					<div class="container">
					<div class="contact-form clearfix">
							<form action="<?php echo get_option('home'); ?>/" method="post">
								<div class="row">
								<div class="col-xs-6 form-group">
									<label for="fullname" class="control-label">Name:</label>
									<input type="text" class="form-control input-lg" name="fullname" id="fullname" value="<?php echo (isset($_POST['fullname']) && !$send_mail) ? $_POST['fullname']:''; ?>" placeholder="Enter your full name" />
								</div>
								<div class="col-xs-6 form-group">
									<label for="fullname" class="control-label">Email:</label>
									<input type="email" class="form-control input-lg" name="email" id="email" value="<?php echo (isset($_POST['email']) && !$send_mail) ? $_POST['email']:''; ?>" placeholder="your@email.com" />
								</div>
								</div>
								<div class="row">
								<div class="col-xs-9 form-group mag-bot-0">
									<label for="fullname" class="control-label">Message:</label>
									<textarea class="form-control input-lg" name="message" id="message"></textarea>
								</div>
								<div class="col-xs-3 submit-btn form-group mag-bot-0">
									<button type="submit" class="btn btn-default btn-block btn-lg tk-azo-sans-uber">Send Enquiry<i class="fa fa-chevron-right pull-right"></i></button>
									<input type="hidden" value="<?php echo time(); ?>" name="date" />
								</div>
								</div>
							</form>						
					</div>
					
					<?php if (!empty($messages)) { ?>
						<ul class="list-unstyled form-messages">
							<?php foreach ($messages as $message) { ?>
							<li class="<?php echo $message[0]; ?>"><?php echo $message[1]; ?></li>
							<?php } ?>
						</ul>
					<?php } ?>
					</div>

			</main><!-- #main-content -->
			<footer id="site-info" class="txt-col-wht">
				<div class="container">
					<div class="copyright text-center">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights reserved.</div>
				</div>
				<a href="/login/" class="login-btn">Login</a>
			</footer>
		</div>
		
	<?php wp_footer(); ?>
	
	</body>
</html>