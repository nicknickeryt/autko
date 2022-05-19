  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel=stylesheet href="u.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="u.js">
    </script>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="../">
            <img src="../../res/whiteweb.png" alt="" height="64">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="navbar-nav ml-auto">
                      <a href="../../oferta" data-toggle="collapse" class="nav-item hvr-ripple-in whitetext nav-link text-uppercase font-weight-bold"><span>OFERTA</span></a>
                      <a href="../../ogloszenia" data-toggle="collapse" class="nav-item hvr-ripple-in whitetext nav-link text-uppercase font-weight-bold"><span>OGŁOSZENIA</span></a>
                      <a href="../../onas" data-toggle="collapse" class="nav-item hvr-ripple-in whitetext nav-link text-uppercase font-weight-bold"><span>O NAS</span></a>
                    </div>

                </div>
                <div class="navbar-nav navbar-right">
                    <?php
                      session_start();
                      $u = $_GET["u"];
                      if(isset($_SESSION["loggedin"])){
                        echo '
                        <div class="nav-item dropdown">
                        <a class="nav-link hvr-ripple-in whitetext dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  ' . $_SESSION["username"] . '
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="#">Profil</a></li>
                                  <li><a class="dropdown-item" href="../../messenger">Wiadomości</a></li>
                                  <li><a class="dropdown-item" href="../../login/logout.php">Wyloguj</a></li>
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
                  $sql = "SELECT * FROM credentials WHERE ID='" . $u . "'";
                  $result = $conn->query($sql);
                  if ($row = mysqli_fetch_array($result)) {
                    $username = $row['username'];
                    $email = $row['mail'];
                    $userid = $row['ID'];
                  }
                  $sql = "SELECT * FROM profiles WHERE ID='" . $u . "'";
                  $result = $conn->query($sql);
                  if ($row = mysqli_fetch_array($result)) {
                    $opis = $row['opis'];
                  }


                    ?>
                  </div>
              </div>
      </nav>
      <div class="text-center bg-image hider">
        <div class="blur">
          <center>

            <div class="card profile" style="width: 65vw;">
              <div class="card-body flex align-self-center">
                <div class="flex align-self-center container1">
                <img src="../../res/profpic/default.svg" class="card-img-top userimage align-self-center" alt="">
              </div>
                <div class="card-body align-self-center">
                <h5 class="card-title"><?php echo $username; ?></h5>
                <p class="card-text"><?php echo $email; ?></p>
              </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $opis; ?></li>
              </ul>
              <div class="card-body">
                <a href="../../messenger?userid=<?php echo $u; ?>" class="card-link btn btn-primary descchange">Wyślij wiadomość</a>
              </div>
            </div>
          </div>
        </div>


<script>
$.ajax({
  url: "../../res/profpic/<?php
  $userimg = "default.svg";
  if(file_exists("../../res/profpic/" . $u . '.png'  )) {
    echo $userid . '.png?' . filemtime('../../res/profpic/' . $userid . '.png');
    $userimg = $userid . ".png";
  } else {
    echo $userimg;
  }?>",
  type:'HEAD',
  success: function()
  {
      $(".userimage").attr("src", "../../res/profpic/<?php echo $userimg . "?". filemtime('../../res/profpic/' . $userimg); ?>");
  }
});

</script>

  </body>
  </html>
