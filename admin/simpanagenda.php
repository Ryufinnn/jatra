<?php
session_start();
include"../fungsi/koneksi.php";

 
$mintaberita=mysql_query("select * from agendapusat order by idagenda desc",$konek);
	$ber=mysql_fetch_array($mintaberita);
	$hitungber=mysql_num_rows($mintaberita);
	
	if($hitungber==0){
	$nobaru='000001';
	}
	else
	{
	$nobaruu=$ber[0] +1;
	$nobaru=sprintf('%06d',$nobaruu);
	}
  // Apabila ada gambar yang diupload
 
	$tglsekarang=date("Y-m-d");
	

mysql_query("INSERT INTO agendapusat VALUES('$nobaru','$_POST[tema]','$_POST[tempat]','$_POST[isi]','$_POST[tanggalmulai]','$_POST[tanggalsel]','$_POST[jam]','$_SESSION[iduser]','$tglsekarang')",$konek);
  echo "<script>window.alert('Update berhasil');
          window.location=('home.php?module=agendaforum') </script>";
  
  

?>