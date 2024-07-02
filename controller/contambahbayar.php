<?php
include "core/kon.php";
include "core/session.php";
include 'core/date.php';

$id_order = $_POST['idorder'];
$namabankpengirim = ucwords($_POST['namabankpengirim']);
$jumlahtransfer = $_POST['jumlahtransfer'];
$tgltransfer = $_POST['tgltransfer'];
$namabanktujuan = $_POST['namabanktujuan'];

$name = $_FILES['file']['name'];
$target_dir = "images/bukti/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$name = $idanggota."_".$date."_".$name;

  // Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
if( in_array($imageFileType,$extensions_arr) ){

     // Insert record
	$tambah=mysql_query("INSERT INTO konfimasibayar(
		idorder, namabankpengirim, jumlahtransfer, tgltransfer, namabanktujuan, bukti
		) 
		VALUES(
		'$id_order','$namabankpengirim','$jumlahtransfer','$tgltransfer', '$namabanktujuan', '$name'
		)
		");

	$update - mysql_query(
		"
		UPDATE umkm.order set
		idstatusorder = '2'
		WHERE idorder = '$id_order'
		"
	);

	if($tambah){
		// Upload file
		move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
		header("Location:index.php?p=riwayatpemesanan&ket=success");
	}
	else{
		// header("Location:index.php?p=riwayatpemesanan&ket=failed");	
		echo mysql_error();
	}

}

?>
