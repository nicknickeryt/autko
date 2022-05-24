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

 $(".choose").click(function() {
   $(".nexia-car-offer").attr("src", "../res/nexia-" + $(this).attr('class').split(' ')[1] + ".png");
 });

});
