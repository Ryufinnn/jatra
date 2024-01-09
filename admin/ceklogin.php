<?php

include"../fungsi/koneksi.php";


$username=$_POST['username'];

$password=md5($_POST['password']);

$login=mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");

$ketemu=mysql_num_rows($login);

$r=mysql_fetch_array($login);



if($ketemu>0){

// Apabila username dan password ditemukan



  session_start();

  

 

  $_SESSION[username]  =$r[username];

  $_SESSION[password]  =$r[password];

  $_SESSION[idadmin]    =$r[idadmin];

  
  

  header('location:home.php');

  

}

else{

  echo "

  <link href='css/ceklogin.css' rel='stylesheet' type='text/css' />

<link rel='shortcut icon' type='image/x-icon' href='images/siti.png' />";

  echo "

  <div id=wrapper>

  <div id=kepala>

   

  </div>

  <div id=tengah>

  <b class=xtop></b><b class=xb1></b><b class=xb2></b><b class=xb3></b><b class=xb4></b>

<div class=xboxcontent>

<p align=center>

Maaf anda tidak bisa login<br>

mungkin ada kesalahan input atau akun anda sedang diblokir<br>

<a href='index.php'><b>ULANGI LAGI</b></a>

</p>



</div>

<b class=xbottom></b><b class=xb4></b><b class=xb3></b><b class=xb2></b><b class=xb1></b>



  </div>

  <div id=kaki></div>

  </div>

    ";

}

?>

