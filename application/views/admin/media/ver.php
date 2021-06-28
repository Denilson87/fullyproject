<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12 form-group">
				<img src="<?php echo base_url().'/media/'.$media->foto ?>" class="preview-img img-fluid" id="preview-selected" />
			</div>
			<div class="col-md-12 form-group">
				<div>
					<?php echo $media->designacao ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12" style="padding-top: 30px">
				<a class="btn btn-secondary" href="<?php echo admin_url('media')?>">
					<i class="fa fa-backward"></i> Voltar
				</a>

				<a class="btn btn-info" href="<?php echo admin_url('media/alterar/'.$media->id_media)?>">
					<i class="fa fa-edit"></i> Alterar
				</a>

				<a class="btn btn-danger" href="<?php echo admin_url('media/delete/'.$media->id_media)?>">
					<i class="fa fa-trash"></i> Excluir
				</a>
			</div>
		</div>
	</div>
</div>

