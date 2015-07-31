<h2><?php echo page('clients')->title() ?></h2>

<div class="row">
	<?php $counter = 0 ?>
	<?php foreach (page('clients')->children() as $c) : ?>
		<?php if ($counter < 6) : ?>
			<div class="col-sm-2 client">
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