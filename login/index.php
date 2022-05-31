<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/x-icon" href="../res/favicon.ico">
  <title>
    Autko | Twoje konto
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=stylesheet href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
<script src="login.js">
</script>

<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
  }

  $config = parse_ini_file('../conf/db.ini');

  $user = $config['dbuser'];
  $pass = $config['dbpassword'];
  $host = $config['dbhost'];
  $dbdb = $config['dbdatabase'];

    // Create connection
$conn = new mysqli($host, $user, $pass, $dbdb);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Sprawdź konfigurację bazy danych! (conf/db.ini)";
}
if(isset($_POST["register"])){


  if(isset($_POST["regpassword"]) && isset($_POST["regemail"]) && isset($_POST["regusername"])) {

    $username = $_POST["regusername"];
    $password = $_POST["regpassword"];
    $email = $_POST["regemail"];
    $news = 0;
    if(isset($_POST["Test"])) {
      $news = 1;
    }


  $sel1 = "SELECT ID FROM credentials WHERE mail='" . $email . "'";
  $resl1 = $conn->query($sel1);
  if(mysqli_num_rows($resl1) != 0) {
    echo "<center>
    <div class='container error'>
    <a>Ten email jest już zarejstrowany.</a>
    </div>
    <center>

    ";
  }
  $sql = "INSERT INTO credentials (username, mail, pass, news) VALUES ('" . $username . "' , '" . $email . "', '" . $password . "', " . $news . ")";
  $conn->query($sql);

  $selid = "SELECT ID FROM credentials WHERE mail='" . $email . "' AND pass='" . $password . "'";
  $resid = $conn->query($selid);
  if($row = mysqli_fetch_array($resid)) {
    $id = $row['ID'];
    $sql1 = "INSERT INTO profiles (ID, opis) VALUES (" . $id . ", ' ')";
    $conn->query($sql1);
    $conn->close();
    echo "<center>
    <div class='container success'>
    <a>Zarejestrowano!</a>
    </div>
    <center>

    ";
  }
  }
    unset($_POST["register"]);
}
else if (isset($_POST["login"])) {
    if(isset($_POST["loginpassword"]) && isset($_POST["loginemail"])) {
    $password = $_POST["loginpassword"];
    $email = $_POST["loginemail"];
    $sql = "SELECT * FROM credentials WHERE mail='" . $email . "' AND pass='" . $password . "'";
    $result = $conn->query($sql);
    if ($row = mysqli_fetch_array($result)) {
      echo "aa";
        echo "sukces!";
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        $_SESSION["username"] = $row["username"];
        $_SESSION["id"] = $row["ID"];
        header("location: ../index.php");
    }
    else {
      echo "<center>
      <div class='container error'>
      <a>Zły login lub hasło.</a>
      </div>
      <center>
      <script>
      $('#profile-tab').click();
      </script>
      ";
    }
    $conn->close();
  }
}
?>



<div class="text-center bg-image hider">
  <div class="blur">
    <center>
<div class="cointainer login-form">

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Rejestracja</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Logowanie</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <br>
      <form action="index.php" method="post" autocomplete="off">
        <div class="mb-3" >
          <label for="exampleInputUsername1" class="form-label checkbox-left">Nazwa wyświetlana</label>
          <input autocomplete="new-username" name="regusername" type="username" class="username form-control" id="exampleInputUsername1" aria-describedby="usernameHelp">
        </div>
        <div class="mb-3" >
          <label for="exampleInputEmail1" class="form-label checkbox-left">Adres e-mail</label>
          <input autocomplete="off" name="regemail" type="email" class="email form-control" id="exampleInputEmail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label checkbox-left">Hasło</label>
          <input autocomplete="new-password" name="regpassword" type="password" class="form-control" id="exampleInputPassword">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" name="Test" class="form-check-input" id="checkbox">
          <label class="form-check-label checkbox-left" for="exampleCheck1">Otrzymuj wiadomości od administracji</label>
        </div>
        <a class="btn btn-danger" role="button" href="../"><i class="fa-solid fa-circle-xmark"></i></a>
        <button type="submit" class="btn btn-primary" name="register">Zarejestruj się</button>
      </form>


    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <br>
      <form action="index.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label checkbox-left">Adres e-mail</label>
          <input name="loginemail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label checkbox-left">Hasło</label>
          <input name="loginpassword" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <a class="btn btn-danger" role="button" href="../"><i class="fa-solid fa-circle-xmark"></i></a>
        <button class="btn btn-primary" type="submit" name="login">Zaloguj się</button>
      </form>
    </div>
  </div>


</div>
</center>
    </h1>
  </div>
</div>
</body>
</html>
