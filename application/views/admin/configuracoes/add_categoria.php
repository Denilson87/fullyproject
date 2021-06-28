<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('configuracoes/save_categoria')?>" enctype="multipart/form-data">
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
					<label for="tipo">tipo</label>
					<select class="form-control" id="tipo" name="tipo">
						<option value="">Selecione o Tipo</option>
						<option value="parceria">Parceria</option>
						<option value="projecto">Projecto</option>
					</select>
				</div>

			</div>

			<div class="row">
				<div class="form-group col-md-12" style="text-align: center; margin-top: 30px">
					<a class="btn btn-secondary" href="<?php echo admin_url('configuracoes/categorias')?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>
