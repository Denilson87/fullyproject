<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('pagina_widget/save') ?>" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-md-6 offset-3">
					<label for="id_pagina">Associar por Pagina</label>
					<select class="form-control" name="id_pagina" id="id_pagina">
						<option value=''>Seleccione a Pagina</option>
						<?php foreach ($paginas as $pagina) { ?>
							<option value="<?php echo $pagina->id_pagina ?>"><?php echo $pagina->titulo ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group col-md-6 offset-3">
					<label style="text-align: center; width: 100%">ou</label>
				</div>

				<div class="form-group col-md-6 offset-3">
					<label for="tipo">Associar por Tipo</label>
					<select class="form-control" name="tipo" id="tipo">
						<option value="">Seleccione o Tipo</option>
						<?php foreach ($tipos as $tipo) { ?>
							<option value="<?php echo $tipo->alias ?>"><?php echo $tipo->designacao ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group col-md-6 offset-3">
					<label for="tipo">Seleccione o Widget</label>
					<select class="form-control" name="id_widget" id="id_widget">
						<option value="">Seleccione o Widget</option>
						<?php foreach ($widgets as $widget) { ?>
							<option value="<?php echo $widget->id_widget ?>"><?php echo $widget->titulo ?></option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<a class="btn btn-secondary" href="<?php echo admin_url('pagina_widget') ?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
	</div>
	</form>
</div>
</div>
