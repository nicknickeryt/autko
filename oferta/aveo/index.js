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



$(".podsumowanie").click(function() {
  var auto, nadwozie, silnik, wersja, cena;
  auto = $(".car-name").text();
  nadwozie = $(".select-nadwozie.selected").data("id");
  silnik = $(".select-silnik.selected").data("id");
  wersja = $(".select-wersja.selected").data("id");
  cena = $(".cena").text();
  window.location.href="../buy?auto=" + auto + "&nadwozie=" + nadwozie + "&silnik=" + silnik + "&wersja=" + wersja + "&cena=" + cena;
});


});


function aktualizujCene() {
  var [nadwozie, silnik, wersja] = [0, 0, 0];
  if($(".select-nadwozie.selected").data("cena") != null) {
    nadwozie = parseInt($(".select-nadwozie.selected").data("cena"));
  }
  if($(".select-silnik.selected").data("cena") != null) {
    silnik = parseInt($(".select-silnik.selected").data("cena"));
  }
  if($(".select-wersja.selected").data("cena") != null) {
    wersja = parseInt($(".select-wersja.selected").data("cena"));
  }
  $(".cena").text(nadwozie + silnik + wersja + "zł");
}
