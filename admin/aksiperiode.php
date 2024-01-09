<?php
session_start();

include "../fungsi/koneksi.php";

  
  
  $periode   = $_POST['periodedaf'];
  $jml_data = count($periode);
  
  
  $tahunawaldaf=$_POST['tahunawaldaf'];
  $tahunakhirdaf=$_POST['tahunakhirdaf'];
  
  
  for ($i=0; $i <= $jml_data; $i++){
	
    mysql_query("UPDATE periode SET periodeawal='".$tahunawaldaf[$i]."',periodeakhir='".$tahunakhirdaf[$i]."' WHERE periode ='".$periode[$i]."'",$konek);
      
    }
  
  header('Location:home.php?module=tableperiode');



?>
