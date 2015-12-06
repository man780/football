
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
		<link rel="stylesheet" type="text/css" href="css/ie.css" media="all" />
	<![endif]-->
	<!--[if !IE]><!-->
		<script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script>
	<!--<![endif]-->
</head>
<body>
<?php $this->beginBody(); ?>
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


		
		
		
		
		
		
		
		
<div id="container">
    <div id="header"><div class="headinimg"></div></div>
    <div id="navAndaft">
        <?=$this->render('/layouts/_nav', ['layoutPath'=>$layoutPath]);?>

        <?=$this->render('/layouts/_afternav', ['layoutPath'=>$layoutPath]);?>

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
                <img src="<?=$layoutPath?>/img/FCBunyotkor.png" class="FCBunyotkor" alt="" />
                <?=$this->render('/layouts/_userMenu', ['layoutPath'=>$layoutPath]);?>

                <?=$this->render('/layouts/_aside', ['layoutPath'=>$layoutPath]);?>

                <div id="article">
                    <?=$content?>
                </div>
                <?/*=$this->render('/layouts/_article', ['layoutPath'=>$layoutPath]);*/?>
                <div class="clear"></div>
            </div><!--content-->
            <?=$this->render('/layouts/_footer', ['layoutPath'=>$layoutPath]);?>
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
</div><!--container-->
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

	<p id="back-top">
		<a href="javascript:void(0)"></a>
	</p>
<?php $this->endBody(); ?>
</body>
</html>
