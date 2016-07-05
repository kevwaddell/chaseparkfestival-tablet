<?php 
/*
Template Name: Contact page with form template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<?php 
$form_active = get_field('form_active');	

/* TICKET DATA */
$ticket_provider_http = get_field('gbl_ticket_provider', 'options');
$ticket_provider = split("http://", $ticket_provider_http);
$tickets_url = get_field('gbl_tickets_url', 'options');
?>
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber text-center">
	<h1><?php the_title(); ?></h1>
</div>

<main id="main-content"> 

		<article <?php post_class(); ?>>
			<div class="container-fluid">
			<div class="row">
			<div class="col-xs-10 col-xs-offset-1">	
				<div class="main-txt pad-top-30">
					<?php the_content(); ?>
				</div>
			
				<section class="contact-section">
					
					<div class="row mag-bot-30">	
						<div class="col-md-6">
							<?php get_template_part( 'parts/panels/general', 'enquiries' ); ?>
						</div>
						<div class="col-md-6">
							<?php get_template_part( 'parts/panels/artists', 'enquiries' ); ?>
						</div>
					</div>
					
					<div class="ticket-info text-center pad-bot-60">
						<span class="bold txt-col-blue-dk">Tickets are available for purchase from</span><br />
						<a href="<?php echo $ticket_provider_http; ?>" class="mag-bot-10 block bold site-link"><?php echo $ticket_provider[1]; ?></a>
						<a href="<?php echo $tickets_url; ?>" target="_blank" class="btn btn-default btn-block book-tickets-btn tk-azo-sans-uber">Book Your Tickets</a>
					</div>
					
				</section>
			</div>	
			</div>
			</div>	
			
			<?php if ($form_active) { 
			 $form = get_field('form');
			 gravity_form_enqueue_scripts($form['id'], true);
			?>
			<section id="contact-form" class="bg-col-orange pad-bot-40">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<h3 class="section-header tk-azo-sans-uber txt-col-blue text-center">Enquiry form</h3>
							<?php gravity_form($form['id'], false, true, false, '', true, 1);  ?>	
						</div>
					</div>
				</div>
			</section>		
			<?php } ?>
			
		</article>

</main><!-- #main-content -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>