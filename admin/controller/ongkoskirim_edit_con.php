<?php
include_once 'core/kon.php';

$idkota = $_POST['idkota'];
$namakota = ucwords($_POST['namakota']);
$tarif = $_POST['tarif'];

// Insert record
$ubah = mysql_query(
	"
	UPDATE kota SET
	namakota = '$namakota',
	tarif = '$tarif'
	WHERE
	idkota = '$idkota'
	"
);

if($ubah){
	header("Location:index.php?p=ongkoskirim&ket=success");
}
else{
	header("Location:index.php?p=ongkoskirim&ket=failed");	
		// echo mysql_errno();
}

?>