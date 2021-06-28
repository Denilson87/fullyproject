<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<p><span class="details-label">Titulo: </span><?php echo $info->titulo; ?></p>
					</div>

					<div class="col-md-12">
						<p><span class="details-label">Corpo: </span><?php echo $info->corpo; ?></p>
					</div>

					<div class="col-md-12">
						<p><span class="details-label">Imagem da Estrutura Orgânica: </p>
						<img class="img-fluid" src="<?php echo base_url('media/'.$info->foto) ?>">
					</div>
				</div>

				<div class="row">
					<div class="col-md-12" style="padding-top: 30px">
						<a class="btn btn-secondary" href="<?php echo admin_url('sobre_nos/estrutura_organica')?>">
							<i class="fa fa-backward"></i> Voltar
						</a>

						<a class="btn btn-info" href="<?php echo admin_url('sobre_nos/estrutura_organica_alterar/'.$info->id)?>">
							<i class="fa fa-edit"></i> Alterar
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

