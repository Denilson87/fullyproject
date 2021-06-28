<div class="ttm-page-title-row" style="background: url(<?php echo base_url('assets/img/10.jpg') ?>)">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title">Notícias</h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual">Notícias</span>
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
					<span class="title">Notícias</span>
				</div>
<!--				--><?php //var_dump($noticias);?>
				<div class="page-content pages-content-right">
					<?php foreach ($noticias as $noticia){ ?>
						<div style="margin-bottom: 25px;" class="row">
							<div class="col-md-2 offset-1" style="border: 1px solid #f4f4f4; border-right: none; padding: 15px">
								<img style="width: 100%;" class="img-fluid" src="<?php echo base_url().'media/'.$noticia->imagem_destaque; ?>">
							</div>

							<div class="col-md-8" style="border: 1px solid #f4f4f4; border-left: none; padding: 15px">
								<h4 style="font-size: 20px;"><?php echo $noticia->titulo; ?></h4>
								<div>
									<?php echo $noticia->introducao; ?>
								</div>
								<a class="btn btn-ler-mais" href="<?php echo base_url('page/'.$noticia->id_pagina); ?>">Ler mais...</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="row tornar-parceiro hidden">

</div>
