<div class="row">
	<div class="col-md-12">

		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<p><span class="details-label">Data: </span><?php echo $info->data; ?></p>
						<p><span class="details-label">Titulo: </span><?php echo $info->titulo; ?></p>
					</div>
					<div class="col-md-12">
						<p><span class="details-label">Descrição: </span><?php echo $info->descricao; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="padding-top: 30px">
						<a class="btn btn-secondary" href="<?php echo admin_url('sobre_nos/informacao_historica')?>">
							<i class="fa fa-backward"></i> Voltar
						</a>

						<a class="btn btn-info" href="<?php echo admin_url('sobre_nos/informacao_historica_alterar/'.$info->id)?>">
							<i class="fa fa-edit"></i> Alterar
						</a>

						<a class="btn btn-danger" href="<?php echo admin_url('sobre_nos/informacao_historica_delete/'.$info->id)?>">
							<i class="fa fa-trash"></i> Excluir
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

