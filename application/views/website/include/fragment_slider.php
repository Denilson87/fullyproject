<div class="slider-rev">
	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>
				<?php foreach ($slides as $slide){ ?>
				<li data-transition="random-custum" data-slotamount="7" data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img id="img-slide" src="<?php echo base_url().'/media/'.$slide->foto ?>"
						 alt="<?php echo $slide->titulo ?>" data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<div class="<?php if ($slide->introducao != ''){ ?>tp-caption <?php }?>mediumlarge_light_white_center customin customout start"
						 data-x="right"
						 data-hoffset="-60"
						 data-y="bottom"
						 data-voffset="-120"
						 style="color: #f4f4f4; background: rgba(0, 0, 0, 0.65); padding: 10px; font-size: 25px; font-family: Roboto"
						 data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						 data-speed="1000"
						 data-start="500"
						 data-easing="Back.easeInOut"
						 data-endspeed="300">
						<?php if ($slide->introducao != ''){ ?>
							<div class="slider-description">
								<h5><?php echo $slide->titulo ?></h5>
								<hr class="slider-hr">
								<p><?php echo $slide->introducao ?></p>
								<!-- <a href="#" class="btn btn-slider">Ler mais <i class="fa fa-chevron-right"></i></a> -->
							</div>
						<?php } ?>
					</div>
				</li>
				<?php } ?>
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {

		$('.tp-banner').revolution(
				{
					delay: 9000,
					//startwidth:1170,
					startheight: 475,
					hideThumbs: 10
				});
	});
</script>
