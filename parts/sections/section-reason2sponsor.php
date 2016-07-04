<?php  
$reason_to_sponsor = get_field('reason_to_sponsor', 'options');	
$reason_counter = 0;
$reason_total = count($reason_to_sponsor);
//echo '<pre class="debug">';print_r(round($reason_total/2));echo '</pre>';
?>

<?php if (!empty($reason_to_sponsor)) { ?>
<section id="reason-2-sponsor" class="pg-section-full bg-col-orange">
	<h2 class="section-header text-center bg-col-wht txt-col-orange tk-azo-sans-uber">Reasons to sponsor</h2>
	<div class="container">
		<div class="row">
			<ul class="col-xs-6 list-unstyled ticks-list pad-top-40 pad-bot-40 bold txt-col-wht">
				<?php foreach ($reason_to_sponsor as $r2s) { 
				$reason_counter++;
				//echo '<pre class="debug">';print_r($reason_counter);echo '</pre>';
				?>
					<li><?php echo $r2s['reason']; ?>.</li>
					
					<?php if ( $reason_counter == round($reason_total/2) ) { ?>
			</ul>
			<ul class="col-xs-6 list-unstyled ticks-list pad-top-40 pad-bot-40 bold txt-col-wht">	
				<?php } ?>
				
				<?php } ?>
				
				
				
			</ul>
		</div>
	</div>
</section>
<?php } ?>
