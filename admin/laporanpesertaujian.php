<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
#konten{

margin-left:10px;
}
</style>

</head>

<body>

<?php
function separator($num, $suffix = '') {
 
	$ina_format_number = number_format($num, 3, ',','.');
	$result = str_replace(',000',$suffix,$ina_format_number) ;
 
	return $result ;
}
 
// How To Use

include"../fungsi/koneksi.php";
$ambildatatransaksi=mysql_query("",$konek);
$no=0;
$ceksemester=substr($_POST['periode'],4,1);
if($ceksemester=='1'){
$bilangan='GANJIL';

}

elseif($ceksemester=='2'){
$bilangan='GENAP';


}
else{
$bilangan='PENDEK';

}
$mintata=mysql_query("select * from periode where periode='$_POST[periode]'",$konek);
$ta=mysql_fetch_array($mintata);
echo"
<table border=0 align=left style='border-bottom:#000 medium solid;'>
<tr><td rowspan=3 width=200 align=center><img src='../images/logo-umsb.png' width=90 height=90></td>
<td ><B><font size='3'>LAPORAN PESERTA UJIAN </font></B></td>
</tr>
<tr>
<td >
<B><font size='3'>UNIVERSITAS MUHAMMADIYAH SUMATERA BARAT</font></B></td>
</tr>
<tr><td>
<B><font size='3'>PERIODE $bilangan TAHUN AJARAN $ta[1] / $ta[2]</font></B></td>
 </tr>
 </table>
	   


<br>
<div id=konten>
<b></b>
<br>

<table border=0 cellpading=0 cellspacing=0 align=left>
<tr><td colspan=11><hr style='border:medium #000000' width=800px></td></tr>
<tr><td align=center style='width:30px;'>No.</td><td align='' style='width:90px;'>No. Peserta</td><td align='' style='width:100px;'>Tanggal Daftar</td><td align='' style='width:200px;'>Nama Calon</td><td style='width:120px;'>Jenis Kelamin</td><td style='width:120px;'>Pendidikan Akhir</td></tr>

<tr><td colspan=11><hr style='border:medium #000000' width=800px></td></tr>";
$mintajadwalperhari=mysql_query("select nopeserta,tgldaftar,nama,jekel,pendidikanakhir from penerimaan where periode='$_POST[periode]' and status='1'",$konek);
$as=0;
while($ph=mysql_fetch_array($mintajadwalperhari)){
$as++;
echo"
<tr>
<td style='height:25px;' align=center>$as</td>
<td style='height:25px;'>$ph[0]</td>
<td >$ph[1]</td>
<td style='width:200px;'>$ph[2]</td>
<td>$ph[3]</td>
<td style='width:120px;'>$ph[4]</td>

</tr>

";

}
echo"<tr><td colspan=11><hr style='border:medium #000000' width=800px></td></tr>
<tr><td colspan=11>Jumlah Calon Terdaftar : ".mysql_num_rows($mintajadwalperhari)."</td></tr>
";
echo"</table>
<br><br>";
$mintapengurus=mysql_query("select * from pengurus",$konek);
$urus=mysql_fetch_array($mintapengurus);
echo"
<table border='0' cellpading='0' cellspacing='0' align='right' style='padding-right:100px;'>
<tr align=center>
<td style='height:15px;'>Bukittinggi, ".date("d-m-Y")."</td></tr>
<tr align='center'>
<td style='height:75px;'><b>Pengurus</b></td></tr>
<tr align=center><td><b>( $urus[0] )</b></td></tr>
</table>

</div>


";




?> 

</body>
</html>
