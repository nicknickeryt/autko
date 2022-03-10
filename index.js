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

});
