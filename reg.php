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
                    <div class="user-bar__socials"> <a class="btn btn-green btn-md" href="http://bogame.ru/lobby/login.php">
        <span>Войти в казино</span>
    </a>
</ul>     

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
<h1>Регистрация в казино</h1>



 	



<? 
include("country.php");
include("securimage/securimage.php");
session_start();

//// Переменные ------------ 
 
//константы, для регулярки
//p.s. нет я не блондинка, константы пишуться КАПСОМ, так принято :)
define('REGXP__SITY_WORD',"/^[А-Яа-яA-Za-z ]{4,15}$/");
define('REGXP__ENG_WORD',"/^[A-Za-z0-9]{4,15}$/");
define('REGXP__NUM_OR_SELECT',"/^[0-9]{1,4}$/");
define('REGXP__RUS_AND_ENG_WORD',"/^[А-Яа-яA-Za-z]{4,15}$/");
define('REGXP__EMAIL',"/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i");


//cписок месяцев
$months = array("Января", "Февраля", "Марта", "Апреля", "Майя", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря");
//-> Стартовое значение поля
$months['start_value'] = "- Месяца -";
//SELECT * FROM user WHERE MD5(CONCAT(login,password))='<usermd5>'
//Создаем карту проверки формы. (содержание)
$fields_map = array();
$fields_map['r_login'] = REGXP__ENG_WORD;
$fields_map['r_pass'] = REGXP__ENG_WORD;
$fields_map['r_email'] = REGXP__EMAIL;

//Создаем карту проверки формы. (логика)
//_POST значени проверять не надо! Они уже проверены будут к тому моменту.
$fields_logic_map = array();
$img = new Securimage();
$fields_logic_map['r_antispam'] = $img->getCode();
$fields_logic_map['r_rules'] = 1;

$unique_fields['r_login'] = "login";
$unique_fields['r_email'] = "email";
//// Функции ------------  

//Фукция для распечатывания Элементов массива.
//Аргументы: Массив, Шаблон (формат тут - http://ru.php.net/manual/ru/function.sprintf.php)
function draw_element($array, $temple) {	 
$return = NULL;
if (isset($array['start_value'])) { $return .= sprintf(str_replace("%d","%s", $temple), '---', $array['start_value']); unset($array['start_value']); }
if (isset($array['numeric']) && is_numeric($array['numeric'][0]) && is_numeric($array['numeric'][1])) {
  for ($n=$array['numeric'][0];$n<=$array['numeric'][1];$n++) {
	$return .= sprintf($temple, $n, $n);
  }
} else {
  foreach ($array as $key => $value) {
    $return .= sprintf($temple, $key, $value);
  }
}
if ($return != NULL) { return $return; }
}

//Адская фунция прямиком из ада :) Для проверки значений.
//Аргументы: (array)$vars_map - по типу "переменная=>регулярка", (array)$date - массив значений DATE (можно скормить POST или GET), (array)$vars_logic - необязательный парамерт для логики
//Возращает: True если все переменные "хорошие" или список "хороших" переменных, плохие отметаються.
function form_check($map, $date, $logic = array(), $unique = array()) {
$done_array = array();
$error_array = array();

foreach ($map as $field => $regxp) {
$error = "null";
if (isset($date[$field]) && preg_match($regxp, $date[$field])) {
  if ((isset($logic[$field]) && $date[$field] == $logic[$field]) || !isset($logic[$field])) {
     if ((isset($unique[$field]) && сheck_field_by_mysql($unique[$field], $date[$field]) == false) || !isset($unique[$field])) {
         $done_array[] = $field;
     } else { 
		 $error = "unique";  
	 }
  } else { 
	  $error = "logic"; 
  }
} else { 
 $error = "filter"; 
}
if ($error != "null") {
//далее пока никуда не возвращаем, но если надо то мы готовы :)
$error_array[$error][] = $field;
}
}

if (($count=count($done_array)) == count($map) && $count != 0) {
return true;
} else {
return $done_array;
}
}

function сheck_field_by_mysql($name, $value) {
if (mysql_num_rows(mysql_query("select $name from users where $name='".strtolower(mysql_escape_string($value))."'"))>0) {
return true;
} else {
return false;
}
}

//// Основной код ------------  
//массив для определения какие поля с заполнены правильно.
if (is_array(($done_array=form_check($fields_map, $_POST, $fields_logic_map, $unique_fields))) == true) {
?>


<tr>
        




 <tr>
           
          </tr>
          <tr>
            <td width="480" valign="top" style="padding-top:7px;"><table width="460" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
              
                    <td width="380" valign="top" class="head-2"><div style="padding-top:13px;padding-left:15px;"> 
     
     <?    
      if (count($done_array)>0) { 
        echo "<br><br><FONT class=option1 color=FFFFFF>Некоторые поля были заполненны с ошибками! <br><br>Поле Логин и e-mail адрес должны иметь уникальные значения.<br><br>";
      } else {
        echo "<br><br><FONT class=option1 color=FFFFFF>Все поля обязательны для заполнения!</FONT><br><br></center>";
      }
     ?>
    </TD></TR>
    <FORM name=form action=reg.php method=post>
    <TR>
    <TD align=right><font size="3" color="white" face="Arial">Логин:</font>&nbsp;&nbsp;</TD>
    <TD><?=in_array("r_login",$done_array)?"<INPUT type=hidden name=r_login value=".$_POST['r_login'].">".$_POST['r_login']."":"<INPUT name=r_login style=\"border: 1px solid rgb(0,0,0)\">";?></TD>
    <TD>&nbsp;&nbsp;&nbsp;&nbsp;</TD></TR>
    <TR>
    <TD align=right><font size="3" color="white" face="Arial">Введите пароль:</font>&nbsp;&nbsp;</TD>
    <TD><?=in_array("r_pass",$done_array)?"<INPUT type=hidden name=r_pass value=".$_POST['r_pass'].">- cкрыт -":"<INPUT name=r_pass type=password style=\" border: 1px solid rgb(0,0,0)\">"?></TD>
    <TD></TD></TR>
    <TR>
    <TD align=right><font size="3" color="white" face="Arial">E-mail:</font>&nbsp;&nbsp;</TD>
    <TD><?=in_array("r_email",$done_array)?"<INPUT type=hidden name=r_email value=".$_POST['r_email'].">".$_POST['r_email']."":"<INPUT name=r_email style=\" border: 1px solid rgb(0,0,0)\">"?></TD>
    <TD>&nbsp;</TD></TR>
    <TR>
    <TR>
    <TD align=right><font size="3" color="white" face="Arial">Страна:</font>&nbsp;&nbsp;</TD>
    <TD>
     <?=in_array("r_country",$done_array)?"<INPUT type=hidden name=r_country value=".$_POST['r_country'].">".$countries[$_POST['r_country']]."":"<select name=r_country style=\" border: 1px solid black\">".draw_element($countries, "<option value=\"%d\">%s</option>")."</select>"?>
	</TD>
    
    <TD colSpan=3 align=center><INPUT type=submit value="Сохранить" name=submit></TD></TR>
    <TR>
    <TD colSpan=3>&nbsp;</TD></TR>
    <TR>
    <TD colSpan=3>
    <TD>&nbsp;</TD></TR></FORM></TBODY></TABLE></FORM>

</div>
</td>
</tr>
</table>
</td>
</tr>
</table>


<?
} else {
include ("setup_virtual.php");
include ("setup.php");
//тута можно юзать уже пост вары ($_POST['var']) напрямую, но только те конечно которые были в форме! :)
//Другие не проверяються.
$pus=$HTTP_COOKIE_VARS["par"];
if (preg_match(REGXP__RUS_AND_ENG_WORD, $pus)) {
$rowru=mysql_fetch_array(mysql_query("select * from users where login='$pus'"));
if ($pus==$rowru[1])
{
$partner_sql = "INSERT INTO partner VALUES('$pus','".$_POST['r_login']."','$date','0.00')";
mysql_query($partner_sql, $full_base);
mysql_query($partner_sql, $fun_base);
}
}

mysql_query("UPDATE users SET check_mail=1 WHERE id = '".$user_array['id']."'", $full_base);
mysql_query("UPDATE users SET check_mail=1 WHERE id = '".$user_array['id']."'", $fun_base);

mysql_query("INSERT INTO users VALUES(NULL,'".$_POST['r_login']."','".$_POST['r_pass']."','0.50','0.00','0.00','".$_POST['r_email']."','".$_POST['r_name']."','".$_POST['r_fam']."',
'$date', '0.00', ".$_POST['r_country'].", '".$_POST['r_city']."', 1, '".$_POST['r_birthdayy']."-".$_POST['r_birthdaym']."-".$_POST['r_birthdayd']."')", $full_base);

mysql_query("INSERT INTO users VALUES(NULL,'".$_POST['r_login']."','".$_POST['r_pass']."','1000','0.00','0.00','".$_POST['r_email']."','".$_POST['r_name']."','".$_POST['r_fam']."',
'$date','0.00', ".$_POST['r_country'].", '".$_POST['r_city']."', 1, '".$_POST['r_birthdayy']."-".$_POST['r_birthdaym']."-".$_POST['r_birthdayd']."')", $fun_base);

include("mail/reg.php");
mail($_POST['r_email'], $reg_reg_mail_subject, $reg_reg_mail, "Content-Type: text/plain; charset=Windows-1251\nFrom: $con[2]\n");
$con=mysql_fetch_array(mysql_query("select * from seting"));
if ($con['regmail']=="yes"){
include("mail/newreg.php");
mail($con['adm_email'], $reg_reg_mail_subject, $reg_reg_mail, "Content-Type: text/plain; charset=Windows-1251\nFrom: ".$con['adm_email']."\n");
}
unset($pus);
session_destroy();
?>
<tr>
              <td width="250" valign="top">&nbsp;</td>
            </tr>
          </table></td>
        <td width="480" valign="top"><table width="480" border="0" cellspacing="0" cellpadding="0">
          <tr>

          </tr>





<table width="460" border="0" align="center" cellpadding="0" cellspacing="0">
                    <td width="380" valign="top" class="head-2"><div style="padding-top:13px;padding-left:15px;"><font size="3" color="white" face="Arial">Вы зарегистрированы в интернет казино <? echo $con[4]; ?></font></div></td>
                  </tr>
                  <tr>
                    <td width="380" valign="top"><div style="padding-top:9px;padding-left:15px;">


<font size="3" color="white" face="Arial">Спасибо за регистрацию.Теперь вы можете авторизироваться на сайте и выигрывать!
<br><br>

<br><br>
С уважение администрация интернет-казино <? echo $con[4]; ?></font>

</div></td>
                  </tr>
                </table></td>
              </tr>
            </table>


	

<?
}
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