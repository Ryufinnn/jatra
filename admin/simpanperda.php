<?php
session_start();
include"../fungsi/koneksi.php";
include"../fungsi/fungsifile.php";
$lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
 
$mintaberita=mysql_query("select * from perda order by nourut desc",$konek);
	$ber=mysql_fetch_array($mintaberita);
	$hitungber=mysql_num_rows($mintaberita);
	
	if($hitungber==0){
	$nobaru='00001';
	}
	else
	{
	$nobaruu=$ber[0] +1;
	$nobaru=sprintf('%05d',$nobaruu);
	}
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
   
    UploadPerda($nama_file_unik);
	
	

mysql_query("INSERT INTO perda VALUES('$nobaru','$_POST[noundang]','$_POST[keterangan]','$_POST[tanggal]','$nama_file_unik')",$konek);
  echo "<script>window.alert('Update berhasil');
          window.location=('home.php?module=perda') </script>";
  
  }
  else{
    mysql_query("INSERT INTO perda VALUES('$nobaru','$_POST[noundang]','$_POST[keterangan]','$_POST[tanggal]','')");
 echo "<script>window.alert('Update berhasil');
          window.location=('home.php?module=perda') </script>";

  }


?>