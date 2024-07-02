<?php
include "core/kon.php";
include 'core/session.php';
include 'core/alert.php';
?>
<!--revolution end-->
<div class="divide70"></div>
<div class="container">
    <h3 class="title-section clearfix">Daftar Produk</h3>
    <div class="row">
        <?php
        // $page = isset($_GET['page']) ? $_GET['page'] : 0;
        $q = mysql_query("SELECT * FROM produk order by idproduk desc ");
        // limit $page,10
        $path = "admin/images/produk/";
        while ($r = mysql_fetch_array($q)) 
        { 
            $image = $path.$r['foto'];
            ?>        
            <div class="col-sm-6 col-md-3 margin30">
                <div class="property clearfix">
                    <div class="image">
                        <div class="content">
                            <a href="#"><i class="fa fa-search-plus"></i></a>
                            <img src="<?php echo $image;?>" class="img-responsive" alt="propety" width=300>
                            <span class="label-property">Stok : <?php echo $r['stok'];?></span>
                            <span class="label-price">Rp.<?php echo number_format($r['hargaproduk']);?></span>
                        </div><!--content-->
                    </div><!--image-->
                    <div class="property-detail">
                        <h5 class="title"><a href="#"><?php echo $r['namaproduk'];?></a></h5>
                        <span class="location"><?php echo $r['detailproduk'];?></span>                
                    </div><!--property details-->
                    <?php
                    if ($r['stok'] > 0) { ?>
                    <div class="pull-right">
                        <form method="POST" action="index.php?p=contambahcart">
                            <input type="text" class="form-control col-md-3" placeholder="Masukkan Jumlah" name="jumlah"> 
                            <input type="hidden" value="<?php echo $r['idproduk']; ?>" name="idproduk">
                            <input type="hidden" value="<?php echo $idanggota; ?>" name="idanggota">
                            <button type="submit" class="btn btn-red btn-lg pull-left">Tambah Cart</button>
                        </form>
                    </div>
                    <?php } ?>
                </div><!--property-->
            </div><!--property columns-->
            <?php } ?>
        </div>
        <!-- <?php
        $no = 1;
        $qqq = mysql_query("SELECT idproduk from produk");
        $hhh = mysql_num_rows($qqq);
        $hhh = $hhh / 10;
        $hhh = round($hhh);
        ?>
        <div class="divide60"></div>
        <div class="row">
            <nav>
                <ul class="pagination pull-right">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <?php
                    while ($no <= $hhh) 
                    { 
                        $pa = ($no  * 10) - 10;
                        ?>
                        <li><a href="index.php?p=lihatproduk&page=<?php echo $pa;?>"><?php echo $no;?></a></li>
                        <?php
                        $no++;
                    }
                    ?>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> -->
    </div><!--property container-->
    <div class="divide40"></div>
    <div class="divide70"></div>
    <div class="divide40"></div>