<?php
   include '../../konek.php';
 
   
   $nama = $_POST['nama_depan'];
   $email = $_POST['email'];
   $no_hp = $_POST['no_hp'];
   $alamat = $_POST['alamat'];
    

   mysqli_query($konek,"insert into tb_order(nama_lengkap, email, no_hp, alamat) values('$nama','$email','$no_hp', '$alamat')");
    
   header("location:invoice.php");
   ?>