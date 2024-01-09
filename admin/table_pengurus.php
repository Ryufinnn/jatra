<?php
//session_start();
//if($_SESSION[username]==''){
//echo"maaf anda tidak diizinkan meng akses halaman ini";
//}
//else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Untitled Document</title>


<style type="text/css">
<!--
#wrapper {
	width: 290px;
	margin-right: auto;
	margin-left: auto;
}
#wrapper #header {
	float: left;
	height: 50px;
	width: 290px;
	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0.28, rgb(235,176,41)), color-stop(0.64, rgb(242,245,250)) );
	background-image:-moz-linear-gradient( center bottom, rgb(235,176,41) 28%, rgb(242,245,250) 64% );
	background-color:
}
#wrapper #konten {
	float: left;
	width: 290px;
	margin-top: 10px;
}
#wrapper #footer {
	background-color: #FF9900;
	float: left;
	width: 290px;
	margin-top: 5px;
	height: 25px;
}


#wrapper #konten #postable{
margin-left:auto;
margin-right:auto;
height:100px;
overflow:scroll; 
}
.trkepala{
background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0.28, rgb(189,212,250)), color-stop(0.64, rgb(242,245,250)) );
	background-image:-moz-linear-gradient( center bottom, rgb(189,212,250) 28%, rgb(242,245,250) 64% );
}
-->
</style>
</head>

<body>
<div id="wrapper">
<div id="header">
<p align="center"><b>INPUT/EDIT PENGURUS</b></p>
</div>
<div id="konten">
<?php
include"../fungsi/koneksi.php";

?>
<?php

echo"
<div id=postable>
<form action='aksi_pengurus.php' method=post>
 <table border=1 cellpading=0 cellspacing=0  align=center>
		<tr class=trkepala>
		<td align=center>Pengurus</td>
		
        </tr>
		<tr class=trseragam>
		<td class=tdgrid>";
		$ambilinvoice=mysql_query("select * from pengurus",$konek);
		$in=mysql_fetch_array($ambilinvoice);
		echo" 
		<input type=text name='pengurus' value='$in[0]' class=grid>
		  
		</td>
		</tr>	 
			 ";
			 
			 
			 
			 echo"
			 </tbody>
			 </table>
			 </form>
</div>			
			 
";

?>
</div>
<div id="footer">
</div>
</div>
</body>
</html>
<?php
//}
?>