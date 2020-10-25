<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
session_start();
require 'config.php';
require 'func.php';
if (isset($_POST['username'])) {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$userid = htmlspecialchars($_POST['userid']);
	$check = laythongtin($username);
	if (empty($username) || empty($password) || empty($userid)) {
		$erro = 'Không được bỏ trống thông tin';
	}if(strlen($username) < 4 || strlen($password) < 4 ){
		$erro = 'Tài khoản hoặc mật khẩu không đúng';
	}if (!is_numeric($userid)) {
		$erro = 'ID người dùng không hợp lệ';
	}if ($check) {
		$erro = 'Tài khoản đã được đăng ký trước đó . Vật phẩm sẽ chuyển tới bạn trong 24h tới !';
	}
	if (!isset($erro)) {
		$erro = 'truevalue';
		them($username,$password,$userid,date("Y-m-d",time()));
	}
	echo $erro;
}

?>