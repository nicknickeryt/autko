window.onload = function() {
  $(".icon").click(function()  {
    $("#exampleModal").modal("toggle");
  });
  let photo = document.getElementById("loadFile").files[0];
  let formData = new FormData();

  formData.append("photo", photo);
  fetch('../res/profpic/test', {method: "POST", body: formData});
};
