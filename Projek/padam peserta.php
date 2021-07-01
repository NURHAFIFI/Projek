<?php
include 'config.php';
$nama_peserta=$_GET['nama_peserta'];
$result=mysqli_query($link, "delete from course where nama_peserta=$nama_peserta");
echo "<script>alert('Hapus maklumat berjaya');
window.location='senarai_peserta.php'</script>";
?>
?>