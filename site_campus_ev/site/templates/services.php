<?php snippet('head') ?>
<?php snippet('menu') ?>

<div class="container page">
	<div class="row" id='services'>

		<div class="col-md-4 col-sm-12 description">
			<h2>Nos Services</h2>
			<div class="bmb">
				<?php echo $page->text()->kirbytext() ?>
			</div>
		</div>
			<?php foreach ($page->children()->sortBy('type','desc') as $s): ?>
			 	<?php snippet('service', array('service' => $s)) ?>
			<?php endforeach ?>

	</div>
</div>

<?php snippet('footer') ?>
