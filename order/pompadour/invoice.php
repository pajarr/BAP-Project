<html>
<head>
  <meta charset="utf-8">
  <title>Invoice</title>
  <style type="text/css">
  <style type="text/css">
  body{
      background: #eee;
      font-family: 'Open Sans', sans-serif;
    }
  #wrapshopcart{
      width:70%;
      margin:3em auto;
      padding:30px;
      background:silver;
    }
  h1{
      margin:0;
      padding:0;
      font-size:2.5em;
      font-weight:bold;
    }
  p{ 
      font-size:1em;
      margin:0;
    }
  table{
      margin:2em 0 0 0; 
      border:1px solid black;
      width:100%; 
      border-collapse: separate;
      border-spacing:0;
    }
  table th{
      background:silver; 
      border:none; 
      padding:20px ;
      font-weight:normal;
      text-align:left;
    }
  table td{
      background:silver; 
      border:none; 
      padding:12px  20px; 
      font-weight:normal;
      text-align:left; 
      border-top:1px solid black;
    }
  table tr.total td{
      font-size:1.5em;
    }
  .btnsubmit{
      display:inline-block;
      padding:10px;border:1px solid #ddd;
      background:#eee;color:#000;
      text-decoration:none;margin:2em 0;
    }
  form{
      margin:2em 0 0 0;
    }
  label{
      display:inline-block;
      width:auto;
    }
  input[type=text]{
      border:1px solid #bbb;
      padding:10px;width:30em;
    }
  textarea{
      border:1px solid #bbb;
      padding:10px;
      width:30em;
      height:5em;
      vertical-align:text-top;
      margin:0.3em 0 0 0;
    }
  .submitbtn{
      font-size:1.5em;
      display:inline-block;
      padding:10px;border:1px solid #ddd;
      background:#eee;color:#000;
      text-decoration:none;
      margin:0.5em 0 0 8em;
    }

    .kembali{
      transition: 0.6s;
      text-decoration: none;
      color: black;
    }

    .kembali:hover{
      color: blue;
      transition: 0.6s;
    }
  </style>
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Terima Kasih Telah Berbelanja</h1>
   <h3>Harap Datang Minimal 1 Jam Setelah Booking</h3>
   <p>Jl.Sudirman No.23</p>
   <table>
   <?php
      $harga = 25000;
      $nama = "Pompadour";
      $qty = 1;
      ?>
   <table>
    <tr><th width="70%">Produk</th><th width="10%">Jumlah</th></tr>
    <tr><td><?php echo $nama;?></td><td><?php echo $qty;?></td><td><?php echo $harga ?></td></tr>
    
    <tr class="total"><td></td><td >Total</td><td><?php echo $harga;?></td></tr>
   </table>    
   <a class="kembali" href="../../home/home.html">Kembali Ke menu</a>
  </div>
 </body>
</html>