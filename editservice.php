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
    <h1>Data Service</h1>
    </div>
	<div class="col-sm-12">
    	<div class="table-responsive">
		<form id="form1" name="form1" method="post" action="updateservice.php">
    	<table class="table table-hover table-striped table-bordered">
       	<?php
		include'koneksi.php';
		$_GET['idnya'];
		$cek=mysqli_query($koneksi,"select * from service where NO_URUT='$_GET[idnya]'");
		$tampil=mysqli_fetch_array($cek);
		?>
        <thead>
        <tr>
          <td width="182" colspan="2" align="center">
          <font id="font">Silahkan Edit!!!</font>
            <input type="hidden" name="idser" id="textfield" value="<?php echo"$_GET[idnya]";?>" />
          </td>
        </tr>
        </thead>
       <tr>
       <td id="font2"><font id="font">Nama Admin</font></td>
       <td><select name="namin">
    	<option>Pilih Nama Admin</option>
		<?php
    	include'koneksi.php';
		$ambil=mysqli_query($koneksi,"select * from admin");
		while ($brs=mysqli_fetch_array($ambil))
		{
		?>
		<option value="<?php echo "$brs[ID_ADMIN]";?>"><?php echo "$brs[NAMA_LENGKAP_AD]";?></option>
		<?php
		}
		?>
		</select></td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td>
            <input  type="date" name="tgl" id="textfield2" value="<?php echo"$tampil[TGL_SERVIS]";?>" />
          </td>
        </tr>
         <tr>
          <td>Jenis Servis</td>
          <td>
          <input  type="text" name="jenis" placeholder="Berat/Ringan" value="<?php echo"$tampil[JENIS_SERVIS]";?>" />
          </td>
        </tr>
         <tr>
          <td>Jumlah Bayar</td>
          <td>
            <input type="text" name="jumlah" id="textfield4" value="<?php echo"$tampil[TOTAL_BAYAR]";?>" />
          </td>
        </tr>
         <tr>
          <td colspan="2">
            <input type="submit" value="simpan" name="simpan" id="textfield4" />
          </td>
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