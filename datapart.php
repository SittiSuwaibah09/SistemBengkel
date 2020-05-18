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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Servis Motor</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="datatables.min.css" rel="stylesheet">
    <link href="stylee.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <h1>Data Sparepart</h1>
    </div>
  <div class="col-sm-12">
      <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered">
              <thead>
              <tr class="text-center">
                <td width="70"><font id="data">NO</font></td>
                <td width="101"><font id="data">KODE PART</font></td>
                <td width="115"><font id="data">NAMA PART</font></td>
                <td width="145"><font id="data">QUANTYTY PART</font></td>
                <td width="163"><font id="data">HARGA PART</font></td>
                <td width="79"><font id="data">UPDATE</font></td>
                <td width="79"><font id="data">DELETE</font></td>
              </tr>
              </thead>
              <?php
              include'koneksi.php';
              $nomer=1;
              $ambil=mysqli_query($koneksi,"select * from part");
              while($tampil=mysqli_fetch_array($ambil))
              {
              ?>
              <tbody>
              <tr>
                <td><font id="font"><?php echo"$nomer";$nomer++;?></font></td>
                <td><font id="font"><?php echo"$tampil[KODE_PART]";?></font></td>
                <td><font id="font"><?php echo"$tampil[NAMA_PRT]";?></font></td>
                <td><font id="font"><?php echo"$tampil[QUANTITY_PRT]";?></font></td>
                <td><font id="font"><?php echo"$tampil[HARGA_PRT]";?></font></td>
                <td><a href="editpart.php?<?php echo"idnya=$tampil[KODE_PART]";?>"><img src="edit.png"/></a></td>
                <td><a href="deletpart.php?<?php echo"idnya=$tampil[KODE_PART]";?>" onClick="return confirm('Anda Yakin Ingin Menghapusnya. . . ? ? ?')"><img src="hapus.png"/></a></td>
              </tr>
              </tbody>
              <?php
        }
        ?>
            </table>
        </div>    
    </div>
  </div>
</div>


<div class="container-fluid navbar-fixed-bottom">
  <div class="row copyright text-center">
    <p>@All Rights Reserved 2016</p>
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