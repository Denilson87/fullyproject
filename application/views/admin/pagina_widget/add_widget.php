<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('pagina_widget/save')?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="tipo">Seleccione o Tipo</label>
							<select class="form-control" name="tipo" id="tipo_widget">
								<option value="">Seleccione o Tipo de Widget</option>
									<option value="<?php echo $pagina->id_pagina ?>"><?php echo $pagina->titulo ?></option>
							</select>
						</div>
					</div>

					<div class="form-group col-md-6">
						<label for="tipo">Seleccione o Tipo</label>
						<select class="form-control" name="tipo" id="tipo_widget">
							<option value="">Seleccione o Tipo de Widget</option>
							<?php foreach ($widgets as $widget){?>
								<option value="<?php echo $widget->id_widget ?>"><?php echo $widget->titulo ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
	</div>

	<div class="row">
		<div class="form-group col-md-12">
			<a class="btn btn-secondary" href="<?php echo admin_url('pagina_widget')?>"><i class="fa fa-backward"></i>Voltar</a>
			<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
		</div>
	</div>
	</form>
</div>
</div>
