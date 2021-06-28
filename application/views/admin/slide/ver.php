<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="form-group col-md-12">
						<label for="titulo">Titulo</label>
						<div>
							<?php echo $slide->titulo ?>
						</div>
					</div>

					<div class="form-group col-md-12">
						<label for="descricao">Descrição</label>
						<div>
							<?php echo $slide->descricao ?>
						</div>
					</div>

					<div class="form-group col-md-12">
						<label for="introducao">Introdução</label>
						<div>
							<?php echo $slide->introducao ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="form-group col-md-12">
						<img src="<?php echo base_url().'/media/'.$slide->foto ?>" class="preview-img img-fluid" id="preview-selected" />
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12" style="padding-top: 30px">
				<a class="btn btn-secondary" href="<?php echo admin_url('slider')?>">
					<i class="fa fa-backward"></i> Voltar
				</a>

				<a class="btn btn-info" href="<?php echo admin_url('slide/alterar/'.$slide->id_slide)?>">
					<i class="fa fa-edit"></i> Alterar
				</a>

				<a class="btn btn-danger" href="<?php echo admin_url('slide/delete/'.$slide->id_slide)?>">
					<i class="fa fa-trash"></i> Excluir
				</a>
			</div>
		</div>
	</div>
</div>
