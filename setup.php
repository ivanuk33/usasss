<?
error_reporting(0);
$dbhost="localhost"; ///��� ����� (������ localhost)
$dbuname="user"; ///��� ������������
$dbpass="Sokol2016"; ///������ 
$dbname="bogame"; ///��� ����

$full_base = mysql_connect($dbhost, $dbuname, $dbpass) or die("<br><br><center><br><br><b>��������, �� � ������ ������ �� ����� ���� ����������� ������.<br><br>�������� ���� ���������, ������ ��� ����� ������� �����.</center></b>");
mysql_select_db($dbname, $full_base);
?>