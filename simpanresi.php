<?php

include"fungsi/koneksi.php";
$mintano=mysql_query("select notransfer from pemesanan where notran='$_POST[notran]'",$konek);
$n=mysql_fetch_array($mintano);

if($n[0]!=$_POST['noresi'] ){ 

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

			<a href='index.php?module=inputresi&notran=$_POST[notran]' onclick=''> <b>ULANG LAGI</b></a>";

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
$masukanresi=mysql_query("update pemesanan set status='1' where notran='$_POST[notran]'",$konek);
header("location:cetaktiketpdf.php?notran=$_POST[notran]");
}
?>