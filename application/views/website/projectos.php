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
				<div class="sec-title-span text-center">
					<span class="title">Nossos Projectos</span>
					<h2>Investimentos feitos em Projectos</h2>
				</div>

				<div class="main-element filters" data-aos="fade-up" data-aos-delay="100">
					<ul id="filters" class="filter-tabs filter-btns clearfix">
						<li class="filter"><a href="#" data-filter="*" class="active">Todos</a></li>
						<li class="filter"><a href="#" data-filter=".acampamentos">Acampamentos</a></li>
						<li class="filter"><a href="#" data-filter=".seguros">Seguros</a></li>
						<li class="filter"><a href="#" data-filter=".servicos">Serviços Gerais</a></li>
					</ul>
				</div>

				<div class="page-content pages-content-right">
					<div class="row">
						<div class="col-md-12">
							<div id="portfolio-grid" class="row no-gutter" data-aos="fade-up"
								 data-aos-delay="200">
								<div class="item acampamentos col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="#" class="item-wrap fancybox">
										<div class="work-info">
											<h4>Acampamento de Palma</h4>
											<p>O Acampamento de Palma localiza-se no Distrito de Palma na Província de Cabo Delgado,
												numa área de aproximadamente 3 hectares e foi construído pela ENH Logistics 2013, com o objectivo
												de providenciar uma estrutura habitacional para as demais instituições que operam na indústria
												nacional de hidrocarbonetos.</p>
											<span>Acampamentos</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/plugins/portfolio/img/projecto.png') ?>">
									</a>
								</div>
								<div class="item acampamentos col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="#" class="item-wrap fancybox">
										<div class="work-info">
											<h4>Novo Acampamento de Palma (Antigo Acampamento da Wentworth)</h4>
											<p>Este Acampamento foi construído numa parcela de terra de 5,63h, e está situado em Palma em Cabo Delgado.</p>
											<span>Acampamentos</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/plugins/portfolio/img/projecto.png') ?>">
									</a>
								</div>
								<div class="item seguros col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="#" class="item-wrap fancybox">
										<div class="work-info">
											<h4>Corretagem de Seguros</h4>
											<p>ENHL e a MDS assinaram em Junho de 2019 um contrato de cooperação cujo objecto destina-se a
												conceptualização de uma carteira de seguros integrada composta por uma solução abrangente
												que permita a retenção da estrutura de seguros, que é praticada ao nível do grupo ENH.</p>
											<span>Seguros</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/plugins/portfolio/img/projecto.png') ?>">
									</a>
								</div>
								<div class="item servicos col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="#" class="item-wrap fancybox">
										<div class="work-info">
											<h4>Gas City</h4>
											<p>Trata-se de um projecto concebido no âmbito da promoção de infraestruturas de suporte à indústria
												petrolífera na Bacia do Rovuma que tem em vista o desenvolvimento e gestão duma área de cerca de
												18.000 hectares na Península de Afungi, em Palma.</p>
											<span>Serviços Gerais</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/plugins/portfolio/img/projecto.png') ?>">
									</a>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
