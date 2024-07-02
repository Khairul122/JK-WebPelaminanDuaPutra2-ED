<?php
include_once 'core/kon.php';

$idproduk = $_POST['id'];
$stok = $_POST['stok'];
$tambahstok = $_POST['tambahstok'];
$tambahstok = $stok + $tambahstok;

echo $tambahstok;

// Insert record
$ubah = mysql_query(
	"
	UPDATE produk SET
	stok = '$tambahstok'
	WHERE
	idproduk = '$idproduk'
	"
);

if($ubah){
	header("Location:index.php?p=produk&ket=success");
}
else{
	header("Location:index.php?p=produk&ket=failed");	
		// echo mysql_errno();
}

?>