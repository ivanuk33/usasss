<!DOCTYPE html>
<html>

<!-- Mirrored from admiralslot.com/jackpot by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 24 Jun 2015 12:31:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <link href="../assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon">

                                         	<script type="text/javascript" src="http://ff.kis.v2.scr.kaspersky-labs.com/9DF499DD-D812-AA44-8DFD-DF5BBD627E54/main.js" charset="UTF-8"></script><script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="../jquery.reveal.js"></script>
                                         <link rel="stylesheet" type="text/css" href="../css/compiled/css.11d5a82.css">
                        
                        <script type="text/javascript" src="../js/compiled/main.11d5a82.js"></script>
                
                
                            <title>Кабинет игрока Адмирал казино</title>
                <meta name="description" content="Онлайн казино Адмирал приглашает всех любителей азарта присоединиться к игрокам этого заведения и побороться за сумасшедший джекпот. Выиграть и воплотить все свои мечты в реальность может абсолютно любой!">
                <meta name="keywords" content="jackpot">
                    
    
    
</head>
<body>


    
<!-- Parallax Block -->
<div class="bg-elem"></div>

<!-- Main block -->
<div class="layout">
    <!-- SiteHeart -->
                
    
    <!-- Often played games widget -->
    

    <!-- Header -->
            <header class="header">
    <div class="wrapper">

        <div class="logo">
            <a class="logo-link" href="index.php"></a>
        </div>

        <!-- Top menu -->
        <!-- header navigation-->
<nav class="header-nav">
 
       <ul>
        <li class="header-nav__item
                "><a href="index.php">Игровой зал</a></li>

        <li class="header-nav__item
                "><a href="tournaments.php">Турниры</a></li>

        <li class="header-nav__item
                "><a href="lotteries.php">Лотереи</a></li>


        <li class="header-nav__item
                "><a href="stat.php">Депозиты</a></li>


        <li class="header-nav__item
                "><a href="jackpot.php">Джек-пот</a></li>

        <li class="header-nav__item">
        <a href="contact.php">Обратная связь</a></li>

            </ul></nav>

        <!-- User bar -->
        <div class="user-bar grid-wrapper">
    <div class="grid-wrapper-cols">
        <div class="grid-col__4-12">
            <div class="cnt-mt">
                <div class="cnt-mt__neon">
                    <div class="cnt-mt__neon-top"></div>
                    <div class="cnt-mt__neon-bottom"></div>
                    <div class="cnt-mt__neon-anim-top"></div>
                    <div class="cnt-mt__neon-anim-bottom"></div>

                
                    <!-- Userbar: socials buttons -->
                    <div class="user-bar__socials">


    <a class="btn btn-green btn-md" href="cab.php">
        <span>Мой кабинет</span>
    </a>
</div>
                                </div>
            </div>
        </div>

        <div class="grid-col__4-12 grid-col__4-12-left">
            <div class="cnt-mt">
                <div class="cnt-mt__neon">
                    <div class="cnt-mt__neon-top"></div>
                    <div class="cnt-mt__neon-bottom"></div>
                    <div class="cnt-mt__neon-anim-top"></div>
                    <div class="cnt-mt__neon-anim-bottom"></div>

                
                    <!-- Userbar: login buttons -->
                    <div class="user-bar__login">

   <a class="btn btn-blue btn-md" href="out.php">
        <span>Снять</span>
    </a>
    <a class="btn btn-green btn-md" href="in.php">
        <span>Пополнить счет</span>
    </a>


</div>

                                </div>
            </div>
        </div>
    </div>
</div>

        <div class="promo">

            <!-- main slider -->
   

    </div>
</header>        <!-- END header -->

    <!-- container -->
    <section class="container">

        <div class="wrapper">

            <div class="grid-wrapper">

                <div class="grid-col__left">

                                        <main class="main">

                                           
                        <div class="content cnt-pt">
                      
<h1>Кабинет игрока</h1>
<font color="silver">
<div class="clear"><b>Данные игрока:</b><br>


<script type="text/javascript" >

	var xmlHttp = createXmlHttpRequestObject();


	function createXmlHttpRequestObject()
	{
		  var xmlHttp;

		  if(window.ActiveXObject)
		  {
		    try
		  {
		      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	      }
	    catch (e)
	    {
	      xmlHttp = false;
	    }
	 }
	 else
	  {
    	try
	    {
	      xmlHttp = new XMLHttpRequest();
    	}
	    catch (e)
	    {
	      xmlHttp = false;
	    }
	  }
	  if (!xmlHttp)

	    alert("Error creating the XMLHttpRequest object.");
	  else
	    return xmlHttp;
	}




	function process(f)
	{

       if (f == 1)
       {
		    if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
		    {


			    	var mode = encodeURIComponent(document.getElementById("mode").checked);

				    xmlHttp.open("GET", "fungame_res.php?mode=" + mode, true);
				    xmlHttp.onreadystatechange = handleServerResponse;
				    xmlHttp.send(null);
		    }
		}

       if (f == 2)
       {
		    if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
		    {

			    	var user = encodeURIComponent(document.getElementById("user").value);

		            xmlHttp.open("GET", "funmoney_res.php?user=" + user, true);
				    xmlHttp.onreadystatechange = handleServerResponse2;
				    xmlHttp.send(null);
		    }
		}


	}




	function handleServerResponse()
	{

		  if (xmlHttp.readyState == 4)
		  {

			    if (xmlHttp.status == 200)
			    {

				      var response = xmlHttp.responseText;

			    }
			    else
				    {
					      alert("There was a problem accessing the server: " + xmlHttp.statusText);
				    }
		  }
	}



	function handleServerResponse2()
	{

		  if (xmlHttp.readyState == 4)
		  {

			    if (xmlHttp.status == 200)
			    {

				      var response = xmlHttp.responseText;

                      var arr = response.split('+');

                      if (arr[0]=='no')
                      {
 				       	alert(arr[1]);
 				      }

 				      if (arr[0]=='ok')
 				      {
 				       	document.getElementById("fun").innerHTML = '<p align="left"><b><font color="#8B8B8B">'+arr[1]+'&nbsp;FUN</font></b></p>';
				      	alert('Ваш игровой счет успешно пополнен!')
                      }

			    }
			    else
				    {
					      alert("There was a problem accessing the server: " + xmlHttp.statusText);
				    }
		  }
	}


</script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>

<?
Error_Reporting(E_ALL & ~E_NOTICE);
unset($l);
session_start();
session_register($l);
if(!isset($l)){
header("Location: login.php");
exit;
}
if ($st == "exit"){
unset($l);
session_destroy();
echo "<script language=\"JavaScript\">location.href=\"../index.php\";</script>";
}
include ("../setup.php");
include ("../fun.php");

$row=mysql_fetch_array(mysql_query("select * from users where login='$l'"));
$conf=mysql_fetch_array(mysql_query("select * from seting"));

?>


  <tr>
    <td width="980" valign="top" bgcolor="#321F00"><table width="980" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="250" valign="top"><table width="250" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="250" height="40" valign="middle" background="../images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;">
            <div class="head-1" style="padding-left:15px;padding-top:2px;">Ваш счёт</div></td>
          </tr>
          <tr>
            <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="31" height="13"><br>

				   <table width="100%" border="0">

		       <tr>
		          <td>
		                <strong>Логин:</strong>
		          </td>
		          <td>
		                <font color="#ffff00"><SPAN style="FONT-SIZE: 9pt"><b> <? echo $l; ?></b></SPAN></font></b>
		          </td>
		        </tr>
		       <tr>
		          <td>
		               <strong>Счет:</strong>
		          </td>
		          <td>
		               <? echo $row['cash']; ?>&nbsp;WMR
		          </td>
		        </tr>
		       <tr>
		          <td>

						<?
							//*****************GAME FUN**************************
							include ("../setup_virtual.php");
							$sql_fun="select * from users where login='$l'";
							$res_fun=mysql_query($sql_fun);
							$row_fun=mysql_fetch_assoc($res_fun);
							//****************************************************
						?>
                       <input name="user" id="user"  type="hidden" value=" <? echo $l; ?> ">
                       <strong>Счет:</strong>
		          </td>

		          <td>
		                <div id='fun'><? echo $row_fun['cash']; ?> &nbsp;FUN </div>
						<? include ("../setup.php"); ?>

		          </td>
		        </tr>
                </table>
                
               </td>
            </table></td>
          </tr>
          <tr>
            <td width="250" valign="top">&nbsp;</td>
          </tr>
        </table>
          <table width="250" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="250" height="40" valign="middle" background="../images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;"><div class="head-1" style="padding-left:15px;padding-top:2px;">Режим игры</div></td>
            </tr>
            <tr>
              <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31" height="13">
                  <br>
					

					
<input name="mode" id="mode" type="radio" value="real" <? if ($_SESSION['mode']=="true" or !isset($_SESSION['mode'])) echo " checked " ?> onclick="process(1);">
          <b>WMR Счет</b><br>


          <input name="mode" id="mode" type="radio" value="virtual" <? if ($_SESSION['mode']=="false") echo " checked " ?> onclick="process(1);">
          <b>FUN Счет</b><br>


					
					</td>
                  
                    
                  </tr>
              </table></td>
            </tr>



 <tr>
            <td width="250" valign="top">&nbsp;</td>
          </tr>
        </table>
          <table width="250" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="250" height="40" valign="middle" background="../images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;"><div class="head-1" style="padding-left:15px;padding-top:2px;">Касса</div></td>
            </tr>
            <tr>
              <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31" height="13">
                   </td>
                  <td width="184"></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="../images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="/lobby/in.php" class="navbar2"><b>Пополнить WMR счёт</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="../images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="javascript:process(2);" class="navbar2"><b>Пополнить FUN счёт</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="../images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="/lobby/out.php" class="navbar2"><b>Снять</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="../images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="/lobby/stat.php" class="navbar2"><b>История</b></a></td>
                </tr>
								
					 </table></td>
          </tr>
          <tr>
            <td width="250" valign="top">&nbsp;</td>
          </tr>
        </table>

<?
$strok=mysql_query("SELECT * FROM partner WHERE pus='$l'");
$userp = mysql_num_rows($strok);
?>


          <table width="250" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="250" height="40" valign="middle" background="../images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;"><div class="head-1" style="padding-left:15px;padding-top:2px;">Партнёрка</div></td>
            </tr>
            <tr>
              <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31" height="13">
                    <br>
					
					<div style="padding-left:5px; padding-right:10px; padding-top:5px; padding-bottom:10px" class="style2">

<strong>Партнёров:</strong> <? echo $userp; ?> чел.
<br>
<strong>Заработано:</strong> <? echo $row[10]; ?> руб.
</div>
					
					
					
					</td>
                  
                    
                  </tr>
              </table></td>
            </tr>









Емайл: <br>
Логин:<br>
Пароль: <br>
На счету: [<a href="in.php">пополнить счет</a>] [<a href="out.php">снять</a>][<a href="stat.php">история депозитов</a>]<br>

<br><center><h2>Партнерская программа</h2></center>
<b>Данные партнера:</b>[<a href="partner.php">зарабатывайте с нами</a>]<br>
Логин: digitex<br>
Пригласил игроков:0<br>
Заработано: 0.00<br>

                            
                                
                                <div class="col-xs-12">
                                    <div class="cnt-pt-line"></div>

                                    <div class="social_buttons text-center" style="margin: 20px 0 10px;">
                                        <script type="text/javascript" src="../yandex.st/share/share.js" charset="utf-8"></script>
<div class="yashare-auto-init"
     data-yashareL10n="ru"
     data-yashareQuickServices="vkontakte,facebook,twitter,moimir"
     data-yashareTheme="counter"
     data-yashareType="small"></div>                                    </div>
                                </div>
                                <!-- /.col-xs-12 .social_buttons -->
                                                    </div>

                    </main>
                    
                </div>


                <div class="grid-col__right">

                    <!-- search -->
                                        <!-- search -->



                    <!-- Sidebar -->
                                            <aside class="sidebar cnt-pt">

    <div class="sidebar-block">

        <!-- TOURNAMENT NOW -->
        <!-- TOURNAMENT NOW -->


    
    
<div class="grid-col__9-10 center-block">




        <div class="tournament-fond cnt-bl">

        <div class="tournament-fond__title">На счету</div>
        <div class="tournament-fond__total text-gradient-yellow"></div>
   
     

        <table class="tournament-fond__table">
            <tbody>
            
                        <tr>
                <td>
                    <span></span>
                </td>
                <td>
                    <span></span>
                </td>
            </tr>
                   
            
                        </tbody>
        </table>
    </div>
                

    <div class="sidebar-btn">
        <a href="?st=exit" class="btn btn-blue btn-md">
            <span>Выход</span>
        </a>
    </div>

</div>
        
            
        

    </div>

    <!-- Game Week -->
    
                
    <div class="sidebar-block">

        <!-- GAME OF THE WEEK -->
        <div class="neon-header">
            <div class="h4">Игра недели</div>
        </div>

        <div class="grid-col__9-10 center-block">
            <div class="week-game">
                <a data-game="item" class="tmb" href="./gogame.php?mode=real&game=/gmn_bookofra.php">

                    <i class="sticker"> </i>

                    <div class="tmb-img">

                        <img alt="" src="../uploads/games/bookofra-jpg1416394886.jpg">

                        <div class="tmb-action">
                            <div class="btn btn-green btn-lg centered">
                                <span>Играть сейчас</span>
                            </div>
                        </div>

                    </div>

                    <div class="tmb-title">Book of Ra</div>

                </a></div>
        </div>
    </div>


    <div class="sidebar-block">

        <!-- LAST NEWS -->
        <!-- LAST NEWS -->


    </div>

</aside>                    
                </div>

            </div>

        </div>

    </section>

  
 


 

    ﻿          <!-- footer -->
<footer class="footer">

    <div class="wrapper">

        <div class="footer-cnt cnt-pt">

            <div class="cnt-mt">
                <div class="footer-img">
                    <img src="assets/img/sys/bg/footer-payments.png" alt=""/>
                </div>
            </div>

            <div class="grid-wrapper">

                <div class="grid-wrapper-cols pd-md-sides pd-parent">

                    <!-- footer menus -->
                    <div class="grid-col__2-12">

    <nav class="footer-list">
        <h4 class="h4">Важное</h4>
        <ul>
            <li><a href="in.php">Пополнение счета</a></li>
            <li><a href="out.php">Снятие выигрыша</a></li>
            <li><a href="cab.php"><nobr>Кабинет игрока</nobr></a></li>
            <li><a href="tournaments.php">Турниры</a></li>
            <li><a href="lotteries.php">Лотереи</a></li>
        </ul>
    </nav>
</div>

<div class="grid-col__2-12">

    <nav class="footer-list">
        <h4 class="h4">&nbsp;</h4>
        <ul>
             
            <li><a href="partner.php"><nobr>Партнерская программа</nobr></a></li>
            <li><a href="contact.php"><nobr>Контакты</nobr></a></li>
        </ul>
    </nav>

</div>
                    <div class="grid-col__8-12">
                        <!-- footer carousel -->
                        <!-- footer carousel -->
<div class="carousel carousel-fade slide" id="footer-carousel"
     data-ride="carousel" data-interval="5000">

    
                                               

                    
    
</div>
                    </div>

                </div>

            </div>

        </div>

        <!-- footer info -->
        <!-- footer info -->
<div class="footer-info grid-wrapper">
    <div class="grid-wrapper-cols pd-lg-sides pd-parent">
        <div class="grid-col__6-12">

       <ul class="footer-contacts">
                <li class="footer-contacts__item">
                     <a href="mailto:support@admiralslot.com">   <i class="ico ico-contact-mail"></i></a>
                </li>
                <li class="footer-contacts__item">
            
                </li>
                <li class="footer-contacts__item">
                    
                </li>
            </ul>

            <p class="footer-copy">© 2016
                                <a href="http://casinosoft.biz">Разработка онлайн казино</a>. Все права защищены.
            </p>

        </div>
        <div class="grid-col__6-12">
            <ul class="footer-partners">
   
                <li>
                    <span class="footer-partners__icons"></span>
                </li>
            </ul>
        </div>
    </div>
</div>
    </div>

</footer>    
    
        <script type="text/javascript">

                        var needCheckPopup = false;
                    </script>

    
</div>

        </body>

<!-- Mirrored from admiralslot.com/jackpot by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 24 Jun 2015 12:31:43 GMT -->
</html>