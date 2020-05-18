<?php
include'koneksi.php';
$del=$_GET['idnya'];
mysqli_query($koneksi,"DELETE FROM service WHERE NO_URUT='$del'");
?>
<script language="javascript">
alert("DATA BERHASIL DIUPDATE");
document.location='dataservice.php';
</script>
