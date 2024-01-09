<?php
include"../fungsi/koneksi.php";

$periode=$_POST['periode'];

		if(!$periode ){ 
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
		
		$input=mysql_query("insert into periode values('$_POST[periode]','$_POST[tahunawal]','$_POST[tahunakhir]','N')",$konek);
		
		header("location:home.php?module=inputperiode");
		}
		
		
		
 




?>