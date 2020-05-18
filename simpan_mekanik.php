 <?php
include "koneksi.php";
$idad=$_POST['idad'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$alamat=$_POST['alamat'];
$tgl=$_POST['tgl'];
$notlp=$_POST['notlp'];
$_GET['idnya'];
$cek=mysqli_query($koneksi,"select * from mekanik where ID_MEKANIK = '$_GET[idnya]'");
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
mysqli_query($koneksi,"INSERT INTO mekanik (ID_MEKANIK,NAMA_MK,JENIS_KELAMIN_MK,ALAMAT_MK,TGL_LAHIR_MK,NO_TLP_MK) VALUES ('$idad','$nama','$jenis','$alamat','$tgl','$notlp')") or die ("Id Sudah Terpakai");
?>
<script language="javascript">
alert("DATA BERHASIL DI SIMPAN");
document.location='datamekanik.php';
</script>
<?php
}
?>