!function(){"use strict";var e={el:{menu:$(".menu__list"),ham:$(".menu__burger"),menuTop:$(".menu__global--top"),menuMiddle:$(".menu__global--middle"),menuBottom:$(".menu__global--bottom")},init:function(){e.bindUIactions()},bindUIactions:function(){e.el.ham.on("click",function(n){e.activateMenu(n),n.preventDefault()})},activateMenu:function(){e.el.menuTop.toggleClass("menu__global--top-click"),e.el.menuMiddle.toggleClass("menu__global--middle-click"),e.el.menuBottom.toggleClass("menu__global--bottom-click"),e.el.menu.fadeToggle("menu__list--open")}};e.init()}();
