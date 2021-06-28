<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('menu/save_menu_item/'.$id_menu)?>" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-md-4 offset-4">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Escreva o Titulo do item do Menu">
				</div>

				<div class="form-group col-md-4 offset-4">
					<label for="link">Link</label>
					<input type="text" class="form-control" name="link" id="link" placeholder="Escreva o link da pagina">
				</div>

				<div class="form-group col-md-4 offset-4">
					<label class="col-md-12" style="text-align: center" for="ou">ou</label>
				</div>

				<div class="form-group col-md-4 offset-4">
					<label for="id_pagina">Escolha a Pagina</label>
					<select class="form-control use-selct2" name="id_pagina" id="id_pagina">
						<option value="">Seleccione a Pagina</option>
						<?php foreach ($paginas as $pagina){?>
						<option value="<?php echo $pagina->id_pagina ?>"><?php echo $pagina->titulo ?></option>
						<?php } ?>
					</select>
				</div>

			</div>

			<div class="row">
				<div class="form-group col-md-12" style="text-align: center; margin-top: 30px">
					<a class="btn btn-secondary" href="<?php echo admin_url('menu')?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>
