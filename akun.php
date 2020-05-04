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
       <img src="blem.jpg" alt="Brand" width="48" height="47"/>    </div>
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <div class="row">
  	<div class="col-sm-12 text-center">
    <h1>Silahkan Di isi!</h1>
    </div>
	<div class="col-sm-12">
    <div class="table-responsive">
    <form class="navbar-form" method="post" action="simpan_buat.php">
    <table class="table table-hover table-striped table-bordered">
        
        <tr>
          <td id="font2"><font id="font">Nama Lengkap</font></td>
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
           <td id="font2"><font id="font">Username</font></td>
          <td>
            <input type="text" name="user" id="textfield4" />          </td>
          </tr>
          <tr>
          <td id="font2"><font id="font">Password</font></td>
          <td>
            <input type="password" name="pass" id="textfield4" />          </td>
          </tr>
          <tr>
          <td colspan="2" align="right">
        	<button type="submit" class="btn btn-primary">SUBMIT</button>
          <a href="index.php" class="btn btn-warning">CENCEL</a>          </td>
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