// navbar color change on scroll

$(function () {
  $(document).scroll(function () {
    var $nav = $(".site-header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

// dropdown menu for mobile

$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    $("#dropdown-menu").toggleClass("drop");
  });
});

//click buttons

// $(document).ready(function(){
//   $(".button1").click(function(){
//     $(".apple-ball").css({
//       'height':'300px'
//     })
//   })
// })


$(document).ready(function(){
  $(".button1").click(function(){
    $(".apple-ball").toggleClass("is-on");
  })
})

$(document).ready(function(){
  $(".button2").click(function(){
    $(".apple-ball").toggleClass("is-on");
  })
})
