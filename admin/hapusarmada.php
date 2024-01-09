<?php

session_start();

include"../fungsi/koneksi.php";

$no=$_GET['no'];



$hapusdata=mysql_query("delete from armada where noarmada='$no'",$konek);

header("location:home.php?module=armada");









?>

