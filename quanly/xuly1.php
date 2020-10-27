<?php
ob_start();
session_start();
require '../config.php';
require '../func.php';
$password = htmlspecialchars(md5($_POST['password']));
if (!check_pass($password)) {
	$sms= "	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: 'Mật khẩu truy cập không hợp lệ !'
	})";
}else{
	$sms = "Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'Đăng nhập thành công !',
		showConfirmButton: false,
		timer: 1500
		})
 setTimeout(loadlai, 1500);
		function loadlai() {
			 window.location='../quanly/';
		}
		";
		$_SESSION['pas'] = $password;
	}
	echo "<script>".$sms."</script>";
	?>