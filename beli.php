<?php 
	$nama = $mysqli->escape_string($_POST['nama']);
	$jmlh_brg = $mysqli->escape_string($_POST['jmlh_brg']);

	$result = $mysqli->query("SELECT * FROM  datatravel")
	or die ($mysqli->error());

		$sql = "INSERT INTO user (nama, jmlh_org)"."VALUES('$nama', $jmlh_brg')";

		$mysqli->query($sql);

		echo "<script>alert('Pembelian Sukses')
		window.location = 'index.php';
		</script>";
?>
