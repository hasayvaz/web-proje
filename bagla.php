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

$numara 	= $_POST['numarasi'];
$sifre 		= $_POST['sifresi'];
$sinif 		= $_POST['sinifi'];
$prog 		= $_POST['prog'];
$prog2 		= $_POST['prog2'];
$veriyap 	= $_POST['veriyap'];
$veriyap2 	= $_POST['veriyap2'];
$saytas 	= $_POST['saytas'];
$saytas2 	= $_POST['saytas2'];
$mesing 	= $_POST['mesing'];
$mesing2 	= $_POST['mesing2'];

mysql_query("INSERT INTO ders (numara, sifre, sinif, prog, prog2, veriyap, veriyap2, saytas, saytas2, mesing, mesing2) VALUES('$numara' , '$sifre', '$sinif', '$prog', '$prog2', '$veriyap', '$veriyap2', '$saytas', '$saytas2', '$mesing', '$mesing2')");

?>
