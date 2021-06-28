<div class="card">
	<div class="card-body">
			<form method="post" action="<?php echo admin_url('contactos/save')?>" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-md-12">
						<label for="endereco">Endereço</label>
						<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Escreva o endereço">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<label for="caixa-postal">Caixa Postal</label>
						<input type="text" class="form-control" name="caixa-postal" id="caixa-postal" placeholder="Caixa Postal">
					</div>

					<div class="form-group col-md-4">
						<label for="telefone">Telefone</label>
						<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
					</div>

					<div class="form-group col-md-4">
						<label for="fax">Fax</label>
						<input type="text" class="form-control" name="fax" id="fax" placeholder="Fax">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
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
							<input type="text" class="form-control" name="telefone-sec1" id="telefone-sec1" placeholder="Telefone Alternativo 1">
						</div>

						<div class="form-group col-md-4">
							<label for="telefone-sec2">Telefone Alternativo 2</label>
							<input type="text" class="form-control" name="telefone-sec2" id="telefone-sec2" placeholder="Telefone Alternativo 2">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-8">
							<label for="email-sec">Email Alternativo</label>
							<input type="email" class="form-control" name="email-sec" id="email-sec" placeholder="Email Alternativo">
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
