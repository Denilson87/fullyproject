<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('sobre_nos/informacao_historica_add')?>">Adicionar Informação Histórica</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Data</th>
		<th>Titulo</th>
		<th>Descrição</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($info as $pagina){ ?>
		<tr>
			<td><?php echo $pagina->data ?></td>
			<td><?php echo $pagina->titulo ?></td>
			<td><?php echo $pagina->descricao ?></td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('sobre_nos/informacao_historica_ver/'.$pagina->id)?>"><i class="fa fa-eye"></i>Ver Informação</a>
						<a class="dropdown-item" href="<?php echo admin_url('sobre_nos/informacao_historica_alterar/'.$pagina->id)?>"><i class="fa fa-edit"></i>Alterar</a>
						<a class="dropdown-item" href="<?php echo admin_url('sobre_nos/informacao_historica_delete/'.$pagina->id)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

