<?php

session_start();

include"../fungsi/koneksi.php";

include"../fungsi/fungsigambar.php";

$lokasi_file    = $_FILES['fupload']['tmp_name'];

  $tipe_file      = $_FILES['fupload']['type'];

  $nama_file      = $_FILES['fupload']['name'];

  $acak           = rand(1,99);

  $nama_file_unik = $acak.$nama_file; 

  

 



  // Apabila ada gambar yang diupload

  if (!empty($lokasi_file)){

    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){

    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');

        window.location=('home.php?module=tambahgambarheader)</script>";

    }

    else{

    UploadGambarheader($nama_file_unik);

	

	



mysql_query("INSERT INTO gambarheader VALUES('','$_POST[nama]','$_POST[kodekab]','$nama_file_unik','$_POST[aktif]')",$konek);

  echo "<script>window.alert('Update berhasil');

          window.location=('home.php?module=gambarheader') </script>";



  }

  }

  else{

   mysql_query("INSERT INTO gambarheader VALUES('','$_POST[nama]','$_POST[kodekab]','','$_POST[aktif]')",$konek);

 echo "<script>window.alert('Update berhasil');

          window.location=('home.php?module=gambarheader') </script>";



  }





?>