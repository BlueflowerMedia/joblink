// navbar color change on scroll
$(window).scroll(function(){
  var scroll = $(window).scrollTop();
  var navbar = $("#masthead");
  if(scroll>0){
    navbar.addClass("scrolled");
  }else{
    navbar.removeClass("scrolled");
  }
});


// dropdown menu for mobile
$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    $("#dropdown-menu").toggleClass("drop");
  });
});


$(document).ready(function(){
  $(".button1").click(function(){
    $(".apple-ball").toggleClass("is-on");
  })
})

$(document).ready(function(){
  $(".button2").click(function(){
    $(".ball-cat").toggleClass("is-on");
  })
})
