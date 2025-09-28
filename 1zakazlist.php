
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
                <section class="content">
       <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">
Заказы на выплату
</div>

        <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
 <table id="example1" class="table table-bordered table-striped"><tr><td class=text1><b>ID</b></td><td class=text1><b>Логин</b></td><td class=text1><b>Баланс</b></td><td class=text1><b>Платеж</b></td><td class=text1><b>Реквизиты</b></td><td class=text1><b>Заказано</b></td><td class=text1><b>Действие</b></td></tr>


<tr>
<td class=text1>195</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79999989262</td><td class=text1>1000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>196</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79999989262</td><td class=text1>100000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>197</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79246924463</td><td class=text1>1000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>198</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>???????µ???? ???µ????????</td><td class=text1>410015029456884</td><td class=text1>1000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>199</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79246924463</td><td class=text1>100000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>200</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79246924463</td><td class=text1>2000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>201</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>161598358760</td><td class=text1>4000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>202</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79246924463</td><td class=text1>500 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>203</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79246924463</td><td class=text1>190000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>204</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79246924463</td><td class=text1>150 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>205</a></td><td class=text1><a href=stat2.php?user=demo>demo</td><td class=text1>1238369692.00</td><td class=text1>Qiwi</td><td class=text1></td><td class=text1>10000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>206</a></td><td class=text1><a href=stat2.php?user=redfor>redfor</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>380730604979</td><td class=text1>240070 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>207</a></td><td class=text1><a href=stat2.php?user=Pacany>Pacany</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>79521002025</td><td class=text1>1000000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>208</a></td><td class=text1><a href=stat2.php?user=demo>demo</td><td class=text1>1238369692.00</td><td class=text1>Qiwi</td><td class=text1>380666666666</td><td class=text1>5000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>209</a></td><td class=text1><a href=stat2.php?user=redfor>redfor</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R377595595339</td><td class=text1>7858 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>210</a></td><td class=text1><a href=stat2.php?user=Afatal>Afatal</td><td class=text1>280.00</td><td class=text1>WebMoney</td><td class=text1>R377595595339</td><td class=text1>160000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>211</a></td><td class=text1><a href=stat2.php?user=Zemaslize>Zemaslize</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R377595595339</td><td class=text1>6000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>212</a></td><td class=text1><a href=stat2.php?user=Zemaslize>Zemaslize</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R377595595339</td><td class=text1>790 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>213</a></td><td class=text1><a href=stat2.php?user=igrok002>igrok002</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+992918121300</td><td class=text1>59645 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>214</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>30000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>215</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R35612020202</td><td class=text1>3000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>216</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>345150 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>217</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>1000000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>218</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>200000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>219</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>2240804 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>220</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>160000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>221</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>1645000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>222</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>1350000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>223</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>160000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>224</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>2200000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>225</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>800000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>226</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>425000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>227</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>1200000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>228</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>1500000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>229</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R35612020202</td><td class=text1>200000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>230</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>1100000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>231</a></td><td class=text1><a href=stat2.php?user=vasy>vasy</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>210000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>232</a></td><td class=text1><a href=stat2.php?user=lllll>lllll</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>89023645870</td><td class=text1>689000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>233</a></td><td class=text1><a href=stat2.php?user=lllll>lllll</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R356120202026</td><td class=text1>75952 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>234</a></td><td class=text1><a href=stat2.php?user=Natalie1990>Natalie1990</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R377595595339</td><td class=text1>19970 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>235</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+7992554858</td><td class=text1>50000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>236</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+7992554858</td><td class=text1>10000000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>237</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+7992554858</td><td class=text1>1500000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>238</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+7992554858</td><td class=text1>3200000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>239</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+7992554858</td><td class=text1>440000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>240</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+7992554858</td><td class=text1>10000000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>241</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+7992554858</td><td class=text1>620000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>242</a></td><td class=text1><a href=stat2.php?user=tumoxxxa>tumoxxxa</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+7992554858</td><td class=text1>1326280 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>243</a></td><td class=text1><a href=stat2.php?user=kir1980>kir1980</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R356120205237</td><td class=text1>700000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>244</a></td><td class=text1><a href=stat2.php?user=kir1980>kir1980</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R356120205237</td><td class=text1>2470000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>245</a></td><td class=text1><a href=stat2.php?user=kir1980>kir1980</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79925965512</td><td class=text1>114000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>246</a></td><td class=text1><a href=stat2.php?user=kir1980>kir1980</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79048756989</td><td class=text1>1400000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>247</a></td><td class=text1><a href=stat2.php?user=kir1980>kir1980</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79048756989</td><td class=text1>456000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>248</a></td><td class=text1><a href=stat2.php?user=Natalie1990>Natalie1990</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R377595595339</td><td class=text1>400 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>249</a></td><td class=text1><a href=stat2.php?user=admin>admin</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79028855239</td><td class=text1>250000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>250</a></td><td class=text1><a href=stat2.php?user=admin>admin</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79028855239</td><td class=text1>316 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>251</a></td><td class=text1><a href=stat2.php?user=admin>admin</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79028855239</td><td class=text1>5000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>252</a></td><td class=text1><a href=stat2.php?user=admin>admin</td><td class=text1>0.00</td><td class=text1>Qiwi</td><td class=text1>+79028855239</td><td class=text1>5000 р</td><td class=text1>Оплачен</td></tr>

<tr>
<td class=text1>253</a></td><td class=text1><a href=stat2.php?user=Natalie1990>Natalie1990</td><td class=text1>0.00</td><td class=text1>WebMoney</td><td class=text1>R377595595339</td><td class=text1>80000 р</td><td class=text1><a href=zakaz_p.php?id=253><u>Оплатить</u></a></td></tr>
</div></div>
</table>
</center>
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