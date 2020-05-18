<?php
include "koneksi.php";
$id=$_POST['idser'];
$namin=$_POST['namin'];
$tgl=$_POST['tgl'];
$jenis=$_POST['jenis'];
$jumlah=$_POST['jumlah'];
if(empty($id)or empty($namin) or empty($tgl) or empty($jenis))
{
?>
<script language="javascript">
alert("DATA TIDAK BOLEH KOSONG");
history.go(-1);
</script>
<?php
}
else {
mysqli_query($koneksi,"INSERT INTO service (NO_URUT, ID_ADMIN, TGL_SERVIS, JENIS_SERVIS, TOTAL_BAYAR) VALUES ('$id', '$namin', '$tgl', '$jenis', '$jumlah')") or die ("Query Salah");
?>
<script language="javascript">
alert("DATA BERHASIL DI SIMPAN");
document.location='dataservice.php';
</script>
<?php
}
?>

