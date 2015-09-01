<?php snippet('head') ?>
<?php snippet('menu') ?>
<?php $image = page('home')->images()->first()->url(); ?>

<div class="banner" style="background-image: url(<?php echo $image ?>);">
	<div class="container">
	<div class="row">
		<div class="col-sm-12 big-logo">
			<a href="/">
				<img  src="/assets/images/logo.png" alt="<?php echo $site->title(); ?>">
			</a>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-5"></div>
			<div class="col-sm-7 description">
				<h1><?php echo $site->description(); ?></h1>
				<button class='btn-effect  btn-large' href="#">Voir nos services</button>
				
			</div>
		</div>
	</div>
	</div>
</div>

<?php echo js('/assets/js/jquery.scrollTo.js') ?>
<div id="godown" class="fa fa-angle-down"></div>


<?php setlocale(LC_ALL, 'fr_FR'); ?>
<?php 

	$evenement = page('evenements')->children()->filterBy('date', '>', time());
	if($evenement != ""){
	$evenementNext = $evenement->sortBy('date', 'asc')->first();
?>

<div class="container-fluid" id="evenement">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<?php snippet('evenement', array('evenement' => $evenementNext)); ?>
		</div>
	</div>
</div>
<?php } ?>


<div class="container">
	<div class="row" id="description">
		<div class="col-sm-1"></div>
		<div class="col-sm-7">
			<?php echo page('home')->text()->kirbytext(); ?>	
		</div>
		<div class="col-sm-4">
			<a class='fancybox-media link-video' href="<?php echo page('home')->video(); ?>" >
				<img src="/assets/images/1min.jpg" width="100%">
			</a>
		</div>
	</div>
	<?php snippet('piliers2') ?>

	<div class="row" id='services'>
		<div class="col-sm-12">
			<h2>Nos Services</h2>
			<?php foreach (page('services')->children()->limit(3) as $s): ?>
			 	<?php snippet('service', array('service' => $s)) ?>
			<?php endforeach ?>
			<a href="<?php echo page('services')->url(); ?>" class="btn-effect">Tous nos services</a>
		</div>
	</div>
</div>

	<div class="bgWhite">
		<div class="container ">
			<?php snippet('clients') ?>
		</div>
	</div>


	<?php snippet('temoignages') ?>

</div>

<?php snippet('footer') ?>