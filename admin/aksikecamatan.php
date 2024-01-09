<?php

include"../fungsi/koneksi.php";

$editnagari=mysql_query("update kecamatan set namakecamatan='$_POST[nama]' where kodekec='$_POST[kode]' and kodekab='$_POST[kodekab]'",$konek);

header("location:home.php?module=editkecamatan&kode=$_POST[kode]&kodekab=$_POST[kodekab]");

?>

