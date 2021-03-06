<?php
session_start();
include 'koneksi.php';
if(!isset($_SESSION['idnya'])){
  header('location:login.php');}
else{
  $query=mysqli_query($koneksi,"select * from admin where ID_ADMIN = '$_SESSION[idnya]'") or die ("query error");
  $tampil=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="datatables.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <img alt="Brand" src="blem.jpg" alt="Brand" width="48" height="47"/>
    </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mekanik<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mekanik.php">Add Data</a></li>
            <li><a href="datamekanik.php">Data Mekanik</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sparepart<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="part.php">Add Data</a></li>
            <li><a href="datapart.php">Data Sparepart</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="laporansparepart.php">Laporan Sparepart</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service Pelanggan<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="service.php">Add Data</a></li>
            <li><a href="dataservice.php">Data Service</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="laporanservice.php">Laporan Service</a></li>
          </ul>
        </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span><span class="sr-only">(current)</span></a>
          <ul class="dropdown-menu">
            <li><a href="admin.php">Add Acoount</a></li>
            <li><a href="dataadmin.php">Data Account</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="keluar.php">Logout</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
    <h1>Data Mekanik</h1>
    </div>
  <div class="col-sm-12">
    <div class="table-responsive">
    <form class="navbar-form" method="post" action="simpan_mekanik.php">
    <table class="table table-hover table-striped table-bordered">
        <thead>
        <tr>
          <td id="font2"><font  id="font">Id Mekanik</font></td>
          <td><input type="text" placeholder="MK01-MK10" name="idad" id="textfield2" /></td>
        </tr>
        </thead>
        <tr>
          <td id="font2"><font id="font">Nama Mekanik</font></td>
          <td>
            <input type="text" name="nama" id="textfield2" />          </td>
        </tr>
        <tr>
          <td id="font2"><font id="font">Jenis Kelamin</font></td>
          <td>
            <input type="radio" name="jenis" id="radio" value="laki-laki" />
            Laki - Laki
            <input type="radio" name="jenis" id="radio2" value="perempuan" />
            Perempuan          </td>
        </tr>
        <tr>
          <td id="font2"><font id="font">Alamat</font></td>
          <td>
            <input type="text" name="alamat" id="textfield3" />          </td>
        </tr>
        <tr>
          <td id="font2"><font id="font">Tgl Lahir</font></td>
          <td>
            <input type="date" name="tgl" id="textfield4" />          </td>
         </tr>
        <tr>
          <td id="font2"><font id="font">No Telpon</font></td>
          <td>
            <input type="text" name="notlp" id="textfield4" />          </td>
         </tr>
          <tr>
          <td colspan="2" align="right">
          <input type="submit" value="simpan" name="simpan" id="textfield4" />          </td>
          </tr>
         </table>
        </form>
        </div>    
    </div>
  </div>
</div>


<div class="container-fluid navbar-fixed-bottom">
  <div class="row copyright text-center">
    <p>@Sistem Bengkel Alvin Motor</p>
  </div>
</div>
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="datatables.min.js"></script>
</body>
</html>
<?php
}
?>