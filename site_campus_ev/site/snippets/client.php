<div class="col-md-2 col-sm-3 col-xs-6 client">
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