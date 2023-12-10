<?php
use yii\helpers\Html;

$this->title = $product->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
.product-slider-container {
    position: relative;
    max-width: 1200px;
    height: 500px;
    margin: auto;
    margin-bottom: 20px;
    overflow: hidden; /* Скрыть изображения, выходящие за пределы слайдера */
}




    .product-slider {
        overflow: hidden; /* Скрыть изображения, выходящие за пределы слайдера */
    }

    .slides-container {
        display: flex; /* Располагаем слайды в ряд */
        transition: transform 0.5s ease-in-out; /* Плавный переход между слайдами */
    }

    .slide {
        flex: 0 0 100%; /* Ширина слайда равна ширине слайдера */
        box-sizing: border-box; /* Исключаем границы и отступы из размера */
    }

    .slide img {
    width: 100%;
    height: 100%;
    
}


    .arrow-container {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        z-index: 1; /* Поднимаем блок со стрелками над слайдером */
    }

    .arrow {
        width: 30px;
        height: 30px;
        background-color: black;
        color: white;
        text-align: center;
        line-height: 30px;
        cursor: pointer;
    }
    .title {
        margin: var(--lg) auto 20px;
        font-weight: 700;
        font-size: 36px; /* Уменьшен размер шрифта */
        line-height: 120%;
        color: var(--dark);
        text-align: center;
    }
    .about__descr {
        margin-bottom: 20px;
    }
</style>

<div class="container">
    <div class="product-view">
        <h1 class="title"><?= Html::encode($this->title) ?></h1>

        <!-- Используем nl2br для замены переводов строк на теги <br> в описании -->
        <p class="about__descr"><?= nl2br(Html::encode($product->description)) ?></p>

        <!-- Display images in a slider if available -->
        <?php
        $images = explode(',', $product->images);

        if (!empty($images)) {
            echo '<div class="product-slider-container">';
            echo '<div class="product-slider">';
            echo '<div class="slides-container">';
            foreach ($images as $image) {
                echo '<div class="slide">' . Html::img($image) . '</div>';
            }
            echo '</div>';
            echo '</div>';
            echo '<div class="arrow-container">';
            echo '<div class="arrow prev" onclick="prevSlide()">&#10094;</div>';
            echo '<div class="arrow next" onclick="nextSlide()">&#10095;</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo 'No images available for this product.';
        }
        ?>
    </div>
</div>

<script>
    var currentSlide = 0;

    function showSlide(index) {
        var slidesContainer = document.querySelector('.slides-container');
        currentSlide = index;
        slidesContainer.style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
    }

    function prevSlide() {
        var totalSlides = document.querySelectorAll('.slide').length;
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    function nextSlide() {
        var totalSlides = document.querySelectorAll('.slide').length;
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }
</script>
