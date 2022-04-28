  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel=stylesheet href="profile.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css" integrity="sha512-qzgHTQ60z8RJitD5a28/c47in6WlHGuyRvMusdnuWWBB6fZ0DWG/KyfchGSBlLVeqAz+1LzNq+gGZkCSHnSd3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="profile.js">
    </script>

    <div class="d-flex page">


            <div class="d-flex kontener">
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
                      <a href="../oferta" data-toggle="collapse" class="nav-item nav-link text-uppercase font-weight-bold"><span>OFERTA</span></a>
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
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
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
          <div class="d-flex justify-content-between">
          <input type="search" id="myInput" autocomplete="off" class="form-control" placeholder="Szukaj" onkeyup="filterFunction()"/>

<div class="container align-self-center">
  <div class="card receiver d-flex flex-row justify-content-center align-items-center">

<?php
if(isset($_GET["userid"])){
  $otherid = $_GET["userid"];
  $othersql = "SELECT * FROM credentials WHERE id='" . $otherid . "'";
  $result = $conn->query($othersql);
  if ($row = mysqli_fetch_array($result)) {
    $otherusername = $row['username'];
    $otheremail = $row['mail'];
  }
  echo '<img src="../res/profpic/default.svg" class="card-img-top userimage align-self-center" alt="">
    <div class="card-body">';
  echo '<h5 class="card-title align-self-center">' . $otherusername . '</h5>

  </div>';

}
echo '</div>
   </div>';
?>


<ul class='row-fluid container list-group lista'>



<?php
$sql = "SELECT * FROM credentials WHERE username!='" . $_SESSION['username'] . "'";
$result = $conn->query($sql);
while ($row = mysqli_fetch_array($result)) {
  $img = "<img src='../res/profpic/default.svg' class='card-img-top userimage-list align-self-center' alt=''>";
  if(file_exists("../res/profpic/" . $row["ID"] . ".png")){
    $img = "<img src='../res/profpic/" . $row["ID"] . ".png' class='card-img-top userimage-list align-self-center' alt=''>";

  }
echo "
<li class='list-group-item flex-row userlist'>
" . $img . "
<a class='user-a border-0 list-group-item' style='display: none;' onclick='window.location.href=\"../messenger/?userid=" . $row["ID"] . "\"'>" . $row["username"] . "
</a>
</li>";
}
?>
</ul>

</div>
</div>
<center class="message-box-center">
<div class="container flex-column d-flex message-box">

<?php
if(isset($_GET["userid"])){
$sql = "SELECT * FROM messenger WHERE senderid=" . $userid . " AND receiverid=" . $otherid . " OR senderid=" . $otherid . " AND receiverid=" . $userid . "";
$result = $conn->query($sql);
while ($row = mysqli_fetch_array($result)) {
  if($row["senderid"] == $userid){
    echo "<p class='message message-to text-decoration-none'>" . $row["content"] . "</p>";
  } else {
    echo "<p class='message bg-primary message-from text-decoration-none'>" . $row ["content"] . "</p>";
  }
}

}
?>


</div>
</div>

<footer class="mt-auto send-form">
  <div class="container input-group mb-3">
   <input type="text" class="send form-control" placeholder="Wpisz wiadomość..." aria-label="Recipient's username" aria-describedby="button-addon2">
   <button class="sendbtn btn btn-outline-secondary" onclick="sendMess();" type="button" id="button-addon2"><i class="fa-solid fa-paper-plane"></i></button>
 </div>
 </footer>


</div>
</div>

<script>
  $('.message-box').scrollTop($('.message-box')[0].scrollHeight);





$(document).click(function() {
    console.log('clicked outside');
    $(".lista").hide();
});

$("#myInput").click(function(event) {
    console.log('clicked inside');
    $(".lista").show();
    filterFunction();
    event.stopPropagation();
});

$(".lista").click(function() {
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



function sendMess() {
  console.log("aaaa");
  if ($(".send").val() == "") {
    return;
  }
  $.ajax({
    url: "../profile/upload.php?message=" + $(".send").val() + "&senderid=" + <?php echo $userid ?> + "&receiverid=" + <?php
    if(isset($otherid)) {
      echo $otherid;
    } else {
      echo "none";
    }
 ?>,
    type:'HEAD',
    success: function()
    {
        console.log("sukces");
    }
  });
  $(".message-box").append("<p class='message message-to text-decoration-none'>" + $(".send").val() + "</p>");
  $(".send").val("");
  $('.message-box').scrollTop($('.message-box')[0].scrollHeight);
}

$.ajax({
  url: "../res/profpic/<?php
  if(file_exists("../res/profpic/" . $userid . '.png'  )) {
    echo $userid . '.png?' . filemtime('../res/profpic/' . $userid . '.png');
  } else {
    echo "default.svg";
  }?>",
  type:'HEAD',
  success: function()
  {
        $(".userimage").attr("src", "../res/profpic/" + "<?php

        if(isset($otherid)){
        if(file_exists("../res/profpic/" . $otherid . '.png'  )) {
          echo $otherid . '.png?' . filemtime('../res/profpic/' . $otherid . '.png');
        } else {
          echo "default.svg";
        }
      } else {
        echo "none";
      }
         ?>");

  }
});


if(<?php
if(isset($otherid)) {
  echo "1";
} else {
  echo "0";
}
 ?> == "0") {
   $(".sendbtn").addClass("disabled");
 }

if(<?php
 if(isset($otherid)) {
   echo "1";
 } else {
   echo "0";
 }
  ?> == "0")
   {
 const interval = setInterval(function() {
   
  }, 5000);
}

</script>

  </body>
  </html>
