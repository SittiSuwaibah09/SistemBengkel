<?php
include "koneksi.php";
$id=$_POST['idser'];
$namin=$_POST['namin'];
$tgl=$_POST['tgl'];
$jenis=$_POST['jenis'];
$jumlah=$_POST['jumlah'];

mysqli_query($koneksi,"UPDATE service SET ID_ADMIN='$namin',TGL_SERVIS='$tgl',JENIS_SERVIS='$jenis',TOTAL_BAYAR='$jumlah' WHERE NO_URUT='$id'") or die ("script eror");
?>
<script language="javascript">
alert("DATA BERHASIL DIUPDATE");
document.location='dataservice.php';
</script>