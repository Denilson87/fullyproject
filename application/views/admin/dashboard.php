<style>
	.content-wrapper{
		background: #f4f6f9;
	}
</style>

<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Info boxes -->
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-eye"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Visitas do Dia</span>
							<span class="info-box-number">
                  10
                  <small></small>
                </span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-eye"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Visitas da Semana</span>
							<span class="info-box-number">4,410</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->

				<!-- fix for small devices only -->
				<div class="clearfix hidden-md-up"></div>

				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-success elevation-1"><i class="fas fa-eye"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Visitas do Mês</span>
							<span class="info-box-number">76,052</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-eye"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Visitas do Ano</span>
							<span class="info-box-number">2,000,000</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

			<!-- Main row -->
			<div class="row">
				<!-- Left col -->
				<div class="col-md-12">
					<!-- TABLE: LATEST ORDERS -->
					<div class="card">
						<div class="card-header border-transparent">
							<h3 class="card-title">Mensagens do Formulario</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<div class="table-responsive">
								<table class="table m-0">
									<thead>
									<tr>
										<th>Nome</th>
										<th>Telefone</th>
										<th>Email</th>
										<th>Assunto</th>
										<th>Mensagem</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($mensagens as $mensagen){ ?>
										<tr>
											<td><?php echo $mensagen->nome;?></td>
											<td><?php echo $mensagen->telefone;?></td>
											<td><?php echo $mensagen->email;?></td>
											<td><span class="badge badge-success"><?php echo $mensagen->assunto;?></span></td>
											<td>
												<div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $mensagen->mensagem;?></div>
											</td>
										</tr>
									<?php }?>
									</tbody>
								</table>
							</div>
							<!-- /.table-responsive -->
						</div>
						<!-- /.card-body -->
						<div class="card-footer clearfix">
							<a href="<?php echo admin_url('mensagens')?>" class="btn btn-sm btn-secondary float-right">Ver todas Mensagens</a>
						</div>
						<!-- /.card-footer -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
