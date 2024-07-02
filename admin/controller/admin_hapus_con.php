<?php
include_once 'core/kon.php';

$idadmin = $_GET['id'];

// Insert
$hapus = mysql_query(
	"
	DELETE FROM admin where idadmin = '$idadmin';
	"
	);

if($hapus){
	header("Location:index.php?p=admin&ket=success");
}
else{
	header("Location:index.php?p=admin&ket=failed");
	// echo mysql_errno();	
}
?>