<?php
include"../fungsi/koneksi.php";
$terimanagari=mysql_query("update nagari set status='1' where kodenagari='$_POST[kode]'",$konek);
header("location:home.php?module=nagari");
?>