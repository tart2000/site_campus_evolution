<?php snippet('head') ?>
<?php snippet('menu') ?>

<div class="container page">
	<div class="row" id='services'>
		<div class="col-sm-12">
			<h2>Nos Services</h2>
			<div class="bmb">
				<?php echo $page->text()->kirbytext() ?>
			</div>
			<?php foreach ($page->children() as $s): ?>
				<div class="col-sm-4">
			 		<?php snippet('service', array('service' => $s)) ?>
			 	</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<?php snippet('footer') ?>
