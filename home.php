<?php
include "core/kon.php";
?>
<div class="fullwidthbanner">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="">
                <!-- MAIN IMAGE -->
                <img src="img/1718817780_d.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <div class="caption slider-title sflt" data-x="50" data-y="160" data-speed="1000" data-start="1000" data-easing="easeOutExpo">

                    <div class="caption sfb slider-price tp-resizeme" data-x="50" data-y="258" data-speed="500" data-start="1800" data-easing="Sine.easeOut">

                    </div>
                </div>
            </li>
            <!-- SLIDE -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="">
                <!-- MAIN IMAGE -->
                <img src="img/1718817780_d.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                
            </li>
            <!-- SLIDE -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="">
                <!-- MAIN IMAGE -->
                <img src="img/estate/img-6.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <div class="caption slider-title sft" data-x="50" data-y="160" data-speed="1000" data-start="1000" data-easing="easeOutExpo">
                    RAPI
                </div>
                <div class="caption slider-text sfl" data-x="50" data-y="214" data-speed="1000" data-start="1800" data-easing="easeOutExpo">
                    BISNIS
                </div>
                <div class="caption sfb slider-price tp-resizeme" data-x="50" data-y="258" data-speed="500" data-start="1800" data-easing="Sine.easeOut">
                    BISNIS
                </div>
            </li>
        </ul>
    </div>
</div><!--full width banner-->
<!--revolution end-->
<div class="divide70"></div>
<div class="container">
    <h3 class="title-section clearfix">Produk <a href="#" class="link-arrow">Lihat Semua </a></h3>
    <div class="row">
        <?php
        $q = mysql_query("SELECT * FROM produk order by idproduk desc limit 0,4");
        $path = "admin/images/produk/";
        while ($r = mysql_fetch_array($q)) {
            $image = $path . $r['foto'];
        ?>
            <div class="col-sm-6 col-md-3 margin30">
                <div class="property clearfix">
                    <div class="image">
                        <div class="content">
                            <a href="#"><i class="fa fa-search-plus"></i></a>
                            <img src="<?php echo $image; ?>" class="img-responsive" alt="propety">
                            <span class="label-property">Stok : <?php echo $r['stok']; ?></span>
                            <span class="label-price">Rp.<?php echo number_format($r['hargaproduk']); ?></span>
                        </div><!--content-->
                    </div><!--image-->
                    <div class="property-detail">
                        <h5 class="title"><a href="#"><?php echo $r['namaproduk']; ?></a></h5>
                        <span class="location"><?php echo $r['detailproduk']; ?></span>
                    </div><!--property details-->
                </div><!--property-->
            </div><!--property columns-->
        <?php } ?>
    </div>
    <div class="row">
        <?php
        $q = mysql_query("SELECT * FROM produk order by idproduk desc limit 4,4");
        $path = "admin/images/produk/";
        while ($r = mysql_fetch_array($q)) {
            $image = $path . $r['foto'];
        ?>
            <div class="col-sm-6 col-md-3 margin30">
                <div class="property clearfix">
                    <div class="image">
                        <div class="content">
                            <a href="#"><i class="fa fa-search-plus"></i></a>
                            <img src="<?php echo $image; ?>" class="img-responsive" alt="propety">
                            <span class="label-property">Stok : <?php echo $r['stok']; ?></span>
                            <span class="label-price">Rp.<?php echo number_format($r['hargaproduk']); ?></span>
                        </div><!--content-->
                    </div><!--image-->
                    <div class="property-detail">
                        <h5 class="title"><a href="#"><?php echo $r['namaproduk']; ?></a></h5>
                        <span class="location"><?php echo $r['detailproduk']; ?></span>
                    </div><!--property details-->
                </div><!--property-->
            </div><!--property columns-->
        <?php } ?>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <a href="#" class="btn btn-lg btn-red">View More Properties</a>
        </div>
    </div>
    <div class="divide60"></div>
    <div class="row">
        <div class="col-sm-12">
            <h3 class="title-section">Produk Terbaru</h3>
        </div>
    </div>
    <div class="row">
        <div class="all-property-slider">

            <div id="property-slider">
                <?php
                $q = mysql_query("SELECT * FROM produk order by idproduk desc limit 0,20");
                $path = "admin/images/produk/";
                while ($r = mysql_fetch_array($q)) {
                    $image = $path . $r['foto'];
                ?>
                    <div class="item">
                        <div class="property clearfix">
                            <div class="image">
                                <div class="content">
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <img src="<?php echo $image; ?>" class="img-responsive" alt="propety">
                                    <span class="label-property">Stok : <?php echo $r['stok']; ?></span>
                                    <span class="label-price">Rp.<?php echo number_format($r['hargaproduk']); ?></span>
                                </div><!--content-->
                            </div><!--image-->
                            <div class="property-detail">
                                <h5 class="title"><a href="#"><?php echo $r['namaproduk']; ?></a></h5>
                                <span class="location"><?php echo $r['detailproduk']; ?></span>
                            </div><!--property details-->
                        </div><!--property-->
                    </div>
                <?php
                }
                ?>
            </div><!--owl slider-->
        </div><!--all property slider-->
    </div><!--col-md-12-->
</div><!--property container-->
<div class="divide40"></div>
<div class="divide70"></div>
<div class="divide40"></div>