<?php
session_start();

include "../fungsi/koneksi.php";

    
  $kode   = $_POST['kode'];
  
    mysql_query("UPDATE halamanstatispusat SET keterangan='$_POST[judul]',isi='$_POST[isi]' WHERE nohalaman =$_POST[kode]",$konek);
      
  
  
  header('Location:home.php?module=halamanstatis');



?>
