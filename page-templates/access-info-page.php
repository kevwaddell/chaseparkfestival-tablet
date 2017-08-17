<?php 
/*
Template Name: Access Information page template
*/
 ?>
 
 <?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php  
$year = date("Y", time());
$access_info_active = get_field('access_info_active', 'options');
?>

<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber text-center">
	<h1><?php the_title(); ?></h1>
</div>

<?php if ($access_info_active) { ?>
<main id="main-content">

	<article <?php post_class(); ?>>
	
		<div class="main-txt with-pad">
			<div class="container-fluid">
			<?php the_content(); ?>
			</div>
		</div>
		
		<div class="info-panels mag-bot-40">
			<div class="container-fluid">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<?php get_template_part( 'parts/panels/around', 'site' ); ?>	
					<?php get_template_part( 'parts/panels/access', 'enquiries' ); ?>
				</div>
			</div>
			</div>
		</div>
		
		<?php //get_template_part( 'parts/sections/section', 'parking' ); ?>
		
		<?php get_template_part( 'parts/sections/section', 'assistance' ); ?>
		
		<?php get_template_part( 'parts/sections/attitude', 'plug' ); ?>
				
	</article>
	
<?php } else { ?>
<main id="main-content" class="notes-bg-orange"> 
	<?php get_template_part( 'parts/messages/access', 'message' ); ?>
<?php } ?>	

</main><!-- #main-content -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>