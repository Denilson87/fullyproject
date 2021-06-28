<link rel="stylesheet" href="<?php echo base_url('assets/website/css/about.css'); ?>">

<div class="ttm-page-title-row">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title"><?php echo $pagina->titulo; ?></h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual"><?php echo $pagina->titulo; ?></span>
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
					<h3 class="widget-title">Notícias</h3>
					<ul class="nav flex-column">
						<?php foreach ($paginas as $page){ ?>
							<li class="nav-item">
								<a class="nav-link <?php if($active === $page->id_pagina){ ?> active <?php } ?>" href="<?php echo base_url('noticia/'.$page->id_pagina); ?>"><?php echo $page->titulo?></a>
							</li>
						<?php }?>
					</ul>
				</aside>
			</div>

			<div class="col-md-9">
				<div class="page-content pages-content-right wow fadeInUp">
					<div class="row">
						<div class="col-md-12">
							<h3><?php echo $pagina->titulo; ?></h3>
							<div style="margin-bottom: 30px"><img src="<?php echo base_url('media/'.$pagina->imagem_destaque) ?>"></div>
							<div class="black-normal">
								<?php echo $pagina->corpo; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
