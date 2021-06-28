<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('configuracoes/add_categoria')?>">Adicionar Categoria</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Desiganação</th>
		<th>Descrição</th>
		<th>Alias</th>
<!--		<th>Opções</th>-->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categorias as $categoria){ ?>
		<tr>
			<td><?php echo $categoria->designacao ?></td>
			<td><?php echo $categoria->descricao ?></td>
			<td><?php echo $categoria->tipo ?></td>
<!--			<td>-->
<!--				<div class="btn-group opcoes" role="group">-->
<!--					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--						<i class="fa fa-cogs"></i>-->
<!--					</button>-->
<!--					<div class="dropdown-menu">-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('configuracoes/categorias_ver/'.$categoria->id)?><!--"><i class="fa fa-eye"></i>Ver Categoria</a>-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('configuracoes/categorias_alterar/'.$categoria->id)?><!--"><i class="fa fa-edit"></i>Alterar</a>-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('configuracoes/categorias_delete/'.$categoria->id)?><!--"><i class="fa fa-trash-alt"></i>Excluir</a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</td>-->
		</tr>
	<?php } ?>
	</tbody>
</table>

