<?php get_header(); ?>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJmcrw6EmdKVALN1tj50wbIZK7wfDvd28&sensor=false"></script>


<!--
<div class="page-header cont">
	<div class="mid-cont">
		<h5><?php the_title(); ?></h5>
		<h1><span><?php the_field('page_headline'); ?></span></h1>
	</div>
</div>
-->
<div class="black-bg cont">
	<div class="mid-cont">
		<div class="left">
			<?php the_field("charleston_office") ?>
			<?php the_field("atlanta_office") ?>
		</div>
		<div class="right">
			<div class="contact cont">
				<a href="mailto:<?php the_field('contact_email', 'user_1'); ?>"><?php the_field('contact_email', 'user_1'); ?></a><br/>
				<?php the_field('phone', 'user_1'); ?>
			</div>
			<a class="button black btn-mobile" target="_blank" href="<?php the_field('address_map', 'user_1'); ?>">driving directions</a>
			<div class="social-cont cont">
				<a class="instagram social-icon" target="_blank" href="<?php the_field('instagram_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.png" /></a>
				<a class="twitter social-icon" target="_blank" href="<?php the_field('twitter_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" /></a>
				<a class="pinterest social-icon" target="_blank" href="<?php the_field('pinterest_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/pinterest-icon.png" /></a>
				<a class="facebook social-icon" target="_blank" href="<?php the_field('facebook_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" /></a>
			</div>
		</div>

	</div>
</div>
<div id="contact-form" class="cont blue">
	<div class="mid-cont">
		<h5 class="form-title">send us a message</h5>
		<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
	</div>
</div>
<div id="map" class="cont"></div>
	<script>
	$(window).load(function() {
		initialize();
	});
	$(window).resize(function() {
		initialize();
	});
	
	
		function initialize() {
			var myLatlng = new google.maps.LatLng(32.797570, -79.950402);
		    var mapOptions = {
				zoom: 15,
				scaleControl: false,
				scrollwheel: false,
				zoomControl: false,
				panControl:false,
				streetViewControl: false,
				mapTypeControl:false,
				center: myLatlng,
				styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
			};

			var mapElement = document.getElementById('map');
			var map = new google.maps.Map(mapElement, mapOptions);
			var image = new google.maps.MarkerImage('/wp-content/themes/cobblehill/images/map-pin.png');
			var marker = new google.maps.Marker({
				position: map.getCenter(),
				map: map,
				icon: image,
				labelClass: 'pin'
			});

			var contentString = '<div id="map-bubble"><img src="/wp-content/themes/cobblehill/images/map-pin-img.jpg" style="position:relative; float:left; margin:22px 25px 22px 18px;"/><div id="map-address"><h5>COBBLE HILL</h5>602 Rutledge Avenue, Second Floor</br>Charleston, SC 29401<a class="button" href="https://www.google.com/maps/place/602 Rutledge Avenue, Charleston, SC" target="_blank">driving directions</a></div></div>';
			var infowindow = new google.maps.InfoWindow({content: contentString});
			var center;


			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
				//$('#map').css({'z-index': 100});
			});
			function calculateCenter() {
			  center = map.getCenter();
			}
			// google.maps.event.addDomListener(map, 'idle', function() {
			//   calculateCenter();
			// });
			// google.maps.event.addDomListener(window, 'resize', function() {
			//   map.setCenter(center);
			// });

			google.maps.event.addListenerOnce(map, 'idle', function() {
				calculateCenter();
			   google.maps.event.trigger(map, 'resize');
			   map.setCenter(center); // var center = new google.maps.LatLng(50,3,10.9);
			});

		}
	</script>

<?php get_footer(); ?>