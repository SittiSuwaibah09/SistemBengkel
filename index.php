<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="datatables.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
  
  <div class="row" id="pwd-container">
    
    <div class="col-md-4" align="center">
      <section class="login-form">
        <form method="post" action="cek_login.php" role="login">
          <img src="blem.jpg" class="img-responsive" alt="Brand" />
          
          <input type="text" name="user" id="user" placeholder="user" required class="form-control input-lg"/>
          
          <input type="password" name="pass" id="pass" placeholder="Password" required class="form-control input-lg" />
          <div class="form-group">
          <button type="submit" class="btn btn-primary">SUBMIT</button>
          <button type="button" class="btn btn-warning"><a href="akun.php" >REGISTER</a></button>
          </div>
          
        </form>
      </section>  
      </div>
  </div>
</div>
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>