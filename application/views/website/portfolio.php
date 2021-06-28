<div class="ttm-page-title-row" style="background: url(<?php echo base_url('assets/img/10.jpg') ?>)">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title">Portfolio</h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual">Portfólio</span>
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
	<div class="container corpo projects-section">
		<div class="row">
			<div class="col-md-12" style="margin-top: 40px">
				<div style="margin-bottom: 0" class="sec-title-span text-center">
					<span class="title"><?php echo $portfolio->titulo; ?></span>
<!--					<h2>Investimentos feitos em Projectos</h2>-->
				</div>
				
				<div style="margin-top: 0" class="page-content pages-content-right">
					<div class="row">
						<div class="col-md-12">
							<img style="width: 100%" src="<?php echo base_url('media/'.$portfolio->foto) ?>">
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
