<?php
include 'core/kon.php';
include 'core/date.php';
include 'core/session.php';

$idkota = $_POST['idkota'];
$alamatkirim = $_POST['alamat'];
$total = $_POST['total'];

$q = mysql_query("SELECT tarif FROM kota where idkota = '$idkota'");
$h = mysql_fetch_array($q);
$tarif = $h['tarif'];
$total = $total + $tarif;

//Insert Ke order	
$insert = mysql_query(
	"
	INSERT INTO umkm.order(idorder, idanggota, alamatkirim, total, tglorder, idstatusorder)
	VALUES
	(
	'$idorder',$idanggota,'$alamatkirim','$total','$date', 1
	)
	"
);

// Insert ke order detail
$qod = mysql_query("SELECT cart.*, produk.hargaproduk
	FROM cart 
	LEFT JOIN produk ON cart.idproduk = produk.idproduk
	where idanggota = '$idanggota'");
while ($has = mysql_fetch_array($qod)) {
	$sbtot = $has['jumlahbeli'] * $has['hargaproduk'];
	$insertqod = mysql_query(
		"
		INSERT INTO umkm.orderdetail(idorder, idproduk, idkota, jumlah, subtotal)
		VALUES
		(
		'$idorder', '$has[idproduk]', '$idkota', '$has[jumlahbeli]', '$sbtot'
		)
		"
	);
}

$delete = mysql_query("DELETE FROM cart where idanggota = '$idanggota'");

if($insert && $idanggota){
	header("Location:index.php?p=infotransfer&ket=success");
}
else{
	header("Location:index.php?p=infotransfer&ket=failed");
	echo mysql_error();
}

?>