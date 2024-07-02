<?php
include 'core/kon.php';
include 'core/date.php';

$idproduk = $_POST['idproduk'];
$idanggota = $_POST['idanggota'];
$jumlah = $_POST['jumlah'];

$q = mysql_query("SELECT stok from produk where idproduk='$idproduk'");
$h = mysql_fetch_array($q);

if ($jumlah > $h['stok'] || $jumlah == "") {
	header("Location:index.php?p=lihatproduk&ket=tidakcukup");	
} else{
	$qq = mysql_query(
		"
		INSERT INTO cart(idproduk, idanggota, jumlahbeli, tglcart)
		VALUES
		(
		'$idproduk', '$idanggota', '$jumlah', '$date'
		)
		"
	);

	if($qq){
		header("Location:index.php?p=lihatproduk&ket=success");
	}
	else{
		header("Location:index.php?p=lihatproduk&ket=failed");
	// echo mysql_errno();	
	}
}

?>