<?php
include "session.php";
require "../config.php";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>(Type a title for your page here)</title>
<link rel="stylesheet" href="images/all11.css" type="text/css">
</head>

<body >
<?

require "check.php";
require "menu.php";

////////////////////////////////////////////////////////////////////////////////////////////
$post_id=$_GET['post_id'];
$f_name=$_GET['f_name'];
$q=mysql_query("select * from cmt_post where post_id=$post_id ");
echo mysql_error();
$row=mysql_fetch_object($q);

echo "<table width='100%' border='0' cellspacing='1' cellpadding='0'>";
echo "<tr bgcolor='#f1f1f1'><td><b>id</b>:$row->post_id <b>name</b>:$row->name <b>email</b>:$row->email <b>status</b>:$row->status</td><td align=right>".date("d-m-Y",strtotime($row->dt))."</td></tr>";
echo "<tr ><td colspan=2>$row->dtl</td></tr>";
echo "</table>";
echo "<hr>";
//////////////////////////////////////////////////////////////////////////////////////////////  

//////////// Updation starts ////////////////////

switch($row->status)
{
case "ns":
$nsck="checked";
$apvck="";

break;

case "apv":
$apvck="checked";
$nsck="";

break;


default:
$apvck="";
$nsck="";
break;

}


echo "<form method=post action='list-dtlck.php'><input type=hidden name='todo' value='status-up'><input type=hidden name=f_name value='$f_name'>
<input type=hidden name=post_id value=$post_id>
<input type=radio name=status value='ns' $nsck>Not Seen <input type=radio name=status value='apv' $apvck>Approved 
<input type=radio name=status value='del' >Delete 

<input type=submit value='Update'> 


</form>
";
///////////Updation ends ////////////////////////
?>
</body>
</html>
