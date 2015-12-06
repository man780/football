<!DOCTYPE HTML>
<html lang="en-US">
<?
use \frontend\themes\futbol\assets\AppAssets;
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/futbol/assets');
AppAssets::register($this);
?>
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/myStyle.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/ie10.css" media="all" />
	<link rel="stylesheet" type="text/css" media="all" href="<?=$layoutPath?>/css/jquery.jscrollpane.css" />
	
	<script type="text/javascript" src="<?=$layoutPath?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/myscript.js"></script>
	<title>Futbol.uz</title>
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/ie.css" media="all" />
	<![endif]-->
	<!--[if !IE]><!-->
		<script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script>
	<!--<![endif]-->
</head>
<body>
	<div class="WindowLike">
		<div class="plashBlack"></div>
	
		<div class="inWinL">
			<div class="topPan">
				<h2>Нравиться</h2>
				<div class="closeWindL"></div>
			</div>
			<div class="scrollFrWp likeScrollWp">
				<ul class="FriendScroll likeScroll">
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/zilzil.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useroffline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/zilzil.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useroffline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/zilzil.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useroffline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/zilzil.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useroffline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/zilzil.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useroffline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/zilzil.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useroffline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="outImgLike">
							<img src="<?=$layoutPath?>/img/useravaimgas.png" alt="" />
							<div class="statOn"><img src="<?=$layoutPath?>/img/useronline.png" alt=""></div>
						</div>
						<div class="userName">
							<a href="javascript:void(0)" class="decUn decBold">Sarah Clark</a>
							<div class="userStatsOut">
							<div class="infcClubWindarr"></div>
								<div class="userstats">
									<div class="UsNameAndFc">
										<div class="YourName">
											<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
											<img src="<?=$layoutPath?>/img/useronline.png" alt="">
											<b class="userNameBgGrad"></b>
										</div>
										<div class="FCclubName">
											<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
										</div>
										<div class="clear"></div>
									</div>											
									<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
									<div class="ratio">
										<div class="votes">41 голов</div>
										<div class="status">Капитан</div>
										<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
										<div class="clear"></div>
									</div>
								</div>
								<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>


		
		
		
		
		
		
		
		
	<div id="container" class="fcClubPag">
		<div id="header"><div class="headinimg"></div></div>
		<div id="navAndaft">
			<div id="nav">
				<div class="innav">
					<div class="outul">
						<div class="firstnav outli"><a href="javascript:void(0)"><img src="<?=$layoutPath?>/img/languageplash.png" />O' zbek tilida</a></div>					
						<div class="outli"><a href="javascript:void(0)">Новости</a></div>
						<div class="outli"><a href="javascript:void(0)">Клубы</a></div>
						<div class="outli"><a href="javascript:void(0)">Фанаты</a></div>
						<div class="outli"><a href="javascript:void(0)">Персоны</a></div>
						<div class="activeli outli">
							<a href="javascript:void(0)" class="hovera">Компания<div class="arrowbot"></div></a>
							<ul class="vcbar">
								<div class="toplinavar">
									<div class="starr"></div>
									<div class="cenarbg"></div>
									<div class="mainar"></div>				
									<div class="endarr"></div>							
									<div class="reparrt"></div>					
									<div class="ieras"></div>					
								</div>
								<li><a href="javascript:void(0)">О компании</a></li>
								<li><a href="javascript:void(0)">Реклама на сайте</a></li>
								<li><a href="javascript:void(0)">Вакансии</a></li>
								<li class="endnav"><a href="javascript:void(0)">Новости компании</a></li>
							</ul>
						</div>					
						<div class="activeli outli">
							<a href="javascript:void(0)" class="hovera">Еще<div class="arrowbot"></div></a>	
							<ul class="vcbar">
								<div class="toplinavar">
									<div class="starr"></div>
									<div class="cenarbg"></div>
									<div class="mainar"></div>				
									<div class="endarr"></div>							
									<div class="reparrt"></div>					
									<div class="ieras"></div>					
								</div>
								<li><a href="javascript:void(0)">Матчи</a></li>
								<li><a href="javascript:void(0)">Чат </a></li>
								<li  class="endnav"><a href="javascript:void(0)">Видео</a></li>
							</ul>
						</div>					
						
						<div class="endnav outli">
							<div class="inbut">
								<input type="text" value="поиск клубов, фанатов и др." onfocus="if (this.value=='поиск клубов, фанатов и др.') this.value='';" onblur="if (this.value==''){this.value='поиск клубов, фанатов и др.'}"/>
								<button></button>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<div id="afternav">
			
				<div class="inafternav">
					<a href="index.html" class="logo" ></a>
					<div class="toolbar">				
						<div class="endcom">
						
							<div class="akkinfo topinfo">
								<img src="<?=$layoutPath?>/img/ava.png" class="avatar topava" />
								<div class="userpanelt">
									<div class="ratiot">10 054 голов</div>
									<div class="statust">Капитан</div>
									<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
									<div class="mynamet">
										<p>Бил Гейтс джоли:D<b class="userNameBgGrad"></b></p>
										<div class="settingst activeli">
											<ul class="vcbar settingmenu">
											<a style="display: none;"></a>
												<div class="toplinavar">
													<div class="starr"></div>
													<div class="cenarbg poneus"></div>
													<div class="mainar"></div>				
													<div class="endarr"></div>							
													<div class="reparrt"></div>					
													<div class="ieras"></div>					
												</div>
												<li class="sptwo"><b class="addava"></b><a href="javascript:void(0)">Добавить личное фото</a></li>
												<li class="sptwt"><b class="addava"></b><a href="javascript:void(0)">Пригласить фанатов</a></li>
												<li class="sptwf"><b class="addava"></b><a href="javascript:void(0)">Настройки аккаунта</a></li>
												<li class="endnav sptwfr"><b class="addava"></b><a href="javascript:void(0)">Создать рекламу</a></li>
											</ul>
										</div>
										<div class="exitt">
											<div class="hint">Выход<b></b></div>
										</div>
										<div class="pereg"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="barone">
							<a href="javascript:void(0)" class="krn marka"><div class="krugxd">12</div></a>
							Оценки
						</div>
						<div class="barone">
							<a href="javascript:void(0)" class="krn guesa"></a>
							Гости
						</div>
						<div class="barone">
							<a href="javascript:void(0)" class="krn uva"></a>
							Уведомления
						</div>
						<div class="barone">					
							<a href="javascript:void(0)" class="krn comma"></a>
							Комментарии
						</div>
						<div class="barone">
							<a href="javascript:void(0)" class="krn massa"></a>
							Сообщения
						</div>
					</div>	
				</div>
			</div>			
		</div>
		<div id="maincontent">
			<div class="inmaincontent">
			<div class="bgchange">
				<div class="arrowsw"></div>
				<div class="textsw">Изменить фон</div>
				<div class="screensw"></div>
			</div>
				<div class="massan">
					<div class="likeplus">
						<div class="like padlike">
							<a href="javascript:void(0)" class="coolLink"><b class="cool"></b>Нравиться</a><br />
							<a href="javascript:void(0)" class="collPeople cllPple">(9999)</a>
						</div>
						<div class="like padlike">
							<a href="javascript:void(0)" class="see"></a>
							<a href="javascript:void(0)" class="">0</a>
						</div>
						<div class="like">
							<a href="javascript:void(0)" class="comlike"></a>
							<a href="javascript:void(0)" class="">(100)</a>
						</div>					
						<div id="closet"></div>
					</div>
					<div class="inmassan">
				 		<div class="arbotfc"></div>
						<p class="conmas"><img src="<?=$layoutPath?>/img/zix.jpg" />Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis... </p>
						<p class="leftpar">Сообщение от клуба: <a href="javascript:void(0)">FC Bunyodkor</a></p>
						<p class="rightpar">3 часа назад</p>
					</div>
				</div>
				
		        <div id="content">
					<ul class="UserMenu UserMenuClub">
						<li class="UserMenuLi">
							<div class="UserMenuDiv">
								<div class="UserMenuDivPlash">
									<p>4300</p>
								</div>
								<a href="field.html" class="UserMenuLink myField">Поле</a>
							</div>
						</li>
						<li class="UserMenuLi UserMenuDivActive">
							<div class="UserMenuDiv"><a href="club.html" class="UserMenuLink abClub">О клубе</a>
							</div>
						</li>
						<li class="UserMenuLi">
							<div class="UserMenuDiv">
								<div class="UserMenuDivPlash">
									<p>4300</p>
								</div>
								<a href="news.html" class="UserMenuLink newsClub">Новости</a>
							</div>
						</li>
						<li class="UserMenuLi">
							<div class="UserMenuDiv">
								<a href="sostav.html" class="UserMenuLink compot">Состав</a>
							</div>
						</li>
						<li class="UserMenuLi">
							<div class="UserMenuDiv">
								<div class="UserMenuDivPlash">
									<p>4300</p>
								</div>
								<a href="photo.html" class="UserMenuLink myPhoto">Фото</a>
							</div>
						</li>
						<li class="UserMenuLi">
							<div class="UserMenuDiv">
								<div class="UserMenuDivPlash">
									<p>4300</p>
								</div>
								<a href="video.html" class="UserMenuLink myVideo">Видео</a>
							</div>
						</li>
						<li class="UserMenuLi">
							<div class="UserMenuDiv">
								<a href="javascript:void(0)" class="UserMenuLink matchi">Матчи</a>
							</div>
						</li>
						<li class="UserMenuLi">
							<div class="UserMenuDiv ">
								<a href="javascript:void(0)" class="UserMenuLink tableCl">Таблица</a>
							</div>
						</li>
					</ul>
					<div id="aside" class="ClubAs">
						<div class="fcPlash" style="z-index:99;">
							<div class="centrirovaniefc">
								<div class="fcZag">
									<div class="fcClubWind" style="z-index:6">
									<a href="javascript:void(0)">FC Pakhtakor</a>
										<div class="infcClubWind">
											<div class="infcClubWindarr"></div>
											<img src="<?=$layoutPath?>/img/mach.png" class="avatar dopWinPanel" alt="" />
											<div class="FcPanelWinClub"><a href="javascript:void(0)">FC Bunyodkor</a><img src="<?=$layoutPath?>/img/uzFlag.png" id="ImgFlag"  alt="" /></div>
											<p>
												<a href="javascript:void(0)" class="frw">Пригласить друга</a>
											</p>
										</div>
									</div>
									<div class="clear"></div>
									<h3>Узбекистан, г.Ташкент</h3>	
								<div class="clear"></div>
								</div>
								<div class="fcZag aLink">
									<h3>Рейтинг клуба на сайте:</h3>
										<div class="flaPl">8400 флагов
											<a href="javascript:void(0)" class="fcZagCBok"></a>
											<a href="javascript:void(0)" class="fcZagCBokz"></a>
										</div>
									<div class="clear"></div>
								</div>
								<div class="fcZag aLink">
									<h3>Рейтинг клуба по версии FIFA:</h3>
										<div class="flaPl">307 баллов 
										<span>2 место</span></div>
									<div class="clear"></div>
								</div>
								<div class="fcZag aLink"><a href="javascript:oid(0)" class="funclubis">Фанаты клуба</a><span>5900</span></div>
								<div class="fcZag aLink"><a href="javascript:oid(0)" class="invClub">Пригласить в клуб</a></div>
								<div class="fcZag aLink">
									<div class="flaPl"><a href="javascript:oid(0)" class="ConectClub">Присоединиться в клуб</a></div>
								</div>
							</div>
						</div>
						<div class="outmit admClub" style="z-index:11;">
							<h2 class="mitZag">Администрация клуба</h2>
							<ul>
								<li>
									<div class="userName">
										<a href="javascript:void(0)" class="decUn">Жамол Хамидов <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
										<div class="userStatsOut">
										<div class="infcClubWindarr"></div>
											<div class="userstats">
												<div class="UsNameAndFc">
													<div class="YourName">
														<a href="javascript:void(0)">Жамол Хамидов</a>
														<img src="<?=$layoutPath?>/img/useronline.png" alt="">
														<b class="userNameBgGrad"></b>
													</div>
													<div class="FCclubName">
														<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
													</div>
													<div class="clear"></div>
												</div>											
												<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
												<div class="ratio">
													<div class="votes">41 голов</div>
													<div class="status">Капитан</div>
													<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
													<div class="clear"></div>
												</div>
											</div>
											<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
										</div>
									</div>
									<h6>Адинистратор</h6>
								</li>
								<li>
									<div class="userName">
										<a href="javascript:void(0)" class="decUn">Жамол Хамидов <img src="<?=$layoutPath?>/img/useroffline.png" alt=""></a>
										<div class="userStatsOut">
										<div class="infcClubWindarr"></div>
											<div class="userstats">
												<div class="UsNameAndFc">
													<div class="YourName">
														<a href="javascript:void(0)">Жамол Хамидов</a>
														<img src="<?=$layoutPath?>/img/useronline.png" alt="">
														<b class="userNameBgGrad"></b>
													</div>
													<div class="FCclubName">
														<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
													</div>
													<div class="clear"></div>
												</div>											
												<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
												<div class="ratio">
													<div class="votes">41 голов</div>
													<div class="status">Капитан</div>
													<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
													<div class="clear"></div>
												</div>
											</div>
											<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
										</div>
									</div>
									<h6>Модератор</h6>
								</li>
								<li>
									<div class="userName">
										<a href="javascript:void(0)" class="decUn">Жамол Хамидов <img src="<?=$layoutPath?>/img/useroffline.png" alt=""></a>
										<div class="userStatsOut">
										<div class="infcClubWindarr"></div>
											<div class="userstats">
												<div class="UsNameAndFc">
													<div class="YourName">
														<a href="javascript:void(0)">Жамол Хамидов</a>
														<img src="<?=$layoutPath?>/img/useronline.png" alt="">
														<b class="userNameBgGrad"></b>
													</div>
													<div class="FCclubName">
														<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png">
													</div>
													<div class="clear"></div>
												</div>											
												<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="">
												<div class="ratio">
													<div class="votes">41 голов</div>
													<div class="status">Капитан</div>
													<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt=""></div>
													<div class="clear"></div>
												</div>
											</div>
											<p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
										</div>
									</div>
									<h6>Модератор</h6>
								</li>
							</ul>
						</div>
						<div class="" style="z-index:11;">
							<h2 class="mitZag asideHoverInHide">Встречи клуба<span class="count">2</span></h2>
							<ul class="aMitting asideHoverInShow">
								<li class="ommentsMitting" >
									<div class="offNews">
										<a href="javascript:void(0)">Игра на стадионе Bunyodkor</a>
										<p class="date"  class="HoverP">01.02.2013 | 16:00</p>
										<p  class="HoverP">г.Ташкент, ул. Осие, д.30, около фонтана</p>
										<b class="ommentsMittingArr"></b>
										<p class="yesAndNo">
											<button></button>
											<a href="javascript:void(0)">Отказать</a>
											<b class="ommentsMittingArrinBlock"></b>
										</p>
									</div>
									<div class="fcClubWind" style="z-index:6">
									<a href="javascript:void(0)">FC Bunyodkor</a><img src="<?=$layoutPath?>/img/uzFlag.png" id="ImgFlag" alt="">
										<div class="infcClubWind">
											<div class="infcClubWindarr"></div>
											<img src="<?=$layoutPath?>/img/mach.png" class="avatar dopWinPanel" alt="">
											<div class="FcPanelWinClub"><a href="javascript:void(0)">FC Bunyodkor</a><img src="<?=$layoutPath?>/img/uzFlag.png" id="ImgFlag" alt=""></div>
											<p>
												<a href="javascript:void(0)" class="frw">Пригласить друга</a>
											</p>
										</div>
									</div>
								</li>
								<li class="ommentsMitting">
									<div class="offNews">
										<a href="javascript:void(0)">Игра на стадионе Bunyodkor</a>
										<p class="date"  class="HoverP">01.02.2013 | 16:00</p>
										<p  class="HoverP">г.Ташкент, ул. Осие, д.30, около фонтана</p>
										<b class="ommentsMittingArr"></b>
										<p class="yesAndNo">
											<button></button>
											<a href="javascript:void(0)">Отказать</a>
											<b class="ommentsMittingArrinBlock"></b>
										</p>
									</div>
									<div class="fcClubWind" style="z-index:6">
									<a href="javascript:void(0)">FC Bunyodkor</a><img src="<?=$layoutPath?>/img/uzFlag.png" id="ImgFlag" alt="">
										<div class="infcClubWind">
											<div class="infcClubWindarr"></div>
											<img src="<?=$layoutPath?>/img/mach.png" class="avatar dopWinPanel" alt="">
											<div class="FcPanelWinClub"><a href="javascript:void(0)">FC Bunyodkor</a><img src="<?=$layoutPath?>/img/uzFlag.png" id="ImgFlag" alt=""></div>
											<p>
												<a href="javascript:void(0)" class="frw">Пригласить друга</a>
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="nowOn">
							<h2 class="nowOnZag asideHoverInHide">Сейчас в клубе<span class="count">11</span></h2>	
							<ul class="nowOnIn asideHoverInShow">
								<li>
									<div class="massNowIn">С Новым 2013 годом!! <div class="arrowNowOnIn"></div></div>
									<div class="nowOnlineBlock">									
										<div class="userstats">
											<div class="UsNameAndFc">												
												<div class="YourName">
													<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
													<img src="<?=$layoutPath?>/img/useronline.png" alt="" />
													<b class="userNameBgGrad"></b>
												</div>
												<div class="FCclubName">
													<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
												</div>
												<div class="clear"></div>
											</div>											
											<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
											<div class="ratio">
												<div class="votes">41 голов</div>
												<div class="status">Капитан</div>
												<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="massNowIn">С Новым 2013 годом!! <div class="arrowNowOnIn"></div></div>
									<div class="nowOnlineBlock">									
										<div class="userstats">
											<div class="UsNameAndFc">												
												<div class="YourName">
													<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
													<img src="<?=$layoutPath?>/img/useronline.png" alt="" />
													<b class="userNameBgGrad"></b>
												</div>
												<div class="FCclubName">
													<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
												</div>
												<div class="clear"></div>
											</div>											
											<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
											<div class="ratio">
												<div class="votes">41 голов</div>
												<div class="status">Капитан</div>
												<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="massNowIn">С Новым 2013 годом!! <div class="arrowNowOnIn"></div></div>
									<div class="nowOnlineBlock">									
										<div class="userstats">
											<div class="UsNameAndFc">												
												<div class="YourName">
													<a href="javascript:void(0)">АyдрейАyдрей шарапов</a>
													<img src="<?=$layoutPath?>/img/useronline.png" alt="" />
													<b class="userNameBgGrad"></b>
												</div>
												<div class="FCclubName">
													<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
												</div>
												<div class="clear"></div>
											</div>											
											<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
											<div class="ratio">
												<div class="votes">41 голов</div>
												<div class="status">Капитан</div>
												<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="endNowBlock"><a href="javascript:void(0)">Показать всех</a></div>
								</li>
							</ul>
							
						</div>
						
						<ul class="themsBlock">
							<li>
								<div class="themsZag"><a href="javascript:void(0)">Ваш Дом - Восемь Озер</a></div>
								<div class="themsContent">
									<img src="<?=$layoutPath?>/img/themsImage1.png" class="themsImage" alt="" />
									<p class="themsPar">
										ТИП 5. Современный sдом с практичной, четкой внутренней планировкой и очень графичным фасад a a a a
										<b class="GradiendEnd"></b>
									</p>
								</div>
								<div class="ThemsLink"><a href="javascript:void(0)">www.futbol.uz/club/real_madrid_olololo</a><b class="GradiendEnd"></b></div>
							</li>
							<li>
								<div class="themsZag"><a href="javascript:void(0)">Ваш Дом - Восемь Озер</a></div>
								<div class="themsContent">
									<img src="<?=$layoutPath?>/img/themsImage1.png" class="themsImage" alt="" />
									<p class="themsPar">
										ТИП 5. Современный sдом с практичной, четкой внутренней планировкой и очень графичным фасад a a a a
										<b class="GradiendEnd"></b>
									</p>
								</div>
								<div class="ThemsLink"><a href="javascript:void(0)">www.futbol.uz/club/real_madrid_olololo</a><b class="GradiendEnd"></b></div>
							</li>
							<li>
								<div class="themsZag"><a href="javascript:void(0)">Ваш Дом - Восемь Озер</a></div>
								<div class="themsContent">
									<img src="<?=$layoutPath?>/img/themsImage1.png" class="themsImage" alt="" />
									<p class="themsPar">
										ТИП 5. Современный sдом с практичной, четкой внутренней планировкой и очень графичным фасад a a a a
										<b class="GradiendEnd"></b>
									</p>
								</div>
								<div class="ThemsLink"><a href="javascript:void(0)">www.futbol.uz/club/real_madrid_olololo</a><b class="GradiendEnd"></b></div>
							</li>
							<li>
								<div class="themsZag"><a href="javascript:void(0)">Ваш Дом - Восемь Озер</a></div>
								<div class="themsContent">
									<img src="<?=$layoutPath?>/img/themsImage1.png" class="themsImage" alt="" />
									<p class="themsPar">
										ТИП 5. Современный sдом с практичной, четкой внутренней планировкой и очень графичным фасад a a a a
										<b class="GradiendEnd"></b>
									</p>
								</div>
								<div class="ThemsLink"><a href="javascript:void(0)">www.futbol.uz/club/real_madrid_olololo</a><b class="GradiendEnd"></b></div>
							</li>
							<li class="addBlurb">
								<a href="javascript:void(0)">Создать рекламу</a>
							</li>
						</ul>
					</div>
					
					<div id="article">
						<div class="ClubBl">
							<div class="NBZag">
								<h2>О клубе</h2>
							</div>
							<img src="<?=$layoutPath?>/img/ofFcclub.png" alt="" class="absimg"/>
							<div class="ClBlCon">
								<font color="#787878">Название:</font> Футбольный клуб «Бунёдкор»<br />
								<font color="#787878">Дата основания:</font> 6 июля 2005 года<br />
								<font color="#787878">Цвета Клуба:</font> Белые, синие<br /><br />
								<img src="<?=$layoutPath?>/img/futclimggg.png" alt="" width="100%"/><br /><br />
								Указанные лица ехали на встречу с президентом Башаром Асадом в Дамаске.  По словам Абу Муадха, атака стала возможной благодаря «сложному планированию и покупки информации у генералов Асада».  Между тем иранский посол в Дамаске Мухаммед Реза Шебани опроверг заявления «Ансар аль-Ислам». В интервью официальному иранскому агентству новостей Шебани заявил, что «подобные слухи – не более чем реакция на успехи...
							</div>
							<div class="moreCLBL">...</div>
						</div>
						<div class="ClubBl">
							<div class="NBZag">
								<h2>История клуба</h2>
							</div>
							<div class="ClBlCon">
								Футбольный клуб «Бунёдкор» начинал с любительского уровня, и за четыре года сумел выйти в элиту, завоевать чемпионское звание, Кубок, и стать полуфиналистом континентальной Лиги Чемпионов. <br /><br />

								В 2005 году команда, которая тогда носила название «Курувчи» участвовала в чемпионате города Ташкента (2 лига) и завоевала право участвовать в финальной пульке 2 лиги. По итогам этого турнира «Курувчи» получил право выступать в первой лиге, и в 2006 году с первой попытки выиграла этот турнир (в 38 матчах «Курувчи» одержал 27 побед, пять матчей свел вничью, в шести потерпел поражения). Таким образом, «Курувчи» получил право в 2007 году выступать в высшей лиге чемпионата Узбекистана.
							</div>
							<div class="moreCLBL">...</div>
						</div>
						<div class="ClubBl">
							<div class="NBZag">
								<h2>История клуба</h2>
							</div>
							<div class="ClBlCon">
								Чемпион Узбекистана 2008 год <br />
								Серебряный Призер Чемпионата 2007 год<br />
								Обладатель Кубка Узбекистана 2008 год<br />
								Финалист Кубка Узбекистана 2007 год<br />
								Полуфиналист ЛЧ АФК 2008 год<br />
								Победитель первой лиги Узбекистана 2007 год<br />
								Победитель второй лиги Узбекистана 2006 год<br />
								Сервер Джепаров - Лучший Футболист Чемпионата Узбекистана 2008 год<br />
							</div>
							<div class="moreCLBL">...</div>
						</div>
						<div class="ClubBl">
							<div class="NBZag">
								<h2>История клуба</h2>
							</div>
							<p class="predZag">Домашняя арена футбольного клуба "Бунёдкор": Спорткомплекс "Жар"</p>
							<ul class="ClBlCon imgchoice">
								<li><img src="<?=$layoutPath?>/img/imagefc1.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc2.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc3.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc4.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc1.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc2.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc3.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc4.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc1.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc2.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc3.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc4.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc1.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc2.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc3.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc4.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc1.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc2.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc3.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc4.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc1.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc2.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc3.png" alt="" /></li>
								<li><img src="<?=$layoutPath?>/img/imagefc4.png" alt="" /></li>
								<div class="clear"></div>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
				</div><!--content-->
				<div class="footer">
					<div class="copy">
						<h4>© 2013 Futbol.uz</h4>
						<div class="cpeopleWrapper">
							<p>Проект компании</p>
							<a href="http://cpeople.uz/"><img  class="cpeople" src="<?=$layoutPath?>/img/creativeImg.png" alt="" /></a>
						</div>
					</div>
					<div class="myStady">
						<h3>Мой стадион</h3>
						<ul class="MSONUL whLink">
							<li><a href="javascript:void(0)">Мои друзья</a></li>
							<li><a href="javascript:void(0)">Мои клубы</a></li>
							<li><a href="javascript:void(0)">Мои фотографии</a></li>
							<li><a href="javascript:void(0)">Мое видео</a></li>
							<li><a href="javascript:void(0)">Статусы</a></li>
							<li><a href="javascript:void(0)">Встречи</a></li>
						</ul>
						<ul class="MSTWUL whLink">
							<li><a href="javascript:void(0)">Мои друзья</a></li>
							<li><a href="javascript:void(0)">Мои клубы</a></li>
							<li><a href="javascript:void(0)">Мои фотографии</a></li>
							<li><a href="javascript:void(0)">Мое видео</a></li>
							<li><a href="javascript:void(0)">Статусы</a></li>
							<li><a href="javascript:void(0)">Встречи</a></li>
						</ul>
					</div>
					<div class="futbolCons">
						<h3>Futbol.uz</h3>
						<ul class="MSONUL whLink">
							<li><a href="javascript:void(0)">Новости</a></li>
							<li><a href="javascript:void(0)">Матчи</a></li>
							<li><a href="javascript:void(0)">Клубы</a></li>
							<li><a href="javascript:void(0)">Фанаты</a></li>
							<li><a href="javascript:void(0)">Чат</a></li>
							<li><a href="javascript:void(0)">Видео</a></li>
						</ul>						
					</div>
					<div class="CLubFot">
						<h3>Клубы</h3>
						<ul class="MSONUL whLink">
							<li><a href="javascript:void(0)">Новости</a></li>
							<li><a href="javascript:void(0)">Популярные</a></li>
							<li><a href="javascript:void(0)">Персоны</a></li>
							<li><a href="javascript:void(0)">Фанаты</a></li>
						</ul>						
					</div>
					<div class="compani">
						<ul class="MSONUL whLink">
							<li><a href="javascript:void(0)">O'zbek tili</a></li>
							<li><a href="javascript:void(0)">Мобильная версия</a></li>
							<li><a href="javascript:void(0)">Реклама на сайте</a></li>
							<li><a href="javascript:void(0)">Помощь</a></li>
							<li><a href="javascript:void(0)">Новости компании</a></li>
							<li><a href="javascript:void(0)">О компании</a></li>
							<li><a href="javascript:void(0)">Вакансии</a></li>
						</ul>						
					</div>
				</div>
			</div>
		</div><!--maincontent-->
		
		
	<div class="MsgBox">
		<div class="plashBlack"></div>
		<div class="inSoob">
			<div class="arrowSoob"></div>
				<div class="sobInTopPlash">
					<div class="InsobLtopBL">
						<span>Все</span><a href="javascript:void(0)" class="dottedLink">Друзья на поле</a>
					</div>
					<div class="InsobRtopBL">
						<span class="InsobdotOut"><a href="javascript:void(0)" class="dottedLink">Удалить всю переписку</a></span>
						<span class="InsobdotOut twb"><a href="javascript:void(0)" class="dottedLink">В черный список</a></span>
						<div class="soundoOff">
							<div class="soundicon"></div>
							<div class="OffandOnS"></div>
						</div>
						<div class="cloeSoob"></div>
					</div>
				</div>
				<div class="listFriends">
					<form class="searchFriend">
						<input type="text" maxlength="50" class="searchText"/>
						<input type="image" class="searchImg" src="<?=$layoutPath?>/img/searchicon.png"/>
						<div class="bdb">
							
						</div>
					</form>
					<div class="scrollFrWp">
					<ul class="FriendScroll">
						<li class="USnameInLF">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">12</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноеф...</div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USnameActive">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефа</div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноеф...</div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">1</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
								<div class="krugxd">19</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/USava.png" alt="" />
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Длиннава Длинноефамилия<b></b></div><img alt="" class="UsNimg" src="<?=$layoutPath?>/img/useronline.png"></div>
								<div class="UsC">FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt=""></div>
							</div>
							<div class="removeUs"></div>
						</li>
					</ul>
				</div>
			</div>
			<div class="chatOut">
				<div class="downlast">
					<p class="downInUp">Загрузить предыдущие сообщения</p>
					<div class="clear"></div>
				</div>
				<div class="chatIn">
					<div class="scrollFrWp chatScrollWp">
						<ul class="FriendScroll chatScroll">
							<li class="outCom">
								<div class="userName">
									<a href="javascript:void(0)"  class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								</div>
								<div class="masComOut">
									<div class="aarow"></div>
									<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
								</div>								
							</li>
							<li class="outCom">	
								<div class="masComOut masComOutBlue">
								<div class="aarowl"></div>
								<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
								</div>
							</li>
							<li class="outCom">
								<div class="userName">
									<a href="javascript:void(0)"  class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								</div>
								<div class="masComOut">
									<div class="aarow"></div>
									<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
								</div>								
							</li>
							<li class="outCom">	
								<div class="masComOut">								<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
							</li>
							<li class="outCom">
								<div class="userName">
									<a href="javascript:void(0)"  class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								</div>
								<div class="masComOut">
									<div class="aarow"></div>
									<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
								</div>								
							</li>
							<li class="outCom">	
								<div class="masComOut masComOutBlue">
								<div class="aarowl"></div>
									<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
								</div>
							</li>
							<li class="outCom">
								<div class="userName">
									<a href="javascript:void(0)"  class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								</div>
								<div class="masComOut">
									<div class="aarow"></div>
									<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
								</div>								
							</li>
							<li class="outCom">	
								<div class="masComOut">								<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
							</li>
							<li class="outCom">
								<div class="userName">
									<a href="javascript:void(0)"  class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								</div>
								<div class="masComOut">
									<div class="aarow"></div>
									<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
								</div>								
							</li>
							<li class="outCom">	
								<div class="masComOut masComOutBlue">
								<div class="aarowl"></div>									<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
								</div>
							</li>
							<li class="outCom">
								<div class="userName">
									<a href="javascript:void(0)"  class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								</div>
								<div class="masComOut">
									<div class="aarow"></div>
									<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
								</div>								
							</li>
							<li class="outCom">	
								<div class="masComOut">								<div class="dAB">
										<a href="javascript:void(0)" class="poj">Пожаловаться</a>
										<span>22:30</span>
									</div>
									<p class="mainco">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Supendisse a pellentesque dui, non felis. </p>
							</li>
							<li class="outCombtn"></li>
						</ul>
					</div>
				</div>
				<div class="msg">
					<p class="conen" contenteditable="true">Написать сообщение</p>
					<div class="BlockwithPanel">
						<div class="smile">
							<div class="hoverLink hoverSmile" alt="none">
								<div class="topLineWin">
									<div class="leftUg"></div>
									<div class="leftLineWin"></div>	
									<div class="arrowWinTop"></div>
									<div class="rightUg"></div>			
									<div class="rightlineWin"></div>
									<div class="forIeblock"></div>					
								</div>
								<div class="SmileIn">
									<img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
								</div>
								<div class="botLineWin">
									<div class="botLeftUg"></div>
									<div class="botRightUg"></div>
									<div class="botCenterLine"></div>
									<div class="forIeblockBot"></div>
								</div>
							</div>
						</div>
					<div class="publish"></div>
					<div class="FileUP" onclick="$('.fileIn').click();"></div>
					<span class="countfile">Файлов: 3</span>
					<input class="fileIn" type="file">
					</div>
					
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>
	</div>
		<div class="chatBoxOt">
			<div class="plashBlack"></div>
			<div class="inSoob">
			<div class="arrowSoob"></div>
				<div class="sobInTopPlash">
					<div class="InsobLtopBL">
						<a href="javascript:void(0)" class="dottedLinkinC">Сводка</a>
						
						<form class="sortOm">
							<div class="SortIn">Все</div>
							<ul class="IBLul">
								<li>Новости</li>
								<li>Мои</li>
								<li>Клубы</li>
								<li class="bgnone">Друзья</li>
							<div class="arrsorTom"></div>
							</ul>
						</form>
						
					</div>
					<div class="InsobRtopBL excom">
						<span class="InsobdotOut excom">
							<a href="javascript:void(0)" class="dottedLink">Выйти с комментариев</a>
						</span>
						<div class="cloeSoob"></div>
					</div>
				</div>
		<div class="listFriends">
			<div class="scrollFrWp">
				<div class="FriendScroll">
					<div class="outcomWin">
						<div class="removeUs as"></div>
						<div class="masCOut">
							<div class="massNowIn masC">
								<div class="krugxd">5</div>
								Сервер mail.ru не найден из-за в ием подключения к ...
								<div class="arrowNowOnIn"></div>
							</div>
							<div class="userName">
								<a href="javascript:void(0)" class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								<div class="userStatsOut">
								<div class="infcClubWindarr"></div>
									<div class="userstats">
										<div class="UsNameAndFc">												
											<div class="YourName">
												<a href="javascript:void(0)">Длиннава Ватаяфам</a>
												<img src="<?=$layoutPath?>/img/useronline.png" alt="" />
												<b class="userNameBgGrad"></b>
											</div>
											<div class="FCclubName">
												<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
											</div>
											<div class="clear"></div>
										</div>											
										<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
										<div class="ratio">
											<div class="votes">41 голов</div>
											<div class="status">Капитан</div>
											<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
											<div class="clear"></div>
										</div>
									</div>
									 <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
								</div>
							</div>
						</div>
						<ul>
							<li class="USnameInLF">
								<div class="USava">
									<img src="<?=$layoutPath?>/img/sark.png" alt="" />
									<div class="krugxd">12</div>
								</div>
								<div class="UsNandC">
									<div class="UsN"><div class="UsNIn">Фотография</div></div>
									<div class="UsC">Сара конер</div>
								</div>
								<div class="removeUs"></div>
							</li>
							<li class="USnameInLF USnameActive">
								<div class="USava">
									<img src="<?=$layoutPath?>/img/sark2.png" alt="" />
								</div>
								<div class="UsNandC">
									<div class="UsN"><div class="UsNIn">Фотография</div></div>
									<div class="UsC">
										FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt="">
									</div>
								</div>
								<div class="removeUs"></div>
							</li>
							<li class="USnameInLF USofLine">
								<div class="USava">
									<img src="<?=$layoutPath?>/img/sark3.png" alt="" />
									<div class="krugxd">5</div>
								</div>
								<div class="UsNandC">
									<div class="UsN"><div class="UsNIn">Видео<b></b></div></div>
									<div class="UsC">
										FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt="">
									</div>
								</div>
								<div class="removeUs"></div>
							</li>
						</ul>
					</div>
					<div class="outcomWin">
						<div class="removeUs as"></div>
						<div class="masCOut">
							<div class="massNowIn masC">
								<div class="krugxd">5</div>
								Сервер mail.ru не найден из-за в ием подключения к ...
								<div class="arrowNowOnIn"></div>
							</div>
							<div class="userName">
								<a href="javascript:void(0)" class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								<div class="userStatsOut">
								<div class="infcClubWindarr"></div>
									<div class="userstats">
										<div class="UsNameAndFc">												
											<div class="YourName">
												<a href="javascript:void(0)">Длиннава Ватаяфам</a>
												<img src="<?=$layoutPath?>/img/useronline.png" alt="" />
												<b class="userNameBgGrad"></b>
											</div>
											<div class="FCclubName">
												<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
											</div>
											<div class="clear"></div>
										</div>											
										<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
										<div class="ratio">
											<div class="votes">41 голов</div>
											<div class="status">Капитан</div>
											<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
											<div class="clear"></div>
										</div>
									</div>
									 <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
								</div>
							</div>
						</div>
					</div>
					<ul>
						<li class="USnameInLF">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/sark.png" alt="" />
								<div class="krugxd">12</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Фотография</div></div>
								<div class="UsC">Сара конер</div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USnameActive">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/sark2.png" alt="" />
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Фотография</div></div>
								<div class="UsC">
									FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt="">
								</div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/sark3.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Видео<b></b></div></div>
								<div class="UsC">
									FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt="">
								</div>
							</div>
							<div class="removeUs"></div>
						</li>
					</ul>
					<div class="outcomWin">
						<div class="removeUs as"></div>
						<div class="masCOut">
							<div class="massNowIn masC">
								<div class="krugxd">5</div>
								Сервер mail.ru не найден из-за в ием подключения к ...
								<div class="arrowNowOnIn"></div>
							</div>
							<div class="userName">
								<a href="javascript:void(0)" class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								<div class="userStatsOut">
								<div class="infcClubWindarr"></div>
									<div class="userstats">
										<div class="UsNameAndFc">												
											<div class="YourName">
												<a href="javascript:void(0)">Длиннава Ватаяфам</a>
												<img src="<?=$layoutPath?>/img/useronline.png" alt="" />
												<b class="userNameBgGrad"></b>
											</div>
											<div class="FCclubName">
												<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
											</div>
											<div class="clear"></div>
										</div>											
										<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
										<div class="ratio">
											<div class="votes">41 голов</div>
											<div class="status">Капитан</div>
											<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
											<div class="clear"></div>
										</div>
									</div>
									 <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
								</div>
							</div>
						</div>
					</div>
					<ul>
						<li class="USnameInLF">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/sark.png" alt="" />
								<div class="krugxd">12</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Фотография</div></div>
								<div class="UsC">Сара конер</div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USnameActive">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/sark2.png" alt="" />
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Фотография</div></div>
								<div class="UsC">
									FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt="">
								</div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/sark3.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Видео<b></b></div></div>
								<div class="UsC">
									FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt="">
								</div>
							</div>
							<div class="removeUs"></div>
						</li>
					</ul>
					<div class="outcomWin">
						<div class="removeUs as"></div>
						<div class="masCOut">
							<div class="massNowIn masC">
								<div class="krugxd">5</div>
								Сервер mail.ru не найден из-за в ием подключения к ...
								<div class="arrowNowOnIn"></div>
							</div>
							<div class="userName">
								<a href="javascript:void(0)" class="decUn">Длиннава Ватаяфам <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
								<div class="userStatsOut">
								<div class="infcClubWindarr"></div>
									<div class="userstats">
										<div class="UsNameAndFc">												
											<div class="YourName">
												<a href="javascript:void(0)">Длиннава Ватаяфам</a>
												<img src="<?=$layoutPath?>/img/useronline.png" alt="" />
												<b class="userNameBgGrad"></b>
											</div>
											<div class="FCclubName">
												<a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
											</div>
											<div class="clear"></div>
										</div>											
										<img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
										<div class="ratio">
											<div class="votes">41 голов</div>
											<div class="status">Капитан</div>
											<div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
											<div class="clear"></div>
										</div>
									</div>
									 <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
								</div>
							</div>
						</div>
					</div>
					<ul>
						<li class="USnameInLF">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/sark.png" alt="" />
								<div class="krugxd">12</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Фотография</div></div>
								<div class="UsC">Сара конер</div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USnameActive">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/sark2.png" alt="" />
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Фотография</div></div>
								<div class="UsC">
									FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt="">
								</div>
							</div>
							<div class="removeUs"></div>
						</li>
						<li class="USnameInLF USofLine">
							<div class="USava">
								<img src="<?=$layoutPath?>/img/sark3.png" alt="" />
								<div class="krugxd">5</div>
							</div>
							<div class="UsNandC">
								<div class="UsN"><div class="UsNIn">Видео<b></b></div></div>
								<div class="UsC">
									FC Neftchi<img id="ImgFlag" src="<?=$layoutPath?>/img/uzFlag.png" alt="">
								</div>
							</div>
							<div class="removeUs"></div>
						</li>
					</ul>
					
				</div>
			</div>
			
			<div class="exitAllCom"><a href="javascript:void(0)">Отметить все как прочитанное</a></div>
		</div>
			
			
		<div class="chatOut">
				<div class="downlast downlastCom">
				
				
				
					<div class="topComIn">
						<div class="topComInImg"><img src="<?=$layoutPath?>/img/imgtiplsdf.png" alt="" /></div>
						<div class="infPanel">
							<div class="onfoTCI">
								<div>Фотография: Снимок вчерашней тусовки</div>
								<p>
									Из альбома
									<a class="UsName" href="javascript:void(0)">Разное</a>
								</p>
								<p class="authorIn">
									Автор:
									<a class="UsName" href="javascript:void(0)">Сара Конер</a>
								</p>
							</div>
							<div class="LikePanelUs likeTCI">
								<div class="likepanelCHB">		
									<div class="like LPinNB">
										<a href="javascript:void(0)" class="see"></a>
										<a href="javascript:void(0)" class="">51</a>
									</div>		
									
											<div class="like LPinNB">
												<a href="javascript:void(0)" class="coolLink"><b class="cool"></b>Нравиться</a>
												<a href="javascript:void(0)" class="collPeople">(9999)</a>
											</div>
									 		
								</div>
									<div class="like LPinNBR">
										<a href="javascript:void(0)" class="">(10)</a>
										<a href="javascript:void(0)" class="comlike"></a>
									</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="downlast downlastTCI">
						<p class="downInUp">Показать остальные 10 комментарии</p>
						<div class="clear"></div>
					</div>
					
				</div>
				
				
				
				
				
		
				<div class="chatIn">
					<div class="scrollFrWp chatScrollWp">
						<ul class="FriendScroll chatScroll">
						
							<li class="maincomout">
								<div class="maincomin">
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt="" /></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagrM"><b></b>-10</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Это очень клева!!!
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</li>
							<li class="maincomout">
								<div class="maincomin">
									<div class="avaLog"><img src="<?=$layoutPath?>/img/mal.png" alt="" /></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+9999</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">OZI GULOMOVA <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											ак Барыс это ведь Казахстан  А я болею за Арыстан  это внутрений чимпионат Казахстана  Также за Барыску Авангард Локомотив Спартак
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="maincomin answerQ">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagrNull"><b></b>+0</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="maincomin answerQ1">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="maincomin answerQ2">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="maincomin answerQ3">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="maincomin answerQ4">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="maincomin answerQ5">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="maincomin answerQ6">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="maincomin answerQ7">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								
								
								<div class="maincomin answerQ8">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="maincomin answerQ9">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="maincomin answerQ10">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="maincomin answerQ10">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="maincomin answerQ10">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="maincomin answerQ10">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="maincomin answerQ10">
									<div class="arrowQ"></div>
									<div class="avaLog"><img src="<?=$layoutPath?>/img/saraasd.png" alt=""></div>
									<div class="comtOut">
										<div class="namld">
											<div class="agr">
												<div class="nagr"></div>
												<div class="yagr"></div>
												<div class="cagr"><b></b>+2</div>
											</div>
											<div class="userName">
												<a href="javascript:void(0)" class="decUn decBold">Sarah Clark <img src="<?=$layoutPath?>/img/useronline.png" alt=""></a>
											</div>
										<div class="clear"></div>
										</div>
										<div class="conMCT">
											Ну это понятно ведь в России много команд
										</div>
										<div class="dopMenu">
											<span class="timeDM">22:30</span>
											<a class="poj" href="javascript:void(0)">Пожаловаться</a>
											<p class="ansCom">Ответить</p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</li>
						
						
						
						
						
							<li class="outCombtn"></li>
						</ul>
					</div>
				</div>
				<div class="msg">
					<p class="conen" contenteditable="true">Написать сообщение</p>
					<div class="BlockwithPanel">
						<div class="smile">
							<div class="hoverLink hoverSmile" alt="none">
								<div class="topLineWin">
									<div class="leftUg"></div>
									<div class="leftLineWin"></div>	
									<div class="arrowWinTop"></div>
									<div class="rightUg"></div>			
									<div class="rightlineWin"></div>
									<div class="forIeblock"></div>					
								</div>
								<div class="SmileIn">
									<img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
									<img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
								</div>
								<div class="botLineWin">
									<div class="botLeftUg"></div>
									<div class="botRightUg"></div>
									<div class="botCenterLine"></div>
									<div class="forIeblockBot"></div>
								</div>
							</div>
						</div>
					<div class="publish"></div>
					<div class="FileUP" onclick="$('.fileInT').click();"></div>
					<span class="countfile">Файлов: 3</span>
					<input class="fileInT" type="file">
					</div>
					
				</div>
			</div>
		</div>





































		
		
		
	</div>
	</div><!--container-->
	<p id="back-top">
		<a href="javascript:void(0)"></a>
	</p>
</body>
</html>