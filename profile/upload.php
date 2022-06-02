<?php
session_start();
$config = parse_ini_file('../conf/db.ini');

$user = $config['dbuser'];
$pass = $config['dbpassword'];
$host = $config['dbhost'];
$dbdb = $config['dbdatabase'];

$conn = new mysqli($host, $user, $pass, $dbdb);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
    if (isset($_FILES['files'])) {
        $errors = [];
        $path = '../res/profpic/';
	       $extensions = ['png'];

        $all_files = count($_FILES['files']['tmp_name']);

        for ($i = 0; $i < $all_files; $i++) {
		$file_name = $_FILES['files']['name'][$i];
		$file_tmp = $_FILES['files']['tmp_name'][$i];
		$file_type = $_FILES['files']['type'][$i];
		$file_size = $_FILES['files']['size'][$i];
		$tmp = explode('.', $_FILES['files']['name'][$i]);
		$file_ext = strtolower(end($tmp));

		$file = $path . $_SESSION["id"] . "."  . $file_ext;

		if (!in_array($file_ext, $extensions)) {
			$errors[] = 'Niedozwolone rozszerzenie ' . $file_name . ' ' . $file_type;
      http_response_code(415);
		}

		if ($file_size > 2097152) {
			$errors[] = 'Plik jest zbyt duży' . $file_name . ' ' . $file_type;
      http_response_code(413);
		}

		if (empty($errors)) {
			move_uploaded_file($file_tmp, $file);
      header("Cache-Control: no-cache, must-revalidate");
      header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
      echo "success";

		}
	}

	if ($errors) print_r($errors);
    echo $errors;
    }


else if (isset($_GET["desc"])){

$sql = "UPDATE profiles SET opis = '" . $_GET['desc'] . "' WHERE ID = " . $_SESSION['id'] . "";
if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
$conn->query($sql);
}


else if (isset($_GET["message"]) && isset($_GET["senderid"]) && isset($_GET["receiverid"])) {
$sql = "INSERT INTO messenger (senderid, receiverid, content, date) VALUES (" . $_GET['senderid'] . "," . $_GET['receiverid'] . ",'" . $_GET['message'] . "'," . time() . ")";
echo $sql;
$conn->query($sql);

}
