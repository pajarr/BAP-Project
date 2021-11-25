<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300);
	body{
	font-family: sans-serif;
	background: #eee;
}

h1{
	text-align: center;
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	margin: 80px auto;
	padding: 30px 20px;
}

label{
	font-size: 11pt;
}

.form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #49524a;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.link{
	color: black;
	text-decoration: none;
	font-size: 13pt;
    transition: 0.4s;
}

.link:hover{
    color: #0091ff;
    transition: 0.4s;
}
</style>
<body>
 	<div class="kotak_login">
		<p class="tulisan_login">Login Hanya Untuk Admin!</p>

		<form method="POST" action="login2.php">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username...">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password...">

			<input type="submit" class="tombol_login" name="login" value="LOGIN">

			<br/>
			<br/>
			<center>
			  <p><a class="link" href="../home/home.html">Kembali</a></p>
			</center>
		</form>
</body>
</html>