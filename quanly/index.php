<?php
ob_start();
require '../config.php';
require '../func.php';
include 'header.php';
$types = get_type();
if (!isset($_SESSION['pas']) || $types['type'] != 1) {
	header('location: login');
}else{
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
		switch ($act) {
			case 'dangxuat':
			session_destroy();
			header('location: login');
			break;
			
			default:
			include 'home.php';
			break;
		}
	}else{
		include 'home.php';
	}	
}

include 'footer.php';
?>