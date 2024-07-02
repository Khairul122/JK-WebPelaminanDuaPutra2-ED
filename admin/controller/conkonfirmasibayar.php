<?php
include_once 'core/kon.php';

$id_order = $_POST['id'];
$status = $_POST['status'];

$ubah = mysql_query(
	"
	UPDATE umkm.order SET
	idstatusorder = '$status'
	WHERE
	idorder = '$id_order'
	"
);

if($ubah){

	if ($status == '3') {
		$q = mysql_query("SELECT idproduk, jumlah FROM orderdetail WHERE idorder ='$id_order'");
		while ($r = mysql_fetch_array($q)) {
			$qs = mysql_query("SELECT stok FROM produk WHERE idproduk = '$r[idproduk]'");
			$s = mysql_fetch_array($qs);
			$stok = $s['stok'] - $r['jumlah'];
			$up = mysql_query(
				"
				UPDATE produk set
				stok = '$stok'
				WHERE
				idproduk = '$r[idproduk]';
				"
			);
		}
	}
	if ($status == '1') {
		$q = mysql_query(
			"
			DELETE FROM konfimasibayar WHERE idorder = '$id_order'
			"
		);
	}

	header("Location:index.php?p=orderkonfirmasi&ket=success");
}
else{
	header("Location:index.php?p=orderkonfirmasi&ket=failed");	
		// echo mysql_errno();
}

?>
