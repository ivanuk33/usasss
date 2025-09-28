
  <tr>
    <td width="980" valign="top" bgcolor="#321F00"><table width="980" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="250" valign="top"><table width="250" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="250" height="40" valign="middle" background="/images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;">
            <div class="head-1" style="padding-left:15px;padding-top:2px;">Меню</div></td>
          </tr>
          <tr>
            <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="31" height="13"></td>
                  <td width="184"></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="/images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="index.php" class="navbar2"><b>Главная</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="/images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="/lobby/" class="navbar2"><b>Вход</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="/images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="reg.php" class="navbar2"><b>Регистрация</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="/images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><div style="PADDING-BOTTOM: 4px; PADDING-LEFT: 8px; PADDING-RIGHT: 4px; BACKGROUND: #472300; PADDING-TOP: 4px"><a href="games.php" class="navbar2"><b>Игры</b></a></div></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="/images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="winers_game.php" class="navbar2"><b>ТОП 50 выигрышей</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="/images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="partner.php" class="navbar2"><b>Партнёрам</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="/images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="help.php" class="navbar2"><b>Помощь</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="/images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="rules.php" class="navbar2"><b>Правила</b></a></td>
                </tr>
                <tr>
                  <td width="31" height="25" align="center" valign="middle"><img src="/images/bullet-gamblingtemplatesdotnet.jpg" width="15" height="15" /></td>
                  <td width="184" height="25" valign="middle"><a href="contact.php" class="navbar2"><b>Контакты</b></a></td>
                </tr>
               
            </table></td>
          </tr>




 <tr>
            <td width="250" valign="top">&nbsp;</td>
          </tr>
        </table>
          <table width="250" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="250" height="40" valign="middle" background="/images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;"><div class="head-1" style="padding-left:15px;padding-top:2px;">YouTube</div></td>
            </tr>
            <tr>
              <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><br>
                    <div align=center><? include ("youtube.php");?></div>
					
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
              <td width="250" height="40" valign="middle" background="/images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;"><div class="head-1" style="padding-left:15px;padding-top:2px;">10 ТОП играков</div></td>
            </tr>
            <tr>
              <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                  <br>
					

					
<TABLE style="WIDTH: 100%; BORDER-COLLAPSE: collapse" cellspacing=0 cellpadding=5>
					<tr bgcolor=red valign=top>
  <TD style=" BORDER-BOTTOM: #715c40 1px double; BORDER-LEFT: #715c40 1px double; BORDER-RIGHT: #715c40 1px double; BORDER-TOP: #715c40 1px double; PADDING-BOTTOM: 2px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 2px"><b>Игрок</b></td>
    <TD style=" BORDER-BOTTOM: #715c40 1px double; BORDER-LEFT: #715c40 1px double; BORDER-RIGHT: #715c40 1px double; BORDER-TOP: #715c40 1px double; PADDING-BOTTOM: 2px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 2px"><b>Выиграл</b></td>
</tr>

<?
$lstcount =10;
$result=mysql_query("select * from users ORDER BY `cashout` desc");
$strokinbase = mysql_num_rows($result);

If ($lst == "") { $lst = "1"; }
$lfrom = (integer) $lst * $lstcount - $lstcount;
$lto = (integer) $lst * $lstcount;
If ($lto > $strokinbase) { $lto = $strokinbase; }
for ($i = $lfrom; $i < $lto; $i++) {
{
$row=mysql_fetch_array(mysql_query("SELECT * FROM users ORDER BY `cashout` desc LIMIT $i , $strokinbase"));
echo "

<tr>
<TD style=\"BORDER-BOTTOM: #715c40 1px double; BORDER-LEFT: #715c40 1px double; BORDER-RIGHT: #715c40 1px double; BORDER-TOP: #715c40 1px double; PADDING-BOTTOM: 2px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 2px\">$row[1]</td>
<TD style=\" BORDER-BOTTOM: #715c40 1px double; BORDER-LEFT: #715c40 1px double; BORDER-RIGHT: #715c40 1px double; BORDER-TOP: #715c40 1px double; PADDING-BOTTOM: 2px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 2px\">$row[5]</td>

";
}
}
?>

</tr></td></table>
					
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
              <td width="250" height="40" valign="middle" background="/images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;"><div class="head-1" style="padding-left:15px;padding-top:2px;">Поддержка</div></td>
            </tr>
            <tr>
              <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                   <br>
					
					
  
		
<div style="padding-left:5px; padding-right:10px; padding-top:5px; padding-bottom:10px" class="style2">

<TABLE style="WIDTH: 100%; BORDER-COLLAPSE: collapse" align=left>
<TR><TD>
<? support(); ?></TD></TR><TR>
<TD><IMG style="MARGIN-TOP: 2px; MARGIN-BOTTOM: 2px" align=middle src="/images/skype.gif" width=16 height=16>&nbsp;&nbsp;<A href="skype:Casino-Magic?call" class="navbar">Casino-Magic</A></TD></TR><TR>
<TD><IMG style="MARGIN-TOP: 2px; MARGIN-BOTTOM: 2px" align=middle src="/images/mob.gif" width=16 height=16>&nbsp;&nbsp;<A href="skype:+49500000000?call" class="navbar">(+495) 000000000</A></TD></TR><TR>
<TD><IMG style="MARGIN-TOP: 2px; MARGIN-BOTTOM: 2px" align=middle src="/images/mail.gif" width=16 height=16>&nbsp;&nbsp;<A href="/contact.php" class="navbar">Обратная связь</A></TD></TR>
</TABLE>
</div>		
					
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
              <td width="250" height="40" valign="middle" background="/images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;"><div class="head-1" style="padding-left:15px;padding-top:2px;">Онлайн статистика</div></td>
            </tr>
            <tr>
              <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31" height="13">
                    <br>
					
					<? statistika(); ?>
<? include("online.php"); ?><br>
<SCRIPT language=JavaScript>
<!--
d0 = new Date('Sept 10, 2009');
d1 = new Date();
dt = (d1.getTime() - d0.getTime()) / (1000*60*60*24);
document.write('Работаем <b>' + Math.round(dt) + '</b>-й день.');
-->
</SCRIPT>
					
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
              <td width="250" height="40" valign="middle" background="/images/s-head-bg-gamblingtemplatesdotnet.jpg" style="background-repeat:no-repeat;"><div class="head-1" style="padding-left:15px;padding-top:2px;">Игры на фишки</div></td>
            </tr>
            <tr>
              <td width="250" valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31" height="13">
                    <br>
					<div align=center>
					<a href="/fun_game.php" title="Бесплатная игра на FUN фишки"><img style="BORDER-BOTTOM: #ffffff 0px solid; BORDER-LEFT: #ffffff 0px solid; BORDER-TOP: #ffffff 0px solid; BORDER-RIGHT: #ffffff 0px solid" src="/images/fishka.gif"></a>
					</div>
					</td>
                  
                    
                  </tr>
              </table></td>
            </tr>