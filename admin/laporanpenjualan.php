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
$mintaketjadwal=mysql_query("select pemesanan.notran,pemesanan.tanggal,pemesanan.nojadwal,jadwal.tanggal,jadwal.jam,trayek.keterangan,armada.namaarmada,akun.nama,harga,biayabarang,akun.noktp,pemberhentian,kekurangan,panjar,kondisi from pemesanan left join jadwal on pemesanan.nojadwal=jadwal.nojadwal left join trayek on jadwal.kodetrayek=trayek.kode left join armada on jadwal.noarmada=armada.noarmada left join akun on pemesanan.noakun=akun.noakun where pemesanan.status='1' and pemesanan.tanggal>='$thnawal-$blnawal-$tglawal' and pemesanan.tanggal<='$thnakhir-$blnakhir-$tglakhir'",$konek);


$grandtotal=0;
echo"<p align=center>Laporan Penjualan Tiket</p>";
echo"<p align=center>Periode :$tanggalawal To $tanggalakhir</p>";
echo"
<div id=konten style='margin-top:10px;'>
<table border=1 cellpading=0 cellspacing=0 style='font-size:10px;' align=left>
<tr><td>Pemesanan No</td><td>Tanggal</td><td>No. Jadwal</td><td>Trayek</td><td>Nama</td><td>Pemberhentian</td><td>Kondisi</td><td>Total Tiket<br> Rp</td><td>Biaya Barang<br>Rp</td><td>Total</td></tr>

";
while($pas=mysql_fetch_array($mintaketjadwal)){
$mintakursi=mysql_query("select nokursi from detailpemesanan where notran='$pas[0]'",$konek);
$hitung=mysql_num_rows($mintakursi);
if($pas['pemberhentian']==""){
$a=$hitung * $pas[harga];
}
else{
$a=$pas[panjar] + $pas[kekurangan];
}
$totalsemua=$a + $pas[biayabarang];
echo"
<tr>
<td style='width:70px;'>$pas[0]</td>
<td style='width:60px;'>$pas[1]</td>
<td>$pas[2]</td>
<td style='width:70px;'>$pas[5]</td>
<td style='width:100px;'>$pas[7]</td>
<td style='width:80px;'>$pas[pemberhentian]</td>
<td style='width:80px;'>$pas[kondisi]</td>
<td>$a</td>
<td align=right>".separator($pas[biayabarang])."</td>
<td style='width:70px;' align=right>".separator($totalsemua)."</td>
</tr>

";
$grandtotal=$grandtotal + $totalsemua;
}

echo"
<tr>
<td colspan=9 align=right><b>Grand Total RP</b></td>
<td align=right><b>".separator($grandtotal)."</b></td>
</tr>


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
 
