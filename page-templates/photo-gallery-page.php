<?php 
/*
Template Name: Photo Gallery page template
*/
 ?>

<?php get_header(); ?>

<?php
	$prev_years_args = array(
	'post_type'	=> 'page',
	'posts_per_page'	=> 3	
	);
		
	if ($post->post_parent == 0) {
		
		$year = date("Y", time());
		$gallery_pg = get_page_by_title("Photo Gallery ".$year);

		if (!$gallery_pg || $gallery_pg->post_status == "draft") {
		$year = date("Y", strtotime("last year"));	
		$gallery_pg = get_page_by_title("Photo Gallery ".$year);
		}

		$gallery_imgs = get_field('gallery_imgs', $gallery_pg->ID);
		
		$prev_years_args['post_parent'] = $gallery_pg->post_parent;
		$prev_years_args['exclude'] = $gallery_pg->ID;

	} else {
		$gallery_pg = $post;
		$gallery_imgs = get_field('gallery_imgs');	
		$prev_years_args['post_parent'] = $post->post_parent;
		$prev_years_args['exclude'] = $post->ID;
	}
	
$imgs_total = count($gallery_imgs);
$imgs_counter = 0;


$prev_years = get_posts($prev_years_args);

//echo '<pre class="debug">';print_r($prev_years);echo '</pre>';
?>	
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php if (!empty($gallery_imgs)) { ?>
<main id="main-content">
	<article <?php post_class(); ?>>
		<header class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
			<div class="container-fluid">
				<h1><?php the_title(); ?></h1>
			</div>
		</header>
		
	    <section id="gallery-imgs" class="img-grid">
		   
		   <div class="grid-section open"> 
			   <div class="grid-inner">
		    <?php foreach ($gallery_imgs as $img) { 
			$imgs_counter++;  
			$placeholders = $imgs_counter % 4;
		    ?>
		    <figure id="grid-item-<?php echo $img['ID']; ?>" class="grid-item" style="background-image: url(<?php echo $img['sizes']['thumb_400x400']; ?>)">
				<a href="<?php echo $img['sizes']['large']; ?>" target="_blank" title="<?php echo get_the_title($img['ID']); ?>"><span class="sr-only"><?php echo get_the_title($img['ID']); ?></span></a>
			</figure>
			
			<?php if ($imgs_counter == $imgs_total && $placeholders > 0) { ?>	
			 
			 <?php  for ($i = 1; $i <= $placeholders; $i++) { ?>
				<div class="grid-item placeholder"></div>	 
			 <?php } ?>
			 
			<?php } ?>
			 
			<?php if ($imgs_counter % 12 == 0 && $imgs_counter < $imgs_total) { ?>	
		   		</div>
		   	</div>
			<div class="grid-section closed"> 
				<div class="grid-inner">	
			<?php } ?>
			
		    <?php } ?>
				</div>
		   </div>
		   
		   <?php if ($imgs_total > 12) { ?>
		   <div class="btn-wrap">
			   	<button id="gallery-view-more-btn" class="btn btn-block btn-lg tk-azo-sans-uber">
			   		<span class="container-fluid">View More<i class="fa fa-plus-circle fa-2x pull-right"></i></span>
			   	</button>
			   	<button id="gallery-view-less-btn" class="btn btn-block btn-lg tk-azo-sans-uber hidden">
			   		<span class="container-fluid">Close gallery<i class="fa fa-minus-circle fa-2x pull-right"></i></span>
			   	</button>
			</div>
		   <?php } ?>
		   
		</section>
		
	</article>

<?php } else { ?>
<main id="main-content" class="notes-bg-orange"> 
	<?php get_template_part( 'parts/messages/gallery', 'message' ); ?>
<?php } ?>	
</main> 

<?php if ($prev_years) { ?>
<nav class="more-links">
	<?php foreach ($prev_years as $prev_y) { ?>
		<a href="<?php echo get_permalink($prev_y->ID); ?>" class="text-uppercase tk-azo-sans-uber">
			<span class="block container"><?php echo get_the_title($prev_y->ID); ?></span>
		</a>
	<?php } ?>	
</nav>	
<?php } ?>

<?php get_template_part( 'parts/photo-gallery/img', 'viewer' ); ?>

<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>