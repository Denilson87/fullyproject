<div class="ttm-page-title-row" style="background: url(<?php echo base_url('assets/img/10.jpg') ?>)">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title">Parcerias</h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual">Parcerias</span>
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
					<span class="title">Nossas Empresas</span>
					<h2>Parcerias feitas</h2>
				</div>

				<div class="main-element filters" data-aos="fade-up" data-aos-delay="100">
					<ul id="filters" class="filter-tabs filter-btns clearfix">
						<li class="filter"><a href="#" data-filter="*" class="active">Todas</a></li>
						<?php foreach ($categorias as $categoria){ ?>
							<li class="filter"><a href="#" data-filter="<?php echo '.'.$categoria->descricao?>"><?php echo $categoria->designacao; ?></a></li>
						<?php }?>
<!---->
<!--						<li class="filter"><a href="#" data-filter=".construcao">Construção</a></li>-->
<!--						<li class="filter"><a href="#" data-filter=".logistica">Logística</a></li>-->
<!--						<li class="filter"><a href="#" data-filter=".servicos">Serviços</a></li>-->
<!--						<li class="filter"><a href="#" data-filter=".veiculos">Veículos</a></li>-->
					</ul>
				</div>

				<div class="page-content pages-content-right">
					<div class="row">
						<div class="col-md-12">

							<div id="portfolio-grid" class="row no-gutter" data-aos="fade-up"
								 data-aos-delay="200">

								<div class="item servicos col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/zmi'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>ENHL e Zakher </h4>
											<p>Parceria firmada para prover serviços marítmos à indústria de petróleo...</p>
											<span>Parceria</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiro-zmi.png') ?>">
									</a>
								</div>
								<div class="item logistica col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/sscale'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>ENHL e Small Scale LNG</h4>
											<p>Esta sociedade foi criada para desenvolver um projecto de importação e distribuição de Gás Natural Liquefeito para o país e para a SADC.</p>
											<span>Parceria - Logística</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiro-sscale.png') ?>">
									</a>
								</div>
								<div class="item construcao col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/bonatti'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>ENHL e Bonatti</h4>
											<p>Para actuar na prestação de serviços à indústria de petróleio e gás, nas áreas de Construção, Gestão e Manutenção de infraestruturas petrolíferas.</p>
											<span>Parceria - Construção</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiro-bonatti.png') ?>">
									</a>
								</div>
								<div class="item construcao col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/enhils'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>ENHILS</h4>
											<p>A ENHILS é responsável por investir e gerir a Base Logística de Pemba.</p>
											<span>Parceria - Construção</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiro-enhils.png') ?>">
									</a>
								</div>
								<div class="item logistica col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/lngshipping'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>ENH e LNG Shipping</h4>
											<p>A ENH LNG Shipping tem a missão de contribuir para o desenvolvimento da capacidade interna e conhecimento no sector de transporte marítimo de Gás Natural...</p>
											<span>Parceria - Logística</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiro-lng.png') ?>">
									</a>
								</div>
								<div class="item construcao col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/belleli'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>ENHL e Belleli</h4>
											<p>A ENHL-Belleli, Lda foi criada com o objectivo de compor uma série de soluções integradas, nomeadamente: <i>Belleli Heavy industries; Belleli Offshore; Belleli Construction; Belleli Operation & Management... </i></p>
											<span>Parceria - Construção</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiro-bw.png') ?>">
									</a>
								</div>
								<div class="item servicos col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/technip'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>ENHL e TechnipFMC</h4>
											<p>A sociedade tem por objecto a prestação de serviços de engenharia e gestão de projectos à indústria do petróleo e gás de Moçambique</p>
											<span>Parceria</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiro-tech.png') ?>">
									</a>
								</div>
								<div class="item servicos col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/enmar'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>ENMAR</h4>
											<p>Trata-se uma parceria firmada entre a ENHL, a Subsea 7 e a WORLD ASSISTANCE PETROLEUM OPERATIONS (WAPO)...</p>
											<span>Parceria</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiroenmar.png') ?>">
									</a>
								</div>

								<div class="item servicos col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/mds'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>Parceria com a MDS</h4>
											<p>...</p>
											<span>Parceria</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiro_mds.png') ?>">
									</a>
								</div>

								<div class="item servicos col-sm-6 col-md-4 col-lg-4 mb-4">
									<a href="<?php echo base_url('parcerias/arpsa'); ?>" class="item-wrap fancybox">
										<div class="work-info">
											<h4>ARP SA</h4>
											<p>...</p>
											<span>Parceria</span>
										</div>
										<img class="img-fluid"
											 src="<?php echo base_url('assets/website/img/parceiros/parceiro_arpsa.png') ?>">
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

<div class="row tornar-parceiro hidden">

</div>
