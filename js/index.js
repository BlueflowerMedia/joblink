// navbar color change on scroll

  var navbar = $("#masthead");
  var scrollvalue = $(window).scrollTop();
  if(scrollvalue>0){
    navbar.addClass("scrolled");
  }
  
$(window).scroll(function(){
  var scrollvalue = $(window).scrollTop();
  if(scrollvalue>0){
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


// close the hamburger when link is clicked
function closeHamburger(){
  $(document).ready(function(){
    $("#hamburger-9").toggleClass("is-active");
    $("#dropdown-menu").toggleClass("drop");
    // scroll down by 80px so that some contents are not hidden by navbar
    window.scrollTo(window.scrollX,window.scrollY-80);
  })
}

// show more less for contact forms

$(document).ready(function(){
  $(".button1").click(function(){
    $(".apple-ball").toggleClass("is-on");
  })
  $(".button2").click(function(){
    $(".ball-cat").toggleClass("is-on");
  })
})
