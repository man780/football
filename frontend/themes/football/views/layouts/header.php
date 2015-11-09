<?php
use common\components\MyRbac;
use yii\helpers\Html;
?>

<!-- START #header -->
<header id="header" role="banner">
	<div id="headerInner">
		<div class="container">
			<div id="logo">
				<a title="YAMNIK" href="<?= Yii::$app->homeUrl;?>">YaUmnik</a>
			</div>

			<nav id="headMenu" class="navigation pull-left" role="navigation">
				<ul>
					<li><?= Html::a('Математика',['/maths']);?></li>
					<li><?= Html::a('Русский язык',['/russian']);?></li>
					<li><?= Html::a('Награды',['/awards']);?></li>
					<li class="dropdown">
						<?= Html::a('Отчеты',['/reports'],[
							'class' => 'dropdown-toggle',
							'data' => ['toggle'=>'dropdown']
						]);?>
						<ul class="dropdown-menu">
							<li><a href="/reports/maths/home/index">Математика</a></li>
							<li><a href="/reports/russian/home/index">Русский язык</a></li>
						</ul>
					</li>
					<li><?= Html::a('Отзывы',['/testimonials']);?></li>
				</ul>
			</nav>

			<div class="headTool">
				<?php if(Yii::$app->user->isGuest):?>
				
					<?= Html::a('Регистрация',['/user/registration/register'],[
						'class' => 'btn btn-danger registerBtn',
						'data-toggle' => 'modal',
						'data-target' => '#signupModal',
					])?>
					<span class="btn-or">или</span>
					<?= Html::a('Вход',['/user/registration/login'],[
						'class' => 'loginBtn',
						'data-toggle' => 'modal',
						'data-target' => '#signupModal',
					])?>
				<?php else:?>
					<?php
					$menuItems[] = [
						'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
						'url' => ['/user/account/logout'],
						'linkOptions' => ['data-method' => 'post']
					];
					?>
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<div class="dropdown dropdown-user pull-right">
						<?php
							$iconUrl = Yii::$app->user->identity->getIconUrl('small');
							if ($iconUrl) {echo Html::img($iconUrl);}
						?>

						<span class="userHeadAva"><img src="/statics/profile/avatars/small/boy3.png" alt="" /></span>
						<span class="userHeadName"><?= Yii::$app->user->identity->getDisplayName(); ?></span>
						<?= Html::a('<span class="caret"></span>',['user/profile'],[
							'class' => 'dropdown-toggle toggle-carret',
							'data' => ['toggle'=>'dropdown']
						])?>
						<ul class="dropdown-menu pull-right">

							<?php
							/** @var \common\modules\user\models\User[] $usersToSwitch */
							$usersToSwitch = Yii::$app->user->identity->getUsersToSwitch()
							?>

							<?php if ($usersToSwitch): ?>
								<?php foreach ($usersToSwitch as $v): ?>
									<?php $tmpIcon = $v->getIconUrl('small') ?>
									<li>
										<?php $tmpLink = ''; ?>

										<?php if ($tmpIcon): ?>
											<?php $tmpLink = Html::img($tmpIcon) ?>
										<?php endif ?>
										<?php
										$tmpLink .= ' ' . $v->getDisplayName()
										?>

										<?php echo Html::a($tmpLink, ['/user/profile/switch', 'subUserId' => $v->id]) ?>
									</li>
								<?php endforeach ?>

								<li style="border-bottom: 1px solid #808080">&nbsp;</li>
							<?php endif ?>

							<?php if (MyRbac::canAccessProfileSettings(Yii::$app->user)): ?>
								<li><?php echo Html::a('Profile & settings', ['/user/profile/load']) ?></li>
							<?php else: ?>
								<li>
									<?= Html::a('Настройки', ['/user/settings/profile'])?>
								</li>
							<?php endif; ?>

							<?php if (Yii::$app->user->identity->role == \common\modules\user\models\User::ROLE_PARENT): ?>
								<li>
									<?php echo Html::a('Edit children', ['/membership/family/child']) ?>
								</li>
							<?php endif ?>

							<li>
								<?= Html::a('Выход',['/user/account/logout'])?>
							</li>
						</ul>
					</div>
					<!-- END USER LOGIN DROPDOWN -->
				<?php endif;?>
			</div>
			<!-- END .headTool -->
		</div>
	</div>
</header>
<!-- END #header -->