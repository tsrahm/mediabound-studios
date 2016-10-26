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
        <?php include "../../resources/templates/header.php"; ?>
      </header>
      <main>
        <div class="title-container-video">Video Name</div>
        <div class="background-container-video">
          <section class="main-container-video">
            <video controls class="video-container">
              <source src="<?= $resources; ?>/library/videos/BW-Dot.mp4" type="video/mp4">
            </video>
          </section>
          <section class="container-video-border"></section>
          <section class="side-container-video">
            <span class="side-container-video-title">OTHER WORK</span>
            <div class="side-container-video-item">
              <img class="side-container-video-thumbnail" src="<?= $resources; ?>/library/images/jets.png">
              <span class="side-container-video-description this-video">Video 1</span>
            </div>
            <div class="side-container-video-item">
              <a href="#">
                <img class="side-container-video-thumbnail" src="<?= $resources; ?>/library/images/lizard.png">
                <span class="side-container-video-description">Video 2</span>
              </a>
            </div>
            <div class="side-container-video-item">
              <img class="side-container-video-thumbnail" src="<?= $resources; ?>/library/images/bubbles.png">
              <span class="side-container-video-description">Video 3</span>
            </div>
            <div class="side-container-video-item">
              <img class="side-container-video-thumbnail" src="<?= $resources; ?>/library/images/sunset.png">
              <span class="side-container-video-description">Video 4</span>
            </div>
            <div class="side-container-video-item">
              <img class="side-container-video-thumbnail" src="<?= $resources; ?>/library/images/coffee.png">
              <span class="side-container-video-description">Video 5</span>
            </div>
            <div class="side-container-video-item">
              <img class="side-container-video-thumbnail" src="<?= $resources; ?>/library/images/waterfall.png">
              <span class="side-container-video-description">Video 6</span>
            </div>
          </section>
        </div>
      </main>
      </main>
      <footer>
        <?php include "../../resources/templates/footer.php"; ?>
      </footer>
    </div>
    <script type="text/javascript" async="async" defer="defer" src="<?= $siteroot; ?>/js/header.js"></script>
  </body>
</html>














