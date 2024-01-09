<?php
session_start();

include "../fungsi/koneksi.php";

  
  
  $iduser   = $_POST['iduser'];
  $jml_data = count($iduser);
  
  
  $username=$_POST['username'];
  $namaterang=$_POST['namaterang'];
  $level=$_POST['leveluser'];
  
  for ($i=0; $i <= $jml_data; $i++){
  if($level[$i]=='1-Super User'){
  $levelbaru='1';
  }
  else{
  $levelbaru='2';
  }
	
    mysql_query("UPDATE adminpusat SET username='".$username[$i]."',namaterang='".$namaterang[$i]."',level='$levelbaru' WHERE kodeuser ='".$iduser[$i]."'",$konek);
      
    }
  
  header('Location:home.php?module=manajemenuser');



?>
