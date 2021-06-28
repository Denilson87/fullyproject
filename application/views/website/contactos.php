<div class="ttm-page-title-row">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title">Contactos</h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual">Contactos</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$active = $this->uri->segment(2);
?>

<div class="contact-page-section" style="background: #fff">
	<div class="container corpo">
		<div class="row">
			<div class="col-md-8">
				<div class="page-content pages-content-right">
					<div class="row">
						<div class="col-md-12">
							<span class="title-span"><?php echo $contactos->titulo; ?></span>
							<h3><?php echo $contactos->subtitulo; ?></h3>

							<?php echo $contactos->corpo; ?>
						</div>

						<div class="col-md-12">
							<div class="form-container">
								<form class="form-horizontal" method="POST" action="<?php echo site_url('website/send_message')?>">
									<div class="form-group row">
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder="Nome" name="nome" required>
										</div>

										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder="Telefone" name="telefone">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6">
											<input type="email" class="form-control" placeholder="E-mail" name="email" required>
										</div>

										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder="Assunto" name="assunto" required>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-12">
											<textarea class="form-control" rows="4" name="mensagem" required></textarea>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-12 reset-p">
											<button type="submit" class="btn btn-success btn-block">Enviar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 sidebar-pages-left">
				<?php include_once 'include/_contactos_aside.php'; ?>
			</div>
		</div>
	</div>
</div>
