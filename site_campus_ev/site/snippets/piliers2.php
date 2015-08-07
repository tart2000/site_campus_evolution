<div id="piliers" class="row">
	<?php $index=0; ?>
	<?php foreach (page('offre')->children() as $p) : ?>
		<?php $index++ ?>
		<div class="col-md-6 pilier">
			<div class="row">
				<div class="col-md-2 col-xs-3 right pt">
					<img src="<?php echo $p->images()->first()->url() ?>">
				</div>
				<div class="col-md-10 col-xs-9 left">
					<h3><?php echo $p->title() ?></h3>
					<p><?php echo $p->text()->kirbytext()->excerpt(100) ?></p>
					<a href="<?php echo $p->url() ?>">En savoir plus <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>