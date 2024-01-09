<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title></title>

<link href="css/style_login.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" type="image/x-icon" href="images/siti.png" />

<script type="text/javascript" src="js/jquery-1.4.js"></script>

<script type="text/javascript" src="js/jquery.watermark.min.js"></script>

<script type="text/javascript">

      $(document).ready(function() {

	       $("#username").watermark(" ketikan username anda ...");

	       $("#password").watermark(" ketikan password anda ...");

      });

    </script>

<script language="javascript">

function pesan(){

if(document.frmlogin.username.value=="") {

window.alert("username masih kosong..!!!");

document.frmlogin.username.focus();

return false;

}

if(document.frmlogin.password.value=="") {

window.alert("password masih kosong..!!!");

document.frmlogin.password.focus();

return false;

}




else{ 

document.frmlogin.submit();

return true;

}

}

</script>

	

</head>



<body>

<div id="wrapper">



<div id="header">

</div>

<div id="kontent">

  <div id="login">

  <br />

  <br />

  <form action="ceklogin.php" method="post" onsubmit="return pesan();" name="frmlogin">

  <table border="0" cellpadding="6" cellspacing="6" align="center">

 

 

  <tr><td class="label">Username</td><td><input type="text" size="30" id="username" name="username" class="lengkung" />   </td></tr>

  <tr><td class="label">Password</td><td><input type="password" size="30" id="password" name="password" class="lengkung" /></td></tr>

 	<tr><td></td><td><input type="submit" value="LOGIN" style="cursor:pointer;margin-left:5px;" class="glassy_btn" /> </td></tr>

	</table>

  </form>  

  </div>

</div>

<div id="clearer"></div>

<div id="footer">

</div>









</div>

</body>

</html>

