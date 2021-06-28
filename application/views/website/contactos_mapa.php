<div class="container-fluid title-bar">
	<div class="row">
		<div class="col-sm-12">
			<h3 class="titulo">Contactos</h3>
		</div>
	</div>
</div>

<?php
$active = $this->uri->segment(2);
?>

<div class="container-fluid corpo" style="background: #fff">
	<div class="row">
		<div class="col-md-3 sidebar-pages">
			<ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link <?php if($active === null){ ?> active <?php } ?>" href="<?php echo base_url('contactos'); ?>">Contactos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($active === 'mapa'){ ?> active <?php } ?>" href="<?php echo base_url('contactos/mapa'); ?>">Mapa</a>
				</li>
			</ul>
		</div>

		<div class="col-md-9 pages-content">
			<h1>Localização da ENH Logistics</h1>
			<hr class="hr_thin">

			<div class="row">
				<div class="col-md-12">
					<div id="map" class="mapa"></div>
					<?php include_once 'include/fragment_mapa.php'; ?>
				</div>
			</div>
		</div>

	</div>
</div>


