window.onload = function() {
  $(".icon").click(function()  {
    $("#exampleModal").modal("toggle");
  });

$("#lf").click(function()  {
  console.log("aa");
  uploadFile();
});
  function uploadFile() {
  let files = document.getElementById("loadFile").files;

  let formData = new FormData();
  for (let i = 0; i < files.length; i++) {
    let file = files[i];

    formData.append('files[]', file);
}

  console.log(files);
  console.log(fetch("upload.php", {
        method: 'POST',
        body: formData
    }).then(response => {
        console.log(response.text());
    }).then(data => {
        console.log(data);
    }));
  alert('The file has been uploaded successfully.');
}
};
