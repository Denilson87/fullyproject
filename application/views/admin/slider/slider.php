<!--<div class="form-group">-->
<!--	<a class="btn btn-success bg-gradient-success" href="--><?php //echo admin_url('slider/add')?><!--">Adicionar Slider</a>-->
<!--	<hr />-->
<!--</div>-->

<table class="table table-bordered table-hover tabela-enhl">
	<thead>
	<tr>
		<th>Designação</th>
		<th>Descrição</th>
		<th>Total de Slides</th>
		<th>Acção</th>
		<th>Opções</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sliders as $slider){ ?>
		<tr>
			<td><?php echo $slider->designacao ?></td>
			<td><?php echo $slider->descricao ?></td>
			<td style="text-align: center"><?php echo $total_slides ?></td>
			<td style="text-align: center"><a class="btn btn-success" href="<?php echo admin_url('slide/add/'.$slider->id_slider)?>"><i class="fa fa-plus" style="padding-right: 10px"></i>Adicionar Slides</a></td>
			<td>
				<a class="btn btn-success" href="<?php echo admin_url('slider/ver/'.$slider->id_slider)?>"><i style="padding-right: 10px"class="fa fa-eye"></i>Ver Slides</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

