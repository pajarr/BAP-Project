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
			<img src="../../gambar/barbers pomade.jpg" class="product-image">
		</div>
		<form action="order.php">
		<div class="description">
			<p class="product-code small muted">Id: 23487866</p>
			<h1>Barber Pomade</h1>
			<p class="description-text">
				Pomade water based ini mudah sekali pengaplikasiannya, membersihkannya pun juga mudah. Maka dari itu, Barbers Pomade bisa jadi pilihan kamu.
			</p>
			<p style="margin-bottom: 0.5rem;">600ml</p>
			<h2>Rp.50.000</h2>
		</div>
	</div>
	<div class="bag-total">
		<form action="">
		<div class="subtotal">
			<p class="small">Subtotal:</p>
			<p class="small">Rp.50.000</RP></p>
		</div>
		<div class="delivery">
			<p class="small">Pengiriman COD (Standar - 2Hari):<br>
				<span class="change-delivery">Biaya Pengiriman</span></p>
			<p class="small">Rp.20.000</p>
		</div>

		<?php
			$harga = 70000;
			$barang= "Barbers Pomade";

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