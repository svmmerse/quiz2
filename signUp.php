<?php
include "db_connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FORM SIGN UP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: #152345;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-49">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username Harus Diisi">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="inUser" value="<?=@$v_User?>" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Nama Lengkap Harus Diisi">
						<span class="label-input100">Nama Lengkap</span>
						<input class="input100" type="text" name="inNama" value="<?=@$v_Nama?>"placeholder="Type your name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Email Harus Diisi">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="inEmail" value="<?=@$v_Email?>"placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#9993;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="inPass" value="<?=@$v_Pass?>" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="btn_smpn">
								Sign Up
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="https://facebook.com" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://twitter.com" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="https://gmail.google.com" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-55">
						<span class="txt1 p-b-17">
							If You Have An Account
						</span>

						<a href="index.php" class="txt2">
							Login
						</a>
					</div>
				</form>
				<?php
					if(isset($_POST['btn_smpn'])){
						#data yang akan disimpan
						$simpan = mysqli_query($conn, "INSERT INTO pengguna (username, nama, email, password)
						VALUES ('$_POST[inUser]',
							'$_POST[inNama]',
							'$_POST[inEmail]',
							'$_POST[inPass]')
							");
						if ($simpan){
							echo "<script>alert('Simpan Data Berhasil!!');
											document.location='index.php';
								</script>";
						}
						else {
							echo "<script>alert('Simpan Data Gagal!!');
											document.location='index.php';
								</script>";
						}

					}
				?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>