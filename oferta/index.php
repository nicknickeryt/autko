<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="../res/favicon.ico">
    <title>
      Autko | Oferta
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
                    <a href="../oferta" data-toggle="collapse" class="nav-item hvr-ripple-in nav-link whitetext text-uppercase font-weight-bold"><span>OFERTA</span></a>
                    <a href="../ogloszenia" data-toggle="collapse" class="nav-item hvr-ripple-in nav-link whitetext  text-uppercase font-weight-bold"><span>OGŁOSZENIA</span></a>
                    <a href="../onas" data-toggle="collapse" class="nav-item hvr-ripple-in nav-link text-uppercase whitetext font-weight-bold"><span>O NAS</span></a>
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
                                <li><a class="dropdown-item" href="../messenger">Wiadomości</a></li>
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

<div class="daewoo page">
  <div class="slogan d-blur">
    <img class="daewoo-logo" src="../res/daewoo.png"></img>
    <span class="slogan-text">Wybór z przyszłością</span>
  </div>
</div>


<div class="nexia page">
  <div class="d-blur offer">
    <div class="container car-offer">
      <img class="nexia-car-offer" src="../res/nexia-base.png"></img>
      <div class="container desc">
      <img class="nexia-logo" src="../res/nexia-logo.png"></img>
        <p>
          Dynamiczna, oszczędna, nowoczesna. Dostępna w 2 wersjach nadwozia i w 5 kolorach.
        </p>
        <div class="color-chooser">
          <div class="choose choose-n c-77l">
          </div>
          <div class="choose choose-n c-41l">
          </div>
          <div class="choose choose-n c-91l">
          </div>
          <div class="choose choose-n c-21u">
          </div>
          <div class="choose choose-n c-64l">
          </div>
        </div>
        <p>
          Dynamiczny sedan czy uniwersalny hatchback? Ty wybierasz.
        </p>
        <center>
        <div class="container align-self-center">
        <p class="lead">Daj szansę Nexii. Spróbuj już dziś.</p>
        <a href="nexia"class="btn btn-primary btn-lg">Sprawdź ofertę</a>
      </center>
      </div>
      </div>
    </div>
  </div>
</div>
<div class="aveo page">
  <div class="d-blur offer">
    <div class="container car-offer">
      <img class="aveo-car-offer" src="../res/aveo-sedan.png"></img>
      <div class="container desc">
      <img class="aveo-logo" src="../res/aveo-logo.png"></img>
        <p>
          Dwa oblicza Aveo. Mały samochód miejski lub wygodny sedan.
        </p>
        <div class="color-chooser">
          <div class="choose choose-a c-77l">
          </div>
          <div class="choose choose-a c-41l">
          </div>
          <div class="choose choose-a c-91l">
          </div>
          <div class="choose choose-a c-64l">
          </div>
        </div>
        <p>
          Nowoczesny wygląd, przestronne wnętrze i oszczędna jednostka napędowa nie zanudzą cię w Aveo.
        </p>
        <center>
        <div class="container align-self-center">
        <a href="aveo"class="btn btn-primary btn-lg">Sprawdź ofertę</a>
      </center>
      </div>
      </div>
    </div>
  </div>
</div>


<div class="polonez-b page">
  <div class="slogan d-blur">
    <img class="daewoo-logo" src="../res/fso-logo.png"></img>
    <span class="slogan-text">Nowy Polonez <span class="fso-slogan">Atu Plus</span></span>
  </div>
</div>


<div class="polonez page">
  <div class="d-blur offer">
    <div class="container car-offer">
      <img class="polonez-car-offer" src="../res/polonez-atu.png"></img>
      <div class="container desc">
      <img class="polonez-logo" src="../res/polonez-logo.png"></img>
        <p>
          Klasyczny pojazd w nowoczesnym wydaniu. Przedstawiamy Poloneza Atu Plus.
        </p>
        <div class="color-chooser">
          <div class="choose choose-p c-77l">
          </div>
          <div class="choose choose-p c-41l">
          </div>
          <div class="choose choose-p c-91l">
          </div>
          <div class="choose choose-p c-64l">
          </div>
        </div>
        <p>
          Klasyczne Caro, współczesny Atu i rodzinne Kombi. Oto trzy, całkiem nowe wersje Poloneza.
        </p>
        <center>
        <div class="container align-self-center">
          <p class="lead">Polonez Atu Plus. Witaj w XXI wieku.</p>
        <a href="polonez"class="btn btn-primary btn-lg">Sprawdź ofertę</a>
      </center>
      </div>
      </div>
    </div>
  </div>
</div>



  </div>


</body>
</html>
