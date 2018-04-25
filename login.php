<?php 
	include "db.php";
	$email = $mysqli->escape_string($_POST['email']);
	$result = $mysqli->query("SELECT * FROM registrasi WHERE email='$email'")
	or die ($mysqli->error());

	if ($result->num_rows == 0){
		echo "<script>alert('Akun Belum Ada')</script>";
	}
	else{
		$user = $result->fetch_assoc();
		$username = $user['email'];
		$password = $user['password'];
		if($username==$_POST['email'] && $password==$_POST['password']){
			$_SESSION['nama'] = $user['nama'];
			$_SESSION['logged_in'] = true;
			echo "<script>alert('Login Berhasil')
			window.location = 'formpesan.php';
			</script>";
			//header("location : profile.php");
		}
		else{
			echo "<script>alert('Password Salah !')</script>";
		}
	}
 ?> 