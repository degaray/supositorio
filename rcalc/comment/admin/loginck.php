<?php
include "session.php";
require "../config.php";
?>
<HTML>
<HEAD>
<TITLE>Signup for adding your hosting offers and plans to our directory</TITLE>
<META NAME="DESCRIPTION" CONTENT="">
<META NAME="KEYWORDS" CONTENT="">
<link rel="stylesheet" href="images/all11.css" type="text/css">


</HEAD>
<BODY  TOPMARGIN='0' >

<?

$id=$_POST['id'];
$id=mysql_real_escape_string($id);
$pw=$_POST['pw'];
$pw=mysql_real_escape_string($pw);


if($rec=mysql_fetch_array(mysql_query("SELECT * FROM cmt_admin WHERE userid='$id' AND password = '$pw'"))){
	if(($rec['userid']==$id)&&($rec['password']==$pw)){
	 include "newsession.php";
            echo "<p class=data> <center>Successfully,Logged in<br><br><a href='logout.php'> Log OUT </a><br><br><a href=add.php>Click here if your browser is not redirecting automatically or you don't want to wait.</a><br></center>";
     print "<script>";
       print " self.location='list.php';";
          print "</script>";

				} 
		}	
	else {

		session_unset();
echo "<font face='Verdana' size='2' color=red>Wrong Login. Use your correct  Userid and Password and Try <br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
		
	}







  
?>
</body>
</html>
