<script type="text/javascript" src="js/jquery.watermark.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
	      	           $("#tekscari").watermark("cari berdasarkan nama...");
$("#tekscari").keypress(function(e){
if(e.keyCode==13){

var tekscari=$("#tekscari").val();
var periode=$("#periode").val();
$.ajax({
  type:"POST",
  url:"caricalon.php",
  data:"tekscari="+tekscari+"&periode="+periode,
  success:function(data){
  $("#datacalon").html(data);
  }
   });

}
});
	   
      });
    </script>
<?php
include"../fungsi/koneksi.php";
echo"
<input type=hidden id='periode' value='$_POST[periode]'>
<table border=0 cellpadding=0 cellspacing=0 style='border:solid thin  #000;margin-top:5px;'>
			  <tr class=trkepala>
			  <td class=tdgrid style='height:25px;padding-left:5px;' >No. Peserta</td><td class=tdgrid style='padding-left:5px;' >Nama </td><td class=tdgrid style='padding-left:5px;'>Status</td>
			  <td class=tdgrid></td>
			  
			     
			  </tr>";
			 
			  include"../fungsi/koneksi.php";
			  $mintaanggota=mysql_query("select * from penerimaan where periode='$_POST[periode]' and nama like'%$_POST[tekscari]%' order by nopeserta asc",$konek);
			  $hitunganggota=mysql_num_rows($mintaanggota);
			  if($hitunganggota==0){
			  echo"
			  <tr>
			  <td class=tdgrid style='height:25px;'><input type=text class='grid1' size=15></td>
			  <td class=tdgrid><input type=text class='grid1' size=25></td>
			  <td class=tdgrid><input type=text class='grid1' size=35></td>
			  
			  <td class=tdgrid><input type=text class='grid1' size=15></td>
			  
			  </tr>
			  ";
			  
			  }
			  else{
			  while($an=mysql_fetch_array($mintaanggota)){
			  if($an[status]=='0'){
			  $status='unverified';
			  }
			  else{
			  $status='verified';
			  }
			  echo"
			  <tr class=trseragam>
			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=15 value='$an[nopeserta]'></td>
			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=25 value='$an[nama]'></td>
			 
			  <td class=tdgrid style='padding-left:5px;'><input type=text class='grid1' size=15 value='$status'></td>
			  <td class=tdgrid style='padding-left:5px;'><input type=button value='  Edit/Lihat Rincian  ' onclick=window.location.href='?module=editcalon&nopeserta=$an[nopeserta]'></td>
			  
			  </tr>
			  ";
			  }
			  }
			  
			  echo"
			  <tr class=trkepala><td colspan=7 style='height:25px;padding-left:5px;'>
			  <input type=text size=30 id='tekscari' name='tekscari'>			  
			  </td></tr>
			  </table>";
?>