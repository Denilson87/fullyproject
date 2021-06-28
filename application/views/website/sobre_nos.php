<link rel="stylesheet" href="<?php echo base_url('assets/website/css/about.css'); ?>">

<div class="ttm-page-title-row">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title">Sobre Nós</h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual">Sobre ENHL</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$active = $this->uri->segment(2);
?>

<div class="" style="background: #fff">
	<div class="container corpo">
		<div class="row">
			<div class="col-md-3 sidebar-pages-left">
				<?php include_once 'include/_sobre_aside.php'; ?>
			</div>

			<div class="col-md-9">
				<div class="page-content pages-content-right wow fadeInUp">
					<div class="row">
						<div class="col-md-12">
							<!--							<img style="padding-bottom: 25px;" class="img-fluid" src="-->
							<?php //echo base_url('assets/website/img/sobre-nos.png')?><!--" />-->
						</div>

						<div class="col-md-12">
							<h3><?php echo $info->titulo ?></h3>

							<?php echo $info->corpo ?>

							<div class="row">
								<div class="col-md-4 missao">
									<h3><i class="fa fa-bullseye"></i>Missão</h3>
									<?php echo $info->missao ?>
								</div>

								<div class="col-md-4 visao">
									<h3><i class="fa fa-eye"></i>Visão</h3>
									<?php echo $info->visao ?>
								</div>

								<div class="col-md-4 valores">
									<h3><i class="fa fa-gem"></i>Valores</h3>
									<?php echo $info->valores ?>
								</div>

							</div>

						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
