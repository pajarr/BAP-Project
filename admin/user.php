<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<style>
		body{
		font-family: 'Open Sans', sans-serif;
		background: #eee;
	}
	nav{
    height: 80px;
    width: 100%;
  }
  label.logo{
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
  }
  nav ul{
    float: right;
    margin-right: 20px;
  }
  nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
  }
  nav ul li a{
    color: black;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
    text-decoration: none;
  }
  nav a:hover{
  	color: blue;
    transition: .5s;
  }
		.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
  }
 
  .table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
  }
 
  .table1, th, td {
    padding: 8px 20px;
    text-align: center;
  }
 
  .table1 tr:hover {
    background-color: #f5f5f5;
  }
 
  .table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

.confir {
	color: white;
	text-decoration: none;
	background-color: green;
	transition: 0.5s;
	padding: 5px;
	border-radius: 5px;
	}
	.confir:hover{
		background-color: red;
		transition: 0.5s;

	}
	</style>
</head>
<body>
<nav>
    <ul>
      <li><a href="../home/home.html">Logout</a></li>
      <li><a href="dataproduk.php">Data Produk</a></li>
      <li><a href="admin.php">Pesanan</a></li>
	  	<li><a href="#">User</a></li>
    </ul>
  </nav>
 	<center>
		 <br><br>
		 <h1>User</h1>
	<table class="table1">
		<tr>
      <th>No</th>
			<th>Nama</th>
			<th>Email</th>
      <th>Password</th>
      <th></th>
		</tr>
		<?php 
		include '../konek.php';
		$no = 1;
		$data = mysqli_query($konek,"select * from tb_user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td>
					<a class="confir" href="hps.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</center>
</body>
</html>