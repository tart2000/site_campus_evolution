<?php snippet('head') ?>
<?php snippet('menu') ?>

  <div class="container page">

    <div class="row">
  		<div class="col-sm-8 col-sm-offset-2">
      		<h1><?php echo $page->title()->html() ?></h1>
      		<?php echo $page->text()->kirbytext() ?>
	  		<?php foreach ($page->children() as $m) : ?>
	  		<div class="row mb">
		  		<div class="col-sm-3 pt">
		  			<?php if ($m->hasImages()) : 
		  				$image = $m->images()->first();
						$thumb = thumb($image, array('width' => 400, 'height' => 400, 'crop' => true))->url(); ?>
						<img src="<?php echo $thumb ?>" class="img-responsive mt">
					<?php endif ?>
		  		</div>
		  		<div class="col-sm-9">
		  			<h3><?php echo $m->prenom() ?> <?php echo $m->title() ?>, <?php echo $m->role() ?></h3>
		  			<?php echo $m->text()->kirbytext() ?>
		  			<?php if ($m->linkedin() != '') : ?>
		  				<a href="<?php echo $m->linkedin() ?>" target="_blank">
			  				<span class="fa-stack">
			  					<i class="fa fa-circle fa-stack-2x"></i>
			  					<i class="fa fa-linkedin fa-stack-1x fa-inverse"> </i>
				  			</span>
			  			</a>
			  		<?php endif ?>
		  			<?php if ($m->facebook() != '') : ?>
		  				<a href="<?php echo $m->facebook() ?>" target="_blank">
			  				<span class="fa-stack">
			  					<i class="fa fa-circle fa-stack-2x"></i>
			  					<i class="fa fa-facebook fa-stack-1x fa-inverse"> </i>
				  			</span>
			  			</a>
			  		<?php endif ?>
			  		<?php if ($m->twitt() != '') : ?>
		  				<a href="<?php echo $m->twitt() ?>" target="_blank">
			  				<span class="fa-stack">
			  					<i class="fa fa-circle fa-stack-2x"></i>
			  					<i class="fa fa-twitter fa-stack-1x fa-inverse"> </i>
				  			</span>
			  			</a>
			  		<?php endif ?>
		  		</div>
	  		</div>
		  	<?php endforeach ?>
	  	</div>
    </div>

  </div>

<?php snippet('footer') ?>