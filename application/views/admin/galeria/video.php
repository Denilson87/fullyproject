<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('galeria/add_video') ?>">Adicionar
		Video</a>
	<hr/>
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th style="width: 30%">Titulo</th>
		<th style="width: 20%">Link do Video</th>
		<th style="width: 20%">ID Video</th>
		<th style="width: 25%">Tipo</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($videos as $video) { ?>
		<tr>
			<td><?php echo $video->titulo ?></td>
			<td><?php echo $video->link_video ?></td>
			<td><?php echo $video->id_video ?></td>
			<td style="text-align: center"><?php echo $video->tipo ?></td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item"
						   href="<?php echo admin_url('galeria/alterar_video/' . $video->id_video) ?>"><i
								class="fa fa-edit"></i>Alterar</a>
						<a class="dropdown-item"
						   href="<?php echo admin_url('galeria/delete_video/' . $video->id_video) ?>"><i
								class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

