<?php

include"../fungsi/koneksi.php";

 

  

mysql_query("UPDATE link SET link= '$_POST[link]',keterangan='$_POST[ket]' WHERE nolink='$_POST[no]'");

   echo "<script>window.alert('Update berhasil');

          window.location=('home.php?module=modullink') </script>";



?>