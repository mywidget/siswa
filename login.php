<?php
session_start();
if( isset($_SESSION['userid']) ) {
    header('location:index.php'); 
}
require_once('config/koneksi.php');
$userfail = isset($_GET['userfail']);
$passwordfail = isset($_GET['passwordfail']);
$logout = isset($_GET['logout']);
?>


<!DOCTYPE html>
<html>
    <head>

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>.:: Aplikasi Perpustakaan ::.</title>

        <!-- Base Css Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
<div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"><strong>ADMINISTRATOR</strong> </h3>
                </div> 
                <div class="panel-body">

		<?php 
 if ($userfail) {
echo '<div class="alert alert-warning alert-dismissable">
	
	<button class="close" data-dismiss="alert">&times;</button>
	<p>Username / Password Salah !</p>
	</div>';
	}
	else if ($passwordfail) {
echo '<div class="alert alert-warning alert-dismissable">
	
	<button class="close" data-dismiss="alert">&times;</button>
	<p>Username / Password Salah !</p>
	</div>';
	}
	else if ($logout) {
echo '<div class="alert alert-warning alert-dismissable">
	<button class="close" data-dismiss="alert">&times;</button>
	<p>Anda telah berhasil logout</p>
	</div>';
	}


?>
      <form class="form-horizontal m-t-20" id="form-login" action="proseslogin.php" method="POST">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " name="username" type="text" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="password" type="password" required="" placeholder="Password">
                        </div>
                    </div>

                    
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-10">
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        

  </body>
</html>