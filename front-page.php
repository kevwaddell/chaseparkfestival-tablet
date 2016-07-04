<?php get_header(); ?>	

<main id="main-content">
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	
	<article <?php post_class("hp-content"); ?>>
		<div class="container">
			<div class="row mag-bot-30">
				<div class="col-xs-7">
					<div class="main-txt">
						<?php the_content(); ?>
					</div>
				</div>
				
				<?php get_sidebar("home"); ?>
				
			</div>	
		</div>	
	</article>
	
	<?php get_template_part( 'parts/homepage/section', 'infopanel' ); ?>
		
	<?php get_template_part( 'parts/homepage/section', 'social' ); ?>

<?php endwhile; ?>
<?php endif; ?>
</main><!-- #main-content -->

<?php get_footer(); ?>