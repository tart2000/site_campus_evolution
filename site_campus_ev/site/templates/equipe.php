<?php snippet('head') ?>
<?php snippet('menu') ?>

  <div class="container page">

    <div class="row">
  		<div class="col-md-12">
      		<h1><?php echo $page->title()->html() ?></h1>
      		<?php echo $page->text()->kirbytext() ?>
  		</div>
  		<?php foreach ($page->children() as $m) : ?>
  			<?php echo $m->title() ?>

	  	<?php endforeach ?>
    </div>

  </div>

<?php snippet('footer') ?>