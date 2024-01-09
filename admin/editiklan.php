<?php
include"../fungsi/koneksi.php";
include"../fungsi/fungsigambar.php";
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
 
if (empty($lokasi_file)){
    mysql_query("UPDATE iklan SET tanggalexp= '$_POST[tanggal]',owner ='$_POST[pemilik]',kontak='$_POST[kontak]',keterangan='$_POST[keterangan]' WHERE idiklan=$_POST[id]");
  }
  else{
    


 
  UploadIklan($nama_file_unik);
   mysql_query("UPDATE iklan SET tanggalexp= '$_POST[tanggal]',owner ='$_POST[pemilik]',kontak='$_POST[kontak]',keterangan='$_POST[keterangan]',file='$nama_file_unik' WHERE idiklan=$_POST[id]");
  }
  echo "<script>window.alert('Update berhasil');
          window.location=('home.php?module=iklan') </script>";

?>