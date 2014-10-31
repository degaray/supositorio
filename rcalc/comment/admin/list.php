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

@$msg=$_GET['msg'];
if(isset($msg) and strlen($msg) >1 ){
echo "<span style='background-color: #FFFF00'>$msg</span>";
}

////////////////////////////////////////////////////////////////////////////////////////////

$q=mysql_query("select * from cmt_post order by dt ");

echo "<table width='100%' border='0' cellspacing='1' cellpadding='0'>";
while($nt=mysql_fetch_array($q)){
echo "<tr bgcolor='#f1f1f1'><td><b>id</b>:$nt[post_id] <b>name</b>:$nt[name] <b>email</b>:$nt[email] <b>status</b>:$nt[status] <a href='list-dtl.php?post_id=$nt[post_id]&f_name=list.php'>Details</a></td><td align=right>".date("d-m-Y",strtotime($nt['dt']))."</td></tr>";
echo "<tr ><td colspan=2>$nt[dtl]</td></tr>";

}
echo "</table>";
//////////////////////////////////////////////////////////////////////////////////////////////  
?>
<center><a href=http://www.plus2net.com>PHP MySQL Tutorials and free scripts</a></center>

</body>
</html>
