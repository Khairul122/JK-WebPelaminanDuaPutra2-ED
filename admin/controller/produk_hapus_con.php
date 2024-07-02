<?php
include_once 'core/kon.php';

$idproduk = $_GET['id'];
$foto = $_GET['foto'];

// Insert
$hapus = mysql_query(
	"
	DELETE FROM produk where idproduk = '$idproduk';
	"
	);

if($hapus){
	unlink($foto);
	header("Location:index.php?p=produk&ket=success");
}
else{
	header("Location:index.php?p=produk&ket=failed");
	// echo mysql_errno();	
}
?>