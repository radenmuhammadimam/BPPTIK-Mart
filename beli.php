<?php 
	require 'db.php';
	$nama = $mysqli->escape_string($_POST['nama']);
	$jmlh_brg = $mysqli->escape_string($_POST['jml_brg']);

	$result = $mysqli->query("SELECT * FROM  beli")
	or die ($mysqli->error());

		$sql = "INSERT INTO user (nama, jml_brg)"."VALUES('$nama', $jml_brg')";
		if(isset($_POST['beli']))
		{
			$nama=$_POST['nama'];
			$jml_brg=$_POST['jml_brg'];

			$hasil=mysql_query("INSERT INTO beli SET nama='nama', jml_brg='jml_brg'");
			if($hasil)
			{
				header("formpesan.php");
			}
		}
		$mysqli->query($sql);

		echo "<script>alert('Pembelian Sukses')
		window.location = 'index.php';
		</script>";
?>