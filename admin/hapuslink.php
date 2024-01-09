<?php

session_start();

include"../fungsi/koneksi.php";

$kode=$_GET['kode'];



$hapusdata=mysql_query("delete from link where nolink='$_GET[kode]' ",$konek);


header("location:home.php?module=modullink");









?>

