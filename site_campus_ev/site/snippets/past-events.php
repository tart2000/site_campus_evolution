<?php setlocale(LC_ALL, 'fr_FR'); ?>
<?php 

	$evenement = page('evenements')->children()->filterBy('date', '<', time());
	if($evenement != ""){
?>

<div class="container bmt" id="">
	<div class="row">
		<div class="col-xs-6 col-xs-offset-4">
			<h3>Évenements passés</h3>
			<hr>
		</div>
	</div>
	<?php $agendaCounter = 0 ?>
	<?php foreach ($evenement->sortBy('date', 'asc') as $event) : ?>
		<div class="row mb">
			<div class="col-xs-10 col-xs-offset-1">
				<?php snippet('evenement', array('evenement' => $event)); ?>
				<?php $agendaCounter++ ?>
				<?php if ($agendaCounter < $evenement->count()) : ?>
					<hr>
				<?php endif ?>
			</div>
		</div>
	<?php endforeach ?>
</div>
<?php } ?>