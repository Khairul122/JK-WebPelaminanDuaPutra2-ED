<?php
include '../../core/kon.php';
include '../../core/date.php';
$pimpinan = $_POST['pimpinan'];
$tglawal = $_POST['tglawal'];
$tglakhir = $_POST['tglakhir'];

$yearawal = substr($tglawal, 6);
$yearakhir = substr($tglakhir, 6);

$monthawal = substr($tglawal, 3, 2);
$monthakhir = substr($tglakhir, 3, 2);

$dayawal = substr($tglawal, 0, 2);
$dayakhir = substr($tglakhir, 0, 2);

$dateawal = $yearawal . "-" . $monthawal . "-" . $dayawal;
$dateakhir = $yearakhir . "-" . $monthakhir . "-" . $dayakhir;

$dateawalreal = $monthawal . " - " . $dayawal . " - " . $yearawal;
$dateakhireal = $monthakhir . " - " . $dayakhir . " - " . $yearakhir;

$tanggalawal = $yearawal . "-" . $dayawal . "-" . $monthawal;
$tanggalakhir = $yearakhir . "-" . $dayakhir . "-" . $monthakhir;

?>
<!DOCTYPE html>
<html>
<style type="text/css">
  table {
    border-collapse: collapse;
  }

  table,
  th,
  td {
    border: 1px solid black;
  }

  hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
  }

  table.second,
  th.second,
  td.second {
    border: 0px solid black;
  }
</style>

<head>
  <title>Laporan </title>
</head>

<body onload="window.print()">
  <br>
  <font>
    <p align="center">
      <br>
      <font size="6px"> PENJUALAN BAJU ADAT DAN TENDA PELAMINAN PADA TOKO PELAMINAN DUA SAUDARA </font><br>Laporan Penyewaan Harian
    </p>
  </font>
  <hr noshade="1">
  <br>
  <h3 align="center"> Laporan Penyewaan Harian</h3><br>
  <h5>
    Tanggal : <?php echo $dateawalreal; ?>&nbsp;&nbsp;s/d&nbsp;&nbsp;<?php echo $dateakhireal; ?>
  </h5>
  <table align="center" width="100%">
    <tr align=center class="table-active" bgcolor="yellow">
      <th width="10%">No</th>
      <th width="20%">Nama Penyewa</th>
      <th width="25%">Tanggal Sewa</th>
      <th width="20%">Tanggal Pengembalian</th>
    </tr>
    <?php
    $no = 1;
    $q = mysql_query(
      "
    SELECT 
      anggota.namalengkap AS namapenyewa,
      `order`.tglorder AS tglsewa,
      `order`.tglPengembalian AS tglpengembalian
    FROM 
      `order`
    LEFT JOIN 
      anggota ON `order`.idanggota = anggota.idanggota
    WHERE 
      `order`.tglorder BETWEEN '$tanggalawal' AND '$tanggalakhir'
    GROUP BY `order`.idorder
    "
    );
    while ($r = mysql_fetch_array($q)) {
    ?>
      <tr align="center">
        <td width="10%"><?php echo $no; ?></td>
        <td width="20%"><?php echo $r['namapenyewa']; ?></td>
        <td width="25%"><?php echo $r['tglsewa']; ?></td>
        <td width="20%"><?php echo $r['tglpengembalian']; ?></td>
      </tr>
    <?php
      $no++;
    }
    ?>
  </table>
  <br>
  <p>
    Ket : <br>
    Jumlah History : <b><?php echo $no - 1; ?></b> Order
  </p>
  <div align="right">
    <table class="second">
      <tr class="second">
        <td align="center" class="second">Padang, <?php echo $dateformat; ?><br><br><br><br><br>
          <?php echo $pimpinan; ?></td>
      </tr>
    </table>
  </div>
</body>
</html>
