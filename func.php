<?php
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