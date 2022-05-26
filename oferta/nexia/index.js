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


 $(".hBack").on("click", function(e){
     e.preventDefault();
     window.history.back();
 });

$(".select-nadwozie").click(function() {
  $(".select-nadwozie").css("background", "white");
  $(this).css("background", "lightskyblue");
});

$(".select-silnik").click(function() {
  $(".select-silnik").css("background", "white");
  $(this).css("background", "lightskyblue");
});

$(".select-wersja").click(function() {
  $(".select-wersja").css("background", "white");
  $(this).css("background", "lightskyblue");
});



 $(".choose").click(function() {
   $(".nexia-car-offer").attr("src", "../res/nexia-" + $(this).attr('class').split(' ')[1] + ".png");
 });

$(".ph.car").text($(".car-name").text());

});
