<?php

session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>

<style type="text/css">
#konten{

margin-left:-70px;
font-size:14px;
}
#konten #kasir{
margin-left:480px;
}


</style>

</head>

<body>

<table align="left" border="0" cellpadding="1" cellspacing="1">
<tr>
<td>
<B><font style="font-size:18px;">PO.CV. Jambi Transport</font></B>
<hr color="#000000" />
</td></tr>
<tr>

<td>
<B><font style='font-size:9px;'>Perwakilan(Padang) : Jl. Raya By. Pass Ketaping - Padang Km. 7 Telp. (0751)777640 (Pool)</font></B>
</td>
</tr>
<tr>

<td>
<B><font style='font-size:9px;'> </font></B>
</td>
</tr>
</table>


<?php
$tanggalawal=$_POST['periodeawal'];
$tglawal=substr($tanggalawal,0,2);
$blnawal=substr($tanggalawal,3,2);
$thnawal=substr($tanggalawal,6,4);
$tanggalakhir=$_POST['periodeakhir'];
$tglakhir=substr($tanggalakhir,0,2);
$blnakhir=substr($tanggalakhir,3,2);
$thnakhir=substr($tanggalakhir,6,4);
function separator($num, $suffix = '') {
 
	$ina_format_number = number_format($num, 3, ',','.');
	$result = str_replace(',000',$suffix,$ina_format_number) ;
 
	return $result ;
}
date_default_timezone_set('Asia/Jakarta'); 
$tglsekarang=date("d-m-Y"); 
// How To Use
$notranlagi=$_GET['transno'];
include"../fungsi/koneksi.php";
$mintaketjadwal=mysql_query("select * from akun where tglreg>='$thnawal-$blnawal-$tglawal' and tglreg<='$thnakhir-$blnakhir-$tglakhir' order by noakun ",$konek);


$grandtotal=0;
echo"<p align=center>Laporan Pelanggan Per Periode</p>";
echo"<p align=center>Periode :$tanggalawal To $tanggalakhir</p>";
echo"
<div id=konten style='margin-top:10px;'>
<table border=1 cellpading=0 cellspacing=0 style='font-size:12px;' align=center>
<tr><td>No.</td><td>No. Akun</td><td>Nama Pelanggan</td><td>No. Kontak</td><td>No. KTP</td></tr>

";
$no=0;
while($pas=mysql_fetch_array($mintaketjadwal)){
$no++;
echo"
<tr>
<td style='width:30px;'>$no</td>
<td  style='width:70px;'>$pas[0]</td>
<td  style='width:270px;'>$pas[nama]</td>
<td  style='width:80px;'>$pas[kontak]</td>
<td  style='width:120px;'>$pas[noktp]</td>
</tr>
";
}

echo"
</table>


<br><br>
<div id=kasir>


<table border='0' cellpading='0' cellspacing='0' align='' style='margin-right:100px;'>
<tr align=center>
<td style='height:15px;'>$tglsekarang</td></tr>
<tr align='center'>
<td style='height:35px;'><b>PETUGAS</b></td></tr>
<tr align=center><td><b>$_SESSION[username]</b></td></tr>
</table>
</div>
"; 
echo"
</div>


";




?> 

</body>
</html>
 
