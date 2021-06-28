<script type='text/javascript' src='<?php echo base_url('assets/website/plugins/unitegallery/themes/video/ug-theme-video.js'); ?>'></script>
<link rel='stylesheet' href='<?php echo base_url('assets/website/plugins/unitegallery/themes/video/skin-right-thumb.css'); ?>' type='text/css' />

<div class="ttm-page-title-row" style="background: url(<?php echo base_url('assets/img/10.jpg') ?>)">
	<div class="section-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box">
					<div class="page-title-heading">
						<h1 class="title">Galeria de Videos</h1>
					</div>
					<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="#"><i class="fa fa-home"></i>Início</a>
                                </span>
						<span class="ttm-bread-sep"><i class="fa fa-chevron-right"></i></span>
						<span class="actual">Galeria de Videos</span>
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
					<span class="title">Galeria de Videos</span>
				</div>

				<div class="page-content pages-content-right" style="margin-top: 0">
					<div id="gallery" class="albuns-view" style="display:none;">
						<?php foreach ($videos as $item){?>
							<div data-type="youtube"
								 data-title="<?php echo $item->titulo ?>"
								 data-description="<?php echo $item->descricao ?>"
								 data-thumb="<?php echo base_url('media/'.$item->foto) ?>"
								 data-image="<?php echo base_url('media/'.$item->foto) ?>"
								 data-videoid="<?php echo $item->id_video ?>" ></div>
						<?php } ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">

	jQuery(document).ready(function () {

		jQuery("#gallery").unitegallery({
			gallery_theme: "video",
			theme_skin: "right-thumb",			//right-thumb | right-title-only | right-no-thumb
			theme_autoplay: false,				//autoplay videos at start.  true / false. Don't working on mobiles.
			theme_disable_panel_timeout:2500	//How much time the right panel will be disabled. in ms
		});

	});

</script>

