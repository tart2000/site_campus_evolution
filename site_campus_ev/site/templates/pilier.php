<?php snippet('head') ?>
<?php snippet('menu') ?>

  <div class="container page">

    <div class="row">
    	<div class="col-sm-8 col-sm-offset-2">
    		<div class="center">
      			<img src="<?php echo $page->images()->first()->url() ?>">
      		</div>
      		<h1><?php echo $page->title()->html() ?></h1>
      		<?php if ($page->videoV() != '') : ?>
      			<?php echo vimeo($page->videoV()) ?>
	      	<?php endif ?>
	      	<?php if ($page->videoY() != '') : ?>
      			<?php echo vimeo($page->videoY()) ?>
	      	<?php endif ?>
      		<?php echo $page->text()->kirbytext() ?>


      		<!-- for each services associés -->
  		</div>
      <div class="col-sm-12">
        <h2>Services</h2>
        <?php 
          // $services = page('services')->children() 
          $uid = $page->uid();
          // echo $uid;
          $services = page('services')->children()->filterBy('piliers', '==', $uid);

          ?>
        <?php foreach ($services as $s) : ?>
          <div class="col-sm-4">
            <?php snippet('service', array('service' => $s)) ?>
          </div>
         <?php endforeach; ?>
      </div>
    </div>

  </div>

<?php snippet('footer') ?>