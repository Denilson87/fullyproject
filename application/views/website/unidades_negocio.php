<div class="ttm-page-title-row">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title"><?php echo $pagina->titulo ?></h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual"><?php echo $pagina->titulo ?></span>
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
				<aside class="widget widget-nav-menu">
					<h3 class="widget-title">Áreas de Logística</h3>
					<ul class="nav flex-column">
						<?php foreach ($paginas as $page){ ?>
							<li class="nav-item">
								<a class="nav-link <?php if($active === $page->id_pagina){ ?> active <?php } ?>" href="<?php echo base_url('areas-logistica/'.$page->id_pagina); ?>"><?php echo $page->titulo?></a>
							</li>
						<?php }?>
					</ul>
				</aside>

				<aside class="widget contact-widget">
					<h3 class="widget-title">Entre em Contacto</h3>
					<ul class="contact-widget-wrapper">
						<li><i class="fas fa-mobile-alt"></i>(+258) 21 42 94 56</li>
						<li><i class="fas fa-mobile-alt"></i>(+258) 21 32 48 56</li>
						<li><i class="fas fa-envelope"></i><a href="mailto:info@enhlogistic.co.mz" target="_blank">info@enhlogistic.co.mz</a></li>
					</ul>
				</aside>

			</div>

			<div class="col-md-9">
				<div class="page-content pages-content-right">
					<div class="row">
						<div class="col-md-12">
							<h3><?php echo $pagina->titulo ?></h3>
<!--							--><?php //var_dump($widgets); ?>
							<div class="row">
								<div class="col-md-12 black-normal">
									<img style="padding-bottom: 25px;" class="img-fluid" src="<?php echo base_url('media/'.$pagina->imagem_destaque)?>">
									<?php echo $pagina->corpo ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>

