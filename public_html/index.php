<?php $siteroot = '/public_html'; ?>
<?php $resources = '/resources'; ?>
<?php $siteroot = '/mediabound-studios/public_html'; ?>
<?php $resources = '/mediabound-studios/resources'; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MediaBound Studios</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Athiti|PT+Sans" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" type="text/css" href="<?= $siteroot; ?>/css/index.css">
    <script src="https://use.fontawesome.com/d343e84307.js"></script>
<!--
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-custom2.min.css">
    <script type="text/javascript" async="async" defer="defer" src="/application.js"></script>
-->
  </head>
  <body>
    <div class="container">
      <header>
        <?php include '../resources/templates/header.php'; ?>
      </header>
      <main>
        <section class="main-container-home">
          <div class="photo-container">
            <div class="photo-clipper">
              <img class="photo" src="<?= $resources; ?>/library/images/jets.png">
            </div>
            <p class="photo-title">unique Possibilities</p>
            <p class="photo-description">New approaches to communicate, different ways to tell your story.</p>
          </div>
          <div class="photo-container">
            <div class="photo-clipper">
              <img class="photo" src="<?= $resources; ?>/library/images/lizard.png">
            </div>
            <p class="photo-title">the Journey</p>
            <p class="photo-description">What to expect along the way. Our approach and steps to your project.</p>
          </div>
          <div class="photo-container">
            <div class="photo-clipper">
              <img class="photo" src="<?= $resources; ?>/library/images/bubbles.png">
            </div>
            <p class="photo-title">bottom Line</p>
            <p class="photo-description">Our philosophy on business. The beliefs and ethics that are behind MediaBound Studios.</p>
          </div>
        </section>
        <section class="icon-container-home">
          <!-- <span class="dot dot-1"></span>
          <span class="dot dot-2"></span>
          <span class="dot dot-3"></span> -->
          <div class="icon-container icon-1">
            <div class="icon-wrapper">
              <a href="<?= $siteroot; ?>/corporate-videos.php"><span class="fa fa-file-text fa-border content-icon"></span></a>
            </div>
            <div class="icon-wrapper">
              <span class="icon-title">CORPORATE</span>
            </div>
          </div>
          <div class="icon-container icon-2">
            <div class="icon-wrapper">
              <span class="fa fa-eye fa-border content-icon"></span>
            </div>
            <div class="icon-wrapper">
              <span class="icon-title">WEB SERIES</span>
            </div>
          </div>
          <div class="icon-container icon-3">
            <div class="icon-wrapper">
              <span class="fa fa-question fa-border content-icon"></span>
            </div>
            <div class="icon-wrapper">
              <span class="icon-title">INSTRUCTIONAL</span>
            </div>
          </div>
          <div class="icon-container icon-4">
            <div class="icon-wrapper">
              <span class="fa fa-thumbs-up fa-border content-icon"></span>
            </div>
            <div class="icon-wrapper">
              <span class="icon-title">COMMERCIALS</span>
            </div>
          </div>
          <div class="icon-container icon-5">
            <div class="icon-wrapper">
              <span class="fa fa-star fa-border content-icon"></span>
            </div>
            <div class="icon-wrapper">
              <span class="icon-title">DOCUMENTARIES</span>
            </div>
          </div>
        </section>
      </main>
      <footer class="media-bound-footer">
        <?php include '../resources/templates/footer.php'; ?>
      </footer>
    </div>
    <script type="text/javascript" async="async" defer="defer" src="<?= $siteroot; ?>/js/header.js"></script>
    <script type="text/javascript" async="async" defer="defer" src="<?= $siteroot; ?>/js/home-page.js"></script>
  </body>
</html>














