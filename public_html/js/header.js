var navHeaderDropdown = document.getElementsByClassName('nav-header-dropdown');


var header = {
  init: function() {
    this.render();
  },
  render: function() {
    this.unbindEvents();
    this.bindEvents();   
  },
  showMenu: function() {
    var el = this.querySelector('ul');
    el.classList.add('visible');
  },
  hideMenu: function() {
    var el = this.querySelector('ul');
    el.classList.remove('visible');
  },
  unbindEvents: function() {
    for (var i = 0; i < navHeaderDropdown.length; i++) {
      navHeaderDropdown[i].removeEventListener('mouseenter', this.showMenu);
      navHeaderDropdown[i].removeEventListener('mouseleave', this.hideMenu);
    }
  },
  bindEvents: function() {
    this.bindHoverEvents();
  },
  bindHoverEvents: function() {
    for (var i = 0; i < navHeaderDropdown.length; i++) {
      navHeaderDropdown[i].addEventListener('mouseenter', this.showMenu);
      navHeaderDropdown[i].addEventListener('mouseleave', this.hideMenu);
    }
    // var $homeLink = $('.dyba-nav-logo');
    // $homeLink.hover(function(e) {
    //   var $el = $(this);
    //   var $hidden = $('.home-hidden');
    //   $el.hoverFlow(e.type, {opacity: 0.2}, 500);
    //   $hidden.hoverFlow(e.type, {opacity: 1}, 500);
    // }, function(e) {
    //   var $el = $(this);
    //   var $hidden = $('.home-hidden');
    //   $el.hoverFlow(e.type, {opacity: 1}, 500);
    //   $hidden.hoverFlow(e.type, {opacity: 0}, 500);
    // });

    // var $linkContainer = $('.dyba-nav-link-container');
    // $linkContainer.hover(function() {
    //   var $el = $(this);
    //   var $link = $el.find('.dyba-nav-link');
    //   $link.css({color: '#999', textDecoration: 'none'});
    // }, function() {
    //   var $el = $(this);
    //   var $link = $el.find('.dyba-nav-link');
    //   $link.css({color: 'black'});
    // });

    // var $dropdownContainermd = $('.dyba-nav-container-md .dyba-nav-dropdown-container');
    // $dropdownContainermd.hover(function(e) {
    //   var $el = $(this);
    //   var $header = $el.find('.dyba-nav-dropdown-header');
    //   var $dropdown = $el.find('.dyba-nav-dropdown-menu');
    //   $header.css({color: '#999', textDecoration: 'none'});
    //   $dropdown.hoverFlow(e.type, {
    //     height: 'show',
    //     marginTop: 'show',
    //     marginBottom: 'show',
    //     paddingTop: 'show',
    //     paddingBottom: 'show'
    //   });
    // }, function(e) {
    //   var $el = $(this);
    //   var $header = $el.find('.dyba-nav-dropdown-header');
    //   var $dropdown = $el.find('.dyba-nav-dropdown-menu');
    //   $el.delay(400)
    //     .queue(function(next) {
    //       $header.css({color: 'black'});
    //       next();
    //     });
    //   $dropdown.hoverFlow(e.type, {
    //     height: 'hide',
    //     marginTop: 'hide',
    //     marginBottom: 'hide',
    //     paddingTop: 'hide',
    //     paddingBottom: 'hide'
    //   });
    // });

    // var $roar = $('.roar');
    // $roar.click(function(){
    //   $('<audio>').attr({
    //     'src': '/images/jaguar.mp3',
    //     'volume': 1.0,
    //     'autoplay': 'autoplay'
    //   }).appendTo('body');
    // });

    // $(window).scroll(function() {
    //   if ($(this).scrollTop() > 99 && $(window).width() > 767) {
    //     $('.dyba-nav-container').addClass('sticky');
    //     $('.dyba-main').addClass('sticky');
    //   } else {
    //     $('.dyba-nav-container').removeClass('sticky');
    //     $('.dyba-main').removeClass('sticky');
    //   }
    // });

    // var $footerCreditsMD = $('.dyba-footer-credits.col-md-4');
    // $footerCreditsMD.hover(function() {
    //   var $el = $(this);
    //   var $popup = $el.find('.dyba-footer-credits-popup');
    //   $popup.toggle();
    // }, function() {
    //   var $el = $(this);
    //   var $popup = $el.find('.dyba-footer-credits-popup');
    //   $popup.toggle();
    // });

    // var $footerCreditsXS = $('.dyba-footer-credits.col-xs-12');
    // $footerCreditsXS.click(function() {
    //   var $el = $(this);
    //   var $popup = $el.find('.dyba-footer-credits-popup');
    //   $popup.toggle();
    // });

  }
};

header.init();