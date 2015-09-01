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

      		<div class="row nav-piliers">
              <div class="col-xs-6 left">
                <?php if($prev = $page->prev()): ?>
                  <a class="btn-effect" href="<?php echo $prev->url() ?>"><i class="fa fa-arrow-left"></i> <?php echo $prev->num(); ?> - <?php echo $prev->title() ?></a>
                <?php endif; ?>
                </div>

              <div class="col-xs-6 right">
                <?php if($next = $page->next()): ?>
                  <a class="btn-effect" href="<?php echo $next->url() ?>"><?php echo $next->num(); ?> - <?php echo $next->title() ?>  <i class="fa fa-arrow-right"></i></a>
                <?php endif; ?>
              </div>
          </div>

  		</div>

        <?php 

        $uid = $page->uid();
        $services = page('services')->children()->filterBy('piliers', '==', $uid);
        if($services != ''): ?>
      
          <div class="col-sm-8 col-sm-offset-2 services">
           
            <h3 class=''>Services associés</h3>

              
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