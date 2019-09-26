<?php 

require './koneksi.php';
$view = "DELETE FROM crud WHERE id = '$_GET[id]'";
$sql = mysqli_query($conn,$view);
if($sql){
	echo "<script>alert('Data Berhasil Dihapus');</script>";
	echo "<script>var timer = setTimeout(function()
			{ window.location= '?page=read'}, 1)</script>";
}else{
	echo "<script>alert('Data Gagal Dihapus');</script>";
}


 ?>