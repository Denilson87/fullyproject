<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('noticia/save') ?>" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-md-9">
					<label for="id_pagina">Seleccione a Pagina para a Noticia</label>
					<select class="form-control use-select2" name="id_pagina" id="id_pagina">
						<option value=''>Seleccione a Pagina</option>
						<?php foreach ($paginas as $pagina) { ?>
							<option value="<?php echo $pagina->id_pagina ?>"><?php echo $pagina->titulo ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group col-md-3">
					<label class="col-md-12 p-0" for="imagem">Imagem de Destaque</label>
					<button id="select-button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
						Selecionar Foto
					</button>
				</div>

				<div id="img_selecionada" style="text-align: center;" class="form-group col-md-6 offset-3 hidden">
					<label class="col-md-12" id="selected-media"></label>
					<input id="imagem_destaque" name="imagem_destaque" type="hidden" value="">
					<input id="id_media" name="id_media" type="hidden" value="">
					<img class="img-fluid" id="image_loaded">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<a class="btn btn-secondary" href="<?php echo admin_url('noticia') ?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
	</div>
	</form>
</div>
</div>

<!-- Modal -->
<div class="modal fade modal-media" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-heading">
					<h5 class="modal-title" id="staticBackdropLabel">Selecione a imagem para o slide</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-tab">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="media-tab" data-toggle="tab" href="#media" role="tab" aria-controls="media" aria-selected="true">Ficheiros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="profile" aria-selected="false">Carregar Novo Ficheiro</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="modal-body">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="media" role="tabpanel" aria-labelledby="media-tab">
						<div class="row">
							<div class="col-md-12"></div>
							<?php foreach ($medias as $media){ ?>
								<div class="col-md-2 media-grid form-check">
									<input class="form-check-input select-media" onclick="selectMedia(<?php echo $media->id_media ?>)" type="checkbox" id="<?php echo 'check'.$media->id_media ?>" value="<?php echo $media->id_media ?>">
									<label class="form-check-label" for="<?php echo 'check'.$media->id_media ?>">
										<div class="media-thumb" for="<?php echo $media->id_media ?>">
											<img id="<?php echo 'image'.$media->id_media ?>" data-id="<?php echo $media->id_media ?>" data-designacao="<?php echo $media->designacao ?>" data-foto="<?php echo $media->foto ?>" src='<?php echo site_url('media/'.$media->foto) ?>' />
										</div>
										<div for="<?php echo $media->id_media ?>" class="img-legend"><?php echo $media->designacao ?></div>
									</label>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
						<form id="media_form" class="upload-files-form" enctype="multipart/form-data">
							<div class="upload-files-container">
								<label for="exampleInputFile">Carregar Ficheiro</label>
								<div class="input-group">
									<input onchange="loadFile(event)" type="file" name="media_image" id="image_input"/>
									<input type="hidden" name="id_slider" value="">
								</div>

								<div class="preview">
									<img id="media_image" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button id="select-media" data-id-media="" type="button" class="btn btn-primary">Selecionar</button>
			</div>
		</div>
	</div>
</div>

<script>

	tinymce.init({
		selector: 'textarea',
		plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
		toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
		toolbar_mode: 'floating',
		tinycomments_mode: 'embedded',
		tinycomments_author: 'Author name',
	});

	function selectMedia(id){
		console.log('Valor Inicial:  '+$('#check'+id).prop('checked'));
		if ($('#check'+id).prop('checked')){
			$(':checkbox').prop('checked', false);
			$('#check'+id).prop('checked', true);
		}else{
			$('#check'+id).prop('checked', false);
		}
		console.log('Feito '+id);
	}

	$('input[type="checkbox"]').click(function(){
		$('#select-media').attr('data-id-media', $(this).val());
	});

	$(document).ready(function(){
		$('#media_form').on('submit', function(e){
			e.preventDefault();
			if($('#image_input').val() == '')
			{
				alert("Por favor selecione o ficheiro");
			}
			else
			{
				$.ajax({
					url:"<?php echo admin_url(); ?>media/modal_save",
					method:"POST",
					data:new FormData(this),
					contentType: false,
					cache: false,
					processData:false,
					success:function(d)
					{
						var data = d.split('#');
						$('#imagem_destaque').val(data[1]);
						$('#image_loaded').attr('src', "<?php echo base_url('media/')?>"+data[1]);
						$('#id_media').val(data[0]);
						console.log(data[1]);
					}
				});
			}
		});

		$('#select-media').click(function (e) {
			var imgData = $('#media_image').attr('src');
			var selected = $(this).attr('data-id-media');
			console.log('Resultado: '+$('#check'+selected).attr('checked'));

			//Top level verification
			if(imgData != undefined && selected !=''){
				$(':checkbox').attr("checked", false);
				$('#media_image').removeAttr('src');
				$('#image_input').val('');
				alert('não pode carregar ficheiro depois de...');
			}else{
				if(selected != ''){
					$('#selected-media').html(selected+'. '+$('#image'+selected).attr('data-designacao'));
					$('#imagem_destaque').val($('#image'+selected).attr('data-foto'));
					$('#image_loaded').attr('src', "<?php echo base_url('media/')?>"+$('#image'+selected).attr('data-foto'));
					$('#id_media').val($('#image'+selected).attr('data-id'));
					$('.modal-media').modal('hide');
				}
				else if(imgData != undefined){
					var img = $('#image_input').val();
					console.log('Valor: '+img);
					$('#media_form').submit();
					$('.modal-media').modal('hide');
				}
			}
		});

	});

	var loadFile = function(event) {
		var output = document.getElementById('media_image');
		output.src = URL.createObjectURL(event.target.files[0]);
		$('#preview-selected').attr('src', URL.createObjectURL(event.target.files[0]));
		output.onload = function() {
			URL.revokeObjectURL(output.src) // free memory
		}
	};

</script>
