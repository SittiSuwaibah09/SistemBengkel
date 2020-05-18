<?php
include'koneksi.php';
$del=$_GET['idnya'];
mysqli_query($koneksi,"DELETE FROM mekanik WHERE ID_MEKANIK='$del'");
?>
<script language="javascript">
alert("DATA BERHASIL DIUPDATE");
document.location='datamekanik.php';
</script>