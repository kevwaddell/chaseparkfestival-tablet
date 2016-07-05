<main id="main-content">
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<?php
	$artist_links_active = get_field('artist_links_active');
	$post_content = get_extended( $post->post_content );
	$content_main = apply_filters('the_content', $post_content['main'] );
	$content_extended = apply_filters('the_content', $post_content['extended'] );	
	$artist_logo = get_field('artist_logo');
	?>
	<article <?php post_class(); ?>>
		<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber text-center">
			<?php echo get_the_title($post->post_parent); ?>
		</div>
	
		<div class="main-txt with-pad">
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						
						<div class="feat-img" style="background-image: url(<?php bg_img($post); ?>)"></div>

						<header class="main-text-header">
																		
							<?php if ($artist_links_active && in_array('social', $artist_links_active)) { 
							$artist_social_links = get_field('artist_social_links');
							?>
							<div class="social-links clearfix">
								<?php foreach ($artist_social_links as $sl) { 
								$bg_col = 'bg-col-'.strtolower($sl['title']);
								$icon = "fa-".strtolower($sl['title']);		
								//echo $icon;
								?>
								<a href="<?php echo $sl['social_link_url']; ?>" class="<?php echo $bg_col; ?>"><i class="fa <?php echo $icon; ?>"></i><span class="sr-only"><?php echo $sl['title']; ?></span></a>
								<?php } ?>
							</div>
							<?php } ?>
									
							<?php if (empty($artist_logo)) { ?>
							<h1 class="text-uppercase tk-azo-sans-uber txt-col-blue-dk"><?php the_title(); ?></h1>	
							<?php } else { ?>
							<img src="<?php echo $artist_logo['sizes']['large']; ?>" alt="<?php the_title_attribute(); ?>" class="img-title mag-bot-10 block" />
							<?php } ?>
							<?php if ($artist_links_active && in_array('website', $artist_links_active)) { 
							$website = get_field('artist_website');	
							?>
							<a href="<?php echo $website; ?>" target="_blank" class="artist-website text-uppercase" rel="nofollow">View website</a>
							<?php } ?>
								
						</header>
							
						<div class="main-text-body">
							<?php the_content();  ?>
						</div><!-- .main-text-body -->
				
					</div><!-- .col-xs-10-->
				</div><!-- .row -->
			</div><!-- .container-fluid -->
			
		</div><!-- .main-txt -->
		
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
		
	<?php get_template_part( 'parts/artists/artists', 'slider' ); ?>
	
</main>
