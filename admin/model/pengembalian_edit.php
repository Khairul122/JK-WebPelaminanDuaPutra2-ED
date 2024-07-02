<?php
include 'core/kon.php';
$id = $_GET['id'];
?>
<div class="page-title">
    <div>
        <h1><i class="fa fa-folder"></i> Pengembalian </h1>
        <h4>Di menu ini anda dapat melakukan pengembalian data</h4>
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
        <li>
            <a href="index.php?p=pengembalian">Data</a>
            <span class="divider"><i class="fa fa-angle-right"></i></span>
        </li>
        <li class="active">Pengembalian</li>
    </ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<?php
$q = mysql_query("
    SELECT umkm.order.*, statusorder.namastatus, anggota.namalengkap
    FROM umkm.order
    LEFT JOIN statusorder ON umkm.order.idstatusorder = statusorder.idstatusorder
    LEFT JOIN anggota ON umkm.order.idanggota = anggota.idanggota
    WHERE umkm.order.idorder = '$id'
");
$r = mysql_fetch_array($q);
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-green">
            <div class="box-title">
                <h3><i class="fa fa-edit"></i> Edit Data Pengembalian</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form method="POST" action="index.php?p=conpengembalian" class="form-horizontal form-row-separated">
                    <div class="form-group">
                        <label for="idorder" class="col-sm-3 col-lg-2 control-label">ID Order</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="idorder" placeholder="" class="form-control" required autofocus value="<?php echo $r['idorder']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namalengkap" class="col-sm-3 col-lg-2 control-label">Nama Pemesan</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="namalengkap" placeholder="" class="form-control" required value="<?php echo $r['namalengkap']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggalPengembalian" class="col-sm-3 col-lg-2 control-label">Tanggal Pengembalian</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="date" name="tanggalPengembalian" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="statusPengembalian" class="col-sm-3 col-lg-2 control-label">Status Pengembalian</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <select name="statusPengembalian" class="form-control" required>
                                <option value="Berhasil Dijemput">Berhasil Dijemput</option>
                                <option value="Gagal Dijemput">Gagal Dijemput</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
