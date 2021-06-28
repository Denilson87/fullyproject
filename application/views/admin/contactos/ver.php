
<div class="row">
	<div class="col-md-12">

		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-7">
						<h5>Informação Principal</h5>
						<hr />
						<ul class="detalhes">
							<li><i class="fa fa-info-circle"></i><span>Endereço: </span><?php echo $contacto->endereco; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Caixa Postal: </span><?php echo $contacto->caixa_postal; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Telefone: </span><?php echo $contacto->telefone; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Fax: </span><?php echo $contacto->fax; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Email: </span><?php echo $contacto->email; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Horário de Trabalho: </span><?php echo $contacto->horario_trabalho; ?></li>
						</ul>
					</div>
					<div class="col-md-5">
						<h5>Informação Secundária</h5>
						<hr />
						<ul class="detalhes">
							<li><i class="fa fa-info-circle"></i><span>Telefone Alternativo 1: </span><?php echo $contacto->telefone_sec1; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Telefone Alternativo 2: </span><?php echo $contacto->telefone_sec2; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Email Alternativo: </span><?php echo $contacto->email_sec; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Última Actualização: </span><?php echo $contacto->criado_em; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Titulo: </span><?php echo $contacto->titulo; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Subtitulo: </span><?php echo $contacto->subtitulo; ?></li>
						</ul>
					</div>

					<div class="col-md-12">
						<span style="font-weight: bold">Corpo:</span>
						<?php echo $contacto->corpo; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a class="btn btn-secondary" href="<?php echo admin_url('contactos')?>">
							<i class="fa fa-backward"></i> Voltar
						</a>

						<a class="btn btn-info" href="<?php echo admin_url('contactos/alterar/'.$contacto->id_contacto)?>">
							<i class="fa fa-edit"></i> Alterar
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
