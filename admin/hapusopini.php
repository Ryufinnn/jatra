<?php
session_start();
include"../fungsi/koneksi.php";
$kode=$_GET['kode'];
$mintaberita=mysql_query("select * from opini where idopini='$kode'",$konek);
$ber=mysql_fetch_array($mintaberita);
unlink("../file/artikel/$ber[file]");   
$hapusdata=mysql_query("delete from opini where idopini='$kode'",$konek);
echo "<script>window.alert('Penghapusan Berhasil');
          window.location=('home.php?module=opini') </script>";
?>
