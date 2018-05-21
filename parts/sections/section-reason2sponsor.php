<?php  
$reason_to_sponsor_active = get_field('reason_to_sponsor_active', 'options');	
?>

<?php if ($reason_to_sponsor_active) { 
$reason_to_sponsor = get_field('reason_to_sponsor', 'options');	
$reason_counter = 0;
$reason_total = count($reason_to_sponsor);
?>
<section id="reason-2-sponsor" class="pg-section-full bg-col-orange">
	<h2 class="section-header text-center bg-col-wht txt-col-orange tk-azo-sans-uber">Reasons to sponsor</h2>
	<div class="container-fluid">
		<div class="row">
			<ul class="col-xs-10 col-xs-offset-1 list-unstyled ticks-list pad-top-40 pad-bot-40 bold txt-col-wht">
				<?php foreach ($reason_to_sponsor as $r2s) { 
				$reason_counter++;
				//echo '<pre class="debug">';print_r($reason_counter);echo '</pre>';
				?>
					<li><?php echo $r2s['reason']; ?>.</li>
								
				<?php } ?>
			</ul>
		</div>
	</div>
</section>
<?php } ?>
