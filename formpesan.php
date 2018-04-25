<?php 
	require 'db.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['Register'])){
			require 'beli.php';
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="icon" href="img/bpptik_kotaklogo.jpg">
	<title>BPPTIK Mart</title>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle
		collapsed" data-toggle="collapse" data-target="#navbar">
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>			
		</button>

			<a class="navbar-brand" href="index.php">BPPTIK Mart</a>	
		</div>
		<div id="navbar" class ="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="logout.php">Log Out</a></li>
			</ul>
			
		</div>
	</div>	
</nav>
	<br>
	<br>
	<br>
	<h1 class="center-block" align="center">Formulir Pembelanjaan</h1>
	<div id="form">
		<form action="formpesan.php" method="post" class="form-horizontal">
			<div class="form-group">
			</div>
			<div class="form-group">
				<label class="col-lg-4 control-label">
					Nama<span class="req">*</span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="text" required autocomplete="off"
					name="nama">
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-4 control-label">
					Jumlah Barang<span class="req">*</span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="text" required autocomplete="off"
					name="jumlah_barang">
				</div>
			</div>
			</div>
			<button type="submit" class="button button-block center-block" name="Register">
				Beli
			</button>
		</form>
	</div>
</body>
</html>