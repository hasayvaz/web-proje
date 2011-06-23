<?php
$connector = mysql_connect('localhost','root','hasan53');

if(!$connector) {
	die('Could not connect: ' . mysql_error());
}


$db_selected = mysql_select_db('ogr', $connector);
if (!$db_selected) {
	die ('Can\'t use foo : ' . mysql_error());
}

$ad	= $_POST['ad'];
$parola	= $_POST['parola'];

$result = mysql_query("SELECT * from admin WHERE parola = '$parola' and ad = '$ad'");

if (!mysql_fetch_assoc($result))
	header("Location: adminlogin.php");
else
	header("Location: anasayfa.html");
?>
