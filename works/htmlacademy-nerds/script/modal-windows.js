$(document).ready(function () {
  'use strict';
   
  $('.js-form').click(function () {
    event.preventDefault();
    
    $('.overlay').show();
    $('.modal-content_form').addClass('modal-content_show');
  });
  
  $('.modal-content_close').click(function () {
    event.preventDefault();
    
    $('.overlay').hide();
    $('.modal-content_form').removeClass('modal-content_show');
  });
  
});