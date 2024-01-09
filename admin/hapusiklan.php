<?php
session_start();
include"../fungsi/koneksi.php";
$kode=$_GET['kode'];
$mintaberita=mysql_query("select * from iklan where idiklan=$kode",$konek);
$ber=mysql_fetch_array($mintaberita);
unlink("../iklan/$ber[file]");   
$hapusdata=mysql_query("delete from iklan where idiklan=$kode",$konek);
echo "<script>window.alert('Penghapusan Berhasil');
          window.location=('home.php?module=iklan') </script>";
?>
