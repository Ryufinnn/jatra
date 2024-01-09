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

			<a href='home.php?module=armada'> <b>ULANG LAGI</b></a>";

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

		

		$input=mysql_query("insert into armada values('$_POST[no]','$_POST[nopol]','$_POST[nama]')",$konek);
		for($a=1;$a<37;$a++){
		  if($a<10){
		  $a='0'.$a;
		  
		  }
		  
		 $nokursi=$_POST['no'].'-'.$a;
		 $masukankursi=mysql_query("insert into kursi values('$nokursi','$_POST[no]')",$konek); 
		
		}

		

		header("location:home.php?module=armada");

		}

		

		?>