
var homePageImages = document.getElementsByClassName('photo-container');

var fadeImages = {
  init: function() {
    this.render();
  },
  render: function() {
    this.showImages();
  },
  showImages: function() {
    for (var i = 0; i < homePageImages.length; i++) {
      homePageImages[i].classList.add('show');
    }
  }
};

fadeImages.init();
