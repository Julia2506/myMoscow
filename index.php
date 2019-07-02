<?php

    $title = 'Главная страница';
    require_once($_SERVER['DOCUMENT_ROOT'] . '/parts/header.php'); 
    

    $template['blocks'] = [];

    $sql = "SELECT * FROM blocks ORDER BY priority";

    $result = mysqli_query($db, $sql);

    while( $row = mysqli_fetch_assoc($result)) {
        if($row['active']) {
            $template['blocks'][]= $row;
        }
    }


?>      
    <div class="info-blocks wrapper" id="services">
        <h2>Что мы предлагаем?</h2>
        <p class="info-blocks-preview">Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!</p>
        <div class="info-blocks-sections ">
            <?php foreach($template['blocks'] as $blockItem): ?>
                <div class="info-blocks-sections-section">
                    <img src = '<?= $blockItem['src'] ?>'>
                    <div class="info-blocks-sections-section-column">
                        <h3> <?= $blockItem['h3'] ?> </h3>
                        <p> <?= $blockItem['content'] ?> </p>   
                    </div>      
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="about-us" id="aboutus">
        <div class="about-us-pic"></div>
        <div class="about-us-text">
            <h2>Кто мы такие</h2>
            <p>
                Мы - команда тех, кто любит историю и любит Москву. 
            </p>
            <p>
                Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники природы, заказники, парки, заповедники. Активныйотдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, не все Подмосковьееще «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты –первый человек, ступивший на эту землю.
            </p>
            <p>
                Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.
            </p>
            <div class="about-us-text-button btn">Подробнее о нас</div>
        </div>
    </div>
    <div class="gallery">
        <h2 class="yellow-underline">Москва в фотографиях</h2>
        <p class="wrapper">Проще всего рассказать обо всем в фотографиях. Смотрите наши фотоотчеты и присылайте нам свои фотографии.</p>
        <div class="gallery-items">
            <div class="gallery-items-item view-from-the-roof"></div>
            <div class="gallery-items-item triumphal-arch"></div>
            <div class="gallery-items-item red-square"></div>
            <div class="gallery-items-item izmailovsky-kremlin"></div>
            <div class="gallery-items-item historical-museum"></div>
            <div class="gallery-items-item voskresensky-gate"></div>
            <div class="gallery-items-item radisson-royal-hotel"></div>
            <div class="gallery-items-item pushkin-museum"></div>    
        </div>
    </div>
    <div class="reviews wrapper" id="review">
        <h2 class="yellow-underline">Отзывы</h2>
        <div class="reviews-items">
            <div class="reviews-items-first">
                <blockquote>
                    Были с дочкой и подругой на ночной экскурсии. Все таки как  много зависит от экскурсовода! Мы все четыре часа ходили за Станиславом Симоновым, как кролики. Боялись пропустить хоть  одно слово. При этом моей дочке - которая побывала во многих местах и с детства искушенная на интересные события - была сильно увлечена.
                </blockquote>
                <cite>Екатерина Васильева</cite>
            </div>
            <div class="reviews-items-second">
                <blockquote>
                    Ездили на экскурсию с семиклассниками и родителями. Всем очень понравилось! Экскурсовод Михаил Борисович очень интересно, необычно и с юмором рассказывал о Москве 16 века. Гибко подстраивал эксукурсию под интересы и потребности слушателей, ловко «управлял» подачей автобуса, не давая нам замёрзнуть.) 
                </blockquote>
                <cite>Анна Крушевская</cite>
            </div>
        </div>
        <div class="reviews-slider">
            <div class="reviews-slider-dot"></div>
            <div class="reviews-slider-dot"></div>
            <div class="reviews-slider-dot"></div>
            <div class="reviews-slider-dot"></div>
        </div>
    </div>
    <div class="question-form">
        <div class="question-form-content wrapper">
            <h2 class="blue-uppercase yellow-underline">Напишите нам</h2>
            <form action="/thank.php" method="POST">
                <div class="all-inputs">
                    <div class="left-inputs">
                        <input type="text" name='username' placeholder="ФИО">
                        <input type="email" name='useremail' placeholder="Email"> 
                        <input type="tel" name='usertel'placeholder="Телефон">
                    </div> 
                    <textarea name="question-point" placeholder="Ваше сообщение"></textarea>    
                </div>
               <button type="submit">отправить вопрос</button>
               <div class="falling-report"></div>
            </form>
        </div>
    </div>
<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/parts/footer.php'); 
?>  