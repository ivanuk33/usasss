
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

 <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />




<html>
<head>
<title>Админ панель.</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

 <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>
  <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
          
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
                 <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
         

                <div class="navbar-right">
                   <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                           
                            
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               Игроки
                                <span class="label label-warning"> 0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Количество игроков на 05.04.17</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                                        <a href="#">
                                                <i class="fa fa-user"></i> За сегодня <span class="label label-warning"> 0</span>
                                            </a>
                                        </li>
                                        <li>
                                <a href="#">
                                                <i class="ion ion-ios7-people info"></i> Всего <span class="label label-warning"> 29</span>
                                            </a>
                                        </li>
                          

                             
                                
                                    </ul>
                                </li>
                                <li class="footer"><a href="userlist.php">Список игроков</a></li>
                            </ul>
                        </li>         

                   

              
                     
                      
     <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               Депозиты&nbsp;&nbsp;
                               <small class="badge pull-right bg-green"> 0</small> 
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Статистика пополнений на 05.04.17</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">


	<li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-ruble"></i> За сегодня <span class="label label-success"> 0</span>
                                            </a>
                                        </li>


                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-ruble"></i> Всего <span class="label label-success"> 1236744598.13</span>
                                            </a>
                                        </li>
                               
                                    </ul>
                                </li>
                              
                            </ul>
                        </li>         





                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               Вывод&nbsp;
                                <small class="badge pull-right bg-red"> 0</small>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Статистика на вывод 05.04.17</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
           <li>
                                            <a href="#">
                                                <i class="fa fa-share"></i> За сегодня <span class="label label-danger"> 0</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share"></i> Всего <span class="label label-danger"> 52888939</span>
                                            </a>
                                        </li>
 </ul>
                                </li>
                                <li class="footer"><a href="zakazlist.php">Заявки на вывод</a></li>
                            </ul>
                        </li>      






                        <!-- Tasks: style can be found in dropdown.less -->
                
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                 
             
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">


						<li>
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Статистика</span>
                            </a>
                        </li>


                             <li class="treeview">
                            <a href="#">
                               <span class="glyphicon glyphicon-user"></span>
                                <span>Пользователи</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="userlist.php">
                                <i class="fa fa-angle-double-right"></i> <span>Список игроков</span>
                            
                            </a></li>
                                <li><a href="adduser.php">
                                <i class="fa fa-angle-double-right"></i> <span>Добавить игрока</span>
                            
                            </a></li>
                                <li><a href="userpay.php">
                                <i class="fa fa-angle-double-right"></i> <span>Ручное упр. балансом</span>
                            
                            </a></li>
                            </ul>
                        </li>

			            <li>
                            <a href="online.php">
                                <i class="fa fa-bar-chart-o"></i> <span>Мониторинг </span><small class="badge pull-right bg-red">онлайн</small>
                            
                            </a>
                        </li>	
		

			            <li>
                            <a href="zakazlist.php">
                                <i class="fa fa-share"></i> <span>Заявки на вывод</span>
                            
                            </a>
                        </li>		


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gears"></i> <span>Настройка игр</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="configigrosoft.php"><i class="fa fa-angle-double-right"></i> Igrosoft</a></li>
                                <li><a href="configgaminator.php"><i class="fa fa-angle-double-right"></i> Gaminator</a></li>
                                <li><a href="configmegajack.php"><i class="fa fa-angle-double-right"></i> MegaJack</a></li>
                                <li><a href="configb3w.php"><i class="fa fa-angle-double-right"></i> B3W</a></li>
                                <li><a href="configmicro.php"><i class="fa fa-angle-double-right"></i> Microgaming</a></li>
                                <li><a href="bank.php"><i class="fa fa-angle-double-right"></i> Рулетка, BJ, Poker</a></li>
								<li><a href="games.php"><i class="fa fa-angle-double-right"></i> Лучшие VIP игры  <i class="fa fa-star-o"></i></a></li>
                            </ul>
                        </li>


			            <li>
                            <a href="config.php">
                                <span class="glyphicon glyphicon-cog"></span> <span>Настройка казино</span>
                            
                            </a>
                        </li>		

				            <li>
                            <a href="pincod.php">
                               <i class="fa fa.pull-right fa-gift"></i><span> Генератор бонус кода</span>
                            
                            </a>
                        </li>	



			            <li>
                            <a href="news.php">
                                <i class="fa fa-edit"></i> <span>Редактор новостей</span>
                            
                            </a>
                        </li>	


			            <li>
                            <a href="partprpg.php">&nbsp;<i class="fa fa.pull-left fa-dollar"></i><span>Партнеры</span>
                            
                            </a>
                        </li>	
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Клубы и офлайн залы</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="part.php"><i class="fa fa-angle-double-right"></i> Список клубов</a></li>
                                <li><a href="addpartner.php"><i class="fa fa-angle-double-right"></i> Добавить клуб</a></li>
                                <li><a href="/kassa/"><i class="fa fa-angle-double-right"></i> Вход в админ клубов</a></li>

                            </ul>
                        </li>



                        <li>
                            <a href="framenews.php"><i class="ion ion-ios7-cart success"></i> <span>Обновления</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                  

                     

         
    



              
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Панель администратора<small>казино</small>&nbsp;&nbsp;
                 <a href="?event=exit" class="btn btn-default btn-flat">Выход</a>     </h1>
                
    
                                    
             
                </section>

                <!-- Main content -->
                <section class="content">                            <div class="box box-info">
                                <div class="box-header">
   <div class="box-body">
<h3 class="box-title">
<span class="glyphicon glyphicon-cog"></span> Настройка казино</h3>
</div>

                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">

<FORM action=config.php method=post>
<TR><td>Логин админа : </td><TD><INPUT size=40 name=alog value=admin></TD></TR>
<TR><td>Пароль админа </td><TD><INPUT size=40 name=apas value=admin></TD></TR>
<TR><td>Email казино</td><TD><INPUT size=40 name=adm_email value=support@admiralbet.in></TD></TR>
<TR><td>ICQ казино (если нет то пусто)</td><TD><INPUT size=40 name=icq value=></TD></TR>
<TR><td>url казино (начиная с http:// и без "/" конце)</td><TD><INPUT size=40 name=cas_url value=http://admiralbet.in></TD></TR>
<TR><td>Название казино</td><TD><INPUT size=40 name=cas_name value=admiralbet.in></TD></TR>
<TR><td>Партнерские</td><TD><INPUT size=20 name=pcash value=30> %</TD></TR>

<TR><td>Высылать Email админу:</td><TD></TD></TR>
<TR><td>При пополнении счета</td><TD><input type=checkbox name="paymail" value="yes" checked></TD></TR>
<TR><td>Регистрация нового игрока</td><TD><input type=checkbox name="regmail" value="yes" checked></TD></TR>
<TR><td>Вывод средств</td><TD><input type=checkbox name="zakmail" value="yes" checked></TD></TR>


<TR><TD>Сохраниение недоступно в демо режиме</TD></TR>
</FORM>
</table>
</div></div>

         </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>

    </body>
</html>