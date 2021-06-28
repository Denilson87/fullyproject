<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('menu/add')?>">Adicionar Menu</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Designação</th>
		<th>Descrição</th>
		<th>Acção</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($menus as $menu){ ?>
		<tr>
			<td><?php echo $menu->designacao ?></td>
			<td><?php echo $menu->descricao ?></td>
			<td style="text-align: center"><a class="btn btn-success" href="<?php echo admin_url('menu/add_menu_item/'.$menu->id_menu)?>"><i class="fa fa-plus" style="padding-right: 10px"></i>Adicionar itens de Menu</a></td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('menu/ver/'.$menu->id_menu)?>"><i class="fa fa-eye"></i>Ver Itens de Menu</a>
						<a class="dropdown-item" href="<?php echo admin_url('menu/alterar/'.$menu->id_menu)?>"><i class="fa fa-edit"></i>Alterar</a>
						<a class="dropdown-item" href="<?php echo admin_url('menu/delete/'.$menu->id_menu)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

