<div class="row center">
<?php foreach (page('socials')->children() as $s) : ?>
	<a href="<?php echo $s->socialLink() ?>" target="_blank"><i class="fa fa-3x fa-<?php echo $s->faIcon() ?>"></i></a>
<?php endforeach ?>
</div>