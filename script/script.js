/*global $, jQuery*/
$(document).ready(function () {
  'use strict';
  
  var winWidth = $(window).width();

  $('.toggle-header-menu__btn').show();
  
  $.fn.toggleTopMenu = function () {
    $('.toggle-header-menu__btn').click(function () {
      $('.toggle-header-menu__btn').toggleClass('toggle-header-menu__btn_active');
      if (winWidth <= 555) {
        $('.header-top-menu').slideToggle();
      } else {
        $('.header-top-menu').toggle('slide', 'slow');
      }
    });
  };
  
  $.fn.toggleTopMenu();

});

/*
  $(window).resize(function () {
    if (winWidth > 555) {
      $('.header-top-menu').show();
    } else if (winWidth <= '555') {
      $('.header-top-menu').hide();
    }
  });
*/