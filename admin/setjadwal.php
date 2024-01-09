<?php

include"../fungsi/koneksi.php";



$tanggal=$_POST['tanggal'];



		if(!$tanggal ){ 

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

			<a href='home.php?module=jadwal'> <b>ULANG LAGI</b></a>";

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

$tgljadwal=substr($_POST['tanggal'],8,2);
$blnjadwal=substr($_POST['tanggal'],5,2);
$thnjadwal=substr($_POST['tanggal'],2,2);
$cektgl=$thnjadwal.$blnjadwal.$tgljadwal;

$mintaberita=mysql_query("select * from jadwal where nojadwal like '$cektgl%' order by nojadwal desc",$konek);

	$ber=mysql_fetch_array($mintaberita);

	$hitungber=mysql_num_rows($mintaberita);

	

	if($hitungber==0){

	$nojadwal=$cektgl.'001';

	}

	else

	{

	$nobaruu= substr($ber[0],6,3) +1;

	$nobaru=sprintf('%03d',$nobaruu);
	$nojadwal=$cektgl.$nobaru;

	}
	
	$mintatrayek=mysql_query("select kode from trayek where keterangan='$_POST[trayek]'",$konek);
	$tra=mysql_fetch_array($mintatrayek);
	$mintaarmada=mysql_query("select noarmada from armada where namaarmada='$_POST[armada]'",$konek);
	$arm=mysql_fetch_array($mintaarmada);
	
		$input=mysql_query("insert into jadwal values('$nojadwal','$_POST[tanggal]','$_POST[jam]','$tra[0]','$arm[0]','$_POST[harga]','$_POST[tampil]')",$konek);
		
		

		header("location:home.php?module=jadwal");

		}

		

		?>