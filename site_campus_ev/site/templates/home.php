<?php snippet('head') ?>
<?php snippet('menu') ?>
<?php $image = page('home')->images()->first()->url(); ?>

<div class="banner" style="background-image: url(<?php echo $image ?>);">
	<div class="row">
		<div class="col-sm-12 logo">
			<a href="/">
				<img  src="/assets/images/logo.png" alt="<?php echo $site->title(); ?>">
			</a>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-5"></div>
			<div class="col-sm-6 description">
				<p><?php echo $site->description(); ?></p>
				<a class='btn' href="#">Voir nos services</a>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
</div>

<div class="container">
	<?php snippet('piliers') ?>
</div>
<div class="container">
	<?php snippet('clients') ?>
</div>
	<?php snippet('temoignages') ?>

</div>

<div class="container">
	<?php snippet('socials') ?>
</div>