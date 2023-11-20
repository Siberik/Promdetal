
<!DOCTYPE html>

<head>
    <title>О предприятии</title>

    <style>

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
            padding: 30px 0 20px;
            position: relative;
            top: 0;
            transition: 0.6s ease 0s;
        }

        .our-team:hover .team-content {
            top: -50%;
        }

        .our-team .team-content .name {
            color: #333;
            font-size: 20px;
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
            font-size: 17px;
            font-weight: 500;
            display: block;
            text-transform: capitalize;
            transition: 0.6s ease 0s;
        }

        
        .title_us {
    margin: var(--lg) auto 20px;
    font-weight: 700;
    font-size: 48px;
    line-height: 120%;
    color: var(--dark);
    text-align: center;
}



    </style>
</head>
<div class="container">
<div class="hero__top grid">

</div>
<h2 class="title_us">Коротко о  предприятии</h2>
<img src="/images/hero.jpg" srcset="/images/hero_2x.jpg 2x" alt="Промдеталь - предприятие лазерной резки" width="1180" height="440" class="hero__image"></div>

<section class="about section-offset">
    <div class="container">
    
        <div class="about__text grid">
            <p class="about__descr">Компания «Промдеталь» предоставляет услуги по лазерной резке и промышленной гравировке изделий из металла и других материалов с применением лазерных технологий. Коллектив компании – профессионалы с большим опытом работы в своей отрасли, которые знают все тонкости и специфику оборудования, что позволяет повысить качество и производительность работы в области лазерной резки.</p>
            <p class="about__descr">Спектр предоставляемых услуг нашей компании довольно обширен: от стандартной лазерной резки до выполнения сложнейших заказов по индивидуально составленным чертежам, изготовления изделий и конструкций для применения в наружной рекламе, оформления интерьера, а так же эксклюзивных нестандартных изделий и изделий производственного назначения.</p>
            <p class="about__descr">Для этого имеется современное оборудование швейцарской фирмы «Bystronic», станок Bystar 3015, позволяющий обрабатывать не только плоские заготовки, но и быстро обрабатывать объемные детали, в частности круглые трубы. Даже при лазерной резке толстых листовых материалов обеспечивается первоклассные параметры с минимальными временными затратами и экономией материала.</p>
        </div>
        <div class="container_segment">

            <div class="row">
                <h2 class="title_us">Наши сосалы</h2>
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="https://n1s1.hsmedia.ru/aa/e0/9d/aae09d118ee5c3d38adaa4b41fe64ebf/617x540_1_031579db22404e4c384057a436df1770@986x863_0xac120004_18784161701688063759.jpeg">
                        </div>
                        <div class="team-content">
                            <h3 class="name">Пидораска Олеговна</h3>
                            <span class="post">Директору сосала</span>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="https://masterpiecer-images.s3.yandex.net/a0ee3eb16abb11ee8675b646b2a0ffc1:upscaled">
                        </div>
                        <div class="team-content">
                            <h3 class="name">Сучка Альбертовна</h3>
                            <span class="post">Козу ебала</span>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="https://intrigue.dating/wp-content/cache/thumb/11/442463fbd700f11_350x0.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="name">Стелла Еблановна</h3>
                            <span class="post">В спагетти насрала</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</html>