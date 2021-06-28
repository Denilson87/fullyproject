<!DOCTYPE html>
<html lang="pt">
<head>
	<title>ENH Logistics</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/ico" href="<?php echo base_url('assets/img/favicon.ico'); ?>"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url('assets/website/vendor/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/website/css/style.css'); ?>">
	<!--===============================================================================================-->

	<style>
		html, body{
			height: 100%;
			overflow: hidden;
		}

		body{
			background: #09561b;
		}

		.well{
			width: 350px;
			border-radius: 5px;
			padding: 25px;
			background: #f4f4f4;
		}

		.copyright {
			position: absolute;
			bottom: 0;
			color: #fff;
			font-size: 9pt;
			text-align: center;
			width: 350px;
		}

		#login{
			height: 100%;
		}

		label{
			font-size: 11pt;
		}

		#login .justify-content-center{
			width: 100%;
		}
	</style>
</head>
<body>

<div id="login" class="row">
	<div class="d-flex justify-content-center">
		<div class="d-flex align-items-center">
			<div class="container-login">
				<div class="well">
					<div class="text-center">
						<img style="width: 40%; margin-bottom: 20px;" src="<?php echo base_url('assets/img/logo.png'); ?>">
					</div>
					<legend style="margin: 15px 0px; text-align: center; font-size: 12pt;"></legend>
					<?php if ($this->session->flashdata('login_invalido')) { ?>
						<div class="alert alert-danger alert-dismissible" role="alert" style="font-size: 12px;">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Utilizador ou Senha incorrectos!</strong> <br/> Verifique as suas credenciais e tente novamente.
						</div>
					<?php } ?>
					<form method="POST" action="<?php echo admin_url('autenticacao/autenticar'); ?>">
						<div class="control-group" style="margin-bottom: 20px;">
							<label for="usuario" class="control-label" style="font-weight: normal">Usuário </label>
							<div class="controls">
								<input class="form-control" style="padding-left: 5px; height: 30px;" placeholder="Usuário" name="usuario" type="text" autocomplete="off">
							</div>
						</div>
						<div class="control-group" style="margin-bottom: 10px;">
							<label for="senha" class="control-label" style="font-weight: normal">Senha </label>
							<div class="controls">
								<input class="form-control" style="padding-left: 5px; height: 30px;" placeholder="Senha" name="senha" type="password">
							</div>
						</div>
						<br>
						<button id="btn_login" class="btn btn-block btn-success" name="submit" type="submit">Entrar</button>
					</form>

				</div>

				<div class="copyright">
					<p>© <?php echo date('Y'); ?> ENH Logistics | Todos direitos reservados.</p>
				</div>
			</div>
		</div>

	</div>
</div>

<!--===============================================================================================-->
<!--	JS Files	-->
<script src="<?php echo base_url('assets/website/vendor/jquery/js/jquery-3.4.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/website/vendor/popper/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/website/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>




