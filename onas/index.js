

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

$(".kontakt").click(function() {
  $("#form-modal").modal("toggle");
});

$("#submitd").click(function() {
  window.location.href = "../profile/upload.php?text=" + $('#text').val() + "&name=" + $('#name').val() + "&mail=" + $('#mail').val() + "&title=" + $('#title').val();
});

})
