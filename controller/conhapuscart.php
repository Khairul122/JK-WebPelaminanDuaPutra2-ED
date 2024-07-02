<?php
include 'core/kon.php';

$idcart = $_GET['id'];

$hapus = mysql_query(
	"
	DELETE FROM cart where idcart = '$idcart';
	"
	);

if($hapus){
	header("Location:index.php?p=keranjangbelanja&ket=success");
}
else{
	header("Location:index.php?p=keranjangbelanja&ket=failed");
	// echo mysql_errno();	
}
?>