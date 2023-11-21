<?php

use yii\helpers\Html;

$this->title = $blog->name;

?>

<div class="news-details">
    <h1><?= Html::encode($this->title) ?></h1>
   
    <p><?= $blog->text ?></p>
    <!-- Другие детали новости, которые вы хотите отобразить -->
    
</div>
