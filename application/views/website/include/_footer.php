<link rel="stylesheet" href="<?php echo base_url('assets/website/css/footer.css'); ?>">
<footer class="main-footer alternate">
	<!--Widgets Section-->
	<div class="widgets-section">
		<div class="auto-container">
			<div class="row">
				<div class="big-column col-xl-5 col-lg-12 col-md-12">
					<!--Footer Column-->
					<div class="footer-column">
						<div class="footer-widget about-widget">
							<div class="footer-logo">
								<figure class="image"><a href="#"><img src="<?php echo base_url('assets/img/logo-branco-op70.png'); ?>" alt=""></a></figure>
							</div>
							<div class="widget-content">
								<div class="text">A ENHLogistics SA é uma subsidiária da Empresa<br>Nacional de Hidrocarbonetos EP (ENH, EP),<br>empresa do Governo Moçambicano que tem como<br>actividade principal a exploração de Gás e Petróleo...</div>
								<ul class="social-icon-one">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-skype"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>

				<div class="big-column col-xl-7 col-lg-12 col-md-12">
					<div class="row">
						<div class="footer-column col-lg-4 col-md-4 col-sm-12">
							<div class="footer-widget links-widget">
								<h2 class="widget-title">Links Relacionados</h2>
								<div class="widget-content">
									<ul class="list">
										<li><a target="_blank" href="http://www.cmh.co.mz/">Companhia Moçambicana de Hidrocarbonetos, SA</a></li>
										<li><a target="_blank" href="https://www.enh.co.mz/">Empresa Nacional de Hidrocarbonetos, E.P</a></li>
										<li><a target="_blank" href="http://www.mireme.gov.mz/">Ministério dos Recursos Minerais e Energia</a></li>
										<li><a target="_blank" href="http://www.inp.gov.mz/">Instituto Nacional de Petróleo</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="footer-column col-lg-4 col-md-4 col-sm-12">
							<div class="footer-widget links-widget">
								<h2 class="widget-title">Áreas de Logística</h2>
								<div class="widget-content">
									<ul class="list">
										<li><a href="<?php echo base_url('unidades-negocio/imobiliario'); ?>">Imobiliario</a></li>
										<li><a href="<?php echo base_url('unidades-negocio/manutencao'); ?>">Manutenção</a></li>
										<li><a href="<?php echo base_url('unidades-negocio/portos'); ?>">Portos</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="footer-column col-lg-4 col-md-4 col-sm-12">
							<div class="footer-widget contact-widget">
								<h2 class="widget-title">Contactos</h2>
								<div class="widget-content">
									<ul class="contact-list">
										<li><i class="fas fa-map-marker-alt"></i> <?php echo $footer_contacto->endereco ?></li>
										<li><i class="fa fa-history"></i> <?php echo $footer_contacto->horario_trabalho ?> </li>
										<li><i class="fas fa-mobile-alt"></i> <a href=""><?php echo $footer_contacto->telefone ?></a></li>
										<li><i class="fas fa-envelope"></i> <a href="mailto:<?php echo $footer_contacto->email ?>"><?php echo $footer_contacto->email ?></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Bottom-->
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="copyright-text">Copyright © <?php echo date('Y'); ?> <a href="#">ENH Logistics</a>. Todos direitos reservados  <span class="dev-team">by :: <a class="projenity" href="http://www.projenity.com" target="_blank">Projenity</a></span></div>
		</div>
	</div>

</footer>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<script>
	$(document).ready(function () {
		// Back to top button
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.back-to-top').fadeIn('slow');
			} else {
				$('.back-to-top').fadeOut('slow');
			}
		});
		$('.back-to-top').click(function () {
			$('html, body').animate({
				scrollTop: 0
			}, 1500, 'easeInOutExpo');
			return false;
		});

		// Initiate the wowjs animation library
		new WOW().init();

		if ($('.logo-slides').length) {
			$(".logo-slides").owlCarousel({
				autoplay: true,
				autoplayTimeout: 3000,
				loop: true,
				margin: 10,
				nav: false,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					480: {
						items: 2
					},
					767: {
						items: 3
					},
					991: {
						items: 4
					},
					1199: {
						items: 5
					}
				}

			});
		}
	});
</script>
</body>

</html>
