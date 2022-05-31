<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="../../res/favicon.ico">
    <title>
      Autko | Podsumowanie
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=stylesheet href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="index.js">
  </script>

  <?php
  $config = parse_ini_file('../../conf/db.ini');

  $user = $config['dbuser'];
  $pass = $config['dbpassword'];
  $host = $config['dbhost'];
  $dbdb = $config['dbdatabase'];

  $username = "";
  $email = "";
  // Create connection
  $conn = new mysqli($host, $user, $pass, $dbdb);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

session_start();


  if(isset($_GET["remove"])) {
    $rem = "DELETE FROM `koszyk` WHERE ID=" . $_GET["remove"];
    $conn->query($rem);
  }

  if(isset($_SESSION["id"]) && isset($_GET["cart"])) {
    $sql1 = "INSERT INTO `koszyk` (userid, data, auto, nadwozie, silnik, wersja, cena) VALUES (" . $_SESSION["id"] . ", " . time() .  ", '" . $_GET["auto"] . "', '" . $_GET["nadwozie"] . "', '" . $_GET["silnik"] . "', '" . $_GET["wersja"] . "', '"  . $_GET["cena"] . "')";
    $conn->query($sql1);
    header("Location: ../../cart");
  }

  //CREATE TABLE `autko`.`koszyk` (`ID` INT NOT NULL AUTO_INCREMENT , `userid` INT NOT NULL , `data` INT NOT NULL , `auto` VARCHAR(50) NOT NULL , `nadwozie` VARCHAR(50) NOT NULL , `silnik` VARCHAR(50) NOT NULL , `wersja` VARCHAR(50) NOT NULL , `cena` VARCHAR(50) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;

   ?>

  <div class="d-flex body">


   <div class="container d-flex buy-form">

     <img class="logo" src="../../res/col.png"></img>

     <div class="summary">
       <h4>Marka i model pojazdu</h4>
       <p class="auto"><?php echo $_GET["auto"];?></p>
       <h4>Typ nadwozia</h4>
       <p class="nadwozie"><?php echo $_GET["nadwozie"];?></p>
       <h4>Silnik:</h4>
       <p class="silnik"><?php echo $_GET["silnik"];?></p>
       <h4>Wersja wyposażenia</h4>
       <p class="wersja"><?php echo $_GET["wersja"];?></p>
       <h4>Suma</h4>
       <p class="cena"><?php echo $_GET["cena"];?></p>
       <div class="container buttons">
       <?php
        if(!isset($_SESSION["id"])) {

          echo "<a class='btn btn-primary margin disabled '><i class='fa-solid fa-basket-shopping'></i> Aby dodać do koszyka, należy się zalogować.</a>";
        } else {
          echo "<a class='btn btn-primary margin cart'><i class='fa-solid fa-basket-shopping'></i> Dodaj do koszyka</a>";
          }
        ?>
        <a class='btn btn-success margin'><i class='fa-solid fa-money-check-dollar'></i> Zakup</a>
      </div>
     </div>


  </div>
</div>

</body>
</html>
