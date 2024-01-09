<?php
session_start();
include"../fungsi/koneksi.php";
$kode=$_GET['kode'];
$mintaberita=mysql_query("select * from gallery where nogallery=$kode",$konek);
$ber=mysql_fetch_array($mintaberita);
unlink("../galeri/$ber[gambargallery]");   
$hapusdata=mysql_query("delete from gallery where nogallery=$kode",$konek);
echo "<script>window.alert('Penghapusan Berhasil');
          window.location=('home.php?module=galeri') </script>";
?>
