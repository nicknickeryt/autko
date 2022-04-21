<!doctype html>
<html lang="en">
  <head>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
          <img src="../res/whiteweb.png" alt="" height="64">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">
                    <a href="../oferta" data-toggle="collapse" class="nav-item nav-link text-uppercase font-weight-bold"><span>OFERTA</span></a>
                    <a href="../ogloszenia" data-toggle="collapse" class="nav-item nav-link text-uppercase font-weight-bold"><span>OGŁOSZENIA</span></a>
                    <a href="#" data-toggle="collapse" class="nav-item nav-link text-uppercase font-weight-bold"><span>O NAS</span></a>
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
                                <li><a class="dropdown-item" href="profile">Profil</a></li>
                                <li><a class="dropdown-item" href="login/logout.php">Wyloguj</a></li>
                              </ul>
                      </div>';
                    }
                    else {
                      echo '<a href="login" data-toggle="collapse" class="nav-item nav-link text-uppercase font-weight-bold"><span>KONTO</span></a>';
                    }
                  ?>
                </div>
            </div>
    </nav>

<div class="text-center">
  <div class="text">
    <h1 class="header">O nas
    </h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>
</div>
</body>
</html>
