<?php
session_start();
//error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> </title>
<link href="csshome/style.css" rel="stylesheet" type="text/css" />
<link href="csshome/dropdown.vertical.css" media="screen" rel="stylesheet" type="text/css" />

<link href="csshome/helper.css" media="screen" rel="stylesheet" type="text/css" />
<link href="csshome/dropdown.css" media="screen" rel="stylesheet" type="text/css" />

<link href="csshome/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jquery/jquery.dropdown.js"></script>
<![endif]-->

<!-- / END -->


<script type="text/javascript" src="csshome/js/jquery.dropdown.js"></script>

<?php

include"fungsi/koneksi.php";

include "fungsi/library.php";
include "fungsi/class_paging.php";
?>
</head>
<body>
<div id="wrapper">
<div id="header">
</div>
<div id="menu">
<?php
include"menu.php";
?>
</div>
<div id="kiri">
<?php
include"tengah.php";
?>
</div>
<div id="kanan">
<img src="images.jpg" width="180px" height="189px" style="margin-bottom:15px;" />
<img src="Kulinerbpkp.jpg" width="180px" height="100px" />
</div>
<div id="clearer">
</div>
<div id="footer">


</div>
</div>
</body>
</html>
