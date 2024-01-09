<?php

session_start();

include"../fungsi/koneksi.php";


$hapusdata=mysql_query("delete from detpolling where kodepilihan='$_GET[kodepilihan]' and nopolling=$_GET[kodepolling]",$konek);

header("location:home.php?module=setingjawaban&kode=$_GET[kodepolling]");









?>

