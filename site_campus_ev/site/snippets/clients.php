

<div class="row" id="clients">
	<hr>
	<h2><?php echo page('clients')->title() ?></h2>
	<?php $counter = 0 ?>
	<?php foreach (page('clients')->children() as $c) : ?>
		<?php if ($counter < 6 && $c->hasImages()) : ?>
			<div class="col-sm-2 col-xs-4 client">
				<?php if ($c->companyLink() != '') : ?>
					<a href="<?php echo $c->companyLink() ?>" target="_blank">
				<?php endif ?>
				<?php if ($c->hasImage()) : ?>
					<img src="<?php echo $c->images()->first()->url() ?>" class="img-responsive">
					<?php $counter++ ?>
				<?php endif ?>
				<?php if ($c->companyLink() != '') : ?>
					</a>
				<?php endif ?>
			</div>
		<?php endif ?>
	<?php endforeach ?>
</div>