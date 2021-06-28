<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('pagina_widget/add')?>">Associar Pagina a um Widget</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Pagina</th>
		<th>Tipo</th>
		<th>Widget</th>
		<th>Acção</th>
<!--		<th>Opções</th>-->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($associacoes as $associacao){ ?>
		<tr>
			<td><?php echo $associacao->pagina ?></td>
			<td><?php echo $associacao->tipo ?></td>
			<td><?php echo $associacao->widget ?></td>
			<td style="text-align: center"><a class="btn btn-success" href="<?php echo admin_url('pagina_widget/add_widgets/'.$associacao->id_pagina)?>"><i class="fa fa-plus" style="padding-right: 10px"></i>Associar mais Widgets</a></td>
<!--			<td>-->
<!--				<div class="btn-group opcoes" role="group">-->
<!--					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--						<i class="fa fa-cogs"></i>-->
<!--					</button>-->
<!--					<div class="dropdown-menu">-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('pagina_widget/ver/'.$associacao->id_pagina)?><!--"><i class="fa fa-eye"></i>Ver Widgets</a>-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('pagina_widget/alterar/'.$associacao->id_pagina)?><!--"><i class="fa fa-edit"></i>Alterar</a>-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('pagina_widget/delete/'.$associacao->id_pagina)?><!--"><i class="fa fa-trash-alt"></i>Excluir</a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</td>-->
		</tr>
	<?php } ?>
	</tbody>
</table>

