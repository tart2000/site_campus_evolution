<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  


  <!-- css -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/font.css">
  <link rel="stylesheet" href="/assets/css/screen.css">
  <link rel="stylesheet" href="/assets/css/jquery.bxslider.css">
  <link rel="stylesheet" href="/assets/fancybox/jquery.fancybox.css">

  <?php echo css('assets/css/main.css') ?>


  <!-- js  -->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="/assets/js/jquery.bxslider.min.js"></script>
  <script src="/assets/fancybox/jquery.fancybox.pack.js"></script>
  <script src="/assets/fancybox/helpers/jquery.fancybox-media.js"></script>
  
  <script src="/assets/js/scripts.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

  <link rel="icon" type="image/ico" href="/assets/images/favicon.ico" />

</head>
<?php 
  if($page->isHomePage()):
    $homepageClass = 'homePage';
    else : 
      $homepageClass = '';
  endif;
 ?>
<body class='<?php echo $homepageClass ?>'>