
<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('usuario/save')?>" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-md-4">
					<label for="endereco">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome" placeholder="Escreva o nome">
				</div>

				<div class="form-group col-md-4">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email">
				</div>

				<div class="form-group col-md-4">
					<label for="exampleInputFile">Foto do Perfil</label>
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
					<label for="caixa-postal">Usuario</label>
					<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nome do usuario">
				</div>

				<div class="form-group col-md-4">
					<label for="telefone">Senha</label>
					<input type="password" class="form-control" name="senha" id="senha">
				</div>

				<div class="form-group col-md-4">
					<label for="fax">Repetir Senha <small id="senha-status"></small></label>
					<input type="password" class="form-control" name="fax" id="senha2">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<div class="custom-control custom-switch">
						<input type="checkbox" checked class="custom-control-input" id="usuario-activo">
						<input type="hidden" name="estado" id="estado">
						<label class="custom-control-label" for="usuario-activo">Usuario Activo</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<a class="btn btn-secondary" href="<?php echo admin_url('usuario')?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	$(document).ready(function () {
		if($('#usuario-activo').is(':checked')){
			$('#estado').val(1);
		}
	});

	$('#usuario-activo').click(function () {
		if($('#usuario-activo').is(':checked')){
			$('#estado').val(1);
		}else {
			$('#estado').val(0);
		}
	});

	$('#senha2').keyup(function () {
		if ($('#senha').val()==$('#senha2').val()){
			$('#senha2').removeClass('is-invalid');
			$('#senha2').addClass('is-valid');
			$('#senha-status').removeClass('text-danger');
			$('#senha-status').addClass('text-success');
			$('#senha-status').html('(As senhas são iguais)');
		}else{
			$('#senha2').addClass('is-invalid');
			$('#senha-status').html('(As senhas não são iguais)');
			$('#senha-status').addClass('text-danger');
		}
	});
</script>

