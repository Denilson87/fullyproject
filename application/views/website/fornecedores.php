<div class="container-fluid title-bar">
	<div class="row">
		<div class="col-sm-12">
			<h3 class="titulo">Sobre Nós</h3>
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
					<a class="nav-link <?php if($active === null){ ?> active <?php } ?>" href="<?php echo base_url('sobre-nos'); ?>">ENH Logistics</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($active === 'estrutura-organica'){ ?> active <?php } ?>" href="<?php echo base_url('sobre-nos/estrutura-organica'); ?>">Estrutura Orgnâica</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($active === 'marcos'){ ?> active <?php } ?>" href="<?php echo base_url('sobre-nos/marcos'); ?>">Marcos Significativos</a>
				</li>
			</ul>
		</div>

		<div class="col-md-9 pages-content">
			<h1>ENH Logistics</h1>
			<hr class="hr_thin">

			<div class="row">
				<div class="col-md-12">
					<img style="padding-bottom: 25px;" class="img-fluid" src="<?php echo base_url('assets/website/img/sobre-nos.png')?>">

					<p>
						A ENH Logistics, SA foi legalmente criada em Dezembro de 2011 e tem como actividade principal a prestação de serviços de Logística e fornecimento de infraestruturas de suporte ao sector de Hidrocarbonetos em Moçambique, tendo iniciado o desenvolvimento das suas actividades em 2013.
					</p>

					<ul style="list-style: square">
						<li>
							<p>
								Desde o início das actividades da empresa em Junho de 2013 que a ENH Logistics tem vindo a desenvolver e dinamizar as suas áreas de negócio, ampliando a sua estratégia de parcerias com empresas de notoriedade internacional na Indústria de Hidrocarbonetos, que permitam gerar ganhos para a empresa, para o Grupo ENH e para todos os Moçambicanos.
							</p>
						</li>
						<li>
							<p>
								A ENH Logistics, no cumprimento da sua missão, procura posicionar-se na liderança da prestação de serviços de logística e garantir a participação do capital humano nacional bem como de pequenas e médias empresas no sector de hidrocarbonetos.
							</p>
						</li>
					</ul>
				</div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12 internal-pills">
							<h5>Missão, Visão e Valores</h5>
						</div>
						<div class="col-md-5 internal-pills-container reset-p">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Missão</a>
								<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Visão</a>
								<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Valores da ENHL</a>
							</div>
						</div>
						<div class="col-md-7 reset-p">
							<div class="tab-content" id="v-pills-tabContent">
								<!--MISSAO-->
								<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
									<img class="title-img" src="<?php echo base_url('assets/website/img/visao.png')?>">
									<h6>Missão</h6>
									<hr>
									<p><b>Liderar a prestação de serviços logísticos de apoio ao sector perolífero no país</b>, com garantia de qualidade e segurança, apresentando como diferencial a actuação de forma integrada, prestando serviços a toda cadeia de valor da produção petrolífera</p>
								</div>
								<!--VISAO-->
								<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
									<img class="title-img" src="<?php echo base_url('assets/website/img/visao.png')?>">
									<h6>Visão</h6>
									<hr>
									<p>
										Prestar <b>serviços de logística rentáveis,</b> com <b>segurança e qualidade exemplar,</b> de modo a <b>servir as companhias petrolíferas em Moçambique,</b> contribuindo significativamente para o <b>desenvolvimento do país,</b> através das suas diversificadas frentes de actuação e implemntar uma política de <b>responsabilidade sócio-ambiental</b> que <b>beneficie as comunidades locais,</b> garantindo a <b>sustentabilidade das nossas actividades.</b>
									</p>
								</div>
								<!--VALORES-->
								<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
									<img class="title-img" src="<?php echo base_url('assets/website/img/visao.png')?>">
									<h6>Valores</h6>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>


