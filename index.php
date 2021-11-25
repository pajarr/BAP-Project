<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="logcss.css">
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username...">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password...">

			<input type="submit" class="tombol_login" name="login" value="Login">

			<br/>
			<br/>
			<center>
			  <p>Belum punya akun? <a class="link" href="regis/Register.php">Register disini</a></p>
			</center>

            <?php
	            include 'konek.php';

	            if(isset($_POST['login'])){
		        $username = $_POST['username'];
		        $password = $_POST['password'];
		        $qry = mysqli_query($konek,"SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");
		        $cek = mysqli_num_rows($qry);
		        if($cek==1){
			    $_SESSION['userweb'] = $username;
			    header("location: home/home.html");
		        }else{
			    echo "<script language = 'javascript'>alert('Username atau Password anda salah'); document.location='index.php';</script>";
		        }
	    }
        ?>
		</form>
		
	</div>
	


</body>
</html>