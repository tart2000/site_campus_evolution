<?php snippet('head') ?>
<?php snippet('menu') ?>

  <div class="container page">

    <div class="text">
    
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
      	<?php foreach (page('clients')->children() as $c) : ?>
			<?php if ($counter < 6 && $c->hasImages()) : ?>
				<?php snippet('client', array('c' => $c)) ?>
			<?php endif ?>
		<?php endforeach ?>
    </div>

  </div>

<?php snippet('footer') ?>