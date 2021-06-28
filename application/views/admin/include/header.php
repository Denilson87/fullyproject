<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admininistração | ENH Logistics</title>
	<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/admin/img/favicon.png'); ?>">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/fontawesome-free/css/all.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/jqvmap/jqvmap.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/adminlte.min.css'); ?>">
	<!-- Dropzone -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/dropzone/dropzone.min.css'); ?>">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
	<!-- Datatables -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/summernote/summernote-bs4.css'); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Custum Styles -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/style.css'); ?>">

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js'); ?>"></script>

	<link href="<?php echo base_url('assets/admin/vendor/select2/css/select2.min.css'); ?>" rel="stylesheet" />
	<script src="<?php echo base_url('assets/admin/vendor/select2/js/select2.js'); ?>"></script>

	<script src="<?php echo base_url('assets/admin/plugins/modernizr/modernizr.js'); ?>"></script>

	<!-- tinymce -->
<!--	<script src="--><?php //echo base_url('assets/admin/plugins/editor/tinymce.min.js'); ?><!--"></script>-->
	<script src="https://cdn.tiny.cloud/1/hd2vx9oc5od3earb2g708rkltpjysjertn8xkbipswt4dfxn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

	<style>
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 100px; top: 0; }
		.se-pre-con {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url(<?php echo base_url('media/img/loaders/1.gif') ?>) center no-repeat rgba(255,255,255,.9);
		}
	</style>

	<script>
		function progress(){
			// Animate loader off screen
			$(".se-pre-con").fadeOut('slow');
		}
	</script>
</head>
<body onload="progress()" class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="se-pre-con"></div>
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-success">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="<?php echo base_url('website')?>" class="nav-link">Visitar a Pagina</a>
		</li>
	</ul>

	<!-- SEARCH FORM -->
	<form class="form-inline ml-3">
		<div class="input-group input-group-sm">
			<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-navbar" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</div>
		</div>
	</form>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item">
			<a class="nav-link" href="<?php echo admin_url('autenticacao/logout') ?>"><i style="padding-right: 5px"
					class="fas fa-sign-out-alt"></i> Sair</a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->

