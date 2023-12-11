<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Добро пожаловать';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQZjvEYj8u70sZRlfO9B8BpFIZP0KtG9CWmZ8eV+3DAhpSuZ/6Zr5xHekMKb5S+q" crossorigin="anonymous">

<style>
    .site-welcome {
        text-align: center;
    }

    /* Стили для адаптивности */
    @media (max-width: 768px) {
        .blog-item {
            margin-bottom: 20px;
        }
    }

    .blog-item {
        margin-bottom: 20px;
    }

    /* Стили для кнопок */
    .btn {
        margin-right: 5px;
    }

    .btn-logout {
        background-color: #d9534f; /* Красный цвет */
        border-color: #d9534f; /* Красный цвет */
        color: #fff; /* Белый цвет текста */
        padding: 6px 12px; /* Немного увеличим отступы */
    }

    .btn-logout i {
        margin-right: 5px; /* Отступ для иконки справа от текста */
    }

    .btn-logout:hover {
        background-color: #c9302c; /* Цвет при наведении (например, темнее красный) */
        border-color: #ac2925; /* Цвет рамки при наведении */
    }

    .btn-group {
        float: right;
        margin-top: 10px;
    }

    .center-block {
        display: block;
        margin: 0 auto;
    }

    /* Стили для колонок */
    .column {
        display: inline-block;
        vertical-align: top;
        margin-right: 20px; /* Расстояние между колонками */
    }

    /* Стили для пагинации */
    .pagination {
        list-style-type: none;
        padding: 0;
        margin: 0 20 0 auto;
    }

    .pagination li {
        display: inline;
        margin-right: 5px;
    }
</style>

<div class="site-welcome">
<h1 style="text-align: center;"><?= Html::encode($this->title) ?></h1>

    <div class="btn-group">
        <?php
        // Проверяем, аутентифицирован ли пользователь
        if (!Yii::$app->user->isGuest) {
            echo Html::a('Выйти', ['site/logout'], ['class' => 'btn btn-logout', 'data' => ['method' => 'post']]);
        }
        ?>
    </div>

    <div class="center-block">
        <?php
        // Проверяем, аутентифицирован ли пользователь
        if (!Yii::$app->user->isGuest) {
            echo Html::a('Добавить новую статью', ['site/edit-blog'], ['class' => 'btn btn-success']);
        }
        ?>
    </div>

    <?php
    // Остальной контент (статьи, пагинация)
    $itemsPerColumn = 5; // Максимальное количество статей в одном столбце
    $columnCount = 3; // Количество вертикальных столбцов
    $dataProvider->pagination->pageSize = $itemsPerColumn * $columnCount;

    $models = $dataProvider->getModels();

    for ($i = 0; $i < count($models); $i++) {
        if ($i % $itemsPerColumn === 0) {
            if ($i !== 0) {
                echo '</div>';
            }
            echo '<div class="column">';
        }

        $blog = $models[$i];
        ?>
        <div class="blog-item well">
            <h2><?= Html::encode($blog->name) ?></h2>
            <p><?= Html::encode($blog->description) ?></p>
            <?php
            // Проверяем, аутентифицирован ли пользователь
            if (!Yii::$app->user->isGuest) {
                echo Html::a('Редактировать', ['site/edit-blog', 'id' => $blog->id], ['class' => 'btn btn-primary center-block']);
                echo Html::a('Удалить', ['site/delete-blog', 'id' => $blog->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить эту статью?',
                        'method' => 'post',
                    ],
                ]);
            }
            ?>
        </div>
        <?php
    }

    echo '</div>'; // Закрываем последний столбец

    // Отображаем пагинацию
    echo LinkPager::widget([
        'pagination' => $dataProvider->pagination,
    ]);
    ?>
</div>

        <?php
    

    echo '</div>'; // Закрываем последний столбец

    // Отображаем пагинацию
    echo LinkPager::widget([
        'pagination' => $dataProvider->pagination,
    ]);
    ?>
</div>
