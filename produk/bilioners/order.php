<?php 
if(isset($_POST['submit'])){
    $qt = $_POST['quantity'];
}

$total = $harga * $qt;


header("location:checkout.php");


?>