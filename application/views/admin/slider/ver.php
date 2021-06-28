<div class="form-group" style="margin-bottom: 30px;">
	<a class="btn btn-success" href="<?php echo admin_url('slide/add/'.$id_slider)?>"><i class="fa fa-plus" style="padding-right: 10px"></i>Adicionar Slide</a>
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Titulo</th>
		<th>Introdução</th>
		<th>Descrição</th>
		<th>Foto</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($slider as $slide){ ?>
		<tr>
			<td><?php echo $slide->titulo ?></td>
			<td><?php echo $slide->introducao ?></td>
			<td><?php echo $slide->descricao ?></td>
			<td style="text-align: center">
				<img style="height: 100px" src="<?php echo base_url().'/media/'.$slide->foto ?>" />
			</td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('slide/ver/'.$slide->id_slide)?>"><i class="fa fa-eye"></i>Ver Slide</a>
						<a class="dropdown-item" href="<?php echo admin_url('slide/alterar/'.$slide->id_slide)?>"><i class="fa fa-eye"></i>Alterar Slide</a>
						<a class="dropdown-item" href="<?php echo admin_url('slide/delete/'.$slide->id_slide)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

