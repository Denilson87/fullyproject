<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo admin_url('widget/save')?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="form-group col-md-8">
							<label for="titulo">Titulo</label>
							<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Escreva o Titulo do Widget">
						</div>

						<div class="form-group col-md-4">
							<label for="tipo">Seleccione o Tipo</label>
							<select class="form-control" name="tipo" id="tipo_widget" onchange="renderForm();">
								<option value="">Seleccione o Tipo de Widget</option>
								<?php foreach ($tipos as $tipo){?>
									<option value="<?php echo $tipo->alias ?>"><?php echo $tipo->designacao ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-12">
							<label for="corpo">Corpo</label>
							<textarea class="form-control" name="corpo" id="corpo" placeholder="Corpo do Widget"></textarea>
						</div>
					</div>
				</div>

				<div id="info_adicional" class="col-md-4 info-adicional"></div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<a class="btn btn-secondary" href="<?php echo admin_url('widget')?>"><i class="fa fa-backward"></i>Voltar</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	function renderForm(){
		var valueSelected  = $('#tipo_widget').val();
		var textSelected   = $('#tipo_widget').text();
		console.log('Valor: '+valueSelected+' | Texto: '+textSelected);

		if (valueSelected == 'endereco'){
			var form ='<div class="card-info"><div class="card-body">'+
					'<div class="row"><div class="col-md-12">'+
					'<h4>Informação sobre Endereço</h4></div>'+
					'<div class="col-md-12">'+
					'<div class="row">'+
					'<div class="form-group col-md-12">'+
					'<label for="avenida_rua">Avenida/Rua 1</label>'+
					'<input type="text" class="form-control" name="avenida_rua" id="avenida_rua" placeholder="Informe a Avenida ou Rua">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="numero">Número</label>'+
					'<input type="text" class="form-control" name="numero" id="numero" placeholder="Informe o número da Avenida ou Rua">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="outro">Outros</label>'+
					'<input type="text" class="form-control" name="outro" id="outro" placeholder="Informe outros dados sobre endereço">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="provincia">Provincia</label>'+
					'<input type="text" class="form-control" name="provincia" id="provincia" placeholder="Informe a Provincia">'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div></div>'+
					'';
			$('#info_adicional').html(form);
			$('#info_adicional').fadeIn(600);
			$('#info_adicional').removeClass('info-adicional');
		}
		else if(valueSelected == 'mapa'){
			var form ='<div class="card-info"><div class="card-body">'+
					'<div class="row"><div class="col-md-12">'+
					'<h4>Informação sobre o Mapa</h4></div>'+
					'<div class="col-md-12">'+
					'<div class="row">'+
					'<div class="form-group col-md-12">'+
					'<label for="latitude">Latitude</label>'+
					'<input type="text" class="form-control" name="latitude" id="latitude" placeholder="Informe a Latitude do Mapa">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="longitude">Longitude</label>'+
					'<input type="text" class="form-control" name="longitude" id="longitude" placeholder="Informe a Longitude do Mapa">'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div></div>'+
					'';
			$('#info_adicional').html(form);
			$('#info_adicional').fadeIn(600);
			$('#info_adicional').removeClass('info-adicional');
		}
		else if(valueSelected == 'social'){
			var form ='<div class="card-info"><div class="card-body">'+
					'<div class="row"><div class="col-md-12">'+
					'<h4>Informação sobre as Redes Sociais</h4></div>'+
					'<div class="col-md-12">'+
					'<div class="row">'+
					'<div class="form-group col-md-12">'+
					'<label for="facebook">Facebook</label>'+
					'<input type="text" class="form-control" name="facebook" id="facebook" placeholder="www.facebook.com/empresa">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="instagram">Instagram</label>'+
					'<input type="text" class="form-control" name="instagram" id="instagram" placeholder="www.instagram.com/empresa">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="linkedin">Linkedin</label>'+
					'<input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="www.linkedin.com/empresa">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="skype">Skype</label>'+
					'<input type="text" class="form-control" name="skype" id="skype" placeholder="Informe o Skype Name">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="whatsapp">Whatsapp</label>'+
					'<input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="+25888888888">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="twiter">Twiter</label>'+
					'<input type="text" class="form-control" name="twiter" id="twiter" placeholder="@twiter da empresa">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="google_plus">Google Plus</label>'+
					'<input type="text" class="form-control" name="google_plus" id="google_plus" placeholder="Informe o Google Plus da empresa">'+
					'</div>'+
					'<div class="form-group col-md-12">'+
					'<label for="pinterest">Pinterest</label>'+
					'<input type="text" class="form-control" name="pinterest" id="pinterest" placeholder="Informe o Pinterest da empresa">'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div></div>'+
					'';

			$('#info_adicional').html(form);
			$('#info_adicional').fadeIn(600);
			$('#info_adicional').removeClass('info-adicional');
		}
		else if(valueSelected == 'menu'){
			var form ='<div class="card-info"><div class="card-body">'+
					'<div class="row"><div class="col-md-12">'+
					'<h4>Informação sobre o Menu</h4></div>'+
					'<div class="col-md-12">'+
					'<div class="row">'+
					'<div class="form-group col-md-12">'+
					'<label for="id_menu">Seleccione o Menu</label>'+
					'<select class="form-control use-select2" name="id_menu" id="id_menu">'+
					'<?php foreach ($menus as $menu){ ?>'+
					'<option value="<?php echo $menu->id_menu ?>"><?php echo $menu->designacao ?></option>'+
					'<?php } ?>'+
					'</select>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div></div>'+
					'';
			$('#info_adicional').html(form);
			$('#info_adicional').fadeIn(600);
			$('#info_adicional').removeClass('info-adicional');
		}
		else if(valueSelected == 'contacto'){
			var form ='<div class="card-info"><div class="card-body">'+
					'<div class="row"><div class="col-md-12">'+
					'<h4>Informação sobre Contacto</h4></div>'+
					'<div class="col-md-12">'+
					'<div class="row">'+
					'<div class="form-group col-md-12">'+
					'<label for="id_contacto">Seleccione o Contacto</label>'+
					'<select class="form-control use-select2" name="id_contacto" id="id_contacto">'+
					'<?php foreach ($contactos as $contacto){ ?>'+
					'<option value="<?php echo $contacto->id_contacto ?>"><?php echo $contacto->email ?></option>'+
					'<?php } ?>'+
					'</select>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div></div>'+
					'';
			$('#info_adicional').html(form);
			$('#info_adicional').fadeIn(600);
			$('#info_adicional').removeClass('info-adicional');
		}
		else if(valueSelected == ''){
			$('#info_adicional').fadeOut(600);
			$('#info_adicional').addClass('info-adicional');
			console.log('Valor: '+valueSelected);
		}
	}

	tinymce.init({
		selector: 'textarea',
		plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		toolbar_mode: 'floating',
		tinycomments_mode: 'embedded',
		tinycomments_author: 'Author name',
	});


</script>
