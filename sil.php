<html>
<body>
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

$numara 	= $_POST['numara'];
$sifre  	= $_POST['sifresi'];

$result = mysql_query("DELETE FROM ders WHERE numara = '$numara' and sifre = '$sifre' ");

?>
</body>
</html>
