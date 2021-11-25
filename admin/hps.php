<?php

include "../konek.php";

$id= $_GET['id'];

mysqli_query($konek ,"delete from tb_user where id ='$id'");

header("location:user.php");



?>