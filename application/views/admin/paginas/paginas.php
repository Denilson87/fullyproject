<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('paginas/add_page')?>">Adicionar Pagina</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Tipo</th>
		<th>Titulo</th>
		<th>Sidebar</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($paginas as $pagina){ ?>
		<tr>
			<td><?php echo $pagina->tipo ?></td>
			<td><?php echo $pagina->titulo ?></td>
			<td><?php echo $pagina->sidebar ?></td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('paginas/ver/'.$pagina->id_pagina)?>"><i class="fa fa-eye"></i>Ver Pagina</a>
						<a class="dropdown-item" href="<?php echo admin_url('paginas/alterar/'.$pagina->id_pagina)?>"><i class="fa fa-edit"></i>Alterar</a>
						<a class="dropdown-item" href="<?php echo admin_url('paginas/delete/'.$pagina->id_pagina)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

