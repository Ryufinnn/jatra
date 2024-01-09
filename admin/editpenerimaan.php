<?php
include"../fungsi/koneksi.php";
if($_POST['status']=='verified'){
$status='1';
}
else{
$status='0';
}
$editpenerimaan=mysql_query("update penerimaan set noresi='$_POST[noresi]',status='$status' where nopeserta='$_POST[nopeserta]'",$konek);
header("location:home.php?module=editcalon&nopeserta=$_POST[nopeserta]");
 ?>