<?php
session_start();
include"fungsi/koneksi.php";



$username=$_POST['username'];



		if(!$username ){ 

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

			<a href='index.php?module=daftar'> <b>ULANG LAGI</b></a>";

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
    $mintaberita=mysql_query("select * from akun order by noakun desc",$konek);

	$ber=mysql_fetch_array($mintaberita);

	$hitungber=mysql_num_rows($mintaberita);

	

	if($hitungber==0){

	$nojadwal='A001';

	}

	else

	{

	$nobaruu= substr($ber[0],1,3) +1;

	$nobaru=sprintf('%03d',$nobaruu);
	$nojadwal='A'.$nobaru;

	}

		

		$input=mysql_query("insert into akun values('$nojadwal','$_POST[nama]','$_POST[alamat]','$_POST[telpon]','$_POST[ktp]','$_POST[username]',md5('$_POST[password]'),'Y','".date('Y-m-d')."')",$konek);
		
         session_start();

  

 

  $_SESSION[username]  =$_POST['username'];

  $_SESSION[password]  =$_POST['password'];

  $_SESSION[noakun]    =$nojadwal;

  
		
		 
		header("location:index.php?module=pesantiket");

		}

		

		?>