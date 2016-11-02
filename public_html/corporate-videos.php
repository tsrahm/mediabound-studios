
<?php $siteroot = '/mediabound-studios/public_html'; ?>
<?php $resources = '/mediabound-studios/resources'; ?>
<?php $siteroot = '/public_html'; ?>
<?php $resources = '/resources'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MediaBound Studios | Work | Corporate Videos</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Dosis|Arima+Madurai|Neucha|Athiti|McLaren|Itim|Cagliostro|Proza+Libre|Happy+Monkey" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" type="text/css" href="<?= $siteroot; ?>/css/index.css">
    <script src="https://use.fontawesome.com/d343e84307.js"></script>
  </head>
  <body>
    <div class="container">
      <header class="media-bound-header">
        <?php include '../resources/templates/header.php'; ?>
      </header>
      <main>
        <div class="title-container-work">Corporate Videos</div>
        <section class="main-container-work">
          <div class="photo-container">
            <a href="<?= $siteroot; ?>/corporate-videos/video-1.php"><img class="photo" src="<?= $resources; ?>/library/images/jets.png"></a>
            <span class="photo-description">Description</span>
          </div>
          <div class="photo-container">
            <img class="photo" src="<?= $resources; ?>/library/images/lizard.png">
            <span class="photo-description">Description</span>
          </div>
          <div class="photo-container">
            <img class="photo" src="<?= $resources; ?>/library/images/bubbles.png">
            <span class="photo-description">Description</span>
          </div>
          <div class="photo-container">
            <img class="photo" src="<?= $resources; ?>/library/images/sunset.png">
            <span class="photo-description">Description</span>
          </div>
          <div class="photo-container">
            <img class="photo" src="<?= $resources; ?>/library/images/coffee.png">
            <span class="photo-description">Description</span>
          </div>
          <div class="photo-container">
            <img class="photo" src="<?= $resources; ?>/library/images/waterfall.png">
            <span class="photo-description">Description</span>
          </div>
        </section>
      </main>
      <footer>
        <?php include '../resources/templates/footer.php'; ?>
      </footer>
    </div>
    <script type="text/javascript" async="async" defer="defer" src="<?= $siteroot; ?>/js/header.js"></script>
    <script type="text/javascript" async="async" defer="defer" src="<?= $siteroot; ?>/js/work-page.js"></script>
  </body>
</html>














