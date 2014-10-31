<?
@$todo=$_POST['todo'];
if(isset($todo) and $todo=="post_comment"){

$name=$_POST['name'];
$name=mysql_real_escape_string($name);
$email=$_POST['email'];
$email=mysql_real_escape_string($email);
$dtl=$_POST['dtl'];
$dtl=mysql_real_escape_string($dtl);

$status = "OK";
$msg="";

// if userid is less than 3 char then status is not ok
if( strlen($name) <3 or strlen($name) > 25){
$msg=$msg."Your Name  should be more than 2 and less than 25 char long<BR>";
$status= "NOTOK";}					

if( strlen($dtl) <3 ){
$msg=$msg."Your comment should be more than 3 char long<BR>";
$status= "NOTOK";}					



if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font>";
}else{ // if all validations are passed.
$dt=date("Y-m-d"); 
$status='ns'; // Change this to apv if you want all messages to be automatically approved once posted.
$query=mysql_query("insert into cmt_post(p_name,dt,name,email,dtl,status) values('".strip_tags($p_name)."','".strip_tags($dt)."','".strip_tags($name)."','".strip_tags($email)."','".strip_tags($dtl)."','".strip_tags($status)."')");
echo mysql_error();
echo "<font face='Verdana' size='2' color=green>Thank you for posting your comment we will review it and display it soon to avoid spamming<br></font>";
}
}// Checking of if condition if form is submittted

?>