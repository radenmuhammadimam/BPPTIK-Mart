<?php
	error_reporting(0);
	ini_set('display_errors', 0);
	include "db.php";  
	$email = $mysqli->escape_string($_POST['email']);
	$password = $mysqli->escape_string($_POST['password']);
	$nama = $mysqli->escape_string($_POST['nama']);

	$result = $mysqli->query("SELECT * FROM registrasi WHERE email='$email'")
	or die ($mysqli->error());

	if ($result->num_rows > 0){
		echo "<script>alert('Akun Sudah Ada')</script>";
	}
	else{
		$sql = "INSERT INTO registrasi (email, password, nama)"."VALUES('$email', '$password', '$nama')";

		$mysqli->query($sql);

		echo "<script>alert('Registrasi Sukses')
		window.location = 'masuk.php';
		</script>";
	}
?>