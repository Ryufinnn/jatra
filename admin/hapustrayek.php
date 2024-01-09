<?php

session_start();

include"../fungsi/koneksi.php";

$kode=$_GET['kode'];



$hapusdata=mysql_query("delete from trayek where kode='$kode'",$konek);

header("location:home.php?module=trayek");









?>

