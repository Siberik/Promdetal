<!DOCTYPE html>
<html lang="en">

<head>
    <title>О предприятии</title>
    <style>
        
    

        .news-details p {
        margin-bottom: 20px; /* Добавлен отступ после абзаца */
        line-height: 1.6;
        white-space: pre-wrap;
    }

       
    </style>
</head>

<body>
    <div class="container">
        <div class="hero__top grid"></div>
        <h2 class="title_us"><?= $city->name; ?></h2>
        <img src="<?= $city->img; ?>" srcset="<?= $city->img; ?>" alt="<?= $city->name; ?>" class="hero__image">
    </div>

    <section class="about section-offset">
        <div class="container">
            <div class="news-details">
                <p class="about__descr"><?= $city->description; ?></p>
            </div>
        </div>
    </section>
</body>

</html>
