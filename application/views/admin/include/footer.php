</div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
	<strong>Copyright &copy; 2020 <a href="#">ENH Logistics</a>.</strong>
	Todos Direitos Reservados.
	<div class="float-right d-none d-sm-inline-block">
		<b>Versão</b> 0.1
	</div>
</footer>

</div>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!--<script>-->
<!--	$.widget.bridge('uibutton', $.ui.button)-->
<!--</script>-->
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
<!-- datatables -->
<script src="<?php echo base_url('assets/admin/vendor/moment/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin/vendor/datatables/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin/vendor/datatables-bs4/js/dataTables.bootstrap4.js'); ?>"></script>
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

<script>



	$(function () {
		$(".tabela-enhl").DataTable();
		$('.use-selct2').select2({
			theme: "classic"
		});
	});
</script>
</body>
</html>


