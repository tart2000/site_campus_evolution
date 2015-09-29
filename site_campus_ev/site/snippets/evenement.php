

	<div class="evenement">
		<div class="col-sm-3  col-xs-12 info">
			<?php if ($evenement->date() != '') : ?>
				<i class="fa fa-fw fa-calendar-o"></i> <?php echo $evenement->date('d/m/Y') ?> <br>
			<?php endif ?>
			<?php if ($evenement->lieu() != '') : ?>
				<i class="fa fa-fw fa-map-marker"></i> <?php echo $evenement->lieu(); ?>
			<?php endif ?>
		</div>

		<div class="col-sm-9 col-xs-12">
			<div class="title">
				<?php echo $evenement->title(); ?>
			</div>
			<?php if ($evenement->text() != '') : ?>
				<div class="text">
					<?php echo $evenement->text()->kirbytext(); ?>
				</div>
			<?php endif ?>
			<?php if($evenement->link() != '') : ?>
				<?php if ($evenement->date() > time()) : ?>
					<a class="btn-inverse btn-effect" target="_blank" href="<?php echo $evenement->link(); ?>"><?php echo $evenement->link_name(); ?></a>
				<?php endif ?>
			<?php endif ?>
		</div>
	</div>
