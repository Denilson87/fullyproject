<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<p><span class="details-label">Titulo: </span><?php echo $sobre->titulo; ?></p>
					</div>

					<div class="col-md-12">
						<p><span class="details-label">Corpo: </span><?php echo $sobre->corpo; ?></p>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<p><span class="details-label">Missão: </span><?php echo $sobre->missao; ?></p>
							</div>
							<div class="col-md-4">
								<p><span class="details-label">Visão: </span><?php echo $sobre->visao; ?></p>
							</div>
							<div class="col-md-4">
								<p><span class="details-label">Valores: </span><?php echo $sobre->valores; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="padding-top: 30px">
						<a class="btn btn-secondary" href="<?php echo admin_url('sobre_nos')?>">
							<i class="fa fa-backward"></i> Voltar
						</a>

						<a class="btn btn-info" href="<?php echo admin_url('sobre_nos/alterar/'.$sobre->id)?>">
							<i class="fa fa-edit"></i> Alterar
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

