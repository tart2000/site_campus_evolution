<div class="links pb">
	<?php $counter = 0 ?>
	<?php foreach (page('liens')->children() as $l) : ?>
		<a href="<?php echo $l->theLLink() ?>" target="_blank" class="link"><?php echo $l->title() ?></a>
		<?php $counter++ ?>
		<?php if ($counter < page('liens')->children()->count()) : ?> | <?php endif ?>
	<?php endforeach ?>
</div>