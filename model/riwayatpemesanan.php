<?php
include "core/kon.php";
include "core/session.php";
include 'core/alert.php';
?>
<br>
<br>
<div class="container">
  <div class="row margin40">
    <div class="col-sm-10 col-sm-offset-1 text-center">
      <div class="col-sm-6 text-center">
        <h2>Riwayat Transaksi</h2>
      </div>
      <div class="col-sm-6 text-center">
        <a href="index.php?p=infotransfer" class="btn btn-lg btn-red">Lihat Tujuan Transfer</a>
      </div>
      <table class="table table-striped table-bordered table-hover">
        <tr align=center class="table-active">
          <th>No</th>
          <th>Id Order</th>
          <th>Alamat Kirim</th>
          <th>Total</th>
          <th>Tanggal</th>
          <th>Status</th>
          <th colspan="3">Aksi</th>
        </tr>
        <?php
        $no = 1;
        $q = mysql_query(
          "
          SELECT umkm.order.*, statusorder.namastatus
          FROM umkm.order
          LEFT JOIN statusorder ON umkm.order.idstatusorder = statusorder.idstatusorder 
          where idanggota='$idanggota' ORDER BY umkm.order.idorder desc
          ");
        while ($r = mysql_fetch_array($q)) 
        {               
          ?>
          <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $r['idorder']; ?></td>
            <td><?php echo $r['alamatkirim']; ?></td>
            <td><?php echo number_format($r['total']); ?></td>
            <td><?php echo $r['tglorder']; ?></td>
            <td><?php echo $r['namastatus']; ?></td>
            <?php 
            if ($r['idstatusorder'] == "1") { ?>
            <td>
              <a href="index.php?p=konfirmasipembayaran&id=<?php echo $r['idorder']; ?>" class="btn btn-sm btn-red">Bayar</a>
            </td>
            <td>
              <a href="index.php?p=concancelrorder&id=<?php echo $r['idorder']; ?>" class="btn btn-sm btn-red" onClick="return confirm('Yakin anda akan membatalkannya ?')">Cancel</a>
            </td>
            <?php } 
            ?>
            <td>
              <a href="index.php?p=lihatdetailorder&id=<?php echo $r['idorder']; ?>" class="btn btn-sm btn-red">Lihat</a>
            </td>
          </tr>
          <?php
          $no++;
        }
        ?>
      </table>
      <br><br><br><br><br><br><br>
    </div>
  </div>
</div>
<!-- <div class="row">
        <div class="col-md-3 col-sm-6 margin30"> -->
