

	<div class="evenement">
		<div class="col-sm-3  col-xs-12 info">
			<i class="fa fa-fw fa-calendar-o"></i> - <?php echo $evenement->date('d/m/Y') ?> <br>
			<i class="fa fa-fw fa-map-marker"></i> - <?php echo $evenement->lieu(); ?>
		</div>

		<div class="col-sm-8 col-xs-12">
			<div class="title">
				À VENIR - <?php echo $evenement->title(); ?>
			</div>
			<div class="text">
				<?php echo $evenement->text()->kirbytext(); ?>
			</div>
			<a class="btn-inverse btn-effect" target="_blank" href="<?php echo $evenement->link(); ?>"><?php echo $evenement->link_name(); ?></a>
				
		</div>
	</div>
