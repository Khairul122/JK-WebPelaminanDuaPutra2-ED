<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$pass = "";
$db   = "umkm";

$con = mysql_connect($host,$user,$pass);
$sel = mysql_select_db($db);

// if ($con && $sel) {
// 	echo "sukses";
// }
// else{
// 	echo "failed";
// }

?>