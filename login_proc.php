<?
if($psw=="")
{
$psw="985465";
}
else
session_start();
if(isset($submit) )
{
include ("../setup.php"); 

$result=mysql_query("select * from users where login='$log'");
$row=mysql_fetch_array($result);



$pasw=$row["pass"];
}
if($pasw==$psw){
$HTTP_SESSION_VARS['l']=$log;
$HTTP_SESSION_VARS['p']=$psw;
Header("Location: index.php");
exit;
}
else
print "Ошибка! Неверный логин или пароль";

?>