<?php
function check_pass($pass)
{
	$sql = "SELECT * FROM `test` where `password` = ? limit 1";
	return pdo_query($sql,$pass);
}
function get_type(){
	$sql = "SELECT * FROM `test`";
	return pdo_query_one($sql);
}
function get_sp(){
	$sql = "SELECT * FROM `info`";
	return pdo_query($sql);
}
function laythongtin($taikhoan)
{
	$sql = "SELECT `taikhoan` FROM `info` WHERE `taikhoan` = ? LIMIT 1";
	return pdo_query($sql,$taikhoan);
}
function them($taikhoan,$pass,$id,$date)
{
	$sql = "INSERT INTO `info`(`taikhoan`,`pass`,`user_id`,`date`) VALUES(?,?,?,?)";
	pdo_execute($sql,$taikhoan,$pass,$id,$date);
}
?>