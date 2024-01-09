<?php
if($_GET[module]=='login'){
echo'<form action="ceklogin.php" method="post" onsubmit="return pesan();" name="frmlogin">
<br><br>
  <table border="0" cellpadding="6" cellspacing="6" align="center" style="margin-left:auto;margin-right:auto">
   
  <tr><td class="label">Username</td><td><input type="text" size="30" id="username" name="username" class="kuning" /> </td></tr>
  <tr><td class="label">Password</td><td><input type="password" size="30" id="password" 
  name="password" class="kuning"/></td></tr>
 	<tr><td></td><td><input type="submit" value="LOGIN" style="cursor:pointer"/> </td></tr>
	</table>
  </form><br><br>  ';

}

elseif($_GET[module]=='cara'){

echo"

<br>
<p align=center><b>Cara Pemesanan</b></p>
<ul>
<li>Jika anda belum terdaftar (belum mempunyai akun), silahkan <a href='?module=daftar'>mendaftar</a> untuk membuat akun baru</li>
<li>Isi data dengan benar dan sesuai dengan identitas asli anda</li>
<li>Pesan Bus dan kursi sesuai dengan rute dan jadwal yang anda inginkan</li>
<li>TRansfer Uang Panjar keberangkatan (diluar biaya barang) ke Rek. Bank Mandiri dengan norek. 111-39899484-8 minimal Rp. 50.000</li>
<li>Setelah mentransfer, tunjukan bukti transfer kepada petugas counter </li>
<li>Oleh petugas counter akan diberikan tiket asli setelah barang anda ditimbang, tiket asli digunakan untuk diberikan kepada asisten driver</li>
</ul>

";


echo"
<br>";


}
elseif($_GET[module]=='file'){
$mintaundang=mysql_query("select * from detfile where kode='$_GET[kode]'",$konek);

echo"
<br><br>
 
<table border=0 style='margin-top:10px;margin-left:10px;'>

		<tr><td style='height:30px;'>

		<font style='color:maroon;font-size: 1.0em;font-variant: small-caps;' '><b>Daftar File Pembelajaran</b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>

		

<table border=0 cellpadding=0 cellspacing=0 style='margin-top:30px;margin-left:10px;'>

<tr class='trkepala'>

<td class='tdgrid' style='width:350px;padding-left:5px;color:maroon'>Keterangan</td><td class='tdgrid' style='width:400px;padding-left:5px;color:maroon;'>File</td></tr>";

while($un=mysql_fetch_array($mintaundang)){



echo"

<tr class='trseragam'>
<td class='tdgrid' style='padding-left:5px;'>$un[1]</td>
<td class='tdgrid' style='padding-left:5px;'><a href='downlot.php?file=pembelajaran/$un[2]'>$un[2]</a></td>




</tr>

";

}

echo"</table>
<br>";


}

elseif($_GET[module]=='daftar'){
echo'<form action="daftarakun.php" method="post" onsubmit="return pesan();" name="frmlogin">
<p>Silahkan Daftar Disini</p>
<br><br>
  <table border="0" cellpadding="6" cellspacing="6" align="center" style="margin-left:auto;margin-right:auto">
   
  <tr><td class="label">Nama (sesuai KTP) </td><td><input type="text" size="30" id="nama" name="nama" class="kuning" /> </td></tr>
  <tr><td class="label">Alamat</td><td><input type="text" size="30" id="alamat" 
  name="alamat"  class="kuning"/></td></tr>
  <tr><td class="label">NO. Telpon</td><td><input type="text" size="15" id="telpon" name="telpon"  class="kuning" /> </td></tr>
  <tr><td class="label">NO. KTP</td><td><input type="text" size="25" id="ktp" 
  name="ktp"  class="kuning" /></td></tr>
  <tr><td class="label">Username</td><td><input type="text" size="20" id="username" name="username"  class="kuning" /> </td></tr>
  <tr><td class="label">PAssword</td><td><input type="password" size="30" id="password" 
  name="password"  class="kuning"/></td></tr>
 	<tr><td></td><td><input type="submit" value="DAFTAR" style="cursor:pointer"/> </td></tr>
	</table>
  </form><br><br>  ';

}

elseif($_GET[module]=='pesantiket'){
?>
<style type="text/css">
.trkepala{
background-color:#8000FF;
color:#FFFFFF;
}
.tdgrid{
border-right:thin solid #FFCC00;
}
.grid1{

border:none;

background:none;

height:25px;



}

.trseragam{

background-color:#FFFFFF;

}
</style>
<?php
echo"

<table border=0 cellpadding=0 cellspacing=0 style='border:solid thin  #000;margin-top:5px;'>

			  <tr class=trkepala>

			  <td class=tdgrid style='height:25px;padding-left:5px;padding-left:5px;padding-right:5px;' >No. Jadwal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Tanggal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Jam</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Trayek</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Armada</td>
			  <td>Harga</td>

			   </tr>";

			  $mintaanggota=mysql_query("select nojadwal,tanggal,jam,keterangan,namaarmada,tampilkan,jadwal.noarmada,harga from jadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada where tampilkan='Y' order by nojadwal asc,tanggal desc",$konek);

			  $hitunganggota=mysql_num_rows($mintaanggota);

			  

			  if($hitunganggota==0){

			  echo"

			  <tr>

			  <td class=tdgrid style='height:25px;'><input type=text class='grid1' size=15></td>

			  <td class=tdgrid><input type=text class='grid1' size=25></td>
              <td class=tdgrid><input type=text class='grid1' size=25></td>
			  <td class=tdgrid><input type=text class='grid1' size=25></td>
              <td class=tdgrid><input type=text class='grid1' size=25></td>
			
             

			  </tr>

			  ";

			  

			  }

			  else{

			  while($an=mysql_fetch_array($mintaanggota)){

			  

			  echo"

			  

			  <tr class=trseragam ondblclick=window.location.href='?module=lihatkursi&no=$an[0]&noarmada=$an[6]'>

			  <td class=tdgrid style='padding-left:5px;height:27px;'><input type=text class='grid1' size=10 value='$an[0]' name='no[]'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=9 value='$an[1]' name='nopol[]'></td>

			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=7 value='$an[2]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=12 value='$an[3]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=7 value='$an[4]' name='nama[]'></td>
			
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=5 value='$an[7]' name='nama[]'></td>
						 

			  

			  </tr>

			 

			  ";

			  }

			 

			  }

			  
 echo" </table>
 <i>*double click data diatas, untuk melihat ketersediaan kursi dan memesan kursi</i>
 </form><br>";

}

elseif($_GET[module]=='lihatkursi'){
?>
<script src="js/jquery.min.js"></script>
	<script src="js/jquery.reveal.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			// Button which will activate our modal
			   	$('#modal').reveal({ // The item which will be opened with reveal
				  	animation: 'fade',                   // fade, fadeAndPop, none
					animationspeed: 600,                       // how fast animtions are
					closeonbackgroundclick: true,              // if you click background will modal close?
					dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
				});
			return false;
			
		});
	</script>
	<link rel="stylesheet" href="css/styles.css">
<div id="modal">
	<div id="heading">
		PERHATIAN
	</div>

	<div id="content">
	<ul>
		<li>Tiket hanya berlaku pada tanggal dan jam yang ditentukan</li>
		<li>Pembatalan Tiket Dikenakan Denda 25% dari harga tiket</li>
		<li>Penumpang harus berkumpul maximal 1 jam sebelum keberangkatan, jika terlambat maka tiket dianggap batal dan uang tidak dapat dikembalikan</li>
		<li>Pesanan tempat harus disertakan persekot 50% dari harga tiket</li>
		<li>Setiap penumpang harap menjaga barang bawaanya masing masing, kami tidak bertanggung jawab atas kehilangan dan kerusakan barang</li>
		<li>Dilarang membawa barang yang melanggar hukum dan membahayakan</li>
		<li>Barang kecil tidak dikenakan biaya,jika dijaga sendiri oleh penumpang</li>
		<li>Jika terjadi kecelakaan dalam perjalanan, barang yang rusak/hilang tidak menjadi tanggung jawab perusahaan sampai timbul resiko menjadi tanggung jawab PT. Jasa Raharja</li>
		<li>Kepada Penumpang yang telah membeli tiket, dianggap telah memenuhi dan paham peraturan diatas</li>
	</ul>	
	  <a href="#" class="button green close"><img src="images/tick.png">Ya, Saya Mengerti</a>

		
	</div>
</div>

<?php
$mintaketjadwal=mysql_query("select jadwal.nojadwal,jadwal.tanggal,jadwal.jam,trayek.keterangan,armada.namaarmada from jadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada where jadwal.nojadwal='$_GET[no]'",$konek);
$kj=mysql_fetch_array($mintaketjadwal);
echo"
<form action='simpanpesanan.php' method='post'>
<table>
<tr>
<td>No. jadwal</td><td><input type=text class='kuning' value='$kj[0]' size=20 name='nojadwal'></td>
<td style='width:30px;'></td>
<td>Tanggal</td><td><input type=text class='kuning' value='$kj[1]' size=20></td>
</tr>
<tr>
<td>Jam</td><td><input type=text class='kuning' value='$kj[2]' size=7></td>
<td style='width:30px;'></td>
<td>Trayek</td><td><input type=text class='kuning' value='$kj[3]' size=20></td>
</tr>
<tr>
<td>Armada</td><td><input type=text class='kuning' value='$kj[4]' size=20></td>
<td style='width:30px;'></td>
<td></td><td></td>
</tr>
<tr>
<td>Kondisi</td><td colspan=4><select name='kondisi' style='margin-left:0px;'>
<option>
<option>Orang dan Barang
<option>Hanya Barang
</select>
</td>

</tr>

<tr>
<td>Daerah Pemberhentian</td><td colspan=4><input type=text class='' value='' size=50 name='pemberhentian' ></td>

</tr>
<tr>
<td>Atas Nama (Rek. Transfer)</td><td colspan=4><input type=text class='' value='' size=30 name='atasnama' ></td>

</tr>
<tr>
<td></td>
<td colspan=4><i>Isi nama daerah jika turun tidak di kota Tujuan (Jarak 20 KM)</td>
</tr>

</table><br>";
echo"
<table border=1>
		<tr>
		<td colspan=2>||||</td>
		<td style='width:50px;'></td>
		<td style='height:30px;' colspan=2>Sopir</td>
		
		</tr>
		";
		$mintakursi=mysql_query("select nokursi from kursi where noarmada='$_GET[noarmada]' order by nokursi asc",$konek);
		
		$kol=4;
		$nom=0;
		$kolkiri=0;
        $no=0;
		while($kku=mysql_fetch_array($mintakursi))
		
         {
		 $no++;
		 $cekkursi=mysql_query("select nokursi from detailpemesanan left join pemesanan on detailpemesanan.notran=pemesanan.notran
where nojadwal='$_GET[no]' and nokursi='$kku[0]'",$konek);
		 $ck=mysql_fetch_array($cekkursi);
		 
		 if($no<=32){
    		if($nom>=$kol)
    		{
    		if($ck[0]>0){
		 
		     echo "</tr><tr>
			<td style='height:35px;background-color:maroon;'><input type=checkbox  value='$kku[0]' name='kuki[]' disabled='disabled'> $kku[0]</td>
			
			";
		    }
			else{
    		echo "</tr><tr>
			<td style='height:35px;'><input type=checkbox  value='$kku[0]' name='kuki[]'> $kku[0]</td>
			
			";
			}
    		$nom=0;
		    
    		}
    
    		else
    		{
			
			if($kolkiri>=2 && $nom<2){
			if($ck[0]>0){
			echo"
			<td  style='height:35px;background-color:maroon;'><input type=checkbox  value='$kku[0]' name='kuki[]' disabled='disabled'> $kku[0]</td><td></td>";
			}
			else{
			echo"
			<td style='height:35px;'><input type=checkbox  value='$kku[0]' name='kuki[]'> $kku[0]</td><td></td>";
			}
			$kolkiri=0;
			}
			else{ 
			if($ck[0]>0)
			{
    		echo "<td  style='height:35px;background-color:maroon;'><input type=checkbox  value='$kku[0]' name='kuki[]' disabled='disabled'> $kku[0]</td>";
			}
			else{
			echo"
			<td style='height:35px;'><input type=checkbox  value='$kku[0]' name='kuki[]'> $kku[0]</td>";
			}
			}
			$kolkiri++;
    		}
			$kolkiri++;
   		 $nom++;
		 
		 
		  
		}
		else{
		if($nom>=2)
    		{
			
    		echo "</tr><tr>
			<td></td><td></td><td></td>
			";
			if($ck[0]>0){
			echo"
			<td  style='height:35px;background-color:maroon;'><input type=checkbox  value='$kku[0]' name='kuki[]' disabled='disabled'> $kku[0]</td>";
			}
			else{
			echo"<td  style='height:35px;'><input type=checkbox  value='$kku[0]' name='kuki[]'> $kku[0]</td>";
			}
			echo"
			
			
			";
    		$nom=0;
		    
    		}
    
    		else
    		{
					
			echo"
			
			";
			if($ck[0]>0){
			echo"<td  style='height:35px;background-color:maroon;'><input type=checkbox  value='$kku[0]' name='kuki[]' disabled='disabled'> $kku[0]</td>";
			}
			else{
			echo"<td  style='height:35px;'><input type=checkbox  value='$kku[0]' name='kuki[]'> $kku[0]</td>";
			}			
			
    		}
			
   		 $nom++;
		 
		 
		  }
		}
		
		echo"
		</table>

		<input type=submit value='  Pesan  ' class='glassy_btn' style='margin-top:10px;'>
       </form>
		<br>

		

		
";


}

elseif($_GET[module]=='informasi'){
?>
<style type="text/css">
.trkepala{
background-color:#8000FF;
color:#FFFFFF;
}
.tdgrid{
border-right:thin solid #FFCC00;
}
.grid1{

border:none;

background:none;

height:25px;



}

.trseragam{

background-color:#FFFFFF;

}
</style>
<?php
echo"
<p align=center>Daftar pemesanan tiket berdasarkan no. akun anda</p>
<table border=0 cellpadding=0 cellspacing=0 style='border:solid thin  #000;margin-top:5px;'>

			  <tr class=trkepala>

			  <td class=tdgrid style='height:25px;padding-left:5px;padding-left:5px;padding-right:5px;' >No. Jadwal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Tanggal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Jam</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Trayek</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Daerah</td>
			  
			  <td class='tdgrid'></td>

			   </tr>";

			  $mintaanggota=mysql_query("select pemesanan.nojadwal,jadwal.tanggal,jam,keterangan,namaarmada,tampilkan,jadwal.noarmada,notran,pemesanan.pemberhentian from jadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada left join pemesanan on pemesanan.nojadwal=jadwal.nojadwal where pemesanan.noakun='$_SESSION[noakun]' and status='0' order by nojadwal asc,tanggal desc",$konek);

			  $hitunganggota=mysql_num_rows($mintaanggota);

			  

			  if($hitunganggota==0){

			  echo"

			  <tr>

			  <td class=tdgrid style='height:25px;'><input type=text class='grid1' size=10></td>

			  <td class=tdgrid><input type=text class='grid1' size=10></td>
              <td class=tdgrid><input type=text class='grid1' size=10></td>
			  <td class=tdgrid><input type=text class='grid1' size=10></td>
              <td class=tdgrid><input type=text class='grid1' size=10></td>
			  
			
             

			  </tr>

			  ";

			  

			  }

			  else{

			  while($an=mysql_fetch_array($mintaanggota)){

			  

			  echo"

			  

			  <tr class=trseragam>

			  <td class=tdgrid style='padding-left:5px;height:27px;'><input type=text class='grid1' size=7 value='$an[0]' name='no[]'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=7 value='$an[1]' name='nopol[]'></td>

			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=7 value='$an[2]' name='nama[]'></td>
			 
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=12 value='$an[3]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=7 value='$an[8]' name='nama[]'></td>
			 
			
			 <td class=tdgrid style='padding-left:5px;'><a href='cetaktiketpdf.php?notran=$an[7]' target=_blank><input type=button value='Cetak Tiket'></a></td>
						 

			  

			  </tr>

			 

			  ";

			  }

			 

			  }

			  
 echo" </table>
 
 </form><br>";

}

elseif($_GET[module]=='inputresi'){
$mintaketjadwal=mysql_query("select pemesanan.notran,pemesanan.tanggal,pemesanan.nojadwal,jadwal.tanggal,jadwal.jam,trayek.keterangan,armada.namaarmada,akun.nama from pemesanan left join jadwal on pemesanan.nojadwal=jadwal.nojadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada left join akun on pemesanan.noakun=akun.noakun where pemesanan.notran='$_GET[notran]' and pemesanan.status='0'",$konek);
$kj=mysql_fetch_array($mintaketjadwal);
echo"

<table>
<tr>
<td>No. Pemesanan</td><td><input type=text class='kuning' value='$kj[0]' size=20 name='nojadwal'></td>
<td style='width:30px;'></td>
<td>Tanggal Pesan</td><td><input type=text class='kuning' value='$kj[1]' size=20></td>
</tr>
<tr>
<td>No. jadwal</td><td><input type=text class='kuning' value='$kj[2]' size=20 name='nojadwal'></td>
<td style='width:30px;'></td>
<td>Tanggal</td><td><input type=text class='kuning' value='$kj[3]' size=20></td>
</tr>
<tr>
<td>Jam</td><td><input type=text class='kuning' value='$kj[4]' size=7></td>
<td style='width:30px;'></td>
<td>Trayek</td><td><input type=text class='kuning' value='$kj[5]' size=20></td>
</tr>
<tr>
<td>Armada</td><td><input type=text class='kuning' value='$kj[6]' size=20></td>
<td style='width:30px;'></td>
<td></td><td></td>
</tr>
</table><br>";
$mintakursi=mysql_query("select nokursi from detailpemesanan where notran='$_GET[notran]'",$konek);
echo"
<b>No Kursi :</b>
";
while($kur=mysql_fetch_array($mintakursi)){
echo"<b><font color=maroon>| $kur[0] |</font></b>";

}
echo"<br>
<form action='simpanresi.php' method=post target=_blank>
<table border=0 style='margin-left:-2px;'>
<tr><td>NO. Resi</td>
<td> 
<input type=hidden value='$_GET[notran]' name='notran'>
<input type=text name='noresi' size=30 class=kuning> <input type=submit value=' Kirim ' class='glassy_btn'></td>
</tr>
</table>
</form>
";
}


elseif($_GET[module]=='jadwal'){
?>
<style type="text/css">
.trkepala{
background-color:#8000FF;
color:#FFFFFF;
}
.tdgrid{
border-right:thin solid #FFCC00;
}
.grid1{

border:none;

background:none;

height:25px;



}

.trseragam{

background-color:#FFFFFF;

}
</style>
<?php
echo"
<p align=center><b>Daftar Jadwal Keberangkatan Jambi Transport</p>
<table border=0 cellpadding=0 cellspacing=0 style='border:solid thin  #000;margin-top:5px;'>

			  <tr class=trkepala>

			  <td class=tdgrid style='height:25px;padding-left:5px;padding-left:5px;padding-right:5px;' >No. Jadwal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Tanggal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Jam</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Trayek</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Armada</td>
			 

			  <td>Harga</td>

			   </tr>";

			  $mintaanggota=mysql_query("select nojadwal,tanggal,jam,keterangan,namaarmada,tampilkan,jadwal.noarmada,harga from jadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada where tampilkan='Y' order by nojadwal asc,tanggal desc",$konek);

			  $hitunganggota=mysql_num_rows($mintaanggota);

			  

			  if($hitunganggota==0){

			  echo"

			  <tr>

			  <td class=tdgrid style='height:25px;'><input type=text class='grid1' size=15></td>

			  <td class=tdgrid><input type=text class='grid1' size=25></td>
              <td class=tdgrid><input type=text class='grid1' size=25></td>
			  <td class=tdgrid><input type=text class='grid1' size=25></td>
              <td class=tdgrid><input type=text class='grid1' size=25></td>
			
             

			  </tr>

			  ";

			  

			  }

			  else{

			  while($an=mysql_fetch_array($mintaanggota)){

			  

			  echo"

			  

			  <tr class=trseragam >

			  <td class=tdgrid style='padding-left:5px;height:27px;'><input type=text class='grid1' size=10 value='$an[0]' name='no[]'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=9 value='$an[1]' name='nopol[]'></td>

			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=7 value='$an[2]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=18 value='$an[3]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=10 value='$an[4]' name='nama[]'></td>
			
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=10 value='$an[7]' name='nama[]'></td>
						 

			  

			  </tr>

			 

			  ";

			  }

			 

			  }

			  
 echo" </table>";

}


else{
echo"
<span style='margin-left:10px;'><br>
<p align=center><b>
Selamat Datang Di Situs Resmi Jambi Transport</b></p>
<p align=center><img src='untitled-1.gif' ><p align=justify>
Sekarang kami hadir untuk anda dengan layanan reservasi online, sebagai salah satu visi kami dalam memberikan kemudahan dan kenyamanan kepada anda Custommer setia kami.</p>
<p align=justify>
Dengan reservasi online ini anda semakin dimudahkan dalam menentukan jadwal keberangkatan yang anda inginkan, karena kami ada kapanpun anda butuhkan.</p>
<br>
";


}
?>
