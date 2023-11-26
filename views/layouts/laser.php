<?php

use app\assets\AppAsset;
use app\assets\CustomFontAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

AppAsset::register($this);
CustomFontAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	
<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title><?= Html::encode($this->title) ?></title>


	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#111111">
	<?php $this->registerCsrfMetaTags() ?>
	

    <?php $this->head() ?>
	
</head>

<body class="page__body">
<?php $this->beginBody() ?>
<header class="header">


			<div class="container">
			<div class="header__top"><a href="/laser/index.php" class="logo header__logo"><img src="/web/images/logo.png" alt="Логотип" width="138" height="38"></a>
					<div class="header__contacts">
						<div class="header__contact"><span class="header__caption">По вопросам и предложениям</span> <a href="mailto:info@promdetal-ek.ru" class="header__link">info@promdetal-ek.ru </a></div>
						<div class="header__contact"><span class="header__caption">Для консультаций</span> <a href="tel:+73432169830 " class="header__link">+7 (343) 216-98-30</a></div>
					</div><button class="burger" aria-label="Открыть меню" aria-expanded="false" data-burger=""><span class="burger__line"></span></button></div>
				<div class="header__bottom" data-menu="">
				<nav class="nav" title="Главная навигация">
    <ul class="list-reset nav__list">
        <a class="nav__item"><a href="<?= Yii::$app->homeUrl ?>" class="nav__link">Главная</a></li>
        <li class="nav__item"><a href="<?= Yii::$app->urlManager->createUrl(['laser/company']) ?>" class="nav__link">О предприятии</a></li>
        <li class="nav__item"><a href="#" class="nav__link">Новости</a></li>
        <li class="nav__item"><a href="#" class="nav__link">Продукция</a></li>
        <li class="nav__item"><a href="#" class="nav__link">Услуги</a></li>
        <li class="nav__item"><a href="#" class="nav__link">Поддержка</a></li>
        <li class="nav__item"><a href="#" class="nav__link">География поставок</a></li>
        <li class="nav__item"><a href="#" class="nav__link">Контакты</a></li>
    </ul>
</nav>
					<div class="header__contact header__contact--mobile"><span class="header__caption">По вопросам и предложениям</span> <a href="mailto:pionerrr@sila.ru" class="header__link">promdetail@sila.ru</a></div>
					<div class="header__contact header__contact--mobile"><span class="header__caption">Для консультаций</span> <a href="tel:+74954562421" class="header__link">+7 (495) 456-24-21</a></div>
				</div>
			</div>
		</header>
		<?= $content  ?>
		
<footer class="footer">
			<div class="container grid">
				<div class="footer__col"><a href="/laser/index.php" class="logo footer__logo"><img src="/web/images/logo.png" alt="Логотип" width="180" height="38"></a></div>
				<div class="footer__col footer__col--flex">
					<nav class="nav" title="Второстепенное меню">
						<ul class="list-reset nav__list nav__list--footer">
							<li class="nav__item nav__item--footer"><a href="#" class="nav__link nav__link--footer">Главная</a></li>
							<li class="nav__item nav__item--footer"><a href="#" class="nav__link nav__link--footer">О предприятии</a></li>
							<li class="nav__item nav__item--footer"><a href="#" class="nav__link nav__link--footer">Новости</a></li>
							<li class="nav__item nav__item--footer"><a href="#" class="nav__link nav__link--footer">Продукция</a></li>
							<li class="nav__item nav__item--footer"><a href="#" class="nav__link nav__link--footer">Услуги</a></li>
							<li class="nav__item nav__item--footer"><a href="#" class="nav__link nav__link--footer">Поддержка</a></li>
							<li class="nav__item nav__item--footer"><a href="#" class="nav__link nav__link--footer">География поставок</a></li>
							<li class="nav__item nav__item--footer"><a href="#" class="nav__link nav__link--footer">Контакты</a></li>
						</ul>
					</nav>
					<ul class="list-reset footer__list">
						<li class="footer__item"><a href="#" class="footer__link">Файлы</a></li>
						<li class="footer__item"><a href="#" class="footer__link">Поддержка</a></li>
						<li class="footer__item"><a href="#" class="footer__link">Политика конфеденциальности</a></li>
					</ul>
				</div>
				<div class="footer__col footer__col--full"><span class="footer__copyright">1994 &nbsp;— 2023 ООО &nbsp;«Промдеталь&nbsp;»</span></div>
			</div>
		</footer>
	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>