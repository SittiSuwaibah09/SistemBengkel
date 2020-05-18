 <?php
include "koneksi.php";
$idad=$_POST['idad'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$alamat=$_POST['alamat'];
$tgl=$_POST['tgl'];
$notlp=$_POST['notlp'];

mysqli_query($koneksi,"UPDATE mekanik SET NAMA_MK='$nama',JENIS_KELAMIN_MK='$jenis',ALAMAT_MK='$alamat',TGL_LAHIR_MK='$tgl',NO_TLP_MK='$notlp' WHERE ID_MEKANIK='$idad'") or die ("Hapus data admin yang terkait");
?>
<script language="javascript">
alert("DATA BERHASIL DIUPDATE");
document.location='datamekanik.php';
</script>