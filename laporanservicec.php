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
  <form class="navbar-form navbar-left" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="cari">
          <button type="submit" class="btn btn-primary">SUBMIT</button>
          <a href="laporanservice.php" class="btn btn-warning">RESET</a>
        </div>
  </form>
	<?php
	if(isset($_POST['cari'])){
	$cari=$_POST['cari'];
	?>
<div class="col-sm-12 text-center">
    <h1>Data Sparepart</h1>
    </div>
	<div class="col-sm-12">
    	<div class="table-responsive">
    		<table class="table table-hover table-striped table-bordered">
              <thead>
              <tr class="text-center">
                <td><font id="data">NO</font></td>
                <td><font id="data">Nama Admin</font></td>
                <td><font id="data">No Urut</font></td>
                <td><font id="data">Tanggal</font></td>
                <td><font id="data">Jenis Servis</font></td>
                <td><font id="data">Jumlah Bayar</font></td>
                </tr>
              </thead>
           <?php
		  include'koneksi.php';
		  $nomer=1;
		  $ambil=mysqli_query($koneksi,"select * from admin natural join service where NAMA_LENGKAP_AD like '%$cari%' or JENIS_SERVIS like '%$cari%'");
		  while($tampil=mysqli_fetch_array($ambil))
		  {
		  ?>
		  <tbody>
              <tr>
				<td><font id="font"><?php echo"$nomer";$nomer++;?></font></td>
                <td><font id="font"><?php echo"$tampil[NAMA_LENGKAP_AD]";?></font></td>
                <td><font id="font"><?php echo"$tampil[NO_URUT]";?></font></td>
                <td><font id="font"><?php echo"$tampil[TGL_SERVIS]";?></font></td>
                <td><font id="font"><?php echo"$tampil[JENIS_SERVIS]";?></font></td>
                <td><font id="font"><?php echo"$tampil[TOTAL_BAYAR]";?></font></td>
              </tr>
              </tbody>
              <?php
			  }
			  ?>
            </table>
            <center>
			<script language="JavaScript"> 
				if (window.print) 
				{
				document.write('<form><input type=button name=print class=btn class=btn-info value="Print" onClick="window.print()"></form>');
				}
			</script>
         </center>
      </div>    
  	</div>
    <?php
	}
	?>
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