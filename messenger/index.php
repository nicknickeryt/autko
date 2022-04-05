  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel=stylesheet href="profile.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="profile.js">
    </script>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="../">
            <img src="../res/whiteweb.png" alt="" height="64">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="navbar-nav ml-auto">
                      <a href="../ogloszenia" data-toggle="collapse" class="nav-item nav-link text-uppercase font-weight-bold"><span>OGŁOSZENIA</span></a>
                      <a href="../onas" data-toggle="collapse" class="nav-item nav-link text-uppercase font-weight-bold"><span>O NAS</span></a>
                    </div>

                </div>
                <div class="navbar-nav navbar-right">
                    <?php
                      session_start();
                      if(isset($_SESSION["loggedin"])){
                        echo '
                        <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  ' . $_SESSION["username"] . '
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="#">Profil</a></li>
                                  <li><a class="dropdown-item" href="../login/logout.php">Wyloguj</a></li>
                                </ul>
                        </div>';
                      }
                      else {
                        echo '<a href="login" data-toggle="collapse" class="nav-item nav-link text-uppercase font-weight-bold"><span>KONTO</span></a>';
                      }

                      $user = "autko";
                      $pass = "autko";
                      $host = "localhost";
                      $dbdb = "autko";

                      $username = "";
                      $email = "";
                      // Create connection
                      $conn = new mysqli($host, $user, $pass, $dbdb);
                  // Check connection
                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }
                  $sql = "SELECT * FROM credentials WHERE username='" . $_SESSION['username'] . "'";
                  $result = $conn->query($sql);
                  if ($row = mysqli_fetch_array($result)) {
                    $username = $row['username'];
                    $email = $row['mail'];
                    $userid = $row['ID'];
                  }



                    ?>
                  </div>
              </div>
      </nav>

      <div class="input-group">
        <div id="myDropdown">
          <input type="search" id="myInput" autocomplete="off" class="form-control" placeholder="Szukaj" onkeyup="filterFunction()"/>

    <div class="row-fluid">



<?php
$sql = "SELECT * FROM credentials WHERE username!='" . $_SESSION['username'] . "'";
$result = $conn->query($sql);
while ($row = mysqli_fetch_array($result)) {
  echo "<a class='user list-group-item' style='display: none;'>" . $row["username"] . "</a>";
}
 ?>

   </div>
 </div>

<?php
if(isset($_GET["userid"])){
  $otherid = $_GET["userid"];
  $othersql = "SELECT * FROM credentials WHERE id='" . $otherid . "'";
  $result = $conn->query($othersql);
  if ($row = mysqli_fetch_array($result)) {
    $otherusername = $row['username'];
    $otheremail = $row['mail'];
  }
  echo '                <img src="../res/profpic/default.svg" class="card-img-top userimage align-self-center" alt="">';
  echo $otherusername;
}
 ?>

<div class="container send-form">
<input class="send"></input>
<button class="sendbtn btn btn-primary" onclick="sendMess();">Wyślij</button>
</div>

<script>

$(document).click(function() {
    console.log('clicked outside');
    $(".user").hide();
});

$("#myInput").click(function(event) {
    console.log('clicked inside');
    $(".user").show();
    filterFunction();
    event.stopPropagation();
});

$(".user").click(function() {
  console.log($(this).text());
});

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      $(a[i]).show();
    } else {
      $(a[i]).hide();
    }
  }
}

$.ajax({
  url: "../res/profpic/<?php echo $userid . '.png?' . filemtime('../res/profpic/' . $userid . '.png'); ?>"  ,
  type:'HEAD',
  success: function()
  {
      $(".userimage").attr("src", "../res/profpic/<?php echo $otherid . '.png?' . filemtime('../res/profpic/' . $otherid . '.png'); ?>");
  }
});

function sendMess() {
  console.log("aaaa");
  $.ajax({
    url: "../profile/upload.php?message=" + $(".send").val() + "&senderid=" + <?php $otherid ?> + "&receiverid=" + <?php $userid ?>,
    type:'HEAD',
    success: function()
    {
        console.log("sukces");
    }
  });
}

</script>

  </body>
  </html>
