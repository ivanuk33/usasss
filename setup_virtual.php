<?
error_reporting(0);
$dbhost="localhost"; ///им€ хоста (обычно localhost)
$dbuname="user1"; ///им€ пользовател€
$dbpass="Sokol2017"; ///пароль 
$dbname="bogame_fun"; ///им€ базы

$fun_base = mysql_connect($dbhost, $dbuname, $dbpass) or die("<br><br><center><br><br><b>»звините, но в данный момент на сайте идут технические работы.<br><br>ѕриносим свои извинени€, просим ¬ас зайти немного позже.</center></b>");
mysql_select_db($dbname, $fun_base);
?>