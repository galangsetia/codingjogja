<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url("assets/login/") ?>images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/login/") ?>css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url("assets/login/") ?>images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
				<small>Login Admin</small> <br>	 Coding Jogja
				</span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="post" action="<?= base_url('Login/login_aksi');?>">

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text"  name="username" placeholder="User name" id="username">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" required type="password" name="password" placeholder="Password" id="password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
        
						<input type="submit"  class="btn login100-form-btn" name="btn" id="btnLogin" onclick="cek_login();" value="Login"/>
					
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url("assets/login/") ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("assets/login/") ?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("assets/login/") ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url("assets/login/") ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("assets/login/") ?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("assets/login/") ?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url("assets/login/") ?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("assets/login/") ?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("assets/login/") ?>js/main.js"></script>


	<script>
		function cek_login()
{
	//Mengambil value dari input username & Password
	var username = $('#username').val();
	var password = $('#password').val();
	//Ubah alamat url berikut, sesuaikan dengan alamat script pada komputer anda
	var url_login	 = 'http://localhost:8080/coding_jogja/client_bimbel/login';
	var url_admin	 = 'http://localhost:8080/coding_jogja/client_bimbel/home#;
	
	//Ubah tulisan pada button saat click login
	$('#btnLogin').attr('value','Silahkan tunggu ...');
	
	//Gunakan jquery AJAX
	$.ajax({
		url		: url_login,
		//mengirimkan username dan password ke script login.php
		data	: 'var_usn='+username+'&var_pwd='+password, 
		//Method pengiriman
		type	: 'POST',
		//Data yang akan diambil dari script pemroses
		dataType: 'html',
		//Respon jika data berhasil dikirim
		success	: function(pesan){
			if(pesan=='ok'){
				//Arahkan ke halaman admin jika script pemroses mencetak kata ok
				window.location = 'http://localhost:8080/coding_jogja/client_bimbel/home#';
			}
			else{
				//Cetak peringatan untuk username & password salah
				alert(pesan);
				$('#btnLogin').attr('value','Coba lagi ...');
			}
		},
	});
}
	</script>
</body>

</html>
