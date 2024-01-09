<?php

session_start();



include "../fungsi/koneksi.php";
 
$hapuspemesanan=mysql_query("delete from pemesanan where notran='$_GET[notran]'",$konek);
$hapuskursi=mysql_query("delete from detailpemesanan where notran='$_GET[notran]'",$konek); 
  

  header('Location:home.php?module=pemesanan');







?>

