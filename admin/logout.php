<?php
session_start();  
  unset($_SESSION[username]);
  unset($_SESSION[password]);
  unset($_SESSION[iduser]);
  unset($_SESSION[leveluser]);
  echo "<center>Anda telah sukses keluar sistem <b>[<a href=index.php>halaman utama</a>]<b>";


?>
