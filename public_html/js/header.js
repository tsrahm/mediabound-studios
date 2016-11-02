var navHeaderDropdown = document.getElementsByClassName('nav-header-dropdown');
var smallNavIcon = document.querySelector('.small-nav-icon');
var smallNav = document.querySelector('.small-nav');
var navClose = document.querySelector('.nav-close');

var header = {
  init: function() {
    this.render();
  },
  render: function() {
    this.unbindEvents();
    this.bindEvents();   
  },
  unbindEvents: function() {
    this.unbindHoverEvents();
    this.unbindClickEvents();
  },
  unbindHoverEvents: function() {
    for (var i = 0; i < navHeaderDropdown.length; i++) {
      navHeaderDropdown[i].removeEventListener('mouseenter', this.showMenu);
      navHeaderDropdown[i].removeEventListener('mouseleave', this.hideMenu);
    }
  },
  unbindClickEvents: function() {
    smallNavIcon.removeEventListener('click', this.showSmallNav);
    navClose.removeEventListener('click', this.hideSmallNav);
  },
  bindEvents: function() {
    this.bindHoverEvents();
    this.bindClickEvents();
  },
  bindHoverEvents: function() {
    for (var i = 0; i < navHeaderDropdown.length; i++) {
      navHeaderDropdown[i].addEventListener('mouseenter', this.showMenu);
      navHeaderDropdown[i].addEventListener('mouseleave', this.hideMenu);
    }
  },
  bindClickEvents: function() {
    smallNavIcon.addEventListener('click', this.showSmallNav);
    navClose.addEventListener('click', this.hideSmallNav);
  },
  showMenu: function() {
    var el = this.querySelector('ul');
    el.classList.add('show');
  },
  hideMenu: function() {
    var el = this.querySelector('ul');
    el.classList.remove('show');
  },
  showSmallNav: function() {
    smallNavIcon.classList.add('hide');
    smallNav.classList.add('show');
  },
  hideSmallNav: function() {
    smallNavIcon.classList.remove('hide');
    smallNav.classList.remove('show');
  }
};


    // $(window).scroll(function() {
    //   if ($(this).scrollTop() > 99 && $(window).width() > 767) {
    //     $('.dyba-nav-container').addClass('sticky');
    //     $('.dyba-main').addClass('sticky');
    //   } else {
    //     $('.dyba-nav-container').removeClass('sticky');
    //     $('.dyba-main').removeClass('sticky');
    //   }
    // });

header.init();

