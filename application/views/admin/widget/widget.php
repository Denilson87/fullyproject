<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('widget/add')?>">Adicionar Widget</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Titulo</th>
		<th>Corpo</th>
		<th>tipo</th>
		<th>Acção</th>
<!--		<th>Opções</th>-->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($widgets as $widget){ ?>
		<tr>
			<td><?php echo $widget->titulo ?></td>
			<td><?php echo $widget->corpo ?></td>
			<td><?php echo $widget->tipo ?></td>
			<td style="text-align: center"><a class="btn btn-success" href="<?php echo admin_url('pagina_widget/associar/'.$widget->id_widget)?>"><i class="fa fa-plus" style="padding-right: 10px"></i>Associar a uma Pagina</a></td>
<!--			<td>-->
<!--				<div class="btn-group opcoes" role="group">-->
<!--					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--						<i class="fa fa-cogs"></i>-->
<!--					</button>-->
<!--					<div class="dropdown-menu">-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('widget/ver/'.$widget->id_widget)?><!--"><i class="fa fa-eye"></i>Ver Widget</a>-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('widget/alterar/'.$widget->id_widget)?><!--"><i class="fa fa-edit"></i>Alterar</a>-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('widget/delete/'.$widget->id_widget)?><!--"><i class="fa fa-trash-alt"></i>Excluir</a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</td>-->
		</tr>
	<?php } ?>
	</tbody>
</table>

