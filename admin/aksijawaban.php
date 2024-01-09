<?php

session_start();

include "../fungsi/koneksi.php";
  $kodepilihan   = $_POST['kodepilihan'];
  $kodepolling=$_POST[kodepolling];

  $jml_data = count($kodepilihan);
$keterangan=$_POST['keterangan'];
  for ($i=0; $i <= $jml_data; $i++){

    mysql_query("UPDATE detpolling SET keterangan='".$keterangan[$i]."' WHERE kodepilihan='".$kodepilihan[$i]."' and nopolling=$_POST[kodepolling]",$konek);
     

    }

header("Location:home.php?module=setingjawaban&kode=$_POST[kodepolling]");


?>

