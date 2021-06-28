<table class="table table-bordered table-hover tabela-enhl">
<!--	--><?php //var_dump($itens);?>
	<thead>
	<tr>
		<th>Titulo</th>
		<th>link</th>
		<th>Titulo da Pagina</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($itens as $item){ ?>
		<tr>
			<td><?php echo $item->titulo ?></td>
			<td>
				<?php
					if ($item-> link != NULL){
						echo $item->link;
					}
					else{
						echo "Sem Link";
					}
					?>
			</td>

			<td>
				<?php
				if ($item-> pagina != NULL){
					echo $item->pagina;
				}
				else{
					echo "Sem Pagina";
				}
				?>
			</td>
			<td>
				<div class="btn-group opcoes" role="group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-cogs"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo admin_url('menu/ver/'.$item->id_item_menu)?>"><i class="fa fa-eye"></i>Ver Item</a>
						<a class="dropdown-item" href="<?php echo admin_url('menu/delete/'.$item->id_item_menu)?>"><i class="fa fa-trash-alt"></i>Excluir</a>
					</div>
				</div>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

