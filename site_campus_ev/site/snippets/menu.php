<!-- Fixed navbar -->
<div class="navbar  navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand logo" href="<?php echo $site->url ?>">
        <img src="/assets/images/logo_M_seul.gif" class="img-responsive">
      </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php foreach($pages->visible() as $p): ?>
        <li <?php e($p->hasVisibleChildren(), ' class="dropdown" ') ?>>
          <a <?php e($p->isOpen(), ' class="active"') ?><?php e($p->hasVisibleChildren(), 'class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          <?php if ($p->hasVisibleChildren()) : ?>
            <ul class="dropdown-menu" role="menu">
              <?php foreach ($p->children()->visible() as $p) : ?>
                <li>
                  <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                </li>
              <?php endforeach ?>
            </ul>
          <?php endif ?>
        </li>
        <?php endforeach ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="spacer">

</div>




