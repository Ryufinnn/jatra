<?php

include"../fungsi/koneksi.php";


if($_POST['biaya']=="" ){ 

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

			<a href='home.php?module=cek&notran=$_POST[notran]' onclick=''> <b>ULANG LAGI</b></a>";

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
$masukanresi=mysql_query("update pemesanan set biayabarang='$_POST[biaya]',panjar='$_POST[panjar]',kekurangan='$_POST[kekurangan]',status='1' where notran='$_POST[notran]'",$konek);
header("location:home.php?module=cek&notran=$_POST[notran]");
}
?>