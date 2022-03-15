<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=stylesheet href="../style.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="login.js">
  </script>

  <script>
    function register() {
      var pass = $("#exampleInputPassword1").val();
      var mail = $("#exampleInputEmail1").val();
      var newsletter = $("#exampleCheck1").val();
      alert("mail: " + mail + " haslo: " + pass + " news: " + newsletter);
<?php
      error_reporting(E_WARNING);
      error_reporting(E_ALL);

      echo $_POST['email'];

    $user = "autko";
    $pass = "autko";
    $host = "localhost";
    $dbdb = "autko";

    // Create connection
$conn = new mysqli($host, $user, $pass, $dbdb);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO credentials (mail, pass, news) VALUES (test, pass, 1)";
$result = $conn->query($sql);
echo $result;

$conn->close();
?>
    }
  </script>



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
      <form action="index.php" method="post" onsubmit="register()">
        <div class="mb-3" >
          <label for="exampleInputEmail1" class="form-label checkbox-left">Adres e-mail</label>
          <input name="email" type="email" class="email form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label checkbox-left">Hasło</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label checkbox-left" for="exampleCheck1">Otrzymuj wiadomości od administracji</label>
        </div>
        <button type="submit" class="btn btn-primary">Zarejestruj się</button>
      </form>


    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <br>
      <form onsubmit="login()">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label checkbox-left">Adres e-mail</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label checkbox-left">Hasło</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button class="btn btn-primary">Zaloguj się</button>
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
