<?php
include'koneksi.php';
$del=$_GET['idnya'];
mysqli_query($koneksi,"DELETE FROM part WHERE KODE_PART='$del'");
?>
<script language="javascript">
alert("DATA BERHASIL DIUPDATE");
document.location='datapart.php';
</script>
