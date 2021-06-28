<div class="form-group">
	<a class="btn btn-success bg-gradient-success" href="<?php echo admin_url('contactos/add')?>">Adicionar Contactos</a>
	<hr />
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Endereço</th>
		<th>Caixa Postal</th>
		<th>Telefone</th>
		<th>Fax</th>
		<th>Email</th>
		<th>Horário de Trabalho</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contactos as $contacto){ ?>
		<tr>
			<td><?php echo $contacto->endereco ?></td>
			<td><?php echo $contacto->caixa_postal ?></td>
			<td><?php echo $contacto->telefone ?></td>
			<td><?php echo $contacto->fax ?></td>
			<td><?php echo $contacto->email ?></td>
			<td><?php echo $contacto->horario_trabalho ?></td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('contactos/ver/'.$contacto->id_contacto)?>"><i class="fa fa-eye"></i>Ver</a>
						<a class="dropdown-item" href="<?php echo admin_url('contactos/alterar/'.$contacto->id_contacto)?>"><i class="fa fa-edit"></i>Alterar</a>
						<a class="dropdown-item" href="<?php echo admin_url('contactos/delete/'.$contacto->id_contacto)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
