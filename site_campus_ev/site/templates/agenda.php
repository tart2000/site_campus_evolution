<?php snippet('head') ?>
<?php snippet('menu') ?>

  <div class="container page">

    <div class="row">
    	<div class="col-sm-8 col-sm-offset-2">
      		<h1><?php echo $page->title()->html() ?></h1>
      		<?php echo $page->text()->kirbytext() ?>
  		</div>
    </div>

  </div>

<?php snippet('evenements') ?>

<?php snippet('past-events') ?>

<?php snippet('footer') ?>