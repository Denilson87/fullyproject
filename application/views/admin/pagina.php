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
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/daterangepicker/daterangepicker.css'); ?>">
		<!-- summernote -->
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/summernote/summernote-bs4.css'); ?>">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body>
        <?php echo $header; ?>
        <?php echo $body; ?>
        <?php echo $footer; ?>

		<!-- jQuery -->
		<script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js'); ?>"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
		<!-- ChartJS -->
		<script src="<?php echo base_url('assets/admin/vendor/chart.js/Chart.min.js'); ?>"></script>
		<!-- Sparkline -->
		<script src="<?php echo base_url('assets/admin/vendor/sparklines/sparkline.js'); ?>"></script>
		<!-- JQVMap -->
		<script src="<?php echo base_url('assets/admin/vendor/jqvmap/jquery.vmap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
		<!-- jQuery Knob Chart -->
		<script src="<?php echo base_url('assets/admin/vendor/jquery-knob/jquery.knob.min.js'); ?>"></script>
		<!-- daterangepicker -->
		<script src="<?php echo base_url('assets/admin/vendor/moment/moment.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="<?php echo base_url('assets/admin/vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
		<!-- Summernote -->
		<script src="<?php echo base_url('assets/admin/vendor/summernote/summernote-bs4.min.js'); ?>"></script>
		<!-- overlayScrollbars -->
		<script src="<?php echo base_url('assets/admin/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url('assets/admin/js/adminlte.js'); ?>"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?php echo base_url('assets/admin/js/pages/dashboard.js'); ?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo base_url('assets/admin/js/demo.js'); ?>"></script>
    </body>
</html>
