$(document).ready(function() {
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





  $(".choose-n").click(function() {
    $(".nexia-car-offer").attr("src", "../res/nexia-" + $(this).attr('class').split(' ')[2] + ".png");
  });

  $(".choose-a").click(function() {
    $(".aveo-car-offer").attr("src", "../res/aveo-sedan-" + $(this).attr('class').split(' ')[2] + ".png");
  });

  $(".choose-p").click(function() {
    $(".polonez-car-offer").attr("src", "../res/polonez-atu-" + $(this).attr('class').split(' ')[2] + ".png");
  });

});
