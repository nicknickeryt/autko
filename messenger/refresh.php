<?php

$config = parse_ini_file('../conf/db.ini');

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


$sql2 = "SELECT * FROM messenger WHERE senderid=" . $_GET["senderid"] . " AND receiverid=" . $_GET["receiverid"] . " ORDER BY `ID` DESC LIMIT 1";
$result2 = $conn->query($sql2);
while ($row2 = mysqli_fetch_array($result2)) {
  echo $row2["ID"];
}
?>
