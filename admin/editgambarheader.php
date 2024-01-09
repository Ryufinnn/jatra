<?php

include"../fungsi/koneksi.php";

include"../fungsi/fungsigambar.php";

  $lokasi_file    = $_FILES['fupload']['tmp_name'];

  $tipe_file      = $_FILES['fupload']['type'];

  $nama_file      = $_FILES['fupload']['name'];

  $acak           = rand(1,99);

  $nama_file_unik = $acak.$nama_file; 

 

if (empty($lokasi_file)){

    mysql_query("UPDATE gambarheader SET namagambar= '$_POST[nama]',aktif='$_POST[aktif]',kodekab='$_POST[kodekab]' WHERE nogambar='$_POST[no]'");

  }

  else{

    





 

  UploadGambarheader($nama_file_unik);

   mysql_query("UPDATE gambarheader SET namagambar= '$_POST[nama]',gambar='$nama_file_unik',aktif='$_POST[aktif]',kodekab='$_POST[kodekab]' WHERE nogambar='$_POST[no]'");

  }

  echo "<script>window.alert('Update berhasil');

          window.location=('home.php?module=gambarheader') </script>";



?>