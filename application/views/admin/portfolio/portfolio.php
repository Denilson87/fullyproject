<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('portfolio/add')?>">Adicionar Portfolio</a>
	<hr />
</div>

<table id="portfolio" class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Titulo</th>
		<th>Introdução</th>
		<th>Corpo</th>
		<th>Categoria</th>
		<th>Tipo</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($paginas as $pagina){ ?>
		<tr>
			<td><?php echo $pagina->titulo ?></td>
			<td><?php echo $pagina->introducao ?></td>
			<td><?php echo $pagina->corpo ?></td>
			<td><?php echo $pagina->categoria ?></td>
			<td><?php echo $pagina->tipo ?></td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('portfolio/ver/'.$pagina->id)?>"><i class="fa fa-eye"></i>Ver</a>
						<a class="dropdown-item" href="<?php echo admin_url('portfolio/alterar/'.$pagina->id)?>"><i class="fa fa-edit"></i>Alterar</a>
						<a class="dropdown-item" href="<?php echo admin_url('portfolio/delete/'.$pagina->id)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<script>
	$(function () {
		$("#portfolio").DataTable({

		});
	});
</script>
