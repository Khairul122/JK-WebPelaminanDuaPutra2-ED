<br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-2 margin30">
        </div>
        <div class="col-sm-6 col-sm-offset-1">
            <div class="login-reg-box">
                <h4>Daftar Member :</h4>
                <?php
                $ket = isset($_GET['ket']) ? $_GET['ket'] : "default";
                if ($ket == "success") {
                    $rep = "<h4>Sukses Daftar, Silahkan Login</h4>";
                }
                else if ($ket == "failed"){
                    $rep = "<h4>Gagal Daftar, Silahkan Coba Lagi</h4>";   
                }
                echo $rep;
                ?>
                <form method="POST" action="index.php?p=condaftarmember">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Name Lengkap" name="namalengkap" required autofocus>
                    </div><br>
                    <div class="input-group">
                        <select class="form-control" name="jk">
                          <option value="L">Laki - Laki</option>
                          <option value="P">Perempuan</option>                          
                      </select>
                  </div><br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="No HP" name="nohp" required autofocus>
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" required autofocus>
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password" required autofocus>
                </div><br>
                <div class="clearfix">
                    <button type="submit" class="btn btn-red btn-lg pull-left">Register</button>
                </div>
                <div class="divide20"></div>
                <div class="form-bottom">
                    <p>Already a member? <a href="index.php?p=loginmember">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4 margin30">
    </div>
</div> 