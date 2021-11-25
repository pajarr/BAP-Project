<!DOCTYPE html>
 <head>
       <title>Top Knot</title>
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
            <h1>Top Knot</h1>
            <center><img src="../../gambar/top knot.jpg" alt="" width="300px" height="300px"></center>
            <p>"Style rambut dengan bagian samping kanan dan kiri yang dibuat sangat tipis. Dan juga pada bagian rambut belakang. Untuk bagian atas, akan dibiarkan lebih panjang supaya dapat dikuncir ke belakang ataupun ke atas ala samurai. Hair style ini lebih pas untuk kalian yang punya rambut berwarna hitam dan cenderung lurus."</p>
        </div>

  <div id="wrapshopcart"> 
      <form action="inde.php">
   <table>
    <tr><th width="70%">Produk</th><th width="10%">Quantity</th><th width="20%">Jumlah</th></tr>
      <?php
      $harga = 20000;
      $nama = "Top Knot";
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