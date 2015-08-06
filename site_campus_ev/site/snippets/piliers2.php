<div id="piliers2">
	<?php $index=0; ?>
	<?php foreach (page('offre')->children() as $p) : ?>
		<?php $index++ ?>
		<div class="number bmt" >
			<div class="num"><i class="fa fa-<?php echo $p->icone() ?>"></i></div>
		</div>
		<div class="pilier-text center">			
			<h2><?php echo $p->title() ?></h2>
			<div class="text-toggle">
				<?php echo $p->text()->kirbytext() ?>
				<a href="<?php echo $p->url() ?>" class="btn btn-default">En savoir plus</a>
			</div>
		</div>
	<?php endforeach ?>
</div>