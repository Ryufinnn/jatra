<?php
include"../fungsi/koneksi.php";
$nonaktifkandulu=mysql_query("update periode set aktif='N'",$konek);
$buataktif=mysql_query("update periode set aktif='Y' where periode='$_GET[kode]'",$konek);
header("location:home.php?module=tableperiode");

?>