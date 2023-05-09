<?php 
    session_start();
    include '../koneksi.php';
    include 'protect.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karyawan</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="../asset/css/animate.min.css" rel="stylesheet">
   <link href="../asset/css/owl.carousel.css" rel="stylesheet">
   <link href="../asset/css/owl.theme.css" rel="stylesheet">

   <link rel="shortcut icon" href="../logoresto.png">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Karyawan</a> 
            </div>
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                <a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="logoresto.png" class="user-image img-responsive"/>
					</li>

                    <li><a href="index.php"><i class="fa fa-home fa-3x"></i> Home</a></li>
                    <li><a href="index.php?halaman=kasir"><i class="fa fa-home fa-3x"></i> Kasir</a></li>
                    <li><a href="index.php?halaman=chef"><i class="fa fa-gift fa-3x"></i> Chef</a></li> 
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman']=="kasir") {
                        include 'kasir.php';
                    }
                    elseif ($_GET['halaman']=="chef") {
                        include 'chef.php';
                    }
                    elseif($_GET['halaman']=="nota"){
                        include 'kasir.php';
                    }
                    elseif ($_GET['halaman']=="hapusnotapelanggan") {
                        include 'hapusnota.php';
                    }
                    elseif($_GET['halaman']=="ubahnotapelanggan"){
                        include 'ubahnota.php';
                    }
                    elseif($_GET['halaman']=="hapuspesanan"){
                        include 'hapuspesanan.php';
                    }
                    elseif ($_GET['halaman']=="ubahpesanan") {
                        include 'ubahpesanan.php';
                    }
                    elseif($_GET['halaman']=="logout"){
                        include 'logout.php';
                    }
                }   
                else{
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
