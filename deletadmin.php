<?php
include'koneksi.php';
$del=$_GET['idnya'];
mysqli_query($koneksi,"DELETE FROM admin WHERE ID_ADMIN='$del'");
?>
<script language="javascript">
alert("DATA BERHASIL DIHAPUS");
document.location='dataadmin.php';
</script>
