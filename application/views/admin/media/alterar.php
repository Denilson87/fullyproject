<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('media/update/'.$media->id_media)?>" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-md-4 offset-4">
					<label for="designacao">Designação</label>
					<input type="text" class="form-control" value="<?php echo $media->designacao ?>" name="designacao" id="designacao" placeholder="Escreva a Designação">
				</div>

				<div class="form-group col-md-4 offset-4">
					<label for="exampleInputFile">Foto</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" onchange="loadFile(event)" name="imagem" id="imagem">
							<label class="custom-file-label" for="imagem">Escolha a imagem</label>
						</div>
						<div class="input-group-append">
							<span class="input-group-text" id="">Carregar</span>
						</div>
					</div>
				</div>

				<div id="ficheiro-carregado" class="form-group col-md-4 offset-4">
					<label for="designacao">Ficheiro Carregado</label>
					<img src="<?php echo base_url().'/media/'.$media->foto ?>" width="100%" class="preview-img" id="uploaded" />
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12" style="text-align: center; margin-top: 30px">
					<a class="btn btn-secondary" href="<?php echo admin_url('media')?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	var loadFile = function(event) {
		document.getElementById('ficheiro-carregado').style.display="grid";
		var output = document.getElementById('uploaded');
		output.src = URL.createObjectURL(event.target.files[0]);
		output.onload = function() {
			URL.revokeObjectURL(output.src) // free memory
		}
	};
</script>
