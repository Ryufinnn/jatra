<?php
session_start();
include"../fungsi/koneksi.php";
$kode=$_GET['kode'];

$hapusdata=mysql_query("delete from adminnagari where kodeuser='$kode' and kodenagari='$_GET[nagari]'",$konek);
header("location:home.php?module=manajemenuser");




?>
