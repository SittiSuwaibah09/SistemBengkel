 <?php
include "koneksi.php";
$idad=$_POST['idad'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$alamat=$_POST['alamat'];
$tgl=$_POST['tgl'];
$notlp=$_POST['notlp'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$_GET['idnya'];
$cek=mysqli_query($koneksi,"select * from admin where ID_ADMIN = '$_GET[idnya]'");
$cari=mysqli_fetch_array($cek);
if($idad == "$_GET[idnya]")
{
?>
<script language="javascript">
alert("DATA TIDAK BOLEH SAMA");
history.go(-1);
</script>
<?php
}
else {
mysqli_query($koneksi,"INSERT INTO admin (ID_ADMIN,NAMA_LENGKAP_AD,JENIS_KELAMIN_AD,ALAMAT_AD,TGL_LAHIR_AD,NO_TLP_AD,USERNAME,PASSWORD) VALUES ('$idad','$nama','$jenis','$alamat','$tgl','$notlp','$user','$pass')") or die ("Id Sudah Terpakai");
?>
<script language="javascript">
alert("DATA BERHASIL DI SIMPAN");
document.location='index.php';
</script>
<?php
}
?>