<?php
include "session.php";
require "../config.php";
?>
<HTML>
<HEAD>
<TITLE>login to Add your photos to gallery for free</TITLE>
<META NAME="DESCRIPTION" CONTENT="Login to add or edit your photos to the gallery">
<META NAME="KEYWORDS" CONTENT="Login, photo gallery, manage photo, gallery admin, search hosting ads">
<link rel="stylesheet" href="images/all11.css" type="text/css">


</HEAD>
<BODY  TOPMARGIN='0' onLoad="document.f1.id.focus()">

<?

$hd="Log In Here..";
$body="<form name='f1' action='loginck.php' method=post>
<table border='0' cellspacing='0' cellpadding='0' align=center>
  <tr id='cat'>
  <tr> <td  class='data'> &nbsp;Login ID  &nbsp; &nbsp;
</td> <td ><input type ='text' class='bginput' name='id' ></font></td></tr>

<tr> <td  class='data'>  &nbsp;Password  
</td> <td  ><input type ='password' class='bginput' name='pw' ></td></tr>

<tr> <td  colspan='2' align=center ><input type='submit' value='Submit'> <input type='reset' value='Reset'>
</td> </tr>





</table></center></form>";


echo $body;








  
?>
</body>
</html>
