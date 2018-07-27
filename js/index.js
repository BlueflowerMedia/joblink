// navbar color change on scroll

$(function () {
  $(document).scroll(function () {
    var $nav = $(".site-header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

// dropdown menu

$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    $("#dropdown-menu").toggleClass("drop");
  });
});
