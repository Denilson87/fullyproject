<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('galeria/add_album') ?>">Adicionar
		Album</a>
	<hr/>
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th style="width: 30%">Designação</th>
		<th style="width: 30%">Foto de Destaque</th>
		<th style="width: 10%">Total de Items</th>
		<th style="width: 20%">Acção</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($albuns as $album) { ?>
		<tr>
			<td><?php echo $album->descricao ?></td>
			<td style="height: 100px; text-align: center"><img style="height: auto; width: 38%" class="img-fluid"
															   src="<?php echo base_url('media/' . $album->foto) ?>"></td>
			<td style="text-align: center"><?php echo $total_photos ?></td>
			<td style="text-align: center"><a class="btn btn-success"
											  href="<?php echo admin_url('galeria/add_photo/' . $album->id_album) ?>"><i
						class="fa fa-plus" style="padding-right: 10px"></i>Adicionar Item</a></td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item"
						   href="<?php echo admin_url('galeria_album/ver/' . $album->id_album) ?>"><i
								class="fa fa-eye"></i>Ver Items</a>
<!--						<a class="dropdown-item"-->
<!--						   href="--><?php //echo admin_url('galeria_album/alterar/' . $album->id_album) ?><!--"><i-->
<!--								class="fa fa-edit"></i>Alterar</a>-->
						<a class="dropdown-item"
						   href="<?php echo admin_url('galeria_album/delete/' . $album->id_album) ?>"><i
								class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

