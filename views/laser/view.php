<?php

use yii\helpers\Html;

$this->title = $blog->name;

?>


<!DOCTYPE html>

<head>
    <title>О предприятии</title>

    <style>
    :root {
    --font-family: 'Source Sans 3', sans-serif;
    --content-width: 1180px;
    --container-offset: 15px;
    --container-width: calc(var(--content-width) + (var(--container-offset) * 2));
    --gap: 20px;
    --section-offset: 80px;
    --lg: 32px;
    --accent: #607ce6;
    --dark: #333;
    --light: #fff;
    --third: #d9d9d9;
    --gray: #888;
    --light-gray: #f5f5f5
}


body{
    font-family: "Source Sans 3",sans-serif;
}
h2{
    font-family: "Source Sans 1", sans-serif; 
}
.custom-checkbox__field:checked+.custom-checkbox__content::after {
    opacity: 1
}

.custom-checkbox__field:focus+.custom-checkbox__content::before {
    outline: red solid 2px;
    outline-offset: 2px
}

.custom-checkbox__field:disabled+.custom-checkbox__content {
    opacity: .4;
    pointer-events: none
}



html {
    -webkit-box-sizing: border-box;
    box-sizing: border-box
}

*,
::after,
::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit
}

.page {
    height: 100%;
    font-family: var(--font-family);
    -webkit-text-size-adjust: 100%
}

.page__body {
    margin: 0;
    min-width: 320px;
    min-height: 100%;
    font-size: 16px
}

    .container_segment {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }

    .our-team {
        max-width: 400px;
        margin: 0 0 40px; /* Добавлен отступ вниз */
        text-align: center;
        position: relative;
    }

    .our-team:before {
        content: "";
        position: absolute;
        border: 4px solid #F6511D;
        bottom: -7px;
        top: -7px;
        left: -7px;
        right: -7px;
        opacity: 0;
        transform: scale(1.03);
        z-index: -1;
        transition: 0.6s ease 0s;
    }

    .our-team:hover:before {
        opacity: 1;
        transform: scale(1);
    }

    .our-team .team-img {
        position: relative;
    }

    .our-team .team-img:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.6);
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: 0.6s ease 0s;
    }

    .our-team:hover .team-img:before {
        opacity: 1;
    }

    .our-team .team-img img {
        width: 100%;
        height: auto;
    }

    .our-team .team-content {
        padding: 15px 0 10px; /* Уменьшен отступ */
        position: relative;
        top: 0;
        transition: 0.6s ease 0s;
        line-height: 1.5; /* Установлен полуторный интервал */
    }

    .our-team:hover .team-content {
        top: -50%;
    }

    .our-team .team-content .name {
        color: #333;
        font-size: 18px; /* Уменьшен размер шрифта */
        font-weight: 700;
        letter-spacing: 1px;
        display: block;
        margin-bottom: 7px;
        text-transform: uppercase;
        transition: 0.6s ease 0s;
    }

    .our-team:hover .team-content .name {
        color: #fff;
    }

    .our-team .team-content .post {
        color: #707070;
        font-size: 10px; /* Уменьшен размер шрифта */
        font-weight: 50;
        display: block;
        text-transform: capitalize;
        transition: 0.6s ease 0s;
    }

    .title {
        margin: var(--lg) auto 20px;
        font-weight: 700;
        font-size: 36px; /* Уменьшен размер шрифта */
        line-height: 120%;
        color: var(--dark);
        text-align: center;
    }
    .news-details {
        padding-left: 20px; /* Добавлен отступ слева */
    }
    .news-details p {
        margin-bottom: 20px; /* Добавлен отступ после абзаца */
        line-height: 1.6;
        white-space: pre-wrap;
    }
    
</style>
</head>
<div class="container">
<div >
<body>
<div class="news-details">
    <h1 class="title"><?= Html::encode($this->title) ?></h1>
   
    <p class="about__descr"><?= $blog->text ?></p>
    <!-- Другие детали новости, которые вы хотите отобразить -->
    
</div>
</div>
</div>
    </div>
</section>
</html>
