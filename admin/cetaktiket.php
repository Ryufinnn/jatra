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

margin-left:10px;
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
$mintaketjadwal=mysql_query("select pemesanan.notran,pemesanan.tanggal,pemesanan.nojadwal,jadwal.tanggal,jadwal.jam,trayek.keterangan,armada.namaarmada,akun.nama,harga,biayabarang,akun.noktp,pemberhentian,kekurangan,panjar from pemesanan left join jadwal on pemesanan.nojadwal=jadwal.nojadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada left join akun on pemesanan.noakun=akun.noakun where pemesanan.notran='$_GET[notran]'",$konek);

$pas=mysql_fetch_array($mintaketjadwal);
$no=0;
echo"

<div id=konten style='margin-top:10px;'>
<table border=0 cellpading=0 cellspacing=5>
<tr><td>Pemesanan No</td><td>:  $pas[0]</td><td style='width:150px;'></td><td>Tanggal</td><td>:  $pas[1]</td></tr>
<tr><td>No. Jadwal</td><td>:  $pas[2]</td><td></td><td>Tujuan</td><td>:  $pas[5]</td></tr>
<tr><td>Armada</td><td>:  $pas[6]</td><td></td><td>Pemberhentian</td><td>:  $pas[pemberhentian]</td></tr>
<tr><td>Atas Nama</td><td>:  $pas[7]</td><td></td><td>No. KTP</td><td>:  $pas[10]</td></tr>
</table>
<br>";
$mintakursi=mysql_query("select nokursi from detailpemesanan where notran='$_GET[notran]'",$konek);
$hitung=mysql_num_rows($mintakursi);
if($pas['pemberhentian']==""){
$a=$hitung * $pas[harga];
}
else{
$a=$pas[panjar] + $pas['kekurangan'];
}
$totalsemua=$a + $pas[biayabarang];
function Terbilang($x)
{
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return Terbilang($x - 10) . "belas";
  elseif ($x < 100)
    return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
  elseif ($x < 200)
    return " seratus" . Terbilang($x - 100);
  elseif ($x < 1000)
    return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
  elseif ($x < 2000)
    return " seribu" . Terbilang($x - 1000);
  elseif ($x < 1000000)
    return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
  elseif ($x < 1000000000)
    return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
}

 $bilangan=ucwords(Terbilang($totalsemua));
echo"
<p align=center>
<b>No Kursi :</b>
";
while($kur=mysql_fetch_array($mintakursi)){
echo"<b><font color=maroon>| $kur[0] |</font></b>";

}
echo"</p>
<table border='0' cellpading='0' cellspacing='0'>
<tr>
<td>Total Tiket RP :</td>
<td>".separator($a)."</td>
</tr>
<tr>
<td>Biaya Barang RP :</td>
<td>".separator($pas[biayabarang])."</td>
</tr>
<tr>
<td>Tiket + Barang RP :</td>
<td>".separator($totalsemua)."</td>
</tr>
<tr>
<td style='height:20px;'> 
Terbilang:
</td>
<td style='background-image:url(images/strip.jpg);width:400px;'>
<b><i>$bilangan Rupiah</i></b>
</td>
</tr></table>

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
 
