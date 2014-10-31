<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?
//////// start of comment /////////////
$p_name="1be"; // Unique file name of the page. 
require "comment/config.php"; // Comment this if your page already established db connection
require "comment/cmt-display.php"; // To display the comments
echo '<br>';
require "comment/cmt-formck.php"; // Processing the form data
require "comment/cmt-form.php"; // To display the form. 
/////// end of comment //////////////
?>

</body>

</html>
