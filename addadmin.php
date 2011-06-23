<?php 

$connector = mysql_connect('localhost','root','hasan53');
if(!$connector) {
	die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$db_selected = mysql_select_db('ogr', $connector);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

$ad 	= $_POST['ad'];
$parola = $_POST['parola'];

mysql_query("INSERT INTO admin (ad, parola) VALUES('$ad' , '$parola')");

?>
