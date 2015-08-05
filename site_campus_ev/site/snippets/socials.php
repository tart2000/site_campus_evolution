<div id='social' class="row center">
<?php foreach (page('socials')->children() as $s) : ?>
	<span class="fa-stack fa-lg">
		<i class="fa fa-circle fa-stack-2x"></i>
		<a href="<?php echo $s->socialLink() ?>" target="_blank"><i class="fa fa-stack-1x fa-inverse fa-<?php echo $s->faIcon() ?>"></i></a>
	</span>
<?php endforeach ?>
</div>