<?php

include"../fungsi/koneksi.php";



$no=$_POST['no'];



		if(!$no ){ 

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

			<a href='home.php?module=editjadwal&no=$_POST[no]'> <b>ULANG LAGI</b></a>";

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

		$mintakodetrayek=mysql_query("select kode from trayek where keterangan='$_POST[trayek]'",$konek);
		$kt=mysql_fetch_array($mintakodetrayek);
		$mintakodearmada=mysql_query("select noarmada from armada where namaarmada='$_POST[armada]'",$konek);
		$ar=mysql_fetch_array($mintakodearmada);
		
		

		$input=mysql_query("update jadwal set tanggal='$_POST[tanggal]',jam='$_POST[jam]',kodetrayek='$kt[0]',noarmada='$ar[0]',tampilkan='$_POST[status]',harga='$_POST[harga]' where nojadwal='$_POST[no]'",$konek);
		

		

		header("location:home.php?module=jadwal");

		}

		

		?>