<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="../res/favicon.ico">
    <title>
      Autko | O nas
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=stylesheet href="style.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="index.js">
  </script>
  <div class="d-flex body">
      <div class="d-flex page">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="../">
              <img src="../res/whiteweb.png" alt="" height="64">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <div class="navbar-nav ml-auto">
                        <a href="../oferta" data-toggle="collapse" class="nav-item hvr-ripple-in whitetext nav-link text-uppercase font-weight-bold"><span>OFERTA</span></a>
                        <a href="../ogloszenia" data-toggle="collapse" class="nav-item hvr-ripple-in whitetext nav-link text-uppercase font-weight-bold"><span>OG??OSZENIA</span></a>
                        <a href="#" data-toggle="collapse" class="nav-item whitetext hvr-ripple-in nav-link text-uppercase font-weight-bold"><span>O NAS</span></a>
                      </div>

                  <div class="navbar-nav navbar-right">
                      <?php
                        session_start();
                        if(isset($_SESSION["loggedin"])){
                          echo '
                          <div class="nav-item dropdown">
                          <a class="nav-link hvr-ripple-in whitetext dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ' . $_SESSION["username"] . '
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../profile">Profil</a></li>
                                    <li><a class="dropdown-item" href="../messenger">Wiadomo??ci</a></li>
                                    <li><a class="dropdown-item" href="../cart">Koszyk</a></li>
                                    <li><a class="dropdown-item" href="../login/logout.php">Wyloguj</a></li>
                                  </ul>
                          </div>';
                        }
                        else {
                          echo '<a href="../login" data-toggle="collapse" class="nav-item whitetext nav-link text-uppercase font-weight-bold"><span>KONTO</span></a>';
                        }
                      ?>
                    </div>

                                      </div>
                </div>
        </nav>


<div class="text-center bg-image hider">
  <div class="blur">
    <h1 class="title"><span class="titletext">Autko - zaufaj najlepszym</span>
    </h1>
    <p class="desc">      Autko to salon samochodowy powsta??y w 1994 roku jako ma??y warsztat samochodowy. Z czasem Autko zyska??o zaufanie kierowc??w, rozros??o si?? i przekszta??ci??o w najwi??kszy salon samochodowy w Krakowie. Dzi?? cieszymy si?? dobr?? opini??, d??ugoletnim do??wiadczeniem i zaufaniem klient??w.
      W Autku znajd?? pa??stwo oferty znanych marek. Jeste??my oficjalnym dealerem marek Daewoo i Chevrolet oraz FSO.
      Oferujemy zar??wno samochody nowe, jak i u??ywane. Ka??dy znajdzie tu odpowiedni dla siebie pojazd.
      Opr??cz oferty pojazd??w w Autku znajduje si?? r??wnie?? serwis pojazd??w.

      Lokalizacja: Krak??w, ul. Sosnowa 3
      Kontakt: tel. 289-839-321, email: <a href="mailto:kontakt@autko.pl">kontakt@autko.pl</a>
    </p>
    <a class="btn btn-primary kontakt">Zadaj nam pytanie</a>
    <div class="logos">
    <img class="logo" src="../res/fso-dealer.png"/>
    <img class="logo" src="../res/fso-logo.png"/>
    <img class="logo" src="../res/gmdaewoo.png"/>
    <img class="logo" src="../res/chevy.png"/>
  </div>
  </div>
</div>


<div class="modal fade" id="form-modal" tabindex="-1" aria-labelledby="descModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="descModalLabel">
            Zadaj nam pytanie</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p class="body-desc">
          Twoja nazwa<input class="desc-inp" id="name" type="text" name=></input>
          Tw??j e-mail<input class="desc-inp" id="mail" type="text" ></input>
          Tytu?? pytania<input class="desc-inp" id="title" type="text" ></input>
          Tre???? pytania<input class="desc-inp" id="text" type="text" ></input>
    <button id="submitd" class="btn btn-sm btn-primary"</script> Wy??lij </button>
</div>
</div>
</div>
</div>

</div>




</body>
</html>
