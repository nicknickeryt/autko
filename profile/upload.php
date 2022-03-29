<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
      header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
      header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
      echo "success";

		}
	}

	if ($errors) print_r($errors);
    echo $errors;
    }
}
