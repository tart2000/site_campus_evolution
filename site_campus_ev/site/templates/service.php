<?php snippet('head') ?>
<?php snippet('menu') ?>
<?php setlocale(LC_ALL, 'fr_CA'); ?>
<div class="container page">
	<div class="row" id='service'>
		

		<div class="col-sm-3">
		<?php 
			if($page->hasImages()):
				$image = $page->images()->first();
				$thumb = thumb($image, array('width' => 400, 'height' => 400, 'crop' => true))->url();
			else:
				$thumb = url('assets/images/service_default.jpg');
			endif;
		 ?>
			<div class="image-service" style="background-image: url(<?php echo $thumb ?>);">
				<i class="fa fa-<?php echo $page->icon() ?>"></i><br>
			</div>

			<?php if($page->cible() != ""): ?>
				<div class="metadata">
					<label>Cible</label>
					<?php echo $page->cible(); ?>
				</div>
			<?php endif; ?>

			<?php if($page->objectifs() != ""): ?>
				<div class="metadata">
					<label>Objectifs</label>
					<?php echo $page->objectifs(); ?>
				</div>
			<?php endif; ?>

			<?php if($page->duree() != ""): ?>
				<div class="metadata">
					<label>Durée</label>
					<?php echo $page->duree(); ?>
				</div>
			<?php endif; ?>

			<?php if($page->piliers() != ""): ?>
				<div class="metadata">
					<label>Piliers</label>
					<?php if($page->piliers() != ""){
					$pagePilier = page('offre')->find($page->piliers()); ?>
					<a href="<?php echo $pagePilier->url(); ?>"><?php echo $pagePilier->title(); ?> <i class="fa fa-arrow-right"></i></a>
				<?php }?>
				</div>
			<?php endif; ?>


		</div>

		<div class="col-sm-9">	
			<h2><?php echo $page->title() ?></h2>
			<div class="bmb">
				<?php echo $page->text()->kirbytext() ?>
			</div>

			<?php if($page->why() != ""): ?>
				<h2>Pouquoi ce service?</h2>
				<div class="bmb">
					<?php echo $page->why()->kirbytext(); ?>
				</div>
			<?php endif; ?>

			<div class="metadata video">

				<?php 
					if (preg_match ("/\b(?:youtu|youtube)\b/i", $page->video())) {
					   echo youtube($page->video(), '100%', 400);
					} else if(preg_match ("/\b(?:vimeo)\b/i", $page->video())) {
						echo vimeo($page->video(), '100%', 400);
					}
				 ?>

				
			</div>


		    <h3>Temoignages</h3>
			<div class="temoignages">
			<?php
				$uid = $page->uid();
	        	$temoignages = page('temoignages')->children()->filterBy('service', '==', $uid);
	        	if($temoignages != ''): ?>
	      

					<?php foreach ($temoignages as $t) : ?>
						<?php snippet('temoignage', array('temoignage' => $t)) ?>
					<?php endforeach; ?>
		        
	              
	    		<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php snippet('footer') ?>
