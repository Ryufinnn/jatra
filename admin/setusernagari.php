<?php
include"../fungsi/koneksi.php";

$iduser=$_POST['iduser'];

		if(!$iduser ){ 
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
			<a href='home.php?module=manajemenuser'> <b>ULANG LAGI</b></a>";
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
		$password=md5($_POST['password']);
		if($_POST[level]=='1-Super User'){
		$level='1';
		}
		else{
		$level='2';
		}
		
		$input=mysql_query("insert into adminnagari values('$_POST[iduser]','$_POST[username]','$_POST[namaterang]','$password','$level','$_POST[kodenagari]')",$konek);
		
		header("location:home.php?module=manajemenuser");
		}
		
		
		
 




?>