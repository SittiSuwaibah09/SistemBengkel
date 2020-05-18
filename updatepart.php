<?php
include "koneksi.php";
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$qty=$_POST['qty'];
$harga=$_POST['harga'];

mysqli_query($koneksi,"UPDATE part SET NAMA_PRT='$nama',QUANTITY_PRT='$qty',HARGA_PRT='$harga' WHERE KODE_PART='$kode'") or die ("script eror");
?>
<script language="javascript">
alert("DATA BERHASIL DIUPDATE");
document.location='datapart.php';
</script>