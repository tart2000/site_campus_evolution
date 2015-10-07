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
		<div class="col-md-8 col-sm-12" id="filter">
			<select class="form-control" id="selectFilter">
				<option value="all">Tous</option>
				<option value="formation">Formations</option>
				<option value="conference">Conférences</option>
				<option value="accompagnment">Accompagnement</option>
			</select>
		</div>
			<?php foreach ($page->children()->sortBy('type','desc') as $s): ?>
			 	<?php snippet('service', array('service' => $s)) ?>
			<?php endforeach ?>

	</div>
</div>

<?php snippet('footer') ?>
