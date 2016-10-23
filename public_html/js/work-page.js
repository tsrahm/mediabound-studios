var workPageImages = document.getElementsByClassName('photo-container');


var popImage = {
  init: function() {
    this.render();
  },
  render: function() {
    this.unbindEvents();
    this.bindEvents();   
  },
  unbindEvents: function() {
    for (var i = 0; i < workPageImages.length; i++) {
      workPageImages[i].removeEventListener('mouseenter', this.selectImage);
      workPageImages[i].removeEventListener('mouseleave', this.unselectImage);
    }
  },
  bindEvents: function() {
    this.bindHoverEvents();
  },
  bindHoverEvents: function() {
    for (var i = 0; i < workPageImages.length; i++) {
      workPageImages[i].addEventListener('mouseenter', this.selectImage);
      workPageImages[i].addEventListener('mouseleave', this.unselectImage);
    }
  },
  selectImage: function() {
    var elPhoto = this.querySelector('img');
    var elDescription = this.querySelector('span');
    elPhoto.classList.add('hover');
    elDescription.classList.add('hover');
  },
  unselectImage: function() {
    var elPhoto = this.querySelector('img');
    var elDescription = this.querySelector('span');
    elPhoto.classList.remove('hover');
    elDescription.classList.remove('hover');
  }
};

popImage.init();