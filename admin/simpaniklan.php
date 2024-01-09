<?php
session_start();
include"../fungsi/koneksi.php";
include"../fungsi/fungsifile.php";
$lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
 $tgl=date("Y-m-d");

  if (!empty($lokasi_file)){
   
    UploadIklan($nama_file_unik);
	
	

mysql_query("INSERT INTO iklan VALUES('','$tgl','$_POST[tanggal]','$nama_file_unik','$_POST[pemilik]','$_POST[kontak]','$_POST[keterangan]')",$konek);
  echo "<script>window.alert('Update berhasil');
          window.location=('home.php?module=iklan') </script>";
  
  }
  else{
    mysql_query("INSERT INTO iklan VALUES('','$tgl','$_POST[tanggal]','','$_POST[pemilik]','$_POST[kontak]','$_POST[keterangan]')");
 echo "<script>window.alert('Update berhasil');
          window.location=('home.php?module=iklan') </script>";

  }


?>