<div id="piliers" class="row">
	<?php $index=0; ?>
	<?php foreach (page('offre')->children() as $p) : ?>
		<?php $index++ ?>
		<div class="col-sm-6">
			<div class="row 
				<?php if ($index%2 == 0) : ?>
					<?php echo 'pair' ?>
				<?php endif ?>
			">
				<div class="col-md-2 col-xs-3 right pt">
					<img src="<?php echo $p->images()->first()->url() ?>">
				</div>
				<div class="col-md-10 col-xs-9 left">
					<h3><?php echo $p->title() ?></h3>
					<?php echo $p->text()->kirbytext() ?>
					<a href="<?php echo $p->url() ?>">En savoir plus <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>