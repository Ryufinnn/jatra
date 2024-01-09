<?php
session_start();
include"fungsi/koneksi.php";
$nojadwal=$_POST['nojadwal'];
		if(!$nojadwal ){ 

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

			<a href='' onclick='self.history.back()'> <b>ULANG LAGI</b></a>";

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
    
	
	$mintaberita=mysql_query("select * from pemesanan order by notran desc",$konek);

	$ber=mysql_fetch_array($mintaberita);

	$hitungber=mysql_num_rows($mintaberita);

	

	if($hitungber==0){

	$no='T0001';

	}

	else

	{

	$nobaruu= substr($ber[0],1,4) +1;

	$nobaru=sprintf('%04d',$nobaruu);
	$no='T'.$nobaru;

	}
		$tgl=date("Y-m-d");
        $captcha_text = substr(md5(uniqid('')),-9,9);

        $_SESSION['captcha_session'] = $captcha_text;
		$input=mysql_query("insert into pemesanan values('$no','$tgl','$_SESSION[noakun]','$_POST[nojadwal]','0','0','$_POST[pemberhentian]','0','0','$_POST[kondisi]','$_POST[atasnama]')",$konek);
		$hitungdatakiri=count($_POST['kuki']);
		if($hitungdatakiri>0){
		
		foreach($_POST['kuki'] as $nilai){
        if($nilai!=""){
		$inputkursi=mysql_query("insert into detailpemesanan values('$no','$nilai')",$konek);
		}
        }
		}
		
		


		header("location:oke.php");

		}

		

		?>