/*jslint browser: true*/
/*global $, jQuery*/

$(document).ready(function () {
  "use strict";
  
/*Slider behaviour*/
  $.fn.sliderSwitcher = function () {
    var
      $curInputChecked = $('.slider__input:checked'),
      $nextInputChecked = $curInputChecked.next();
    
    $curInputChecked.removeAttr('checked');
    if (($nextInputChecked.prop('type')) === 'radio') {
      $nextInputChecked.prop('checked', 'checked');
    } else {
      $nextInputChecked = $('.slider__input').first().prop('checked', 'checked');
    }
  };
  
  setInterval($.fn.sliderSwitcher, 4000);
  
  
/* Write-us behaviour  */
  $('.js-write-us').click(function () {
    event.preventDefault();

    $('.overlay').show();
    $('.modal-content').addClass('modal-content-show', function () {
      $(this).fadeIn('slow');
    });
  });

  $('.modal-content-close').click(function () {
    event.preventDefault();

    $('.overlay').hide();
    $('.modal-content').removeClass('modal-content-show', function () {
      $(this).fadeOut('fast');
    });
  });

  /* Map behaviour  */
  $('.js-open-map').click(function () {
    event.preventDefault();

    $('.overlay').show();
    $('.modal-content-map').addClass('modal-content-show', function () {
      $(this).fadeIn('slow');
    });
  });

  $('.modal-content-close').click(function () {
    event.preventDefault();

    $('.overlay').hide();
    $('.modal-content-map').removeClass('modal-content-show');
  });

});

/* STUDY-Course-code
var link = document.querySelector(".js-login");
var popup = document.querySelector(".modal-content");
var close = popup.querySelector(".modal-content-close");
var form = popup.querySelector("form");
var name = popup.querySelector("[name=name]");
var email = popup.querySelector("[name=email]");
var message = popup.querySelector("[name=message]");
var storage = localStorage.getItem("email");
var storage = localStorage.getItem("name");

link.addEventListener("click", function (event) {
  event.preventDefault();
  popup.classList.add("modal-content-show");

  if (storage) {
    name.value = storage;
    email.value = storage;
    email.focus();
  }
  else {
    name.focus();
  }

});

close.addEventListener("click", function (event) {
  event.preventDefault();
  popup.classList.remove("modal-content-show");
  popup.classList.remove("modal-error");
});

form.addEventListener("submit", function (event) {
  if (!login.value || !password.value) {
    event.preventDefault();
    popup.classList.remove("modal-error");
    popup.offsetWidth = popup.offsetWidth;
    popup.classList.add("modal-error");
  }
  else {
    localStorage.setItem("name", name.value);
    localStorage.setItem("email", email.value);
  }
});

window.addEventListener("keydown", function (event) {
  if (event.keyCode === 27) {
    if (popup.classList.contains("modal-content-show")) {
      popup.classList.remove("modal-content-show");
      popup.classList.remove("modal-error");
    }
  }
});

var mapOpen = document.querySelector(".js-open-map");
var mapPopup = document.querySelector(".modal-content-map");
var mapClose = mapPopup.querySelector(".modal-content-close");

mapOpen.addEventListener("click", function (event) {
  event.preventDefault();
  mapPopup.classList.add("modal-content-show");
});

mapClose.addEventListener("click", function (event) {
  event.preventDefault();
  mapPopup.classList.remove("modal-content-show");
});

window.addEventListener("keydown", function (event) {
  if (event.keyCode === 27) {
    if (mapPopup.classList.contains("modal-content-show")) {
      mapPopup.classList.remove("modal-content-show");
    }
  }
});
*/