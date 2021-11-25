<?php 
	include '../konek.php';

	$username = $_POST['username'];
	$email = $_POST['Email'];
    $password = $_POST['password'];

    mysqli_query($konek,"insert into tb_user(username, email, password) values('$username','$email','$password')");
    header('location: ../index.php')
 
 ?>