<script type="text/javascript" src="js/jquery.watermark.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

	

  $("#kabupaten").change(function(){

  		

    var kabupaten = $("#kabupaten").val();

    $.ajax({

	    type:"POST",

		url: "proses_kabupatenedit.php",

        data: "kabupaten=" + kabupaten,

        success: function(data){

            

            $("#lihatnagari").html(data);

		        

        }

    });

  });

});

</script>
<script type="text/javascript">
$(document).ready(function(){

	

  $("#kabupatenkec").change(function(){

  		

    var kabupaten = $("#kabupatenkec").val();

    $.ajax({

	    type:"POST",

		url: "proses_kabupatenkecedit.php",

        data: "kabupaten=" + kabupaten,

        success: function(data){

            

            $("#lihatnagari").html(data);

		        

        }

    });

  });

});

</script>




	

	<script language="javascript">

function pesan(){



if(document.formdaftar.kode.value=="") {

window.alert("Kode  masih kosong..!!!");

document.formdaftar.kode.focus();

return false;

}

if(document.formdaftar.keterangan.value=="") {

window.alert("Keterangan Masih Kosong..!!!");

document.formdaftar.keterangan.focus();

return false;

}





else{ 

document.formdaftar.submit();

return true;

}

}

</script>

	

<?php

include"../fungsi/koneksi.php";

include"../fungsi/fungsi_indotgl.php";

if($_GET[module]=='trayek'){

echo"

<form action='settrayek.php' method='post' onsubmit='return false;' name='formdaftar'> 

<table border=0 style='margin-top:10px;'>

		<tr><td style='height:30px;'>

		<font style='color:maroon;font-size:16px;font-variant: small-caps;' '><b>Silahkan Input dan Konfirmasikan Data Trayek </b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>

		<table>

		<tr>

		<td><b>Kode Trayek</td><td style='width:40px;'></td><td><input type=text name='kode' class='lengkung' size=10></td>

		</tr>

		<tr>

		<td><b>Keterangan</td><td style='width:40px;'></td><td><input type=text name='keterangan' class='lengkung' size=30></td>

		</tr>

		<tr>

		

		<tr>

		<td></td><td style='width:40px;'></td><td><input type=button value=' Simpan ' class='glassy_btn' style='margin-left:5px;' onclick='pesan();'></td>

		</tr>
</table>

		</form>

		

		

		

<table border=0 style='margin-top:40px;'>

		<tr><td style='height:30px;'>

		<font style='color: maroon;font-size:16px;font-variant: small-caps;' '><b>Tabel Data Trayek</b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

</table>

		<form name='' action='aksitrayek.php' method=post>

<table border=0 cellpadding=0 cellspacing=0 style='border:solid thin  #000;margin-top:5px;'>

			  <tr class=trkepala>

			  <td class=tdgrid style='height:25px;padding-left:5px;padding-left:5px;padding-right:5px;' >Kode Trayek</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Keterangan</td>

			  <td class=tdgrid colspan=2></td>

			   </tr>";

			  include"../fungsi/koneksi.php";

			  $mintaanggota=mysql_query("select * from trayek",$konek);

			  $hitunganggota=mysql_num_rows($mintaanggota);

			  

			  if($hitunganggota==0){

			  echo"

			  <tr>

			  <td class=tdgrid style='height:25px;'><input type=text class='grid1' size=15></td>

			  <td class=tdgrid><input type=text class='grid1' size=25></td>

			  

			  </tr>

			  ";

			  

			  }

			  else{

			  while($an=mysql_fetch_array($mintaanggota)){

			  

			  echo"

			  

			  <tr class=trseragam>

			  <td class=tdgrid style='padding-left:5px;height:27px;'><input type=text class='grid1' size=5 value='$an[kode]' name='kode[]'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=15 value='$an[keterangan]' name='keterangan[]'></td>

			 

			  <td class=tdgrid style='padding-left:5px;' align=center><input type=submit value=' Edit ' class='glassy_btn'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=button value=' Hapus ' class='glassy_btn' onclick=window.location.href='hapustrayek.php?kode=$an[kode]'></td>

			  

			  </tr>

			 

			  ";

			  }

			 

			  }

			  
 echo" </table></form><br><br>";
		

}





elseif($_GET[module]=='armada'){

echo"

<form action='setarmada.php' method='post' onsubmit='' name='formdaftar'> 

<table border=0 style='margin-top:10px;'>

		<tr><td style='height:30px;'>

		<font style='color:maroon;font-size:16px;font-variant: small-caps;' '><b>Silahkan Input dan Konfirmasikan Data Armada </b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>

		<table>

		<tr>

		<td><b>No. Armada</td><td style='width:40px;'></td><td><input type=text name='no' class='lengkung' size=10></td>

		</tr>

		<tr>

		<td><b>No. Polisi</td><td style='width:40px;'></td><td><input type=text name='nopol' class='lengkung' size=30></td>

		</tr>
		<tr>

		<td><b>Nama Armada</td><td style='width:40px;'></td><td><input type=text name='nama' class='lengkung' size=30></td>

		</tr>

		<tr>

		

		<tr>

		<td></td><td style='width:40px;'></td><td><input type=submit value=' Simpan ' class='glassy_btn' style='margin-left:5px;' onclick=''></td>

		</tr>
</table>

		</form>

		

		

		

<table border=0 style='margin-top:40px;'>

		<tr><td style='height:30px;'>

		<font style='color: maroon;font-size:16px;font-variant: small-caps;' '><b>Tabel Data Trayek</b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

</table>

		<form name='' action='aksiarmada.php' method=post>

<table border=0 cellpadding=0 cellspacing=0 style='border:solid thin  #000;margin-top:5px;'>

			  <tr class=trkepala>

			  <td class=tdgrid style='height:25px;padding-left:5px;padding-left:5px;padding-right:5px;' >No. Armada</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >No. Polisi</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Nama Armada</td>

			  <td class=tdgrid colspan=2></td>

			   </tr>";

			  include"../fungsi/koneksi.php";

			  $mintaanggota=mysql_query("select * from armada",$konek);

			  $hitunganggota=mysql_num_rows($mintaanggota);

			  

			  if($hitunganggota==0){

			  echo"

			  <tr>

			  <td class=tdgrid style='height:25px;'><input type=text class='grid1' size=15></td>

			  <td class=tdgrid><input type=text class='grid1' size=25></td>
              <td class=tdgrid><input type=text class='grid1' size=25></td>
			  

			  </tr>

			  ";

			  

			  }

			  else{

			  while($an=mysql_fetch_array($mintaanggota)){

			  

			  echo"

			  

			  <tr class=trseragam>

			  <td class=tdgrid style='padding-left:5px;height:27px;'><input type=text class='grid1' size=5 value='$an[noarmada]' name='no[]'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=15 value='$an[nopol]' name='nopol[]'></td>

			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=15 value='$an[namaarmada]' name='nama[]'></td>

			  <td class=tdgrid style='padding-left:5px;' align=center><input type=submit value=' Edit ' class='glassy_btn'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=button value=' Hapus ' class='glassy_btn' onclick=window.location.href='hapusarmada.php?no=$an[noarmada]'></td>

			  

			  </tr>

			 

			  ";

			  }

			 

			  }

			  
 echo" </table></form><br><br>";
		

}


elseif($_GET[module]=='jadwal'){

echo"

<form action='setjadwal.php' method='post' onsubmit='' name='formdaftar'> 

<table border=0 style='margin-top:10px;'>

		<tr><td style='height:30px;'>

		<font style='color:maroon;font-size:16px;font-variant: small-caps;' '><b>Silahkan Input dan Konfirmasikan Data Jadwal Keberangkatan Armada</b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>

		<table>

		<tr>

		<td><b>Tanggal</td><td style='width:40px;'></td><td><input type=text name='tanggal' size=10 class='lengkung' id='tanggal' onClick=\"javascript:NewCssCal('tanggal','yyyymmdd')\" value=''></td>

		</tr>

		<tr>

		<td><b>Jam Keberangkatan</td><td style='width:40px;'></td><td><input type=text name='jam' class='lengkung' size=20> (JJ:MM:DD)</td>

		</tr>
		<tr>

		<td><b>Trayek</td><td style='width:40px;'></td><td>
		<select name='trayek' class='lengkung'>
		<option>
		";
		$mintatrayek=mysql_query("select keterangan from trayek",$konek);
		while($tr=mysql_fetch_array($mintatrayek)){
		echo"<option>$tr[0]";
		
		}
		echo"
		</select>
		</td>

		</tr>

		<tr>

		<td><b>Armada</td><td style='width:40px;'></td><td>
		<select name='armada' class='lengkung'>
		<option>
		";
		$mintaarmada=mysql_query("select namaarmada from armada",$konek);
		while($ar=mysql_fetch_array($mintaarmada)){
		echo"<option>$ar[0]";
		
		}
		echo"
		</select>
		</td>

		</tr>
        <tr>

		<td><b>Harga Tiket Rp</td><td style='width:40px;'></td><td><input type=text name='harga' class='lengkung' size=20 style='text-align:right'> </td>

		</tr>
		<tr>

		<td><b>Tampikan</td><td style='width:40px;'></td><td>
		<select name='tampil' class='lengkung'>
		<option>
		<option>Y
		<option>N

		</select>
		</td>

		</tr>

		<tr>

		<td></td><td style='width:40px;'></td><td><input type=submit value=' Simpan ' class='glassy_btn' style='margin-left:5px;' onclick=''></td>

		</tr>
</table>

		</form>

		

		

		

<table border=0 style='margin-top:40px;'>

		<tr><td style='height:30px;'>

		<font style='color: maroon;font-size:16px;font-variant: small-caps;' '><b>Tabel Data Jadwal</b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

</table>

		<form name='' action='aksiarmada.php' method=post>

<table border=0 cellpadding=0 cellspacing=0 style='border:solid thin  #000;margin-top:5px;'>

			  <tr class=trkepala>

			  <td class=tdgrid style='height:25px;padding-left:5px;padding-left:5px;padding-right:5px;' >No. Jadwal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Tanggal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Jam</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Trayek</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Armada</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Harga Tiket</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Tampilkan</td>

			  <td class=tdgrid colspan=2></td>

			   </tr>";

			  include"../fungsi/koneksi.php";

			  $mintaanggota=mysql_query("select nojadwal,tanggal,jam,keterangan,namaarmada,tampilkan,harga from jadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada order by nojadwal asc,tanggal desc",$konek);

			  $hitunganggota=mysql_num_rows($mintaanggota);

			  

			  if($hitunganggota==0){

			  echo"

			  <tr>

			  <td class=tdgrid style='height:25px;'><input type=text class='grid1' size=15></td>

			  <td class=tdgrid><input type=text class='grid1' size=25></td>
              <td class=tdgrid><input type=text class='grid1' size=25></td>
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

			  

			  <tr class=trseragam>

			  <td class=tdgrid style='padding-left:5px;height:27px;'><input type=text class='grid1' size=10 value='$an[0]' name='no[]'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=8 value='$an[1]' name='nopol[]'></td>

			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=5 value='$an[2]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=15 value='$an[3]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=10 value='$an[4]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=5 value='$an[6]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=5 value='$an[5]' name='nama[]'></td>

			  <td class=tdgrid style='padding-left:5px;' align=center><input type=button value=' Edit ' class='glassy_btn' style='width:70px;' onclick=window.location.href='?module=editjadwal&no=$an[0]'></td>

			  <td class=tdgrid style='padding-left:5px;'></td>

			  

			  </tr>

			 

			  ";

			  }

			 

			  }

			  
 echo" </table></form><br><br>";
		

}




elseif($_GET[module]=='kursi'){

echo"

<form action='lihatkursi.php' method='post' onsubmit='' name='formdaftar'> 

<table border=0 style='margin-top:10px;'>

		<tr><td style='height:30px;'>

		<font style='color:maroon;font-size:16px;font-variant: small-caps;' '><b>Silahkan Setting Kursi Armada </b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>

		<table>

		<tr>

		<td><b>Armada</td><td style='width:40px;'></td><td>";
		$mintaarmadaget=mysql_query("select namaarmada from armada where noarmada='$_GET[noarmada]'",$konek);
		$armg=mysql_fetch_array($mintaarmadaget);
		echo"<select name='armada' class='lengkung'>
		<option>$armg[0]
		";
		$mintaarmada=mysql_query("select namaarmada from armada",$konek);
		while($arm=mysql_fetch_array($mintaarmada)){
		echo"<option>$arm[0]</option>";
		
		}
		echo"
		</select>
		
		<input type=submit value=' Lihat ' class='glassy_btn'>
		</td>

		</tr>

		<tr>

		
</table>

		</form>
		
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
		 if($no<=32){
    		if($nom>=$kol)
    		{
    		echo "</tr><tr>
			<td style='height:35px;'><input type=text size=5 value='$kku[0]'></td>
			
			";
    		$nom=0;
		    
    		}
    
    		else
    		{
			
			if($kolkiri>=2 && $nom<2){
			echo"
			
			<td style='height:35px;'><input type=text size=5 value='$kku[0]'></td><td></td>";
			$kolkiri=0;
			}
			else{ 
    		echo "<td style='height:35px;'><input type=text size=5 value='$kku[0]'></td>";
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
			<td style='height:35px;'><input type=text size=5 value='$kku[0]'></td>
			
			";
    		$nom=0;
		    
    		}
    
    		else
    		{
			
			
			echo"
			
			<td style='height:35px;'><input type=text size=5 value='$kku[0]'></td>";
						
			
    		}
			
   		 $nom++;
		 
		 
		  }
		}
		
		echo"
		</table>

		

		

		
";

		

}


elseif($_GET[module]=='akun'){

echo"

	

		

<table border=0 style='margin-top:40px;'>

		<tr><td style='height:30px;'>

		<font style='color: maroon;font-size:16px;font-variant: small-caps;' '><b>Tabel Data Akun</b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

</table>

		<form name='' action='aksiarmada.php' method=post>

<table border=0 cellpadding=0 cellspacing=0 style='border:solid thin  #000;margin-top:5px;'>

			  <tr class=trkepala>

			  <td class=tdgrid style='height:25px;padding-left:5px;padding-left:5px;padding-right:5px;' >No. Akun</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Nama</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >No. Kontak</td>
<td class=tdgrid style='padding-left:5px;padding-right:5px;' >Aktif</td>

			  <td class=tdgrid colspan=2></td>

			   </tr>";

			  include"../fungsi/koneksi.php";

			  $mintaanggota=mysql_query("select * from akun order by noakun",$konek);

			  $hitunganggota=mysql_num_rows($mintaanggota);

			  

			  if($hitunganggota==0){

			  echo"

			  <tr>

			  <td class=tdgrid style='height:25px;'><input type=text class='grid1' size=15></td>

			  <td class=tdgrid><input type=text class='grid1' size=25></td>
              <td class=tdgrid><input type=text class='grid1' size=25></td>
			  <td class=tdgrid><input type=text class='grid1' size=25></td>
			  

			  </tr>

			  ";

			  

			  }

			  else{

			  while($an=mysql_fetch_array($mintaanggota)){

			  

			  echo"

			  

			  <tr class=trseragam>

			  <td class=tdgrid style='padding-left:5px;height:27px;'><input type=text class='grid1' size=5 value='$an[noakun]' name='no[]'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=30 value='$an[nama]' name='nama[]'></td>

			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=15 value='$an[kontak]' name='kontak[]'></td>
			  <td class=tdgrid style='padding-left:5px;'>
			  <select class='grid1'>
			  <option>$an[aktif]
			  <option>Y
			  <option>N
			  </select>
			   </td>

			  <td class=tdgrid style='padding-left:5px;' align=center></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=button value=' Edit ' class='glassy_btn' onclick=window.location.href='?module=editakun&no=$an[noakun]'></td>

			  

			  </tr>

			 

			  ";

			  }

			 

			  }

			  
 echo" </table></form><br><br>";
		

}


elseif($_GET[module]=='editakun'){
$mintadataakun=mysql_query("select * from akun where noakun='$_GET[no]'",$konek);
$ak=mysql_fetch_array($mintadataakun);
echo"

<form action='setakun.php' method='post' onsubmit='' name='formdaftar'> 

<table border=0 style='margin-top:10px;'>

		<tr><td style='height:30px;'>

		<font style='color:maroon;font-size:16px;font-variant: small-caps;' '><b>Silahkan Edit akun custommer </b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>

		<table>

		<tr>

		<td><b>No. Akun</td><td style='width:40px;'></td><td><input type=text name='no' class='lengkung' size=10 value='$ak[0]'></td>

		</tr>

		<tr>

		<td><b>Nama </td><td style='width:40px;'></td><td><input type=text name='nama' class='lengkung' size=30 value='$ak[nama]'></td>

		</tr>
		<tr>

		<td><b>Alamat</td><td style='width:40px;'></td><td><input type=text name='alamat' class='lengkung' size=50 value='$ak[alamat]'></td>

		</tr>

		<tr>

		<td><b>No. Kontak</td><td style='width:40px;'></td><td><input type=text name='kontak' class='lengkung' size=20 value='$ak[kontak]'></td>

		</tr>
        <tr>

		<td><b>No. KTP</td><td style='width:40px;'></td><td><input type=text name='noktp' class='lengkung' size=50 value='$ak[noktp]'></td>

		</tr>
		<tr>

		<td><b>Aktif</td><td style='width:40px;'></td><td>
		<select name='status'  class='lengkung'>
		<option>$ak[aktif]
		<option>Y
		<option>N
		</select>
		</td>

		</tr>

		<tr>

		<td></td><td style='width:40px;'></td><td><input type=submit value=' Simpan ' class='glassy_btn' style='margin-left:5px;' onclick=''></td>

		</tr>
</table>

		</form>

		

		

		

<br>";
		

}


elseif($_GET[module]=='editjadwal'){
$mintadataakun=mysql_query("select nojadwal,tanggal,jam,keterangan,namaarmada,tampilkan,harga from jadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada where nojadwal='$_GET[no]'",$konek);
$ak=mysql_fetch_array($mintadataakun);
echo"

<form action='editjadwal.php' method='post' onsubmit='' name='formdaftar'> 

<table border=0 style='margin-top:10px;'>

		<tr><td style='height:30px;'>

		<font style='color:maroon;font-size:16px;font-variant: small-caps;' '><b>Silahkan Edit Jadwal </b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>

		<table>

		<tr>

		<td><b>No. Jadwal</td><td style='width:40px;'></td><td><input type=text name='no' class='lengkung' size=10 value='$ak[0]'></td>

		</tr>

		<tr>

		<td><b>Tanggal</td><td style='width:40px;'></td><td><input type=text name='tanggal' class='lengkung' size=10 value='$ak[tanggal]' id='tanggal' onClick=\"javascript:NewCssCal('tanggal','yyyymmdd')\"></td>

		</tr>
		<tr>

		<td><b>Jam</td><td style='width:40px;'></td><td><input type=text name='jam' class='lengkung' size=10 value='$ak[jam]'></td>

		</tr>

		<tr>

		<td><b>Trayek</td><td style='width:40px;'></td><td>
		<select name='trayek' class='lengkung'>
		<option>$ak[keterangan]";
		$mintatrayek=mysql_query("select keterangan from trayek",$konek);
		while($tra=mysql_fetch_array($mintatrayek)){
		echo"<option>$tra[0]";
		
		}
		echo"
		</select>
		</td>

		</tr>
        <tr>

		<td><b>Armada</td><td style='width:40px;'></td><td>
		<select name='armada' class='lengkung'>
		<option>$ak[namaarmada]";
		$mintaarmada=mysql_query("select namaarmada from armada",$konek);
		while($ar=mysql_fetch_array($mintaarmada)){
		echo"<option>$ar[0]";
		
		}
		echo"
		</select>
		
		</td>

		</tr>
		<tr>

		<td><b>Harga Tiket Rp</td><td style='width:40px;'></td><td><input type=text name='harga' class='lengkung' size=10 value='$ak[harga]'></td>

		</tr>
		<tr>

		<td><b>Tampilkan</td><td style='width:40px;'></td><td>
		<select name='status'  class='lengkung'>
		<option>$ak[tampilkan]
		<option>Y
		<option>N
		</select>
		</td>

		</tr>

		<tr>

		<td></td><td style='width:40px;'></td><td><input type=submit value=' Simpan ' class='glassy_btn' style='margin-left:5px;' onclick=''></td>

		</tr>
</table>

		</form>

		

		

		

<br>";
		

}




elseif($_GET[module]=='halamanstatis'){

echo"



<table border=0 style='margin-top:10px;' cellpadding=0 cellspacing=0>

		<tr ><td style='height:30px;'>

		<font style='color:maroon;font-size:16px;font-variant: small-caps;' '><b>Halaman Statis</b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>



          <table cellpadding=0 cellspacing=0 style='margin-top:30px;'>

          <tr class='trkepala' style='padding-left:5px;'><td class='tdgrid' style='padding-left:5px;'>No.</td><td class='tdgrid' style='padding-left:5px;'>Keterangan</td><td class='tdgrid' style='padding-left:5px;'>Link Halaman</td><td></td></tr>";



      $tampil = mysql_query("SELECT * FROM halamanstatispusat ORDER BY nohalaman ASC");

    

		

  

    

    while($r=mysql_fetch_array($tampil)){

      $tgl_posting=tgl_indo($r[tanggal]);

      echo "<tr class='trseragam'><td class='tdgrid' style='width:80px;padding-left:5px;'>$r[0]</td>

                <td class='tdgrid' style='width:;padding-left:5px;'><input type=text class='grid1' value='$r[1]' size=30></td>

                <td class='tdgrid' style='width:150px;padding-left:5px;'><input type=text class='grid1' value='$r[3]' size=20></td>

		            <td class='tdgrid'><input type=button class='glassy_btn' onclick=window.location.href='?module=editstatis&kode=$r[0]' value='Edit' ></td>

		        </tr>"; 

      

    }

    echo "</table>

	"; 











}



elseif($_GET[module]=='editstatis'){

$mintaberita=mysql_query("select * from halamanstatispusat where nohalaman='$_GET[kode]'",$konek);



$ber=mysql_fetch_array($mintaberita);

echo "<table border=0 style='margin-top:10px;' cellpadding=0 cellspacing=0>

		<tr ><td style='height:30px;'>

		<font style='color:maroon;font-size:16px;font-variant: small-caps;' '><b>Edit Halaman Statis</b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>

          <form method=POST action='edithalamanstatis.php' enctype='multipart/form-data'>

          <table>

          <tr><td>Keterangan</td>     <td> :

		  <input type=hidden name='kode' size=60 class='lengkung' value='$ber[0]'>

		  <input type=text name='judul' size=60 class='lengkung' value='$ber[1]'></td></tr>

		  

		  

          

          <tr><td style='vertical-align:top;'>Isi Berita</td>  <td style='padding-left:10px;'><textarea name='isi' cols=70 rows=16 class='' >$ber[isi]</textarea></td></tr>

		 

          <tr><td></td><td><input type=submit value='Update' class='glassy_btn'>

                            <input type=button value=Batal onclick='self.history.back()' class='glassy_btn'></td></tr>

          </table></form>";





}


elseif($_GET[module]=='pemesanan'){
echo"
<p align=center>Daftar Pemesanan Tiket</p>
<div style='overflow:scroll;width:730px;'>
<table border=0 cellpadding=0 cellspacing=0 style='border:solid thin  #000;margin-top:5px;'>

			  <tr class=trkepala>

			  <td class=tdgrid style='height:25px;padding-left:5px;padding-left:5px;padding-right:5px;' >No. Jadwal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Tanggal</td><td class=tdgrid style='padding-left:5px;padding-right:5px;' >Jam</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Trayek</td>
			  <td class=tdgrid style='padding-left:5px;padding-right:5px;' >No. Tran</td>
			 <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Nama</td>
			 <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Status</td>
			 <td class=tdgrid style='padding-left:5px;padding-right:5px;' >Atas Nama</td>
			 <td class=tdgrid style='padding-left:5px;padding-right:5px;' >No. Kontak</td>

			  <td class='tdgrid'></td>

			   </tr>";

			  $mintaanggota=mysql_query("select pemesanan.nojadwal,jadwal.tanggal,jam,keterangan,namaarmada,tampilkan,jadwal.noarmada,notran,akun.nama,status,atasnama,kontak from pemesanan left join jadwal on pemesanan.nojadwal=jadwal.nojadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada left join akun on pemesanan.noakun=akun.noakun order by notran asc,tanggal desc",$konek);

			  $hitunganggota=mysql_num_rows($mintaanggota);

			  

			  if($hitunganggota==0){

			  echo"

			  <tr>

			  <td class=tdgrid style='height:25px;'><input type=text class='grid1' size=10></td>

			  <td class=tdgrid><input type=text class='grid1' size=10></td>
              <td class=tdgrid><input type=text class='grid1' size=10></td>
			  <td class=tdgrid><input type=text class='grid1' size=10></td>
              <td class=tdgrid><input type=text class='grid1' size=10></td>
			   <td class=tdgrid><input type=text class='grid1' size=10></td>
              <td class=tdgrid><input type=text class='grid1' size=10></td>
			  <td class=tdgrid><input type=text class='grid1' size=10></td>
              <td class=tdgrid><input type=text class='grid1' size=10></td>
			
             

			  </tr>

			  ";

			  

			  }

			  else{

			  while($an=mysql_fetch_array($mintaanggota)){

			  if($an[9]=='0'){
			  $an[9]='proses';
			  }
			  else{
			  $an[9]='selesai';
			  }

			  echo"

			  

			  <tr class=trseragam >

			  <td class=tdgrid style='padding-left:5px;height:27px;'><input type=text class='grid1' size=10 value='$an[0]' name='no[]'></td>

			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=9 value='$an[1]' name='nopol[]'></td>

			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=7 value='$an[2]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=12 value='$an[3]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=7 value='$an[7]' name='nama[]'></td>
			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=18 value='$an[8]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=10 value='$an[9]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=18 value='$an[atasnama]' name='nama[]'></td>
			 <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=10 value='$an[kontak]' name='nama[]'></td>
			 
			
			 <td class=tdgrid style='padding-left:5px;'><input type=button value='Lihat' onclick=window.location.href='?module=cek&notran=$an[7]'>
			 ";
			 if($an[9]=='proses'){
			 
			 echo"<input type=button value='Cancel' onclick=window.location.href='canceltiket.php?notran=$an[7]'>";
			 }
			 
			 echo"
			 </td>
						 

			  

			  </tr>

			 

			  ";

			  }

			 

			  }

			  
 echo" </table>
 </div>
 </form><br>";


}

elseif($_GET[module]=='cek'){
function separator($num, $suffix = '') {
 
	$ina_format_number = number_format($num, 3, ',','.');
	$result = str_replace(',000',$suffix,$ina_format_number) ;
 
	return $result ;
}
$mintaketjadwal=mysql_query("select pemesanan.notran,pemesanan.tanggal,pemesanan.nojadwal,jadwal.tanggal,jadwal.jam,trayek.keterangan,armada.namaarmada,akun.nama,harga,status,panjar,kekurangan,biayabarang,pemberhentian,atasnama,kontak from pemesanan left join jadwal on pemesanan.nojadwal=jadwal.nojadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada left join akun on pemesanan.noakun=akun.noakun where pemesanan.notran='$_GET[notran]' ",$konek);
$kj=mysql_fetch_array($mintaketjadwal);
echo"

<table border=0>
<tr>
<td>No. Pemesanan</td><td><input type=text class='lengkung' value='$kj[0]' size=20 name='nojadwal'></td>
<td style='width:30px;'></td>
<td>Tanggal Pesan</td><td><input type=text class='lengkung' value='$kj[1]' size=20></td>
</tr>
<tr>
<td>No. jadwal</td><td><input type=text class='lengkung' value='$kj[2]' size=20 name='nojadwal'></td>
<td style='width:30px;'></td>
<td>Tanggal</td><td><input type=text class='lengkung' value='$kj[3]' size=20></td>
</tr>
<tr>
<td>Jam</td><td><input type=text class='lengkung' value='$kj[4]' size=7></td>
<td style='width:30px;'></td>
<td>Trayek</td><td><input type=text class='lengkung' value='$kj[5]' size=20></td>
</tr>
<tr>
<td>Daerah</td><td><input type=text class='lengkung' value='$kj[pemberhentian]' size=20></td>
<td></td>
<td>Armada</td><td><input type=text class='lengkung' value='$kj[6]' size=20></td>
</tr>
<tr>
<td>Atas Nama</td><td><input type=text class='lengkung' value='$kj[atasnama]' size=20></td>
<td></td>
<td>No. Kontak (HP)</td><td><input type=text class='lengkung' value='$kj[kontak]' size=20></td>
</tr>

</tr>
<td><b>Status</td><td>";
if($kj[9]=="0"){
$kj[9]="Diproses";
}
else{
$kj[9]="Selesai";
}
echo"<b>
$kj[9]
</td>
</tr>
</table><br>";
$mintakursi=mysql_query("select nokursi from detailpemesanan where notran='$_GET[notran]'",$konek);
$hitung=mysql_num_rows($mintakursi);
$a=$hitung * $kj[harga];
echo"
<b>No Kursi :</b>
";
while($kur=mysql_fetch_array($mintakursi)){
echo"<b><font color=maroon>| $kur[0] |</font></b>";

}
echo"<br>
<b>Total Harga Tiket Trayek  : Rp ".separator($a)."</b>
<form action='simpanbiayabarang.php' method=post>
<table border=0 style='margin-left:-2px;'>
<tr><td>Panjar Tiket Rp</td>
<td> 
<input type=text name='panjar' size=30 class=lengkung value='$kj[10]'>
</tr>
<tr><td>Kekurangan Rp</td>
<td> 
<input type=text name='kekurangan' size=30 class=lengkung value='$kj[11]'>
</tr>
<tr><td>Biaya Barang Rp</td>
<td> 
<input type=hidden value='$_GET[notran]' name='notran'>

<input type=text name='biaya' size=30 class=lengkung value='$kj[12]'> <input type=submit value=' Update ' class='glassy_btn'>
<a href='cetaktiketpdf.php?notran=$_GET[notran]' target=_blank><input type=button class='glassy_btn' value=' Cetak Tiket '></a>

</td>
</tr>
</table>
</form>
";
}

elseif($_GET[module]=='laporanpenjualan'){

echo"
<div id=input>
<p align=center><b><u>LAPORAN PENJUALAN TIKET</u></b></p>
<p align=center><b>Summary</b></p>
<table border=0 cellpading=0 cellspacing=5 align=center width=300px>
<form action='laporanpenjualanpdf.php' method=post target=_blank >
<tr><td><b>Periode Awal</td><td><input type=text name='periodeawal' value='' class='lengkung' size=10 id='periodeawal' onClick=\"javascript:NewCssCal('periodeawal','ddmmyyyy')\" ></td></tr>
<tr><td><b>Periode Akhir</td><td><input type=text name='periodeakhir' value='' class='lengkung' size=10 id='periodeakhir' onClick=\"javascript:NewCssCal('periodeakhir','ddmmyyyy')\"></td></tr>
<tr><td><b></td><td><input type=submit value='preview'></td></tr>
</form>
</table>
<hr color=orange width=200px>
</div>
";

}


elseif($_GET[module]=='laporanpelanggan'){

echo"
<div id=input>
<p align=center><b><u>LAPORAN PELANGGAN PER PERIODE</u></b></p>
<p align=center><b>Summary</b></p>
<table border=0 cellpading=0 cellspacing=5 align=center width=300px>
<form action='laporanpelangganpdf.php' method=post target=_blank >
<tr><td><b>Periode Awal</td><td><input type=text name='periodeawal' value='' class='lengkung' size=10 id='periodeawal' onClick=\"javascript:NewCssCal('periodeawal','ddmmyyyy')\" ></td></tr>
<tr><td><b>Periode Akhir</td><td><input type=text name='periodeakhir' value='' class='lengkung' size=10 id='periodeakhir' onClick=\"javascript:NewCssCal('periodeakhir','ddmmyyyy')\"></td></tr>
<tr><td><b></td><td><input type=submit value='preview'></td></tr>
</form>
</table>
<hr color=orange width=200px>
</div>
";

}


//editkecamatan
else{

$login=mysql_query("SELECT * FROM admin WHERE idadmin='$_SESSION[idadmin]' ");

$ketemu=mysql_num_rows($login);

$r=mysql_fetch_array($login);



echo"<table border=0 style='margin-top:10px;'>

		<tr><td style='height:30px;'>

		<font style='color: #65C80B;font-size:16px;font-variant: small-caps;' '><b>Selamat Datang Di Halaman Administrator</b></font></td>

		<td>

		<hr style='width:300px;margin-top:10px;' ></td>

		</tr>

		</table>

        <table border=0 >

		<tr>

		<td><b>User</b></td><td style='width:70px;'></td><td><b>: $r[namaterang]</B></td>

		</tr>

		</table>

		

		

				

		

		

		";



}







?>

