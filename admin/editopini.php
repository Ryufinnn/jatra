<?php
include"../fungsi/koneksi.php";
include"../fungsi/fungsifile.php";
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
 
if (empty($lokasi_file)){
    mysql_query("UPDATE opini SET judulopini= '$_POST[judul]',isiopini='$_POST[berita]',tglopini='$_POST[tanggal]',penulis='$_POST[penulis]' WHERE idopini='$_POST[id]'");
  }
  else{
    


 
  UploadArtikel($nama_file_unik);
    mysql_query("UPDATE opini SET judulopini= '$_POST[judul]',isiopini='$_POST[berita]',tglopini='$_POST[tanggal]',penulis='$_POST[penulis]',file='$nama_file_unik' WHERE idopini='$_POST[id]'");
  }
  echo "<script>window.alert('Update berhasil');
          window.location=('home.php?module=opini') </script>";

?>