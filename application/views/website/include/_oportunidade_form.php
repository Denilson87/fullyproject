		<form class="form-oportunidades" method="post" action="<?php echo base_url('website/save_oportunidade')?>" enctype="multipart/form-data">
				<div class="col-md-12">
					<h4 style="margin-top: 0.4rem;">Detalhes da Entedidade/Empresa</h4>
				</div>

				<div class="form-group row">
					<label for="empresa" class="col-sm-4 col-form-label">Nome da Empresa <span>*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" placeholder="Nome da Empresa" name="empresa" id="empresa">
					</div>
				</div>

			<div class="form-group row">
				<label for="website" class="col-sm-4 col-form-label">Website <span></span></label>
				<div class="col-sm-4">
					<input type="url" class="form-control" placeholder="Website da Empresa" name="website" id="website">
				</div>
			</div>

			<div class="form-group row">
				<label for="telefone" class="col-sm-4 col-form-label">Telefone <span>*</span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Telefone da Empresa" name="telefone" id="telefone">
				</div>
			</div>

			<div class="form-group row">
				<label for="fax" class="col-sm-4 col-form-label">Fax <span></span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Fax da Empresa" name="fax" id="fax">
				</div>
			</div>

			<div class="form-group row">
				<label for="fax" class="col-sm-4 col-form-label">Email <span>*</span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Email da Empresa" name="email" id="email">
				</div>
			</div>

			<div class="form-group row">
				<label for="fax" class="col-sm-4 col-form-label">Perfil Corporativo <span>*</span></label>
				<div class="col-sm-4">
					<input type="file" class="file-upload" name="perfil" id="perfil">
				</div>
			</div>

			<div class="col-md-12">
				<h4>Dados da Sede</h4>
			</div>

			<div class="form-group row">
				<label for="fax" class="col-sm-4 col-form-label">País/Região <span>*</span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="País/Região" name="pais" id="pais">
				</div>
			</div>

			<div class="form-group row">
				<label for="fax" class="col-sm-4 col-form-label">Província/Cidade <span>*</span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Província/Cidade" name="provincia" id="provincia">
				</div>
			</div>

			<div class="form-group row">
				<label for="fax" class="col-sm-4 col-form-label">Endereço <span>*</span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco">
				</div>
			</div>

			<div class="form-group row">
				<label for="fax" class="col-sm-4 col-form-label">Codigo Postal <span></span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Codigo Postal" name="cpostal" id="cpostal">
				</div>
			</div>

			<div class="form-group row">
				<label for="fax" class="col-sm-4 col-form-label">NUIT <span>*</span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="NUIT da Empresa" name="nuit" id="nuit">
				</div>
			</div>

			<div class="col-md-12">
				<h4>O que pretende na ENH Logistics?</h4>
			</div>

			<div class="form-group row">
				<label for="interesse" class="col-sm-4 col-form-label">Tipo de Interesse <span>*</span></label>
				<div class="col-sm-4">
					<div class="form-group form-check" style="padding-top: 10px;">
						<input type="checkbox" class="form-check-input" id="interesse">
						<label class="form-check-label" for="interesse">Parceria</label>
					</div>

					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="interesse">
						<label class="form-check-label" for="interesse">Fornecedor de Bens e Serviços</label>
					</div>
				</div>
			</div>

			<div class="form-group row">
				<label for="fax" class="col-sm-4 col-form-label">Area <span>*</span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Areas de Actuação" name="area" id="area">
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-12" style="text-align: right">
					<a class="btn btn-secondary" href="<?php echo admin_url('contactos')?>"><i class="fa fa-home"></i>Ir para Pagina Inicial</a>
					<button type="submit" class="btn btn-success">Submeter<i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
		</form>
