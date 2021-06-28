<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ENH Logistics</title>
	<!--	CSS Files	-->
	<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/website/vendor/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/website/css/style.css'); ?>">

	<link href="<?php echo base_url('assets/website/plugins/revslider/css/navstylechange.css'); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/website/plugins/revslider/css/settings-ie8.css'); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/website/plugins/revslider/css/settings.css'); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/website/plugins/revslider/css/style-rs.css'); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/website/plugins/animate/animate.css'); ?>" rel="stylesheet"/>
	<!-- Owl Carousel -->
	<link href="<?php echo base_url('assets/website/plugins/owlcarousel/owl.carousel.min.css'); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/website/plugins/owlcarousel/owl.theme.min.css'); ?>" rel="stylesheet"/>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/fontawesome-free/css/all.min.css'); ?>">
	<!-- Datatables -->
	<link rel="stylesheet"
		  href="<?php echo base_url('assets/admin/vendor/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">

	<!--	JS Files	-->
	<script src="<?php echo base_url('assets/website/vendor/jquery/js/jquery-3.4.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/website/vendor/popper/popper.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/website/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/website/js/enhl.js'); ?>"></script>

	<script src="<?php echo base_url('assets/website/plugins/portfolio/vendor/jquery.easing/jquery.easing.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/website/plugins/portfolio/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/website/plugins/portfolio/vendor/aos/aos.js'); ?>"></script>
	<script src="<?php echo base_url('assets/website/plugins/portfolio/js/main.js'); ?>"></script>
	<script src="<?php echo base_url('assets/website/plugins/wow/wow.js'); ?>"></script>
	<!-- Owl Carousel -->
	<script src="<?php echo base_url('assets/website/plugins/owlcarousel/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/website/plugins/owlcarousel/owl.carousel.min.js'); ?>"></script>

	<script src="<?php echo base_url('assets/website/plugins/revslider/'); ?>"></script>
	<script src="<?php echo base_url('assets/website/plugins/revslider/js/jquery.themepunch.plugins.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/website/plugins/revslider/js/jquery.themepunch.revolution.js'); ?>"></script>
<!--	<script src="--><?php //echo base_url('assets/website/plugins/revslider/js/jquery.themepunch.revolution.min.js'); ?><!--"></script>-->
	<!-- datatables -->
	<script src="<?php echo base_url('assets/admin/vendor/moment/moment.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/vendor/datatables/jquery.dataTables.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/vendor/datatables-bs4/js/dataTables.bootstrap4.js'); ?>"></script>

	<!-- Unite Gallery -->
	<script type='text/javascript' src='<?php echo base_url('assets/website/plugins/unitegallery/js/unitegallery.min.js'); ?>'></script>
	<link rel='stylesheet' href='<?php echo base_url('assets/website/plugins/unitegallery/css/unite-gallery.css'); ?>' type='text/css' />
	<script type='text/javascript' src='<?php echo base_url('assets/website/plugins/unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js'); ?>'></script>
</head>
<body>
<?php
$active = $this->uri->segment(1);
$active_child = $this->uri->segment(2);
?>

<header>
	<div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
		<div class="container">
			<div class="ttm-topbar-content">
				<ul class="top-contact text-left">
					<li class="list-inline-item"><span style="padding-right: 5px">info@enhlogistics.co.mz</span> <span
								style="opacity: .5">|</span> <span style="padding-left: 5px">(+258) 21 32 12 40</span>
					</li>
				</ul>
				<div class="topbar-right text-right">
					<div class="topbar-menu">
						<ul class="">
							<li class="list-inline-item"><a href="<?php echo base_url('noticias'); ?>">Notícias</a></li>
							<li class="list-inline-item"><a href="<?php echo base_url('oportunidades'); ?>">Cadastre-se</a></li>
						</ul>
					</div>
					<div class="ttm-social-links-wrapper list-inline">
						<ul class="social-icons">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li><a href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fab fa-skype"></i></a>
							</li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-enhl navbar-light bg-light">
		<div class="container">
			<div class="site-branding">
				<a class="" href="<?php echo base_url(); ?>"><img class=""
																  src="<?php echo base_url('assets/img/logo.png'); ?>"
																  alt="Logotipo"></a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse row" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto enhl-nav">
					<li class="nav-item <?php if ($active === null) { ?> active <?php } ?>"><a class="nav-link"
																							   href="<?php echo base_url(); ?>">Início</a>
					</li>

					<li class="nav-item dropdown <?php if ($active === 'sobre-nos') { ?> active <?php } ?>">
						<a class="nav-link  <?php if ($active === 'sobre-nos') { ?> active <?php } ?> dropdown-toggle"
						   data-toggle="dropdown" href="Javascript:void(0)" role="button" aria-haspopup="true"
						   aria-expanded="false">Sobre ENHL</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?php echo base_url('sobre-nos'); ?>">ENH Logistics</a>
							<a class="dropdown-item" href="<?php echo base_url('sobre-nos/estrutura-organica'); ?>">Estrutura
								Orgânica</a>
							<a class="dropdown-item" href="<?php echo base_url('sobre-nos/marcos'); ?>">Informação
								Histórica</a>
						</div>
					</li>

					<li class="nav-item <?php if ($active === 'areas-logistica') { ?> active <?php } ?>"><a
								class="nav-link" href="<?php echo base_url('areas-logistica'); ?>">Áreas de
							Logística</a></li>

					<li class="nav-item dropdown <?php if ($active === 'portfolio') { ?> active <?php } ?>">
						<a class="nav-link  <?php if ($active === 'portfolio') { ?> active <?php } ?> dropdown-toggle"
						   data-toggle="dropdown" href="Javascript:void(0)" role="button" aria-haspopup="true"
						   aria-expanded="false">Portfólio</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?php echo base_url('portfolio'); ?>">Portfolio</a>
							<a class="dropdown-item" href="<?php echo base_url('portfolio/projectos'); ?>">Projectos</a>
							<a class="dropdown-item" href="<?php echo base_url('portfolio/parcerias'); ?>">Parcerias</a>
						</div>
					</li>

					<li class="nav-item dropdown <?php if ($active === 'galeria') { ?> active <?php } ?>">
						<a class="nav-link  <?php if ($active === 'galeria') { ?> active <?php } ?> dropdown-toggle"
						   data-toggle="dropdown" href="Javascript:void(0)" role="button" aria-haspopup="true"
						   aria-expanded="false">Galeria</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?php echo base_url('galeria'); ?>">Fotos</a>
							<a class="dropdown-item" href="<?php echo base_url('galeria/videos'); ?>">Videos</a>
						</div>
					</li>

<!--					<li class="nav-item --><?php //if ($active === 'oportunidades') { ?><!-- active --><?php //} ?><!--"><a-->
<!--								class="nav-link" href="--><?php //echo base_url('oportunidades'); ?><!--">Cadastre-se</a></li>-->

					<li class="nav-item <?php if ($active === 'contactos') { ?> active <?php } ?>"><a class="nav-link"
																									  href="<?php echo base_url('contactos'); ?>">Contactos</a>
					</li>
				</ul>

				<div class="dropdown search-menu">
					<a href="Javascript:void(0)" class="dropdown-toggle item-search" id="dropdownMenu2"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-search"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<form class="form-search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Pesquisar..."
									   aria-label="Recipient's username" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
												class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


	</nav>
</header>

