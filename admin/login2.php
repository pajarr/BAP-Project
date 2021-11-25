<?php
	include '../konek.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$qry = mysqli_query($konek,"SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password' ");
		$cek = mysqli_num_rows($qry);
		if($cek==1){
			$_SESSION['userweb'] = $username;
			header("location: admin.php");
		}else{
			echo "<script language = 'javascript'>alert('Username atau Password anda salah'); document.location='login.php';</script>";
		}
	}
?>