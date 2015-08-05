
<div class="row">
	<div class="col-sm-12" id="piliers">
	<?php $index=0; ?>
	  <?php foreach(page('offre')->children()->visible() as $key=>$pilier): ?>
	  <?php $index++; ?>
		<div class="col-sm-6 center pilier">
  			<i class="fa fa-<?php echo $pilier->icone() ?> fa-4x"></i><br>
			<div class="title"><?php echo $index ?> - <?php echo $pilier->title() ?></div>
			<div class="text"><?php echo $pilier->text()->excerpt(200) ?></div>
			<a href="<?php echo $pilier->url() ?>" class="more">En savoir plus</a>
		</div>
	  <?php endforeach ?>

	</div>
</div>