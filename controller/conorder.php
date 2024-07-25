<?php
include 'core/kon.php';
include 'core/date.php';
include 'core/session.php';

$idkota = $_POST['idkota'];
$alamatkirim = $_POST['alamat'];
$total = $_POST['total'];
$jenis = $_POST['jenis'];
$tgl_awal_sewa = isset($_POST['tgl_awal_sewa']) ? $_POST['tgl_awal_sewa'] : '0000-00-00';
$tgl_akhir_sewa = isset($_POST['tgl_akhir_sewa']) ? $_POST['tgl_akhir_sewa'] : '0000-00-00';

// Menggabungkan tanggal awal dan akhir sewa
if ($jenis == 'penyewaan') {
    $range_sewa = $tgl_awal_sewa . ' s/d ' . $tgl_akhir_sewa;
} else {
    $range_sewa = '0000-00-00 s/d 0000-00-00';
}

$q = mysql_query("SELECT tarif FROM kota WHERE idkota = '$idkota'");
$h = mysql_fetch_array($q);
$tarif = $h['tarif'];
$total = $total + $tarif;

// Insert ke tabel order
$insert = mysql_query(
    "
    INSERT INTO umkm.order(idorder, idanggota, alamatkirim, total, tglorder, idstatusorder, jenis, range_sewa)
    VALUES
    (
    '$idorder', '$idanggota', '$alamatkirim', '$total', '$date', 1, '$jenis', '$range_sewa'
    )
    "
);

// Insert ke tabel order detail
$qod = mysql_query("SELECT cart.*, produk.hargaproduk FROM cart LEFT JOIN produk ON cart.idproduk = produk.idproduk WHERE cart.idanggota = '$idanggota'");
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

// Menghapus data dari keranjang
$delete = mysql_query("DELETE FROM cart WHERE idanggota = '$idanggota'");

if ($insert && $idanggota) {
    header("Location:index.php?p=infotransfer&ket=success");
} else {
    header("Location:index.php?p=infotransfer&ket=failed");
    echo mysql_error();
}
?>
