<?php 
/*
Template Name: Sponsorship page template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<?php  
$year = date("Y", time());
$sponsor_active = get_field('sponsor_active', 'options');

$gbl_contact_name = get_field('gbl_contact_name', 'options');
$gbl_contact_email = get_field('gbl_contact_email', 'options');
$gbl_contact_telephone = get_field('gbl_contact_telephone', 'options');
?>
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber text-center">
	<h1><?php the_title(); ?></h1>
</div>

<main id="main-content"> 
	<div class="container-fluid">
		
		<?php if ($sponsor_active) { ?>
		<article <?php post_class('pg-content'); ?>>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
				
					<div class="main-txt with-pad">
							<?php the_content(); ?>
					</div>
					
					<aside class="sidebar pad-bot-40">
					
						<div class="row">
							<div class="col-xs-8">
								<?php get_template_part( 'parts/panels/sponsor', 'enquiries' ); ?>
							</div>
							<div class="col-xs-4">
								<?php get_template_part( 'parts/panels/download', 'package' ); ?>
							</div>
						</div>
					
					</aside>
				
				</div>
			</div>
			
		</article>
		
	</div>
	
	<?php get_template_part( 'parts/sections/section', 'reason2sponsor' ); ?>
	
	<?php get_template_part( 'parts/sections/section', 'sponsorPackages' ); ?>
	
	<?php get_template_part( 'parts/sections/section', 'sponsorStage' ); ?>
	
	<?php } else { ?>
<main id="main-content" class="notes-bg-orange"> 
	<?php get_template_part( 'parts/messages/sponsorship', 'message' ); ?>
	<?php } ?>
</main><!-- #main-content -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>