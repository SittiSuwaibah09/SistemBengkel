 <?php
include "koneksi.php";
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$qty=$_POST['qty'];
$harga=$_POST['harga'];
$_GET['idnya'];
$cek=mysqli_query($koneksi,"select * from part where KODE_PART = '$_GET[idnya]'");
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
mysqli_query($koneksi,"INSERT INTO part (KODE_PART,NAMA_PRT,QUANTITY_PRT,HARGA_PRT) VALUES ('$kode','$nama','$qty','$harga')") or die ("Id Sudah Terpakai");
?>
<script language="javascript">
alert("DATA BERHASIL DI SIMPAN");
document.location='dataadmin.php';
</script>
<?php
}
?>