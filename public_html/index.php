<?php $siteroot = '/mediabound-studios/public_html'; ?>
<?php $resources = '/mediabound-studios/resources'; ?>
<?php $siteroot = '/public_html'; ?>
<?php $resources = '/resources'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MediaBound Studios</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Dosis|Arima+Madurai|Neucha|Athiti|McLaren|Itim|Cagliostro|Proza+Libre|Happy+Monkey" rel="stylesheet">
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
            <p class="photo-title">Why Us?</p>
            <p>Description here.</p>
          </div>
          <div class="photo-container">
            <div class="photo-clipper">
              <img class="photo" src="<?= $resources; ?>/library/images/lizard.png">
            </div>
            <p class="photo-title">What We Can Do For You</p>
            <p>Description here.</p>
          </div>
          <div class="photo-container">
            <div class="photo-clipper">
              <img class="photo" src="<?= $resources; ?>/library/images/bubbles.png">
            </div>
            <p class="photo-title">Current Projects</p>
            <p>Description here.</p>
          </div>
        </section>
        <section class="icon-container-home">
          <span class="dot dot-1"></span>
          <span class="dot dot-2"></span>
          <span class="dot dot-3"></span>
          <div class="icon-container">
            <span class="fa fa-fast-backward fa-border content-icon"></span>
            <h4>TITLE</h4>
          </div><!-- 
       --><div class="icon-container">
            <span class="fa fa-backward fa-border content-icon"></span>
            <h4>TITLE</h4>
          </div><!-- 
       --><div class="icon-container">
            <span class="fa fa-play fa-border content-icon"></span>
            <h4>TITLE</h4>
          </div><!-- 
       --><div class="icon-container">
            <span class="fa fa-forward fa-border content-icon"></span>
            <h4>TITLE</h4>
          </div><!-- 
       --><div class="icon-container">
            <span class="fa fa-fast-forward fa-border content-icon"></span>
            <h4>TITLE</h4>
          </div>
        </section>
      </main>
      <footer class="media-bound-footer">
        <?php include '../resources/templates/footer.php'; ?>
      </footer>
    </div>
    <script type="text/javascript" async="async" defer="defer" src="<?= $siteroot; ?>/js/header.js"></script>
  </body>
</html>














