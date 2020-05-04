<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sparepart</title>
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="stylee.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img alt="Brand" src="blem.jpg" alt="Brand" width="48" height="47"/>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="home.php">Home</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mekanik
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="mekanik.php">Add Data</a>
								</li>
								<li>
									<a href="datamekanik.php">Data Mekanik</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sparepart
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="part.php">Add Data</a>
								</li>
								<li>
									<a href="datapart.php">Data Sparepart</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="laporansparepart.php">Laporan Sparepart</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service Pelanggan
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="service.php">Add Data</a>
								</li>
								<li>
									<a href="dataservice.php">Data Service</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="laporanservice.php">Laporan Service</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account
								<span class="caret"></span>
								<span class="sr-only">(current)</span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="admin.php">Add Acoount</a>
								</li>
								<li>
									<a href="dataadmin.php">Data Account</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="keluar.php">Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1>Add Sparepart</h1>
				</div>
				<div class="col-sm-12">
					<div class="table-responsive">
						<form class="navbar-form" method="post" action="simpan_service.php">
							<table class="table table-hover table-striped table-bordered">
								<tr>
									<td id="font2" width="520px"><font id="font">Nama Part</font></td>
									<td>
										<input type="text" name="idser" id="textfield2" />
									</td>
								</tr>
								<tr>
									<td id="font2"><font id="font">Quantity Part</font></td>
									<td>
										<input type="text" name="idadmin" id="textfield2" />
									</td>
								</tr>
								<tr>
									<td id="font2"><font id="font">Harga Part</font></td>
									<td>
										<input type="text" name="idpelanggan" id="textfield2" />
									</td>
								</tr>
								<tr>
									<td colspan="2" align="center">
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
				<p>Create by @Sistem Bengkel Alvin Motor</p>
			</div>
		</div>
	</body>
</html>