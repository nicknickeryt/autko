<?php
    error_reporting(E_WARNING);
    error_reporting(E_ALL);

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

$sql = "SELECT * FROM credentials";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

}
} else {
echo "0 results";
}
$conn->close();
?>
