<?php

echo'
<ul id="nav" class="dropdown dropdown-horizontal" style=";">
	<li><a href="index.php">Beranda</a></li>
	<li><a href="?module=jadwal">Jadwal</a></li>
	<li><a href="?module=cara">Cara Pemesanan</a></li>
	';
	
	if(!empty($_SESSION[noakun])){
	
	echo"
	<li><a href='?module=pesantiket'>Pesan Tiket</a></li>
	<li><a href='?module=informasi'>Informasi</a></li>
	<li><a href='logout.php'>Logout</a></li>
	
	";
	}
	else{
	echo"<li><a href='?module=login'>Login</a></li>
	<li><a href='?module=daftar'>Daftar</a></li>";
	}
	
echo'
</ul>

';
?>