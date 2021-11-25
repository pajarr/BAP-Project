<!DOCTYPE html>
 <head>
       <title>Pompadour</title>
       <link rel="stylesheet" href="cut.css">
       <link rel="stylesheet" href="../../responsive/responsive.css">
       <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 </head>
 
 <body>
 <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">BarberShop</label>
    <ul>
      <li><i class="fas fa-home"></i><a href="../../home/home.html">Home</a></li>
      <li><i class="fas fa-cut"></i><a href="../index.html">HairStyle</a></li>
      <li><i class="fas fa-shopping-bag"></i><a href="../../produk/index.html">Produk</a></li>
      <li><i class="fas fa-users-cog"></i><a href="../../admin/login.php">Admin</a></li>
    </ul>
  </nav>
        <div class="konten">
            <h1>Pompadour</h1>
            <center><img src="../../gambar/pompadour.jpg" alt=""></center>
            <p>"Gaya rambut dinamai Madame de Pompadour (1721-1764), seorang nyonya Raja Louis XV dari Perancis. Meskipun ada banyak variasi gaya untuk pria, wanita, dan anak-anak, konsep dasarnya adalah memiliki banyak rambut yang disapu ke atas dari wajah dan dikenakan tinggi di dahi, dan kadang-kadang disisir ke atas di sekitar sisi dan punggung sebagai baik."</p>
        </div>

  <div id="wrapshopcart"> 
      <form action="inde.php">
   <table>
    <tr><th width="70%">Produk</th><th width="10%">Quantity</th><th width="20%">Jumlah</th></tr>
      <?php
      $harga = 25000;
      $nama = "Pompadour";
      $qty = 1; 

      include '../../konek.php';

      mysqli_query($konek,"insert into tb_order2(harga, nama) values('$harga','$nama')");
      ?>
     
     <tr><td><?php echo $nama;?></td><td><?php echo $qty;?></td><td><?php echo $harga ?></td></tr>
    
   </table>
   <a class="btnsubmit" href="checkout.php">Lanjut pembayaran</a>
      </form>
  </div>
 </body>
</html>