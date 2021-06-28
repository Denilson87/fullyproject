<?php include_once 'include/fragment_slider.php'; ?>
<style>
	.section-info-1 h3 {
		position: relative;
		font-size: 24px;
		font-weight: 600;
		color: #111;
		line-height: 2;
	}

	.news-body p{
		line-height: 150%;
	}

	.section-separator {
		content: '';
		display: block;
		width: 100px;
		height: 3px;
		margin: 15px auto 30px auto;
		background: #ED1B24;
		border-radius: 25%;
	}

	.section-header{
		margin-top: 30px;
		margin-bottom: 10px;
		text-align: center;
	}

	.btn-ler-mais{
		display: inline-block;
		font-size: 14px;
		font-weight: 600;
		padding: 7px 25px 7px 25px;
		background: #ED1B24;
		width: 150px;
		margin-top: 10px;
		border-radius: 50px;
		color: #fff;
	}

	.section-header span {
		position: relative;
		font-size: 15px;
		font-weight: 500;
		color: #ED1B24;
		line-height: 200%;
		margin-bottom: 10px;
	}
</style>

<div class="section-info-1 wow fadeInUp" style="background: #fff; padding: 30px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-header">
					<span>BEM VINDO À NOSSA PÁGINA WEB</span>
					<h3 style="text-align: center">A ENH LOGISTICS tem o maior prazer de apresentar a sua nova página web</h3>
					<div class="section-separator"></div>
<!--					<span>Caro leitor,</span>-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<?php echo $mensagem->introducao; ?>
						<p>
							<a href="<?php echo base_url('page/'.$mensagem->id_pagina)?>" class="btn btn-ler-mais">Ler mais...</a>
						</p>
					</div>
					<div class="col-md-6" style="max-height: 344px; overflow: hidden;">
						<img class="img-fluid" src="<?php echo base_url().'media/'.$mensagem->imagem_destaque; ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Seccao Noticias -->
<div class="section-news mtop-15 wow fadeInUp">
	<div class="row row-container" style="height: 100%">
		<div class="col-md-3 news-box-y shape-rect-down mbotton-15">
			<a href="<?php echo base_url('noticia/'.$noticia1->id_pagina)?>">
				<div class="news-header" style="background-size: 100% 100%; background-image: url('<?php echo base_url('media/'.$noticia1->imagem_destaque) ?>')"></div>
				<div class="border-news down"></div>
				<div class="news-body shape-down">
					<?php echo $noticia1->titulo ?>
<!--					Expansão de um gasoduto de 865 km de transporte de hidrocarbonetos da Central de Processamento em Temane-->
<!--					, na província de Inhambane...-->
				</div>
			</a>
		</div>

		<div class="col-md-3 mbotton-15">
			<div class="row" style="height: 100%">
				<div class="col-md-12 reset-p news-box-h">
					<a href="<?php echo base_url('noticia/'.$noticia2->id_pagina)?>">
						<div class="news-body-h info-shape-top rect-shape-op70-top" style="float: left; background: #009343;">
							<div class="news-body-text">
								<?php echo $noticia2->titulo ?>
<!--								No âmbito da sua Responsabilidade Social, a ENH Logistics definiu um conjunto de Medidas de Prevenção ao COVID-19-->
							</div>
						</div>
						<div class="news-header-h" style="background-image: url('<?php echo base_url('media/'.$noticia2->imagem_destaque) ?>')"></div>
					</a>
				</div>

				<div class="col-md-12 reset-p news-box-h">
					<a href="<?php echo base_url('noticia/'.$noticia3->id_pagina)?>">
						<div class="news-header-h" style="background-image: url('<?php echo base_url('media/'.$noticia3->imagem_destaque) ?>')"></div>
						<div class="news-body-h info-shape-down rect-shape-op70-down" style="float: right; background: #009343;">
							<div class="news-body-text">
								<?php echo $noticia3->titulo ?>
<!--								Lançamento do Casco Coral Sul FLNG da ENI-->
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 news-box-y shape-rect-up mbotton-15">
			<a href="<?php echo base_url('noticia/'.$noticia4->id_pagina)?>">
				<div class="news-body shape-up">
					<?php echo $noticia4->titulo ?>
<!--					ENH Integrated Logistics Services - ENHILS é responsável pelo investimento, projecção, construção, operação da Base Logística de Pemba e gestão de terminais portuários...-->
				</div>
				<div class="border-news"></div>
				<div class="news-header up" style="background-image: url('<?php echo base_url('media/'.$noticia4->imagem_destaque) ?>')"></div>
			</a>
		</div>

		<div class="col-md-3 mbotton-15" style="padding-right: 0">
			<div class="row" style="height: 100%">
				<div class="col-md-12 reset-p news-box-h">
					<a href="<?php echo base_url('noticia/'.$noticia5->id_pagina)?>">
						<div class="news-header-h" style="background-position: right; background-image: url('<?php echo base_url('media/'.$noticia5->imagem_destaque) ?>')"></div>
						<div class="news-body-h info-shape-r-top rect-shape-op70-r-top" style="float: right; background: #009343; color: #fff">
							<div class="news-body-text">
								<?php echo $noticia5->titulo ?>
<!--								Presidente da República destaca sector de Hidrocarbonetos na Agenda Governativa dos próximos 5 anos-->
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-12 reset-p news-box-h">
					<a href="<?php echo base_url('noticia/'.$noticia6->id_pagina)?>">
						<div class="news-body-h info-shape-top rect-shape-op70-top" style="float: left; background: #009343; color: #fff">
							<div class="news-body-text info-shape-r-down rect-shape-op70-r-down">
								<?php echo $noticia6->titulo ?>
<!--								A Zakher detém uma quota de mercado no Médio Oriente de aproximadamente 80% no fornecimento e operação de “Jack-Up Barges”...-->
							</div>
						</div>
						<div class="news-header-h" style="background-image: url('<?php echo base_url('media/'.$noticia6->imagem_destaque) ?>')"></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Seccao de Serviços -->
<div class="section-info-2 wow fadeInUp">
	<div class="row row-container-general" style="height: 100%">
		<div class="col-md-5 reset-p" style="background-repeat: no-repeat; background-position: center; background-size: cover; background-image: url('<?php echo base_url('assets/website/img/unidades.jpg') ?>')">
			<div class="news-layer">
				<div style="width: 100%;">
					<div class="news-links nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<?php foreach ($paginas as $page){ ?>
							<a class="nav-link" id="<?php echo 'v-pills-service-'.$page->id_pagina?>" data-toggle="pill" href="<?php echo '#service-'.$page->id_pagina?>" role="tab" aria-controls="<?php echo '#service-'.$page->id_pagina?>" aria-selected="false"><?php echo $page->titulo?></a>
						<?php }?>
<!--						<a class="nav-link" id="v-pills-service-1" data-toggle="pill" href="#service-1" role="tab" aria-controls="service-1" aria-selected="true">Aviação</a>-->
<!--						<a class="nav-link" id="v-pills-service-1" data-toggle="pill" href="#service-2" role="tab" aria-controls="service-2" aria-selected="false">Cabotagem</a>-->
<!--						<a class="nav-link" id="v-pills-service-2" data-toggle="pill" href="#service-3" role="tab" aria-controls="service-3" aria-selected="false">Imobiliário</a>-->
<!--						<a class="nav-link" id="v-pills-service-3" data-toggle="pill" href="#service-4" role="tab" aria-controls="service-4" aria-selected="false">Manutenção</a>-->
<!--						<a class="nav-link" id="v-pills-service-4" data-toggle="pill" href="#service-5" role="tab" aria-controls="service-5" aria-selected="false">Portos</a>-->
<!--						<a class="nav-link" id="v-pills-service-5" data-toggle="pill" href="#service-6" role="tab" aria-controls="service-6" aria-selected="false">Saúde</a>-->
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7 reset-p section-services" style="display: flex; align-items: center; background: #333333">
			<div class="tab-content services-content" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="service-intro" role="tabpanel" aria-labelledby="v-pills-service-intro">
					<h3>Principais Áreas de Logística</h3>
					<small>Alinhamento das Unidades de Negócio com Áreas de Actuação</small>
					<hr>
					<p>
						Considerando o âmbito alargado que compreende a actividade principal da ENH Logistics, ou seja, a prestação de serviços e fornecimento de infraestruturas ao sector do Hidrocarbonetos, foram identificados os principais sectores onde a ENH Loistics desenvolverá a sua actividade em parceria com as empresas de exploração e Produção, o Empresariado Moçambicano e eventuais parceiros internacionais.
					</p>
				</div>

				<?php foreach ($paginas as $page){ ?>
					<div class="tab-pane fade" id="<?php echo 'service-'.$page->id_pagina?>" role="tabpanel" aria-labelledby="<?php echo 'v-pills-service-'.$page->id_pagina?>">
						<h3><?php echo $page->titulo?></h3>
						<hr>
						<?php echo $page->introducao?>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>

<!--==========================
  Partners Section
============================-->

<section class="home-partners wow fadeInUp" style="margin: 20px 0">
	<div class="container">
		<div class="section-title text-center">
			<h2 class="subtitle-testimonials title-2"> NOSSAS EMPRESAS </h2>
			<div class="spacer-20"> </div>
		</div>

		<div class="row partners">
			<div class="logo-slides slides owl-carousel">
				<?php foreach ($parcerias as $parceria){ ?>
					<div class="item">
						<div class="partner-images">
							<img src="<?php echo base_url('media/'.$parceria->foto) ?>" alt="<?php echo $parceria->titulo?>">
						</div>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</section>
