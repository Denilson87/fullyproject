<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('media/add')?>">Adicionar Media</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Designação</th>
		<th>Foto</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($medias as $media){ ?>
		<tr>
			<td><?php echo $media->designacao ?></td>
			<td style="text-align: center">
				<div>
					<img style="width: 150px" src="<?php echo site_url('media/'.$media->foto)?>" />
				</div>
			</td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('media/ver/'.$media->id_media)?>"><i class="fa fa-eye"></i>Ver</a>
						<a class="dropdown-item" href="<?php echo admin_url('media/alterar/'.$media->id_media)?>"><i class="fa fa-edit"></i>Alterar</a>
						<a class="dropdown-item" href="<?php echo admin_url('media/delete/'.$media->id_media)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
