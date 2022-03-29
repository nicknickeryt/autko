<?php
echo "heja";
session_start();
unset($_SESSION["loggedin"]);
unset($_SESSION["username"]);
unset($_SESSION["email"]);
unset($_SESSION["id"]);
session_destroy();
header('Location: ../index.php');

?>
