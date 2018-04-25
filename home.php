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
				<li><a href="formpesan.php">Buy Book</a></li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>
			
		</div>
	</div>	
</nav>