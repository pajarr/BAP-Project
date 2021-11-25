<html>
    <head>
        <title>Purcase</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<div class="center-wrapper">
	<div class="content">
		<div class="top-bar">
			<i class="fas fa-arrow-left"></i>
			<span><a class="top-bar-btn" href="../index.html">Kembali</a></span>
		</div>
	<div class="bag-product">
		<div class="image">
			<img src="../../gambar/vilain pomade.jpg" class="product-image">
		</div>
		<form action="order.php">
		<div class="description">
			<p class="product-code small muted">Id: 236797324</p>
			<h1>Gold Digger Pomade</h1>
			<p class="description-text">
				Pomade impor ini memiliki daya hold yang tahan lama, tidak lengket, harum, dan tentunya mudah dibersihkan. Jadi, setelah menggunakan Pomade by Vilain, tangan kamu tidak perlu dicuci dengan banyak air. Bahkan, bisa hanya dilap saja.				
			</p>
			<p style="margin-bottom: 0.5rem;">800ml</p>
			<h2>Rp. 170.000</h2>
		</div>
	</div>
	<div class="bag-total">
		<form action="">
		<div class="subtotal">
			<p class="small">Subtotal:</p>
			<p class="small">Rp.170.000</p>
		</div>
		<div class="delivery">
			<p class="small">Pengiriman COD (Standar - 2Hari):<br>
				<span class="change-delivery">Biaya Pengiriman</span></p>
			<p class="small">Rp.20.000</p>
		</div>

		<?php
			$harga = 190000;
			$barang= "Gold Digger Pomade";

			include "../../konek.php";

      		mysqli_query($konek,"insert into tb_pruduk2(harga, barang) values('$harga','$barang')");
      ?>
		<div class="total">
			<h3>Total:</h3>
			<h3>Rp.<?php echo $harga; ?></h3>
		</div>
		</div>
			<input class="btn-go-checkout" type="submit" name="submit" value="Pesan">
	</div>
</div>
</div>
</form>
<div class="bg"></div>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </body>
</html>