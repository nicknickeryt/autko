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
                        /* $(this).text("najlepszym").animate({opacity:1}, function(){
                           animateStart();
                         });*/
                         $(".titletext").fadeOut("slow").promise().then(function(){
                           $(".autko").fadeIn("slow");
                         });

                        });
                     });
                 });
               });
           });
       });
   });
 }


 window.addEventListener('scroll', () => {
   if($(window).scrollTop() == 0){
     $(".navbar").removeClass("white");
     $(".nav-link").addClass("whitetext");
     $(".nav-link").addClass("hvr-ripple-in");
     $(".nav-link").removeClass("hvr-white");
   } else {
     $(".navbar").addClass("white");
     $(".nav-link").removeClass("whitetext");
     $(".nav-link").removeClass("hvr-ripple-in");
     $(".nav-link").addClass("hvr-white");
   }
 })

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
