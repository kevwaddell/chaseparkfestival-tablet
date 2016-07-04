<?php  
$travel_info_left_text = get_field('travel_info_left_text', 'options');	
$travel_info_right_text = get_field('travel_info_right_text', 'options');
$location = get_field('cpf_map_details', 'options');		

//MAP 
?>
<?php if ($_SERVER['SERVER_NAME']=='chaseparkfestival.dev') { ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<?php } else { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApfRLHwlgmSXTpTneD-hq6ugcfRkGL5Kw&callback=initMap"></script>
<?php } ?>

<script>
	var TLW_MAP_ID = 'TLW_style';
	
    var map;
    var myLatLang = new google.maps.LatLng( <?php echo $location['lat']; ?>, <?php echo $location['lng']; ?>);
    var MAPTYPE_ID = 'custom_style';
	var tent_img_url = "<?php bloginfo('stylesheet_directory'); ?>/_/img/festival.png";
	var bus_stop_url = "<?php bloginfo('stylesheet_directory'); ?>/_/img/bus.png";
	var entrance_url = "<?php bloginfo('stylesheet_directory'); ?>/_/img/entrance.png";
	var disability_url = "<?php bloginfo('stylesheet_directory'); ?>/_/img/disability.png";
	
	var tent_img = {
	 url: tent_img_url,
	 // This marker is 20 pixels wide by 32 pixels tall.
	 size: new google.maps.Size(32, 37),
	 // The origin for this image is 0,0.
	 origin: new google.maps.Point(0,0),
	 // The anchor for this image is the base of the flagpole at 0,32.
	 anchor: new google.maps.Point(16, 37)
	 };
	 
	 var bus_stop_img = {
	 url: bus_stop_url,
	 // This marker is 20 pixels wide by 32 pixels tall.
	 size: new google.maps.Size(32, 37),
	 // The origin for this image is 0,0.
	 origin: new google.maps.Point(0,0),
	 // The anchor for this image is the base of the flagpole at 0,32.
	 anchor: new google.maps.Point(16, 37)
	 };
	 
	 var entrance_img = {
	 url: entrance_url,
	 // This marker is 20 pixels wide by 32 pixels tall.
	 size: new google.maps.Size(32, 37),
	 // The origin for this image is 0,0.
	 origin: new google.maps.Point(0,0),
	 // The anchor for this image is the base of the flagpole at 0,32.
	 anchor: new google.maps.Point(16, 37)
	 };
	 
	 var disability_img = {
	 url: disability_url,
	 // This marker is 20 pixels wide by 32 pixels tall.
	 size: new google.maps.Size(32, 37),
	 // The origin for this image is 0,0.
	 origin: new google.maps.Point(0,0),
	 // The anchor for this image is the base of the flagpole at 0,32.
	 anchor: new google.maps.Point(16, 37)
	 };
	
	var markers = [
		['Chase Park festival', <?php echo $location['lat']; ?>, <?php echo $location['lng']; ?>, 1, tent_img],
		['Whickham - North bound', 54.945135, -1.676474, 2, bus_stop_img],
		['Whickham - West bound', 54.945567, -1.674864, 3, bus_stop_img],
		['Whickham - East bound', 54.945622, -1.673577, 4, bus_stop_img],
		['Whickham - East bound', 54.945912, -1.677976, 5, bus_stop_img],
		['Whickham - East bound', 54.944926, -1.670090, 6, bus_stop_img],
		['Entrance - Rectory Lane', 54.945603, -1.676034, 7, entrance_img],
		['Entrance - Front Street', 54.945203, -1.672343, 8, entrance_img],
		['Entrance - Rectory Lane', 54.943983, -1.676592, 9, entrance_img],
		['Disablility drop off zone', 54.943770, -1.675272, 10, disability_img]
	]

    function initMap() {
    
   	 	var mapOptions = {
		zoom: 16, 
		center: myLatLang, 
			mapTypeControlOptions: {
			 mapTypeIds: [google.maps.MapTypeId.ROADMAP, MAPTYPE_ID]
			}
		};
		
    	map = new google.maps.Map(document.getElementById('map'), mapOptions);
    	
    	for ( var i = 0; i < markers.length; i++) {
	    var mark = markers[i];
	    	
	    	var marker = new google.maps.Marker({
			position: {lat: mark[1], lng: mark[2]},
			map: map,
			icon: mark[4],
			title: mark[0],
			zIndex: mark[3]
			});
			
			marker.setMap(map);
    	}
    	
					
		
		
	};
	
	google.maps.event.addDomListener(window, 'load', initMap);
	
</script>

<section id="map-and-directions-section">
	
	<div id="map-wrapper" class="pg-section-full">
		<h2 class="section-header text-center bg-col-blue-dk txt-col-wht tk-azo-sans-uber">Parking and travel</h2>
		<div id="map"></div>
	</div>
	
	<div class="pg-section-full">
		<h2 class="section-header text-center bg-col-orange txt-col-wht tk-azo-sans-uber">Getting here…</h2>
		<div class="container">
			<div class="row">
				
				<div class="col-xs-6">
				<?php if (!empty($travel_info_left_text)) { ?>
				<dl class="info-list">
					<?php foreach ($travel_info_left_text as $item) { ?>
					<dt class="text-uppercase txt-col-orange"><i class="fa <?php echo $item['Icon']; ?> text-center bg-col-blue txt-col-wht"></i><?php echo $item['title']; ?></dt>
					<dd><?php echo $item['text']; ?></dd>
					<?php } ?>
				</dl>
				<?php } ?>
				</div>	
				
				<div class="col-xs-6">
				<?php if (!empty($travel_info_right_text)) { ?>
				<dl class="info-list">
					<?php foreach ($travel_info_right_text as $item) { ?>
					<dt class="text-uppercase txt-col-orange"><i class="fa <?php echo $item['Icon']; ?> text-center bg-col-blue txt-col-wht"></i><?php echo $item['title']; ?></dt>
					<dd><?php echo $item['text']; ?></dd>
					<?php } ?>
				</dl>
				<?php } ?>
				</div>	
			</div>	
		</div>
	</div>
</section>
