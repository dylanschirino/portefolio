(function(){


"use strict";

if(window.devicePixelRatio > 1.5){
       $('.retina').each(function(){
         var img = $(this);
         img.attr('src', img.attr('src').replace('.','2x.'));
       })
     }

var Menu = {

  el: {
    menu:$('.menu__list'),
    ham: $('.menu__burger'),
    menuTop: $('.menu__global--top'),
    menuMiddle: $('.menu__global--middle'),
    menuBottom: $('.menu__global--bottom')
  },

  init: function() {
    Menu.bindUIactions();
  },

  bindUIactions: function() {
    Menu.el.ham
        .on(
          'click',
        function(event) {
        Menu.activateMenu(event);
        event.preventDefault();
      }
    );
  },

  activateMenu: function() {
    Menu.el.menuTop.toggleClass('menu__global--top-click');
    Menu.el.menuMiddle.toggleClass('menu__global--middle-click');
    Menu.el.menuBottom.toggleClass('menu__global--bottom-click');
    Menu.el.menu.fadeToggle('menu__list--open');
  }
};

Menu.init();
})();
