<?php

use yii\helpers\Html;

$this->title = $blog->name;

?>
<style>
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


.title {
margin: var(--lg) auto 20px;
font-weight: 700;
font-size: 48px;
line-height: 120%;
color: var(--dark);
text-align: center;
}
    </style>
<div class="news-details">
    <h1 class="title"><?= Html::encode($this->title) ?></h1>
   
    <p><?= $blog->text ?></p>
    <!-- Другие детали новости, которые вы хотите отобразить -->
    
</div>
