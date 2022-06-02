

$(document).ready(function()
{
  if($(window).width() < 992) {
    $(".navbar").addClass("white");
    $(".nav-link").removeClass("whitetext");
    $(".nav-link").removeClass("hvr-ripple-in");
    $(".nav-link").addClass("hvr-white");
  }

//navbar
 window.addEventListener('scroll', () => {
   if($(window).scrollTop() == 0 && $(window).width() >= 992){
     $(".navbar").removeClass("white");
     $(".nav-link").addClass("whitetext");
     $(".nav-link").addClass("hvr-ripple-in");
     $(".nav-link").removeClass("hvr-white");
   } else if($(window).width() >= 992) {
     $(".navbar").addClass("white");
     $(".nav-link").removeClass("whitetext");
     $(".nav-link").removeClass("hvr-ripple-in");
     $(".nav-link").addClass("hvr-white");
   }
 })

window.onresize = function() {
 if($(window).width() < 992) {
   $(".navbar").addClass("white");
   $(".nav-link").removeClass("whitetext");
   $(".nav-link").removeClass("hvr-ripple-in");
   $(".nav-link").addClass("hvr-white");
 } else {
   $(".navbar").removeClass("white");
   $(".nav-link").addClass("whitetext");
   $(".nav-link").addClass("hvr-ripple-in");
   $(".nav-link").removeClass("hvr-white")
 }
}
})
