<?php
ob_start();
include "core/session.php"
?>
<nav class="navbar navbar-inverse navbar-static-top sticky yamm">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--     <a class="navbar-brand" href="index.html">Assan</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="index.php">Home</a>
                </li>
                <li><a href="index.php?p=profil">Profil</a></li>
                <li><a href="index.php?p=carapemesanan">Cara Pemesanan</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?p=loginmember">Login</a></li>
                <li class="active"><a href="index.php?p=daftarmember">Daftar Member</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</nav><!--navigation end-->
        <!--rev slider start-->