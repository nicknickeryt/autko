<?php
echo "heja";
session_start();

echo "\n" . $_SESSION["loggedin"];
echo "\n" . $_SESSION["username"];
echo "\n" . $_SESSION["email"];


?>
