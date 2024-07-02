<?php
ob_start();
include 'core/kon.php';
?>
<br><br>
<div class="container">
    <div class="row" align="center">
        <div class="col-sm-4 margin30">
        </div>
        <div class="col-sm-4 margin30">
            <div class="login-reg-box">
                <h4>Login</h4>
                <form role="form" method="post" action="">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Username" name="user" type="text" required  autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" required autofocus>
                        </div>
                        <br><br>
                        <!-- Change this to a button or input when using this as a form -->
                        <button name="Submit" type="Submit" class="btn btn-lg btn-success btn-block">Login</button>
                    </fieldset>
                </form>
                <br><br><br><br><br>
                <?php
                include 'core/kon.php';
                if(isset($_POST['Submit'])){
                    $user=$_POST['user'];
                    $pass=md5($_POST['password']);
                    $login=mysql_query("SELECT * FROM anggota where username='$user' AND password='$pass'");
                    $cek=mysql_num_rows($login);
                        $data=mysql_fetch_array($login); //1
                        
                        if($cek)
                        {
                            session_start();
                            $_SESSION['islogin']="login";//1
                            $_SESSION['idanggota']=$data['idanggota'];//1
                            $_SESSION['username']=$data['username'];//3
                            $_SESSION['namalengkap']=$data['namalengkap']; //4
                            header("location:index.php");
                        }
                        else {
                            echo "<script>alert('Periksa kembali username dan password')</script>";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-4 margin30">
            </div>
        </div>
    </div> 