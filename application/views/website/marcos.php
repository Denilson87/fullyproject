<link rel="stylesheet" href="<?php echo base_url('assets/website/css/timelinefile.css'); ?>">
<script src="https://use.typekit.net/bkt6ydm.js"></script>
<script>
	try {
		Typekit.load({async: true});
	} catch (e) {
	}
</script>

<div class="ttm-page-title-row">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title">Sobre Nós - Informação Histórica</h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual">Sobre Nós - Informação Histórica</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$active = $this->uri->segment(2);
?>

<style>
	.marcos {
		background: url('<?php echo base_url('assets/website/img/world.png')?>');
		background-repeat: no-repeat;
		background-size: 85%;
		background-position: center;
	}

	.page-content {
		margin: 40px 0;
		padding: 0px 15px 30px;
	}

	.pages-content h3 {
		position: relative;
		display: block;
		font-size: 22px;
		line-height: 1.2em;
		color: #333333;
		font-weight: 500;
		margin-bottom: 15px;
	}

	.timeline-inside {
		margin-top: 20px;
	}
</style>

<div class="" style="background: #fff">
	<div class="container corpo">
		<div class="row">
			<div class="col-md-3 sidebar-pages-left">
				<?php include_once 'include/_sobre_aside.php'; ?>
			</div>

			<div class="col-md-9 marcos">
				<div class="page-content" style="background: rgba(255, 255, 255, 0.88); min-height: 450px;">
					<div class="row">
						<div class="col-md-12">
							<div class="sec-title-span text-center" style="margin-bottom: 20px">
								<span class="title">Nossa Informação Histórica</span>
							</div>

							<div class="timeline-design">
								<div class="col-md-12">
									<ul class="timeline timeline-centered">
										<?php foreach ($info_hstorica as $info){ ?>
											<li class="timeline-item">
												<div class="timeline-info">
													<span><?php echo $info->data; ?></span>
												</div>
												<div class="timeline-marker"></div>
												<div class="timeline-content">
													<h3 class="timeline-title"><?php echo $info->titulo; ?></h3>
													<p><?php echo $info->descricao; ?></p>
												</div>
											</li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
