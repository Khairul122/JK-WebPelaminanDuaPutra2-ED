<?php
include_once 'core/kon.php';
include_once 'core/date.php';

$namalengkap = ucwords($_POST['namalengkap']);
$jk = $_POST['jk'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$q = mysql_query(
	"
	INSERT INTO anggota(namalengkap, jk, nohp, alamat, username, password, tgldaftar)
	VALUES
	(
	'$namalengkap', '$jk', '$nohp', '$alamat', '$username', '$password', '$date'
	)
	"
);

if($q){
	header("Location:index.php?p=daftarmember&ket=success");
}
else{
	header("Location:index.php?p=daftarmember&ket=failed");
	// echo mysql_errno();	
}
?>