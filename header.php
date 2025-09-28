<?
Error_Reporting(E_ALL & ~E_NOTICE);
if ($pus<>""){
setcookie ("par", $pus,time()+60*60*24*30); // кука на мес€ц
}
$r_login = str_replace('..',"",$r_login);
$r_login = str_replace('.',"",$r_login);
$r_login = str_replace('/',"",$r_login);
$r_login = str_replace('>',"",$r_login);
$r_login = str_replace('<',"",$r_login);
$r_login = htmlentities($r_login);


include ("fun.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "images/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.necrom.net by Necrom [2011] -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>»нтернет-казино с играми на виртуальные и реальные деньги</title>
<link href="css/gambling.css" rel="stylesheet" type="text/css" />
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
<META NAME="AUTHOR" CONTENT="casino-magic.net">
<META NAME="COPYRIGHT" CONTENT="Copyright (c)  www.casino-magic.net">
<META NAME="KEYWORDS" CONTENT="казино, интернет-казино, азартные игры, рулетка, игра покер онлайн, виртуальное казино, онлайн, фишка, игровые автоматы, игровые слоты, играть на webmoney, играть на фишки, fun, casino, necrom, азарт">
<META NAME="DESCRIPTION" CONTENT="јзартные игры на webmoney">
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<META NAME="REVISIT-AFTER" CONTENT="1 DAYS">
<META NAME="RATING" CONTENT="GENERAL">
<META NAME="GENERATOR" CONTENT="casino-magic.net - Copyright http://casino-magic.net">
<script type="text/javascript" src="swfobject.js"></script>
</head>













<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="980" height="200" valign="top" background="/images/casino-header-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;">
    <div align="center" class="title" style="padding-top:45px;padding-left:0px;"><? echo $con[4]; ?></div>
    </td>
  </tr>
  <tr>
    <td width="980" height="130" valign="top"><img src="/images/casino-header-2-gamblingtemplatesdotnet.jpg" width="980" height="130" /></td>
  </tr>

						
			



<? include ("left.php");?>
