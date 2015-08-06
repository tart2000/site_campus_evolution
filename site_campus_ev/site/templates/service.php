<?php snippet('head') ?>
<?php snippet('menu') ?>

<div class="container page">
	<div class="row" id='service'>
		<div class="col-sm-12">
			<h2><?php echo $page->title() ?></h2>
			<div class="bmb">
				<?php echo $page->text()->kirbytext() ?>
			</div>

			<?php if($page->piliers() != ""){
				$pagePilier = page('offre')->find($page->piliers());
			?>
				<a href="<?php echo $pagePilier->url(); ?>" class="btn-effect"><?php echo $pagePilier->title(); ?></a>
			<?php }?>


		</div>
	</div>
</div>

<?php snippet('footer') ?>
