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
