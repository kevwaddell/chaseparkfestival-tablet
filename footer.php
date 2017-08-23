		<?php if ( !is_page_template( 'page-templates/sponsorship-page.php' ) ) { ?>	
		<?php get_template_part( 'parts/sections/section', 'sponsors' ); ?>
		<?php } ?>
		
		<?php get_template_part( 'parts/global/gbl', 'footer' ); ?>
			
	</div><!-- .cpf-wrapper end -->
	
	<?php wp_footer(); ?>

	</body>
</html>