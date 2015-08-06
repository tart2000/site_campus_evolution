<?php 
	if($service->hasImages()):
		$image = $service->images()->first();
		$thumb = thumb($image, array('width' => 400, 'height' => 400, 'crop' => true))->url();
	else:
		$thumb = url('assets/images/service_default.jpg');
	endif;
?>
<a class='service' href="<?php echo $service->url() ?>" >

	<div class="image" style="background-image: url(<?php echo $thumb ?>);">
		<i class="fa fa-<?php echo $service->icon() ?>"></i><br>
	</div>

	<div class="information">
		<h3><?php echo $service->title(); ?></h3>
		<div class="text"><?php echo excerpt($service->text(),200) ?></div>
	</div>

</a>