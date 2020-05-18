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

mysqli_query($koneksi,"UPDATE admin SET NAMA_LENGKAP_AD='$nama',JENIS_KELAMIN_AD='$jenis',ALAMAT_AD='$alamat',TGL_LAHIR_AD='$tgl',NO_TLP_AD='$notlp',USERNAME='$user',PASSWORD='$pass' WHERE ID_ADMIN='$idad'") or die ("Hapus data admin yang terkait");
?>
<script language="javascript">
alert("DATA BERHASIL DIUPDATE");
document.location='dataadmin.php';
</script>