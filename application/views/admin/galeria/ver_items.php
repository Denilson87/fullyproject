<div class="form-group" style="margin-bottom: 30px;">
	<a class="btn btn-success" href="<?php echo admin_url('galeria/add_photo/' . $id_album) ?>"><i class="fa fa-plus" style="padding-right: 10px"></i>Adicionar Foto</a>
</div>

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Titulo</th>
		<th>Descrição</th>
		<th>Foto</th>
<!--		<th>Opções</th>-->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($items as $item){ ?>
		<tr>
			<td><?php echo $item->titulo ?></td>
			<td><?php echo $item->descricao ?></td>
			<td style="text-align: center">
				<img style="height: 100px" src="<?php echo base_url().'/media/'.$item->foto ?>" />
			</td>
<!--			<td>-->
<!--				<div class="btn-group opcoes" role="group">-->
<!--					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--						<i class="fa fa-cogs"></i>-->
<!--					</button>-->
<!--					<div class="dropdown-menu">-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('slide/ver/'.$item->id_photo)?><!--"><i class="fa fa-eye"></i>Ver</a>-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('slide/alterar/'.$item->id_photo)?><!--"><i class="fa fa-eye"></i>Alterar</a>-->
<!--						<a class="dropdown-item" href="--><?php //echo admin_url('slide/delete/'.$item->id_photo)?><!--"><i class="fa fa-trash-alt"></i>Excluir</a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</td>-->
		</tr>
	<?php } ?>
	</tbody>
</table>

