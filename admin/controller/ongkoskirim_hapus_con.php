<?php
include_once 'core/kon.php';

$idkota = $_GET['id'];

// Insert
$hapus = mysql_query(
	"
	DELETE FROM kota where idkota = '$idkota';
	"
	);

if($hapus){
	header("Location:index.php?p=ongkoskirim&ket=success");
}
else{
	header("Location:index.php?p=ongkoskirim&ket=failed");
	// echo mysql_errno();	
}
?>