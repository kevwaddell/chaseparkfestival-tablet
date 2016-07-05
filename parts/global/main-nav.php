<nav id="main-nav" class="bg-col-orange nav-closed">
	<div class="nav-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">	
					<?php wp_nav_menu( array( 
						'container' => 'false', 
						'menu' => 'Quick Links', 
						'menu_class'  => 'quick-menu clearfix list-unstyled',
						'fallback_cb' => false
						) 
					); ?>
					
					<?php wp_nav_menu(array( 
						'container' => 'false', 
						'menu' => 'Main Navigation', 
						'menu_class'  => 'menu clearfix list-unstyled tk-azo-sans-uber',
						'fallback_cb' => false ) 
						); 
					?>
					<button id="close-nav-btn" class="btn no-border"><span class="sr-only">Close navigation</span><i class="fa fa-close fa-lg"></i></button>
				</div>
			</div>
		</div>
	</div>
</nav>