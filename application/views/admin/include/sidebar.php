<?php
$active = $this->uri->segment(2);
$active_child = $this->uri->segment(3);
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-success elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?php echo base_url('assets/img/logo-branco.png') ?>" alt="ENHL Logo" class="brand-image elevation-3"
			 style="opacity: .8">
		<span class="brand-text font-weight-light">ENH Logistics</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<i class=""></i>
				<img src="<?php echo base_url('assets/admin/img/avatar.png') ?>" class="img-circle elevation-2"
					 alt="User Image">
			</div>
			<div class="info">
				<a href="<?php echo admin_url('usuario/ver/' . $usuario->id_usuario) ?>"
				   class="d-block"><?php echo $usuario->nome; ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?php echo admin_url('dashboard') ?>"
					   class="nav-link <?php if ($active === 'dashboard') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-th-large"></i>
						<p>Dashboard</p>
					</a>
				</li>

				<li class="nav-item has-treeview <?php if ($active === 'inicio') { ?> menu-open <?php } ?>">
					<a href="<?php echo admin_url('inicio') ?>"
					   class="nav-link <?php if ($active === 'inicio') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-home"></i>
						<p>Início<i class="fas fa-angle-left right"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo admin_url('slider') ?>"
							   class="nav-link <?php if ($active_child === 'slider') { ?> active <?php } ?>">
								<i class="far fa-images nav-icon"></i>
								<p>Slider</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo admin_url('inicio/mensagem_boas_vindas') ?>"
							   class="nav-link <?php if ($active_child === 'mensagem_boas_vindas') { ?> active <?php } ?>">
								<i class="far fa-envelope nav-icon"></i>
								<p>Mensagem de Boas Vindas</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo admin_url('noticia') ?>"
							   class="nav-link <?php if ($active_child === 'noticia') { ?> active <?php } ?>">
								<i class="far fa-newspaper nav-icon"></i>
								<p>Secção - Noticias</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview <?php if ($active === 'sobre_nos') { ?> menu-open <?php } ?>">
					<a href="Javascript:void(0)"
					   class="nav-link <?php if ($active === 'sobre_nos') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-info-circle"></i>
						<p>
							Sobre Nós
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo admin_url('sobre_nos') ?>"
							   class="nav-link <?php if ($active_child === null) { ?> active <?php } ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Geral</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo admin_url('sobre_nos/estrutura_organica') ?>"
							   class="nav-link <?php if ($active_child === 'estrutura_organica') { ?> active <?php } ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Estrutura Organica</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo admin_url('sobre_nos/informacao_historica') ?>"
							   class="nav-link <?php if ($active_child === 'informacao_historica') { ?> active <?php } ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Informação Histórica</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview <?php if ($active === 'areas-logistica') { ?> menu-open <?php } ?>">
					<a href="<?php echo admin_url('areas_logistica') ?>"
					   class="nav-link <?php if ($active === 'areas-logistica') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-clone"></i>
						<p>Áreas de Logistica</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo admin_url('portfolio') ?>"
					   class="nav-link <?php if ($active === 'portfolio') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-images"></i>
						<p>
							Portfolio
						</p>
					</a>
				</li>

				<li class="nav-item has-treeview <?php if ($active === 'contactos') { ?> menu-open <?php } ?>">
					<a href="<?php echo admin_url('contactos') ?>"
					   class="nav-link <?php if ($active === 'contactos') { ?> active <?php } ?>">
						<i class="nav-icon far fa-copyright"></i>
						<p>
							Contactos
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo admin_url('menu') ?>"
					   class="nav-link <?php if ($active === 'menu') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-bars"></i>
						<p>
							Menu
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo admin_url('paginas') ?>"
					   class="nav-link <?php if ($active === 'paginas') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-pager"></i>
						<p>
							Paginas
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo admin_url('widget') ?>"
					   class="nav-link <?php if ($active === 'widget') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Widgets
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo admin_url('media') ?>"
					   class="nav-link <?php if ($active === 'media') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-images"></i>
						<p>
							Media
						</p>
					</a>
				</li>

				<li class="nav-item has-treeview <?php if ($active === 'galeria') { ?> menu-open <?php } ?>">
					<a href="Javascript:void(0)"
					   class="nav-link <?php if ($active === 'galeria') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-chart-line"></i>
						<p>
							Galeria
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo admin_url('galeria') ?>"
							   class="nav-link <?php if ($active_child === 'galeria') { ?> active <?php } ?>">
								<i class="far fa-photo nav-icon"></i>
								<p>Fotos</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo admin_url('galeria/galeria_video') ?>"
							   class="nav-link <?php if ($active_child === 'galeria/galeria_video') { ?> active <?php } ?>">
								<i class="far fa-video nav-icon"></i>
								<p>Videos</p>
							</a>
						</li>
					</ul>
				</li>

<!--				<li class="nav-item">-->
<!--					<a href="--><?php //echo admin_url('footer') ?><!--"-->
<!--					   class="nav-link --><?php //if ($active === 'footer') { ?><!-- active --><?php //} ?><!--">-->
<!--						<i class="nav-icon fas fa-window-minimize"></i>-->
<!--						<p>-->
<!--							Footer-->
<!--						</p>-->
<!--					</a>-->
<!--				</li>-->

				<li class="nav-item">
					<a href="<?php echo admin_url('configuracoes') ?>"
					   class="nav-link <?php if ($active === 'configuracoes') { ?> active <?php } ?>">
						<i class="nav-icon fas fa-cogs"></i>
						<p>Configurações</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo admin_url('mensagens') ?>"
					   class="nav-link <?php if ($active === 'mensagens') { ?> active <?php } ?>">
						<i class="fas fa-envelope nav-icon"></i>
						<p>Mensagens</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo admin_url('usuario') ?>"
					   class="nav-link <?php if ($active === 'usuario') { ?> active <?php } ?>">
						<i class="fas fa-users nav-icon"></i>
						<p>Usuarios</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->

</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"><?php echo $titulo ?></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a
									href="<?php echo admin_url('' . $active) ?>"><?php echo $active ?></a></li>
						<li class="breadcrumb-item active"><?php echo $titulo ?></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
