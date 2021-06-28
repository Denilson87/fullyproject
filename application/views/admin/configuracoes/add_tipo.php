<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('configuracoes/save_tipo')?>" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-md-4 offset-4">
					<label for="designacao">Designação</label>
					<input type="text" class="form-control" name="designacao" id="designacao" placeholder="Escreva a Designação">
				</div>

				<div class="form-group col-md-4 offset-4">
					<label for="descricao">Descrição</label>
					<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Escreva a Descrição do menu">
				</div>

				<div class="form-group col-md-4 offset-4">
					<label for="alias">alias</label>
					<input type="text" class="form-control" name="alias" id="alias" placeholder="areas_logistica">
				</div>

			</div>

			<div class="row">
				<div class="form-group col-md-12" style="text-align: center; margin-top: 30px">
					<a class="btn btn-secondary" href="<?php echo admin_url('configuracoes/tipos')?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>
