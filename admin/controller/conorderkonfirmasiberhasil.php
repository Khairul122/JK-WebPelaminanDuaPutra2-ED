<?php
include_once 'core/kon.php';

$id_order = $_GET['id'];

$ubah = mysql_query(
	"
	UPDATE umkm.order SET
	idstatusorder = '4'
	WHERE
	idorder = '$id_order'
	"
);

if($ubah){
	header("Location:index.php?p=orderall&ket=success");
}
else{
	header("Location:index.php?p=orderall&ket=failed");	
		// echo mysql_errno();
}

?>