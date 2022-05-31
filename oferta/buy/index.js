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


 $(".goback").on("click", function(e){
     e.preventDefault();
     window.history.back();
 });

$(".select-nadwozie").click(function() {
  $(".select-nadwozie").removeClass("selected");
  $(".ph-nadwozie").text($(this).text());
  $(this).addClass("selected");
  $(".nadwozie.silnik").removeClass("disabled");
  aktualizujCene();
});

$(".select-silnik").click(function() {
  $(".select-silnik").removeClass("selected");
  $(".ph-silnik").text($(this).text());
  $(this).addClass("selected");
  $(".nadwozie.wersja").removeClass("disabled");
  aktualizujCene();
});

$(".select-wersja").click(function() {
  $(".select-wersja").removeClass("selected");
  $(".ph-wersja").text($(this).find("h5").text());
  $(this).addClass("selected");
  $(".podsumowanie").removeClass("disabled");
  aktualizujCene();
});



 $(".choose").click(function() {
   $(".nexia-car-offer").attr("src", "../res/nexia-" + $(this).attr('class').split(' ')[1] + ".png");
 });

$(".ph-car").text($(".car-name").text());



$(".cart").click(function() {
  var auto, nadwozie, silnik, wersja, cena;
  auto = $(".auto").text();
  nadwozie = $(".nadwozie").text();
  silnik = $(".silnik").text();
  wersja = $(".wersja").text();
  cena =$(".cena").text();
  window.location.href="../buy?auto=" + auto + "&nadwozie=" + nadwozie + "&silnik=" + silnik + "&wersja=" + wersja + "&cena=" + cena + "&cart=true";
});

});
