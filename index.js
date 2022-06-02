$(document).ready(function()
{
animateStart();
function animateStart(){
$(".animation").delay(2000).animate(
       {opacity:0 },function()
       {
          $(this).text("najszybszym").animate({opacity:1},function(){
           $(this).delay(2000).animate({opacity:0},function(){
               $(this).text("korzystnym").animate({opacity:1}, function(){
                   $(this).delay(2000).animate({opacity:0},function(){
                     $(this).text("doświadczonym").animate({opacity:1}, function(){
                       $(this).delay(2000).animate({opacity:1},function(){
                         $(".titletext").fadeOut("slow").promise().then(function(){
                           $(".autko").css("height", "18rem");
                           $(".autko").fadeIn("slow");
                           $(".autko").animate({
                             height: "22rem"
                           }, 400);
                           $(".autko").animate({
                             height: "12rem"
                           }, 500)
                         });

                        });
                     });
                 });
               });
           });
       });
   });
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

 if($(window).width() < 992) {
   $(".navbar").addClass("white");
   $(".nav-link").removeClass("whitetext");
   $(".nav-link").removeClass("hvr-ripple-in");
   $(".nav-link").addClass("hvr-white");
 }
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

});
