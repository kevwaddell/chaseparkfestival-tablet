<header id="gbl-masthead" class="masthead" role="banner">
	
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="logo-wrap">
					<a href="<?php echo get_option('home'); ?>/" class="logo"><span class="sr-only"><?php bloginfo('name'); ?></span></a>
				</div>
			</div>
		</div>
		
		<button id="main-nav-btn" class="btn btn-default btn-block"><span class="menu-label txt-col-wht tk-azo-sans-uber">Menu</span><i class="fa fa-bars fa-lg"></i></button>
		
		<div class="breadcrumbs tk-azo-sans-uber" typeof="BreadcrumbList" vocab="http://schema.org/">
		<?php if(function_exists('bcn_display')){ bcn_display(); }?>
		</div>
		
	</div>

</header>