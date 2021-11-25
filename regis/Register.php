<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Register Dibawah ini</p>

		<form method="POST" action="register2.php">
            <label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username...">

			<label>Email</label>
			<input type="text" name="Email" class="form_login" placeholder="Email...">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" class="tombol_login" value="Register">

			<br/>
			<br/>
			
		</form>
        <center>
			<p>Sudah punya akun? <a class="link" href="../index.php">Login disini</a></p>
		</center>
		
	</div>


</body>
</html>