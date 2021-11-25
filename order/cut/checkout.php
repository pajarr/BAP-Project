<html>
<head>
  <meta charset="utf-8">
  <title>Checkout</title>
 <link rel="stylesheet" href="check.php">
  <style type="text/css">
  body{
    background:#eee;
    font-family: 'Open Sans', sans-serif;
  }
  #wrapshopcart{
    width:70%;
    margin:3em auto;
    padding:30px;
    background: silver;
  }
  #wrapshopcart h1{
    margin:0;
    padding:0;
    font-size:2.5em;
    font-weight:bold;
  }
  #wrapshopcart p{
    font-size:1em;
    margin:0;
  }
  #wrapshopcart .btnsubmit{
    display:inline-block;
    padding:10px;border:1px solid #ddd;
    background:#eee;color:#000;
    text-decoration:none;
    margin:2em 0;
  }
  #wrapshopcart form{
    margin:2em 0 0 0;
  }
  #wrapshopcart label{
    display:inline-block;
    width:12em;}
    #wrapshopcart input[type=text]{
    border:1px solid #bbb;
    padding:10px;
    width:30em;
  }
  #wrapshopcart textarea{
    border:1px solid #bbb;
    padding:10px;
    width:30em;
    height:5em;
    vertical-align:text-top;
    margin:0.3em 0 0 0;
  }
  #wrapshopcart .submitbtn{-size:1.5em;
    display:inline-block;
    padding:10px;
    border:1px solid #ddd;
    background:#eee;
    color:#000;
    text-decoration:none
    ;margin:0.5em 0 0 8em;
  }
  @media (max-width: 952px){
    #wrapshopcart input[type=text]{
      width:20em;
    }
    #wrapshopcart textarea{
      width: 20em;
    }
}

  @media (max-width: 838px){
    #wrapshopcart input[type=text]{
      width: 18em;
    }
    #wrapshopcart textarea{
      width: 18em;
    }
  }
  </style>
 </head> 
 <body>
  <div id="wrapshopcart">
   <h1>Form Registrasi</h1>
   <p>Silakan lengkapi form di bawah ini untuk melanjutkan ke tahap pembayaran : </p>
   
   <form action="check.php" method="POST">
   <label>Nama: </label><input type="text" name="nama_depan" class="inputan" /><br />
   <label>Email : </label><input type="text" name="email" class="inputan" /><br />
   <label>No HP : </label><input type="text" name="no_hp" class="inputan" /><br />
   <label>Alamat :</label><textarea name="alamat" class="textan"></textarea><br />
   <input type="submit" name="kirim" value="Kirim Isi Formulir!" class="submitbtn" />
  </form>
  </div>
 </body>
</html>