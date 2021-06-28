<div class="ttm-page-title-row">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title">Sobre ENHL - <?php echo $estrutura->titulo; ?></h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual">Sobre ENHL - <?php echo $estrutura->titulo; ?></span>
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
				<div class="page-content pages-content-right">
					<div class="row">
						<div class="col-md-12">
							<h3><?php echo $estrutura->titulo; ?></h3>
							<div>
								<?php echo $estrutura->corpo; ?>
							</div>
							<p style="text-align: center">
								<img style="width: 130%; max-width: 150%" class="img-fluid" src="<?php echo base_url('media/'.$estrutura->foto) ?>">
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


