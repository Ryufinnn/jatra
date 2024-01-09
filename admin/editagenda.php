<?php
include"../fungsi/koneksi.php";

 

    mysql_query("UPDATE agendapusat SET tema= '$_POST[tema]',tempat='$_POST[tempat]',isi ='$_POST[isi]',tglmulai='$_POST[tanggalmulai]',tglselesai='$_POST[tanggalsel]',jam='$_POST[jam]' WHERE idagenda='$_POST[id]'");
 
  echo "<script>window.alert('Update berhasil');
          window.location=('home.php?module=agendaforum') </script>";

?>