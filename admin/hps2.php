<?php 
// koneksi database
include '../konek.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($konek ,"delete from tb_produk where id ='$id'");

mysqli_query($konek ,"delete from tb_pruduk2 where id ='$id'");


header("location: dataproduk.php");