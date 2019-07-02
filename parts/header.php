<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/functions.php'); 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "MyMoscow - $title";?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="header" id="main">
        <div class="header-filter">
            <div class="header-filter-top wrapper">
                <div class="header-filter-top-logo">MyMoscow</div>
                <div class="header-filter-top-nav"> 
                    <a href="/index.php" id=#main>Главная</a>
                    <a href="#services">Наши услуги</a>
                    <a href="#" id=#aboutus>О компании</a>
                    <a href="#contacts">Контакты</a>
                    <a href="#review">Отзывы</a>
                </div>   
            </div>
            <div class="header-filter-burger">
                <div class="header-filter-burger-menu">
                    <div></div>
                </div>
            </div>
            <div class="header-filter-main-content wrapper">
                <div class="header-filter-main-content-arrow-back"></div>
                <div class="header-filter-main-content-topic">
                    <h1>Необычная Москва</h1> 
                    <p>MyMoscow - агенство интересных маршрутов</p>
                </div>
                <div class="header-filter-main-content-arrow-next"></div>
            </div>  
            <div class="header-filter-bottom wrapper">              
                <a class="header-filter-bottom-btn btn" href="#aboutus">Подробнее о нас</a>
                <div class="header-filter-bottom-slider">
                    <div class="header-filter-bottom-slider-dot"></div>
                    <div class="header-filter-bottom-slider-dot"></div>
                    <div class="header-filter-bottom-slider-dot"></div>
                </div>
            </div>
        </div>
        <div class="header-slider">
            <div class="header-slider-item"></div>
            <div class="header-slider-item"></div>
            <div class="header-slider-item"></div>
            <div class="header-slider-item"></div>
            <div class="header-slider-item"></div>
        </div>
    </div>