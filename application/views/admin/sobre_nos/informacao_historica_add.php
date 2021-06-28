<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('sobre_nos/informacao_historica_save')?>" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-md-4 offset-4">
					<label for="data">Data do Evento (Mês e Ano)</label>
					<input type="text" class="form-control" name="data" id="data" placeholder="Escreva a Data do Evento (Ex. Março de 2020)">
				</div>

				<div class="form-group col-md-4 offset-4">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Escreva o Titulo">
				</div>

				<div class="form-group col-md-4 offset-4">
					<label for="descricao">Descrição</label>
					<textarea rows="4" class="form-control" name="descricao" id="descricao" placeholder="Escreva a Descrição"></textarea>
				</div>

			</div>

			<div class="row">
				<div class="form-group col-md-12" style="text-align: center; margin-top: 30px">
					<a class="btn btn-secondary" href="<?php echo admin_url('sobre_nos/Informacao_historica')?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>
