<?php snippet('head') ?>
<?php snippet('menu') ?>

<div class="banner">

</div>

<div class="container">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

	<hr>


	<?php snippet('piliers') ?>
	<?php snippet('clients') ?>
	<?php snippet('temoignages') ?>




</div>

<?php snippet('footer') ?>