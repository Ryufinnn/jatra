<?php

session_start();



include "../fungsi/koneksi.php";
 

  $no   = $_POST['no'];

  $jml_data = count($no);

  

  

  $nopol=$_POST['nopol'];
  $nama=$_POST['nama'];

  

  

  

  for ($i=0; $i <= $jml_data; $i++){

	

    mysql_query("UPDATE armada SET nopol='".$nopol[$i]."',namaarmada='".$nama[$i]."' WHERE noarmada='".$no[$i]."'",$konek);

      

    }

  

  header('Location:home.php?module=armada');







?>

