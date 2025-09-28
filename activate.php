<!DOCTYPE html>
<html>

<!-- Mirrored from admiralslot.com/jackpot by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 24 Jun 2015 12:31:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <link href="../assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon">

                                         	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="../jquery.reveal.js"></script>
                                         <link rel="stylesheet" type="text/css" href="../css/compiled/css.11d5a82.css">
                        
                        <script type="text/javascript" src="../js/compiled/main.11d5a82.js"></script>
                
                
                            <title>Вход в казино Адмирал</title>
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
            <a class="logo-link" href="../index.php"></a>
        </div>

        <!-- Top menu -->
        <!-- header navigation-->
<nav class="header-nav">
    <ul>
        <li class="header-nav__item
                "><a href="../igrovye-avtomaty/index.php">Игровой зал</a></li>

        <li class="header-nav__item
                "><a href="../tournaments/index.php">Турниры</a></li>

        <li class="header-nav__item
                "><a href="../lotteries/index.php">Лотереи</a></li>


        <li class="header-nav__item
                "><a href="../login.php">Магазин</a></li>


        <li class="header-nav__item
                "><a href="../hall-of-fame/index.php">Зал славы</a></li>

        <li class="header-nav__item">
        <a href="../contact.php">Обратная связь</a></li>

            </ul>
</nav>

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

    <p>Вход
        через
        соц.сеть:</p>
<!-- T0DO <script src="//ulogin.ru/js/ulogin.js"></script>
                    <ul class="socials-md" id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2F;mobilebuttons=0;">
</ul>-->
      

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

    <a class="btn btn-blue btn-md" href="../index.php">
        <span>Вернутся на главную</span>
    </a>
    <a class="btn btn-green btn-md" href="#" data-reveal-id="myModal">
        <span>Зарегистрироваться</span>
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

          

                                        <main class="main">

                                           
                        <div class="content cnt-pt">
                      



<div class="cnt-dt jackpot">
<h1>Активация аккаунта</h1>



 <?
include ("setup.php");
include ("setup_virtual.php");
?>


<tr>
              <td width="250" valign="top">&nbsp;</td>
            </tr>
          </table></td>
        <td width="480" valign="top"><table width="480" border="0" cellspacing="0" cellpadding="0">
          <tr>

          </tr>






<table width="460" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                    <td width="380" valign="top" class="head-2"><div style="padding-top:13px;padding-left:35px;"><b>  <? echo $con[4]; ?></b></div></td>
                  </tr>
                  <tr>
                    <td width="380" valign="top"><div style="padding-top:9px;padding-left:15px;">
<br>
<center>
<?
echo "";
if (isset($_GET['code']) && preg_match('/^[A-Fa-f0-9]{32}$/',$_GET['code'])) {
$user_sql_query = mysql_query("SELECT id FROM users WHERE check_mail = '0' and MD5(CONCAT(login,pass,'".date("z")."'))= '".$_GET['code']."' limit 0, 1", $full_base);
if (mysql_num_rows($user_sql_query) == 1) {
$user_array=mysql_fetch_array($user_sql_query);
mysql_query("UPDATE users SET check_mail=1 WHERE id = '".$user_array['id']."'", $full_base);
mysql_query("UPDATE users SET check_mail=1 WHERE id = '".$user_array['id']."'", $fun_base);
echo "<font class=option color=#FFFFFF>Аккаунт успешно активирован!</font>";
} else {
echo "<font class=option color=#FFFFFF>Неверный код, или аккаунт уже был активирован!</font>";
}
} else {
echo "<font class=option color=#FFFFFF>Не правильно переданный параметр!</font>";
}
?>
</center>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>

<?
include ("");
?>	


</div>

                            
           

                    </main>
                    
              


           
            </div>

        </div>

    </section>

            <!-- footer -->
<footer class="footer">

    <div class="wrapper">

        <div class="footer-cnt cnt-pt">

            <div class="cnt-mt">
                <div class="footer-img">
                    <img src="../assets/img/sys/bg/footer-payments.png" alt=""/>
                </div>
            </div>

            <div class="grid-wrapper">

                <div class="grid-wrapper-cols pd-md-sides pd-parent">

                    <!-- footer menus -->
                    <div class="grid-col__2-12">

    <nav class="footer-list">
        <h4 class="h4">Важное</h4>
        <ul>
            <li><a href="../online-casino.php">О нас</a></li>
            <li><a href="../news/index.php">Новости</a></li>
            <li><a href="../stati/index.php"><nobr>Полезная информация</nobr></a></li>
            <li><a href="../terms.php">Правила и условия</a></li>
            <li><a href="../plugin/index.php">Плагин</a></li>
        </ul>
    </nav>
</div>

<div class="grid-col__2-12">

    <nav class="footer-list">
        <h4 class="h4">&nbsp;</h4>
        <ul>
             
            <li><a href="../AffiliateProgram.php"><nobr>Партнерская программа</nobr></a></li>
            <li><a href="../privileges.php"><nobr>Программа лояльности</nobr></a></li>
        </ul>
    </nav>

</div>
                    <div class="grid-col__8-12">
                        <!-- footer carousel -->
                        <!-- footer carousel -->
<div class="carousel carousel-fade slide" id="footer-carousel"
     data-ride="carousel" data-interval="5000">

    
                                                    <div class="carousel-inner" style="overflow: visible">
 
    </div>

                    
    
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

            <p class="footer-copy">© 2015
                                <a href="../index.php">Казино Адмирал игровые автоматы</a>. Все права защищены.
            </p>

        </div>
        <div class="grid-col__6-12">
            <ul class="footer-partners">
                <li>
                    <a href="../AffiliateProgram.php" class="footer-partners__wp"></a>
                </li>
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

        


 

 
<div id="myModal" class="reveal-modal">
			<FORM name="form" action="../index.php" method="post">
			<div class="pop_title">РЕГИСТРАЦИЯ</div>
			<div class="pop_label">E-mail<span style="color:red;">*</span></div>
			<div class="pop_form"><input value ="" placeholder="Введите Ваш e-mail" name="r_email" class="proff_input3" /></div>

			<div class="pop_label">Логин <span style="color:red;">*</span></div>
			<div class="pop_form"><input value="" placeholder="Введите логин" name="r_login" class="proff_input3" /></div>

			<div class="pop_label">Пароль <span style="color:red;">*</span></div>
			<div class="pop_form"><input type="password" value="" placeholder="Введите пароль" name="r_pass" class="proff_input3" /></div>



			<div class="pop_info"><span style="color:red;">*</span> поля, обязательные для заполнения</div>
			<INPUT type="hidden" value="1" name="send">
			<INPUT type="hidden" value="" name="pus">
			<button type="submit" class="btn btn-green btn-md" ><span>Зарегистрироваться</span></button>



			<div class="pop_info3">

<!-- T0DO <script src="//ulogin.ru/js/ulogin.js"></script>
                    <ul class="socials-md" id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2F;mobilebuttons=0;">
</ul>-->
      

			</form>
		</div>
</body>

<!-- Mirrored from admiralslot.com/jackpot by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 24 Jun 2015 12:31:43 GMT -->
</html>