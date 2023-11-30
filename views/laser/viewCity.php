<!-- views/laser/viewCity.php -->

<h1><?= $city->name; ?></h1>
<p><?= $city->description; ?></p>
<img src="<?= $city->img; ?>" alt="<?= $city->name; ?>">

<!-- Добавьте ссылку для возврата на страницу со списком городов -->
<a href="<?= Yii::$app->urlManager->createUrl(['laser/index']); ?>" class="back-link">Вернуться к списку городов</a>
