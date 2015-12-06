<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 11/22/15
 * Time: 9:09 PM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
?>
    <div id="nav">
				<div class="innav">
					<div class="outul">
						<div class="firstnav outli"><a href="javascript:void(0)"><img src="<?=$layoutPath?>/img/languageplash.png" />O' zbek tilida</a></div>
						<div class="outli"><a href="<?=Url::toRoute('news/list')?>">Новости</a></div>
						<div class="outli"><a href="<?=Url::toRoute('clubs/list')?>">Клубы</a></div>
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
								<li><a href="<?=Url::toRoute('site/about')?>">О компании</a></li>
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
								<li><a href="<?=Url::toRoute('matches/list')?>">Матчи</a></li>
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