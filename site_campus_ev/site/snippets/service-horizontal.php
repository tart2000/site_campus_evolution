
<div class="col-md-12">
	<?php 
		if($service->hasImages()):
			$image = $service->images()->first();
			$thumb = thumb($image, array('width' => 400, 'height' => 400, 'crop' => true))->url();
		else:
			$thumb = url('assets/images/service_default.jpg');
		endif;
	?>
	<a class='service service-horizontal' href="<?php echo $service->url() ?>" >

		<div class="row">
			<div class="col-xs-4">
				<div class="image-service" style="background-image: url(<?php echo $thumb ?>);">
					<i class="fa fa-<?php echo $service->icon() ?>"></i><br>
				</div>
			</div>
			<div class="col-xs-8">
				<div class="information">
					<h3><?php echo $service->title(); ?></h3>
					<?php echo excerpt($service->text(),200) ?>
				</div>
			</div>
		</div>



	</a>
</div>