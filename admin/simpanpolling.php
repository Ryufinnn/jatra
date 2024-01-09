<?php

session_start();

include"../fungsi/koneksi.php";



mysql_query("INSERT INTO polling VALUES('','".date("Y-m-d")."','$_POST[judul]','$_SESSION[iduser]')",$konek);

  echo "<script>window.alert('Update berhasil');

          window.location=('home.php?module=polling') </script>";
 

 
  


  





?>