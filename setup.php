<?
error_reporting(0);
$dbhost="localhost"; ///им€ хоста (обычно localhost)
$dbuname="user"; ///им€ пользовател€
$dbpass="Sokol2016"; ///пароль 
$dbname="bogame"; ///им€ базы

$full_base = mysql_connect($dbhost, $dbuname, $dbpass) or die("<br><br><center><br><br><b>»звините, но в данный момент на сайте идут технические работы.<br><br>ѕриносим свои извинени€, просим ¬ас зайти немного позже.</center></b>");
mysql_select_db($dbname, $full_base);
?>