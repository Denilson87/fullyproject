
<table class="table table-bordered table-hover tabela-enhl">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Assunto</th>
			<th>Mensagem</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($mensagens as $mensagen){ ?>
			<tr>
				<td><?php echo $mensagen->nome ?></td>
				<td><?php echo $mensagen->telefone ?></td>
				<td><?php echo $mensagen->email ?></td>
				<td><?php echo $mensagen->assunto ?></td>
				<td><?php echo $mensagen->mensagem ?></td>
				<td>
					<a class="btn btn-primary" href="<?php echo admin_url('mensagens/ver/'.$mensagen->id_mensagem)?>">Ver</a>
					<a class="btn btn-danger" href="<?php echo admin_url('mensagens/excluir/'.$mensagen->id_mensagem)?>">Excluir</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
