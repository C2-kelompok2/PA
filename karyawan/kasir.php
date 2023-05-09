<?php 
session_start();
include 'protect.php';
include 'koneksi.php';
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">

    <title>
        Restoran C2
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="asset/css/font-awesome.css" rel="stylesheet">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/animate.min.css" rel="stylesheet">
    <link href="asset/css/owl.carousel.css" rel="stylesheet">
    <link href="asset/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="asset/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="asset/css/custom.css" rel="stylesheet">

    <script src="asset/js/respond.min.js"></script>

    <link rel="shortcut icon" href="logoresto.png">

    <style>
        #content{
            margin-bottom: 54px;
        }

        #copyright {
        position: fixed;
        /*padding: 10px 0;*/
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #333;
        color: #ccc;
        font-size: 12px;
        text-align: center;
        }

        @media (max-width: 991px) {
            #content{
                margin-bottom: 54px;
            }
            #copyright p {
                margin-bottom: 0px;
            }
        }
    </style>
    <script src="asset/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#printbtn").click(function(){
                alert('Button DiKlik!');
        });   
    </script>
</head>

<body>
<!-- *** TOPBAR ***
 _________________________________________________________ -->
 <div id="top">
    <div class="container">
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><a href="profile.php">Welcome, <?php echo $_SESSION['login']['nama_pelanggan']; ?></a>
                </li>
                <li><a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->
 
<?php

// Deklarasi variabel awal
$nama_barang = "";
$harga_barang = 0;
$jumlah_barang = 0;
$total_harga = 0;

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil nilai dari form
  $nama_barang = test_input($_POST["nama_pesanan"]);
  $harga_barang = test_input($_POST["harga_pesanan"]);
  $jumlah_barang = test_input($_POST["jumlah_pesanan"]);
  
  // Hitung total harga
  $total_harga = $harga_pesanan * $jumlah_pesanan;
}

// Fungsi untuk membersihkan input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!-- Form untuk input data -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Nama Pesanan: <input type="text" name="nama_pesanan" value="<?php echo $nama_pesanan;?>"><br>
  Harga Pesanan: <input type="number" name="harga_pesanan" value="<?php echo $harga_pesanan;?>"><br>
  Jumlah Pesanan: <input type="number" name="jumlah_pesanan" value="<?php echo $jumlah_pesanan;?>"><br>
  <br>
  <input type="submit" name="submit" value="Hitung">
</form>

<!-- Output hasil perhitungan -->
<?php if ($total_harga > 0): ?>
  <hr>
  <p>Anda membeli <?php echo $jumlah_pesanan;?> <?php echo $nama_pesanan;?> dengan harga <?php echo $harga_pesanan;?> per unit.</p>
  <p>Total yang harus dibayar adalah <?php echo $total_harga;?>.</p>
<?php endif; ?>

 _________________________________________________________ -->
 <script src="asset/js/jquery-1.11.0.min.js"></script>
 <script src="asset/js/bootstrap.min.js"></script>
 <script src="asset/js/jquery.cookie.js"></script>
 <script src="asset/js/waypoints.min.js"></script>
 <script src="asset/js/modernizr.js"></script>
 <script src="asset/js/bootstrap-hover-dropdown.js"></script>
 <script src="asset/js/owl.carousel.min.js"></script>
 <script src="asset/js/front.js"></script>
</body>
</html>
