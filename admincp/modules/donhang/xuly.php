<?php
	include('../config.php'); 
	if(isset($_GET['id'])){
		$tam=$_GET['id'];
	}else{
		$tam='';
	}
	$sql="delete from cart where id='$tam'";
	sqlsrv_query($conn,$sql);
	header('location:../../index.php?quanly=donhang&ac=lietke');
?>