 <?php
include "koneksi.php";
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$qty=$_POST['qty'];
$harga=$_POST['harga'];
if(empty($kode) or empty($nama) or empty($qty))
{
?>
<script language="javascript">
alert("DATA TIDAK BOLEH KOSONG");
history.go(-1);
</script>
<?php
}
else {
mysqli_query($koneksi,"INSERT INTO part (KODE_PART,NAMA_PRT,QUANTITY_PRT,HARGA_PRT) VALUES ('$kode','$nama','$qty','$harga')") or die ("Id Sudah Terpakai");
?>
<script language="javascript">
alert("DATA BERHASIL DI SIMPAN");
document.location='datapart.php';
</script>
<?php
}
?>