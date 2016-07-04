<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head id="www-chaseparkfestival-co-uk" data-template-set="chase-park-festival-theme">
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class($body_classes); ?>>
	
	<?php get_template_part( 'parts/global/main', 'nav' ); ?>
	
	<div class="cpf-wrapper nav-closed">
		
		<?php if (is_front_page()) { ?>
		<?php get_template_part( 'parts/homepage/hp', 'masthead' ); ?>
		<?php } else { ?>
		<?php get_template_part( 'parts/global/gbl', 'masthead' ); ?>
		<?php } ?>