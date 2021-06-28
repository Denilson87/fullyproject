<div class="ttm-page-title-row" style="background: url(<?php echo base_url('assets/img/10.jpg') ?>)">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title">Galeria</h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual">Galeria</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$active = $this->uri->segment(2);
?>

<div class="" style="background: #fff">
	<div class="container corpo projects-section">
		<div class="row">
			<div class="col-md-12" style="margin-top: 40px">
				<div class="sec-title-span text-center" style="margin-bottom: 0">
					<span class="title">Galeria</span>
					<h2>Albuns de Fotos</h2>
				</div>

				<div class="page-content pages-content-right" style="margin-top: 0">
					<div id="gallery" class="albuns-view" style="display:none;">
						<?php foreach ($albuns as $album){?>
						<a target="_parent" href="<?php echo base_url('galeria_album/'.$album->id_album) ?>">
							<img alt="<?php echo $album->descricao ?>"
								 src="<?php echo base_url('media/'.$album->foto) ?>"
								 data-image="<?php echo base_url('media/'.$album->foto) ?>"
								 data-description="<?php echo $album->descricao ?>"
								 style="display:none">
						</a>
						<?php } ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">

	jQuery(document).ready(function () {

		jQuery("#gallery").unitegallery(
				{
					tile_enable_textpanel: true,
					tile_textpanel_title_text_align: "center",
					tile_textpanel_always_on: true,
					tile_as_link:true,
					tile_link_newpage: false,
					tile_width: 300,						//tile width
					tile_height: 300,						//tile height
					tile_enable_border:true,			//enable border of the tile
					tile_border_width:1,				//tile border width
					tile_border_color:"#F0F0F0",		//tile border color
					tile_border_radius:0,				//tile border radius (applied to border only, not to outline)
					tile_enable_shadow:false,			//enable shadow of the tile
					tile_shadow_h:1,					//position of horizontal shadow
					tile_shadow_v:1,					//position of vertical shadow
					tile_shadow_blur:3,					//shadow blur
					tile_shadow_spread:2,				//shadow spread
					tile_shadow_color:"#8B8B8B",		//shadow color
				}
		);

	});

</script>
