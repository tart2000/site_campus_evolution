

<div class="row" id="clients">
	<h2><?php echo page('clients')->title() ?></h2>
	<?php $counter = 0 ?>
	<?php foreach (page('clients')->children()->limit(6) as $c) : ?>
		<?php if ($c->hasImages()) : ?>
			<?php snippet('client', array('c' => $c)) ?>
		<?php endif ?>
	<?php endforeach ?>
	<div class="center btn-clients">
		<a href="<?php echo page('clients')->url(); ?>/" class='btn-effect'>Voir tous nos clients</a>
	</div>
</div>