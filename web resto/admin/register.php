<?php 
	include '../koneksi.php';

// Fungsi untuk menghasilkan kode unik untuk setiap akun admin yang baru didaftarkan
function generateKodeKasir()
{
    $kode = 'KS-' . date('YmdHis') . rand(100, 999);
    return $kode;
}

// Cek apakah formulir telah dikirim dan mengambil nilai-nilai yang dikirimkan
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    

    // Membuat query untuk menyimpan data kasir baru ke database
    $query = "INSERT INTO admin (username, password, nama_lengkap, email_admin, telepon_admin) 
              VALUES ('$username', '$password', '$nama', '$email', '$phone')";
    
    // Menjalankan query dan mengecek apakah berhasil disimpan ke database atau tidak
    if ($conn->query($query) === TRUE) {
        echo "<script>alert('Akun admin berhasil dibuat!');</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat membuat akun admin. Silakan coba lagi nanti.');</script>";
    }

    // Menutup koneksi database
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="logoresto.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../asset/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-26">
						Buat Akun Admin
					</span>
                     
				


					<div class="wrap-input100 validate-input" data-validate="Masukkan Username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Masukkan Username"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Masukkan Nama">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100" data-placeholder="Masukkan Nama"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukkan Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Masukkan Password"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Masukkan Email"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Masukkan Nomor HP">
						<input class="input100" type="tel" name="phone">
						<span class="focus-input100" data-placeholder="Masukkan Nomor HP"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								Register
							</button>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="asset/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/login/vendor/bootstrap/js/popper.js"></script>
	<script src="asset/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="asset/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="asset/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="asset/login/js/main.js"></script>

</body>
</html>