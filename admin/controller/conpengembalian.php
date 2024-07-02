<?php
include_once 'core/kon.php';

// Get form data
$id_order = $_POST['idorder'];
$tanggalPengembalian = $_POST['tanggalPengembalian'];
$statusPengembalian = $_POST['statusPengembalian'];

// Update the order table
$ubah = mysql_query(
    "
    UPDATE umkm.order SET
    tglPengembalian = '$tanggalPengembalian',
    status_pengembalian = '$statusPengembalian'
    WHERE
    idorder = '$id_order'
    "
);

if ($ubah) {
    header("Location: index.php?p=pengembalian&ket=success");
} else {
    header("Location: index.php?p=pengembalian&ket=failed");
    // Uncomment the line below to see the MySQL error message
    // echo mysql_error();
}
?>
