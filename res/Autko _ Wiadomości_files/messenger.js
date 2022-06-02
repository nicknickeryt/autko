window.onload = function() {
  $(".icon").click(function()  {
    $("#exampleModal").modal("toggle");
  });

$("#lf").click(function()  {
  uploadFile();
});
  function uploadFile() {
  let files = document.getElementById("loadFile").files;

  let formData = new FormData();
  for (let i = 0; i < files.length; i++) {
    let file = files[i];

    formData.append('files[]', file);
}

  var reason = "Sukces!";
  console.log(fetch("upload.php", {
        method: 'POST',
        body: formData
    }).then(response => {
        if(response.status == 413){
          reason = "Błąd: plik zbyt duży.";
        }
        if(response.status == 415){
          reason = "Błąd: nieprawidłowy format.";
        }
      alert(reason);
    }).then(data => {
        console.log(data);
    }));
}
};

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
