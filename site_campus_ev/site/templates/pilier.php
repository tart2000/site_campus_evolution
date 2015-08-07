<?php snippet('head') ?>
<?php snippet('menu') ?>

  <div class="container page">

    <div class="row" id="pilier">

    	<div class="col-sm-8 col-sm-offset-2">

      		
      		<h1><img src="<?php echo $page->images()->first()->url() ?>"> <?php echo $page->title()->html() ?></h1>
          <div class="bmb">
            <?php echo $page->text()->kirbytext(); ?>
          </div>
          <?php 
            if (preg_match ("/\b(?:youtu|youtube)\b/i", $page->video())) {
               echo youtube($page->video(), '100%', 400);
            } else if(preg_match ("/\b(?:vimeo)\b/i", $page->video())) {
              echo vimeo($page->video(), '100%', 400);
            }
           ?>

      		<!-- for each services associés -->
  		</div>

        <?php 
        // $services = page('services')->children() 
        $uid = $page->uid();
        // echo $uid;
        $services = page('services')->children()->filterBy('piliers', '==', $uid);

        if($services != ''): ?>
      
          <div class="col-sm-8 col-sm-offset-2 services">
           
            <h2 class='center'>Services associés</h2>

              
                <div class="row">
                  <?php foreach ($services as $s) : ?>
                      <?php snippet('service-horizontal', array('service' => $s)) ?>
                   <?php endforeach; ?>
                </div>
              
          </div>
      <?php endif; ?>
    </div>

  </div>

<?php snippet('footer') ?>