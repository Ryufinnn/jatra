<?php
session_start();
include"../fungsi/koneksi.php";

$password=md5($_POST['password']);
$konfirmasipassword=md5($_POST['konfirmasipassword']);
		if(!$password || $password!=$konfirmasipassword){ 
		    echo "
  <link href='../css/pemberitahuan.css' rel='stylesheet' type='text/css' />
<link rel='shortcut icon' type='image/x-icon' href='../images/siti.png' />";
  echo "
  <div id=wrapper>
  	<div id=kepala>
   
  	</div>
  	<div id=tengah>
  		<b class=xtop></b><b class=xb1></b><b class=xb2></b><b class=xb3></b><b class=xb4></b>
		<div class=xboxcontent>
		<p align=center>";
			echo"

			Maaf data belum bisa di simpan<br>
			mungkin ada kesalahan input atau data masih ada yang kosong<br>
			<a href='home.php?module=inputperiode'> <b>ULANG LAGI</b></a>";
			echo"</p>

</div>
<b class=xbottom></b><b class=xb4></b><b class=xb3></b><b class=xb2></b><b class=xb1></b>

  </div>
  <div id=kaki></div>
  </div>
    ";

		}
		else
		{
		
		$input=mysql_query("update adminpusat set password='$password' where kodeuser='$_SESSION[iduser]'",$konek);
		
		echo "<script>window.alert('Password Anda Berhasil Di Setting');
          window.location=('home.php') </script>";
		}
		
		
		
 




?>