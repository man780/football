<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/myStyle.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/ie10.css" media="all" />
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>
	<script type="text/javascript" src="js/jquery.jparallax.min.js"></script>
	<script type="text/javascript" src="js/jquery.event.frame.js"></script>
	<script type="text/javascript" src="js/jquery.alphanumeric.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput-1.3.min.js"></script>
	<title>Futbol.uz</title>
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie.css" media="all" />
	<![endif]-->
	<!--[if !IE]><!-->
		<script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script>
	<!--<![endif]-->
	<script type="text/javascript">
		jQuery(document).ready(function(){
			myDateHours = new Date();
			if(myDateHours.getHours() > 7 && myDateHours.getHours() < 20){
				$('#paralax').css('background', 'url(img/homeBg.jpg) no-repeat center center');
				$('#container').removeClass('night');
				$('#paralax').prepend('<div class="paralax-layer" style="width:1850px; height:1033px;"><img src="img/gate.png" style=" margin-left:-150px;"alt=""/></div>')
				$('.right_shell').css('background', 'url(img/regisWinBg.png)')
			}
			else{
				$('#paralax').css('background', 'url(img/homeNightBg.jpg) no-repeat center center');
				$('#container').addClass('night');
				$('#paralax').append('<div class="paralax-layer" style="width:2000px; height:1033px;"><img src="img/dirt.png" alt=""/></div>')
				$('#paralax').prepend('<div class="paralax-layer" style="width:1850px; height:1033px;"><img src="img/gatenight.png" style=" margin-left:-150px;"alt=""/></div>')
				$('.right_shell').css('background', 'img/regisWinBg.png')
				$('.right_shell').css('background', 'url(img/regisWinBgNight.png)')
			}
			$('#paralax .paralax-layer').parallax({
				mouseport: '#paralax',
				yparallax: false,
				xparallax: '20%'
			});
			$('#paralax').parallax({
				mouseport: '#paralax',
				yparallax: false
			});
			$('.alpha_num').numeric().mask('+999 99 999 99 99');
			$('.step_1 > div > div > p > input:not(.step_1 > div > div > p > input:eq(1))').alpha();
		});
	</script>
</head>
<body>
	<div id="container" class="home">		
		<div class="outshell" style="z-index:99;">
			<div class="left_shell">
				<div></div>
				<p></p>
			</div>
			<div class="right_shell">
				<form action="action.php">
					<p><b></b><input type="text" value="Логин или адрес почты" xVal="Логин или адрес почты"/></p>
					<p><b></b><input type="password" value="Пароль" xVal="Пароль"/></p>
					<div><input type="radio" /><p><b></b>Запомнить меня</p><a href="javascript:void(0)">Забыли пароль?</a></div>
					<span>или</span>
					<h5 class="soc">
						<span>войти через</span>
						<a href="javascript:void(0)" class="soc_1"></a>
						<a href="javascript:void(0)" class="soc_2"></a>
						<a href="javascript:void(0)" class="soc_3"></a>
						<a href="javascript:void(0)" class="soc_4"></a>
						<div>
							<div>
								<a href="javascript:void(0)" class="soc_5"></a>
								<a href="javascript:void(0)" class="soc_6"></a>
							</div>
						</div>
						<p class="clear"></p>
					</h5>
					<input type="submit" value=" "/>
				</form>
			</div>
			<div class="clear"></div>
			<div class="home_footer">
				<ul>
					<li><a href="javascript:void(0)">O'zbek tili</a><b></b></li>
					<li><a href="javascript:void(0)">Мобильная версия</a><b></b></li>
					<li><a href="javascript:void(0)">Реклама</a><b></b></li>
					<li><a href="javascript:void(0)">Помощь</a><b></b></li>
					<li><a href="javascript:void(0)">Новости</a><b></b></li>
					<li><a href="javascript:void(0)">О компании</a></li>
				</ul>
				<div>
					<p>© 2013 Futbol.uz<b></b></p>
					<p>Проект  -  <a href="javascript:void(0)">Creative People</a></p>
				</div>
			</div>
		</div>
		<div id="paralax">
		</div>
	</div><!--container-->
	
	
	<div class="registration">
		<div class="in_registation">
			<div class="regisHide"></div>
			<form class="regis_wind">
				<a href="javascript:void(0)" class="close_regis"></a>
				<div class="step_1">
					<div>
						<div class="login">
							<span>логин:</span>
							<p>
								<input type="text" maxlength="16"/>
							</p>
							<b></b>
						</div>
						<div class="email">
							<span>e-mail:</span>
							<p>
								<input type="text" />
							</p>
							<b></b>
						</div>
						<p class="clear"></p>
					</div>
					<div>
						<div class="pass_1">
							<span>пароль:</span>
							<p>
								<input type="password"  maxlength="16"/>
							</p>
							<b></b>
						</div>
						<div class="pass_2">
							<span>пароль еще раз:</span>
							<p>
								<input type="password"  maxlength="16"/>
							</p>
							<b></b>
						</div>
						<p class="clear"></p>
					</div>
					<span>или</span>
					<h5 class="soc">
						<span>войти через</span>
						<a href="javascript:void(0)" class="soc_1"></a>
						<a href="javascript:void(0)" class="soc_2"></a>
						<a href="javascript:void(0)" class="soc_3"></a>
						<a href="javascript:void(0)" class="soc_4"></a>
						<a href="javascript:void(0)" class="soc_5"></a>
						<a href="javascript:void(0)" class="soc_6"></a>
						<p>
							Привяжите свой ID к профилям в социальных сетях и вы сможете входить на Futbol.uz без ввода пароля.
						</p>
						<p class="clear"></p>
					</h5>
					<button></button>
					<div class="clear"></div>
				</div>
				<div class="step_2">
					<div style="z-index:10;">
						<span>Я истенный фанат:</span>
						<div>
							<input type="hidden" value="0"/>
							<b></b>
							<span>Выберите клуб</span>
						</div>
						<ul>
							<li value="1">Бунёдкор</li>
							<li value="2">Пахтакор</li>
							<li value="3">Милан</li>
							<li value="4">Челси</li>
							<li value="5">Барселона</li>
							<li value="6">Реалмадрид</li>
							<li value="7">Спартак</li>
							<li value="8">Динамо</li>
							<li value="9">Арсенал</li>
						</ul>
						<font>*</font>
					</div>
					<div class="clear"></div>
					<div style="z-index:9;">
						<span>Болею за сборную:</span>
						<div>
							<input type="hidden" value="0"/>
							<b></b>
							<span>Выберите сборную</span>
						</div>
						<ul>
							<li value="1">Бунёдкор</li>
							<li value="2">Пахтакор</li>
							<li value="3">Милан</li>
							<li value="4">Челси</li>
							<li value="5">Барселона</li>
							<li value="6">Реалмадрид</li>
							<li value="7">Спартак</li>
							<li value="8">Динамо</li>
							<li value="9">Арсенал</li>
						</ul>
						<font>*</font>
					</div>
					<div class="clear"></div>
					<div style="z-index:8;">
						<span>Любимый игрок:</span>
						<div>
							<input type="hidden" value="0"/>
							<b></b>
							<span>Выберите любимого игрока</span>
						</div>
						<ul>
							<li value="1">Вася</li>
							<li value="2">Петя</li>
							<li value="3">Галустян</li>
							<li value="4">Баба Дуся</li>
							<li value="5">Дядя Гуля</li>
							<li value="6">Тетя Дима</li>
							<li value="7">Деда Люся</li>
							<li value="8">Тетя жора</li>
							<li value="9">и балбес</li>
						</ul>
					</div>
					<div style="z-index:7;">
						<span>Ваш номер телефона:</span>
						<div>
							<div>
								<input type="text" class="alpha_num" value="Например: +998 90 777 77 77">
							</div>
						</div>
					</div>
					<p>Необходимо заполнить обязательные поля, отмеченные красным <font>знаком *</font></p>
					<b class="overlap_1"></b>
					<b class="overlap_2"></b>
					<input type="submit" value=" "/>
				</div>
			</form>
		</div>
	</div>
	<p id="back-top">
		<a href="javascript:void(0)"></a>
	</p>
</body>
</html>