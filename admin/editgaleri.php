<?php
include"../fungsi/koneksi.php";
include"../fungsi/fungsigambar.php";
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
 $mintaalbum=mysql_query("select * from album where namaalbum='$_POST[album]'",$konek);
 $al=mysql_fetch_array($mintaalbum);
if (empty($lokasi_file)){
    mysql_query("UPDATE gallery SET keterangan= '$_POST[keterangan]',noalbum =$al[0] WHERE nogallery=$_POST[no]");
  }
  else{
    


 
  UploadGaleri($nama_file_unik);
   mysql_query("UPDATE gallery SET keterangan= '$_POST[keterangan]',noalbum =$al[0],gambargallery='$nama_file_unik' WHERE nogallery=$_POST[no]");
  }
  echo "<script>window.alert('Update berhasil');
          window.location=('home.php?module=galeri') </script>";

?>