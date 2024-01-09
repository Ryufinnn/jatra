<?php
session_start();
include"../fungsi/koneksi.php";
$kode=$_GET['kode'];

$hapusdata=mysql_query("delete from agendapusat where idagenda='$kode'",$konek);
header("location:home.php?module=agendaforum");




?>
