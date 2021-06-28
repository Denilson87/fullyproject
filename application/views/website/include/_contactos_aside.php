<div class="map-column">
	<div class="inner-column">
		<!-- Location -->
		<div class="location-info">
			<h4 class="title">Endereço</h4>
			<ul class="info-list">
				<li><i class="fas fa-map-marked-alt"></i><?php echo $contactos->endereco; ?></li>
			</ul>
		</div>

		<!-- Contact info -->
		<div class="contact-info">
			<h4 class="title">Informações de Contacto</h4>
			<ul class="info-list">
				<li><i class="fas fa-mobile-alt"></i><?php echo $contactos->telefone; ?></li>
				<li><i class="fa fa-envelope"></i><?php echo $contactos->fax; ?></li>
				<li><i class="fa fa-envelope"></i><?php echo $contactos->email; ?></li>
			</ul>
		</div>

		<!-- Social Links -->
		<div class="social-links">
			<ul class="social-icon">
				<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
				<li><a href="#"><span class="fab fa-twitter"></span></a></li>
				<li><a href="#"><span class="fab fa-skype"></span></a></li>
				<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
			</ul>
		</div>

		<!-- Social Outer -->
		<div class="map-outer">
			<div id="map" class="mapa"></div>
			<script>
				function initMap() {
					var uluru = { lat: -25.9689534, lng: 32.5816368 };
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 18,
						center: uluru
					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGQ0BxFtCSuGIIdinQBw32tdWJRVIp_tM&callback=initMap"></script>

		</div>
	</div>
</div>
