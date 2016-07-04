<?php
$sponsor_booklet_file = get_field('sponsor_booklet_file', 'options');
$sponsorship_booklet_cover = get_field('sponsorship_booklet_cover', 'options');
?>

<div class="download-panel">
	<div class="row">
		<div class="col-xs-5">
			<img src="<?php echo $sponsorship_booklet_cover['sizes']['medium']; ?>" class="img-responsive">
		</div>
		<div class="col-xs-7">
			<span class="info-txt bold txt-col-blue-dk">For more details on our Partner and sponsorship packages download our sponsorship pack.</span>
			<a href="<?php echo $sponsor_booklet_file; ?>" target="_blank" class="download-btn btn btn-default btn-block tk-azo-sans-uber">Download</a>
		</div>
	</div>
</div>