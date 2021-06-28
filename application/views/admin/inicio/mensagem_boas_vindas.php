<div class="row">
	<div class="col-md-12">

		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<p><span class="details-label">Titulo da Mensagem: </span><?php echo $pagina->titulo; ?></p>
						<p><span class="details-label">Subtitulo: </span><?php echo $pagina->subtitulo; ?></p>
						<p><span class="details-label">Mensagem Introdudória: </span><?php echo $pagina->introducao; ?></p>
					</div>

					<div class="col-md-6">
						<h5>Imagem de Destaque</h5>
						<hr />
						<img class="img-fluid details-img" src="<?php echo base_url('media/'.$pagina->imagem_destaque) ?>">
					</div>

					<div class="col-md-12">
						<p><span class="details-label">Corpo da Mensagem: </span><?php echo $pagina->corpo; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="padding-top: 30px">
						<a class="btn btn-secondary" href="<?php echo admin_url('inicio/mensagem_boas_vindas')?>">
							<i class="fa fa-backward"></i> Voltar
						</a>

						<a class="btn btn-info" href="<?php echo admin_url('paginas/alterar/'.$pagina->id_pagina)?>">
							<i class="fa fa-edit"></i> Alterar
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

