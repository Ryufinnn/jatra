<?php
session_start();
include"../fungsi/koneksi.php";
$kode=$_GET['kode'];

$hapusdata=mysql_query("delete from nagari where kodenagari='$kode'",$konek);
$hapusberitanagari=mysql_query("delete from beritanagari where kodenagari='$kode'",$konek);
header("location:home.php?module=nagari");




?>
