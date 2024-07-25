<?php
include "core/kon.php";
?>
<div class="page-title">
    <div>
        <h1><i class="fa fa-folder"></i> Pengembalian </h1>
        <h4>Di menu ini anda dapat melakukan input, edit, hapus data</h4>
    </div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.php">Home</a>
            <span class="divider"><i class="fa fa-angle-right"></i></span>
        </li>
        <li class="active">Daftar Pengembalian</li>
    </ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <?php include "core/alert.php"; ?>
                        <div class="box-title">
                            <h3><i class="fa fa-table"></i> Pengembalian</h3>
                            <div class="box-tool">
                                <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="clearfix"></div>
                            <div class="table-responsive" style="border:0">
                                <table class="table table-advance" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Order</th>
                                            <th>Nama Pemesan</th>
                                            <th>Alamat</th>
                                            <th>Total</th>
                                            <th>Tanggal Pesan</th>
                                            <th>Tanggal Jemput</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $q = mysql_query("
                                                SELECT umkm.order.*, statusorder.namastatus, anggota.namalengkap
                                                FROM umkm.order
                                                LEFT JOIN statusorder ON umkm.order.idstatusorder = statusorder.idstatusorder
                                                LEFT JOIN anggota ON umkm.order.idanggota = anggota.idanggota
                                                WHERE statusorder.namastatus = 'Berhasil' AND umkm.order.jenis = 'penyewaan'
                                            ");
                                        while ($r = mysql_fetch_array($q)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $r['idorder']; ?></td>
                                                <td><?php echo $r['namalengkap']; ?></td>
                                                <td><?php echo $r['alamatkirim']; ?></td>
                                                <td>Rp.<?php echo number_format($r['total']); ?></td>
                                                <td><?php echo $r['tglorder']; ?></td>
                                                <td><?php echo $r['tglPengembalian']; ?></td>
                                                <td><?php echo empty($r['status_pengembalian']) ? "Belum Dijemput" : $r['status_pengembalian']; ?></td>
                                                <?php
                                                if ($r['idstatusorder'] == "4") { ?>
                                                    <td>
                                                        <a href="index.php?p=editpengembalian&amp;id=<?php echo $r['idorder']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Pengembalian</button></a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td></td>
                                                <?php }
                                                ?>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
