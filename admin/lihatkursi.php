<?php
include"../fungsi/koneksi.php";
$mintakode=mysql_query("select noarmada from armada where namaarmada='$_POST[armada]'",$konek);
$kode=mysql_fetch_array($mintakode);

header("location:home.php?module=kursi&noarmada=$kode[0]");

?>