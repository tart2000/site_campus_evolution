
<?php setlocale(LC_ALL, 'fr_FR'); ?>
<?php 

	$evenement = page('evenements')->children()->filterBy('date', '>', time());
	if($evenement != ""){
	$evenementNext = $evenement->sortBy('date', 'asc')->first();
?>
<div class="container-fluid" id="evenement">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<div class="row">
				<div class="col-sm-3  col-xs-12 info">
					<i class="fa fa-fw fa-calendar-o"></i> - <?php echo $evenementNext->date('j F y') ?> <br>
					<i class="fa fa-fw fa-map-marker"></i> - <?php echo $evenementNext->lieu(); ?>
				</div>


				<div class="col-sm-8 col-xs-12">
					<div class="title">
						À VENIR - <?php echo $evenementNext->title(); ?>
					</div>
					<div class="text">
						<?php echo $evenementNext->text()->kirbytext(); ?>
					</div>
					<a class="btn-inverse btn-effect" target="_blank" href="<?php echo $evenementNext->link(); ?>"><?php echo $evenementNext->link_name(); ?></a>
						
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
<?php } ?>