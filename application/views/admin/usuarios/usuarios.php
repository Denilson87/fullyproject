<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('usuario/add')?>">Adicionar Usuario</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Nome</th>
		<th>Usuario</th>
		<th>Email</th>
		<th>Estado</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario){ ?>
		<tr>
			<td><?php echo $usuario->nome ?></td>
			<td><?php echo $usuario->usuario ?></td>
			<td><?php echo $usuario->email ?></td>
			<td class="status <?php if($usuario->estado == 1){ ?>status-success<?php } else{ ?>status-danger<?php } ?>">
				<?php if ($usuario->estado == 1){ ?> <span>Activo</span> <?php }else{ ?>  Desactivado <?php } ?>
			</td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('usuario/ver/'.$usuario->id_usuario)?>"><i class="fa fa-eye"></i>Ver</a>
						<a class="dropdown-item" href="<?php echo admin_url('usuario/alterar/'.$usuario->id_usuario)?>"><i class="fa fa-edit"></i>Alterar</a>
						<a class="dropdown-item" href="<?php echo admin_url('usuario/delete/'.$usuario->id_usuario)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
