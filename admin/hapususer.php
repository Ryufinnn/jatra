<?php
session_start();
include"../fungsi/koneksi.php";
$kode=$_GET['kode'];

$hapusdata=mysql_query("delete from adminpusat where kodeuser='$kode'",$konek);
header("location:home.php?module=manajemenuser");




?>
