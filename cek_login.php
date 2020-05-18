<?php
session_start();
include 'koneksi.php';
$user=$_POST['user'];
$pass=$_POST['pass'];
$ceklogin=mysqli_query($koneksi,"select * from admin where USERNAME='$user' AND PASSWORD='$pass'");
$cekdata=mysqli_fetch_array($ceklogin);
$periksa=mysqli_num_rows($ceklogin);

if ($periksa!=0)
{
$_SESSION['idnya']=$cekdata['ID_ADMIN'];
header('location:home.php');
}
else{
?>
<script language"javascript">
alert("MAAF PASSWORD/TYPE USER SALAH!");
history.go(-1);
</script>
<?php
}
?>