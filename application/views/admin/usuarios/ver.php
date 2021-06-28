
<div class="row">
	<div class="col-md-12">

		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<h5>Foto do Perfil</h5>
						<hr />
						<img src="<?php echo base_url('assets/admin/img/avatar.png')?>">
					</div>
					<div class="col-md-7">
						<h5>Informação Principal</h5>
						<hr />
						<ul class="detalhes">
							<li><i class="fa fa-info-circle"></i><span>Nome: </span><?php echo $usuario->nome; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Usuario: </span><?php echo $usuario->usuario; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Email: </span><?php echo $usuario->email; ?></li>
							<li><i class="fa fa-info-circle"></i><span>Estado: </span><?php if ($usuario->estado == 1){ ?> <span>Activo</span> <?php }else{ ?>  Desactivado <?php } ?></li>
							<li><i class="fa fa-info-circle"></i><span>Criado em: </span><?php echo $usuario->criado_em; ?></li>
						</ul>

						<?php var_dump($usuario); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="padding-top: 30px">
						<a class="btn btn-secondary" href="<?php echo admin_url('usuario')?>">
							<i class="fa fa-backward"></i> Voltar
						</a>

						<a class="btn btn-info" href="<?php echo admin_url('usuario/alterar/'.$usuario->id_usuario)?>">
							<i class="fa fa-edit"></i> Alterar
						</a>

						<a class="btn btn-danger" href="<?php echo admin_url('usuario/excluir/'.$usuario->id_usuario)?>">
							<i class="fa fa-trash"></i> Excluir
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
