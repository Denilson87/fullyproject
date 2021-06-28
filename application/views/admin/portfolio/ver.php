<div class="row">
	<div class="col-md-12">

		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<p><span class="details-label">Titulo da Mensagem: </span><?php echo $pagina->titulo; ?></p>
						<p><span class="details-label">Tipo: </span><?php echo $pagina->tipo; ?></p>
						<p><span class="details-label">Categoria: </span><?php echo $pagina->categoria; ?></p>
						<p><span class="details-label">Mensagem Introdudória: </span><?php echo $pagina->introducao; ?></p>
					</div>

					<div class="col-md-6">
						<h5>Imagem</h5>
						<hr />
						<img class="img-fluid" src="<?php echo base_url('media/'.$pagina->foto) ?>">
					</div>

					<div class="col-md-12">
						<p><span class="details-label">Corpo da Mensagem: </span><?php echo $pagina->corpo; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="padding-top: 30px">
						<a class="btn btn-secondary" href="<?php echo admin_url('portfolio')?>">
							<i class="fa fa-backward"></i> Voltar
						</a>

						<a class="btn btn-info" href="<?php echo admin_url('portfolio/alterar/'.$pagina->id)?>">
							<i class="fa fa-edit"></i> Alterar
						</a>

						<a class="btn btn-danger" href="<?php echo admin_url('portfolio/delete/'.$pagina->id)?>">
							<i class="fa fa-trash"></i> Excluir
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

