<?php
   include '../../konek.php';
 
   
   $nama = $_POST['nama_depan'];
   $alamat = $_POST['alamat'];
   $email = $_POST['email'];
   $no_hp = $_POST['no_hp'];
   

   mysqli_query($konek,"insert into tb_produk(nama_lengkap, alamat, email, no_hp) values('$nama','$alamat', '$email','$no_hp')");
    
   header("location:invoce.php");
   ?>