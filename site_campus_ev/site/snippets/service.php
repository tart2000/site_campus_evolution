<a class='service' href="#">
	<div class="filter"></div>
	<?php $image = $service->images()->first(); 
	echo thumb($image, array('width' => 400, 'height' => 400, 'crop' => true));
	?>
	<div class="information">
		<h3><?php echo $service->title(); ?></h3>
		<div class="text"><?php echo excerpt($service->text(),200) ?></div>
	</div>

</a>