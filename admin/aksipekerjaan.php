<?php
session_start();

include "../fungsi/koneksi.php";

  
  
  $kode   = $_POST['kode'];
  $jml_data = count($kode);
  
  
  $keterangan=$_POST['keterangan'];
  
  
  
  for ($i=0; $i <= $jml_data; $i++){
	
    mysql_query("UPDATE pekerjaanortu SET keterangan='".$keterangan[$i]."' WHERE kode ='".$kode[$i]."'",$konek);
      
    }
  
  header('Location:home.php?module=tablepekerjaan');



?>
