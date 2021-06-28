<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('noticia/add')?>">Adicionar Nóticia</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>#</th>
		<th>Titulo</th>
		<th>Imagem de Destaque</th>
		<th>Data de Criação</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($noticias as $noticia){ ?>
		<tr>
			<td><?php echo $noticia->id_noticia ?></td>
			<td><?php echo $noticia->titulo ?></td>
			<td style="text-align: center; height: 100px"><img style="height: 100%" src="<?php echo base_url('media/'.$noticia->foto) ?>" class="img-fluid"></td>
			<td><?php echo $noticia->criado_em ?></td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('paginas/ver/'.$noticia->id_pagina)?>"><i class="fa fa-eye"></i>Ver Pagina</a>
						<a class="dropdown-item" href="<?php echo admin_url('paginas/alterar/'.$noticia->id_pagina)?>"><i class="fa fa-edit"></i>Alterar</a>
						<a class="dropdown-item" href="<?php echo admin_url('paginas/delete/'.$noticia->id_pagina)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

