<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bpptikmart';
$mysqli = new mysqli ($host,$user,$pass,$db) or die($mysqli->eror);


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

<!--navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container"><!--buat paging biar seimbang-->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle
		collapsed" data-toggle="collapse" data-target="#navbar">
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>			
		</button>

			<a class="navbar-brand" href="index.php">BPPTIK Mart</a><!--navbar brand untuk membuat tulisan leibh besar-->	
		</div>
		<div id="navbar" class ="navbar-collapse collapse"><!--untuk menyesuaikn-->
			<ul class="nav navbar-nav"><!--buat tulisan di bawah berjejer-->
				<li><a href="#home">Home</a></li><!--tugas dari tag a adalah membuat sebuah tulisan yang bisa menjadi link-->
				<li><a href="#about">Product</a></li><!--ul adalah under list, li list yang di dalam underlist-->
				<li><a href="contact.php">Contact</a></li>
				<li><a href="masuk.php">Log In</a></li>
			</ul>
			
		</div>
	</div>	
</nav>

<!--Home-->
<div id="home">
	<img src="img/bpptik.png" class="img-responsive">
</div>

<!--product-->
<div id="about">
	<div class="container marketing">
		<div class ="row">

			<div class="col-lg-4">
				<img class ="img-circle" src="img/chitato_sapipanggang.jpg"
				width="140" height="140">
				<h2>Chitato Sapi Panggang</h2>
				<p>Makanan ringan berupa keripik kentang rasa sapi panggang yang renyah.</p>
				<p><a class="btn btn-default" href="masuk.php">Pesan Sekarang &raquo;</a></p>
			</div>

			<div class ="col-lg-4">
				<img class ="img-circle" src="img/chitato_kejusupreme.jpg"
				width="140" height="140">
				<h2>Chitato Spicy Bulgogi</h2>
				<p>Makanan ringan berupa keripik kentang rasa keju supreme yang renyah.</p>
				<p><a class="btn btn-default" href="masuk.php">Pesan Sekarang &raquo;</a></p>
			</div>

			<div class ="col-lg-4">
				<img class ="img-circle" src="img/chitato_spicybulgogi.jpg"
				width="140" height="140">
				<h2>Chitato Spicy Bulgogi</h2>
				<p>Makanan ringan berupa keripik kentang rasa spicy bulgogi yang renyah.</p>
				<p><a class="btn btn-default" href="masuk.php">Pesan Sekarang &raquo;</a></p>
			</div>
		</div>
	</div>
</div>

<!--footer-->
<footer>
	<small><i> Copyright &copy; 2018 Raden Muhammad Imam </i></small>
</footer>

<script type="text/javascript">
	$(document).ready(function(){
		$("a").on('click',function(event){
			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;
				$('html, body').animate({
					scrollTop:$(hash).offset().top
				}, 800, function(){
					window.location.hash = hash;
				});
			}
		});
	});
</script>

</body>
</html>