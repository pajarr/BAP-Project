<?php 
// koneksi database
include '../konek.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($konek ,"delete from tb_order where id ='$id'");

mysqli_query($konek ,"delete from tb_order2 where id ='$id'");
 
header("location:admin.php");
 
?>