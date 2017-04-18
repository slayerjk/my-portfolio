/*global $, jQuery*/
$(document).ready(function () {
  'use strict';

  $(".header-top-menu").show();
  $(".toggle-header-menu").show();

  $.fn.toggleTopMenu = function () {
    $(".toggle-header-menu").click(function () {
      $(".toggle-header-menu").toggleClass("toggle-header-menu__btn_active");
      $(".header-top-menu").toggle('slide', 'slow');
    });
  };
  
  $.fn.toggleTopMenu();
});