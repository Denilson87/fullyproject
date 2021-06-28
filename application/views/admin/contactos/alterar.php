<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('contactos/update/'.$contacto->id_contacto)?>" enctype="multipart/form-data">
			<div class="tab-menu">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="main-tab" data-toggle="tab" href="#main" role="tab" aria-controls="main" aria-selected="true">Principal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="sec-tab" data-toggle="tab" href="#sec" role="tab" aria-controls="sec" aria-selected="false">Informação do Contacto</a>
					</li>
				</ul>
			</div>

			<div class="tab-content" id="tab-content">
				<div class="tab-pane fade show active" id="main" role="tabpanel" aria-labelledby="main-tab">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="titulo">Titulo</label>
							<input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $contacto->titulo?>" placeholder="Escreva o Titulo">
						</div>

						<div class="form-group col-md-12">
							<label for="titulo">Subtitulo</label>
							<input type="text" class="form-control" name="subtitulo" id="subtitulo" value="<?php echo $contacto->subtitulo?>" placeholder="Escreva o Subtitulo">
						</div>

						<div class="form-group col-md-12">
							<label for="corpo">Corpo</label>
							<textarea rows="10" class="form-control" name="corpo" id="corpo"><?php echo $contacto->corpo?></textarea>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="sec" role="tabpanel" aria-labelledby="sec-tab">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="endereco">Endereço</label>
							<input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $contacto->endereco?>">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-4">
							<label for="caixa-postal">Caixa Postal</label>
							<input type="text" class="form-control" name="caixa-postal" id="caixa-postal" value="<?php echo $contacto->caixa_postal?>">
						</div>

						<div class="form-group col-md-4">
							<label for="telefone">Telefone</label>
							<input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $contacto->telefone?>">
						</div>

						<div class="form-group col-md-4">
							<label for="fax">Fax</label>
							<input type="text" class="form-control" name="fax" id="fax" value="<?php echo $contacto->fax?>">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-4">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" value="<?php echo $contacto->email?>">
						</div>

						<div class="form-group col-md-4">
							<label for="horario_trabalho">Horário de Trabalho</label>
							<input type="text" class="form-control" name="horario_trabalho" id="horario_trabalho" value="<?php echo $contacto->horario_trabalho?>">
						</div>

						<div class="form-group col-md-4">
							<label for="exampleInputFile">Imagem</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="imagem" id="imagem">
									<label class="custom-file-label" for="imagem">Escolha a imagem</label>
								</div>
								<div class="input-group-append">
									<span class="input-group-text" id="">Carregar</span>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-4">
							<label for="latitude">Latitude</label>
							<input type="text" class="form-control" name="latitude" id="latitude" value="<?php echo $contacto->latitude; ?>">
						</div>

						<div class="form-group col-md-4">
							<label for="longitude">Longitude</label>
							<input type="text" class="form-control" name="longitude" id="longitude" value="<?php echo $contacto->longitude; ?>">
						</div>

						<div class="form-group col-md-4">
							<label for="chave">Chave do Mapa (API)</label>
							<input type="text" class="form-control" name="chave" id="chave" value="<?php echo $contacto->chave_mapa; ?>">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-12">
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="mais-info">
								<label class="custom-control-label" for="mais-info">Adicionar mais Informações (Telefones e email Alternativos)</label>
							</div>
						</div>
					</div>

					<div id="info-adicional" class="info-adicional">
						<div class="row">
							<div class="form-group col-md-4">
								<label for="telefone-sec1">Telefone Alternativo 1</label>
								<input type="text" class="form-control" name="telefone-sec1" id="telefone-sec1" value="<?php echo $contacto->telefone_sec1?>">
							</div>

							<div class="form-group col-md-4">
								<label for="telefone-sec2">Telefone Alternativo 2</label>
								<input type="text" class="form-control" name="telefone-sec2" id="telefone-sec2" value="<?php echo $contacto->telefone_sec2?>">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-8">
								<label for="email-sec">Email Alternativo</label>
								<input type="email" class="form-control" name="email-sec" id="email-sec" value="<?php echo $contacto->email_sec?>">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<a class="btn btn-secondary" href="<?php echo admin_url('contactos')?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>

	tinymce.init({
		selector: 'textarea',
		plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		toolbar_mode: 'floating',
		tinycomments_mode: 'embedded',
		tinycomments_author: 'Author name',
	});

	$('#mais-info').click(function () {
		if($('#mais-info').is(':checked')){
			$('#info-adicional').fadeIn(600);
			$('#info-adicional').removeClass('info-adicional');
		}else {
			$('#info-adicional').fadeOut(600);
			$('#info-adicional').addClass('info-adicional');
		}
	});
</script>
