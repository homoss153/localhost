<?php 
    require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./pages/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat hotel</title>
</head>
<body class="page">
<div class="page__cover">
    <?php 
            $res = mysqli_query($connect, "SELECT * FROM `main` LIMIT 1");
            while ($row = mysqli_fetch_assoc($res)) {
                $name =  $row['name'];
                $city = $row['city'];
                $slogan = $row['slogan'];
                $address = $row['address'];
                $phone = $row['phone'];
                $time_work = $row['time_work'];
                $email = $row['email'];
            }
            ?>

    <header class="header page__header">
        <a href="index.html" class="logo__link link-transform">
            <img class="logo" src="./images/logo.svg" alt="Логотип сайта 'Котейка'">
        </a>

        <div class="header__container">
            <nav class="navigation navigation_type_header">
                <ul class="navigation__list">
                    <li class="navigation__item navigation__item_type_header">
                        <a href="#adventages" class="navigation__link navigation__link_type_header link-transform">Почему
                            мы?</a>
                    </li>
                    <li class="navigation__item navigation__item_type_header">
                        <a href="catalog.php" class="navigation__link navigation__link_type_header link-transform">Номера</a>
                    </li>
                    <li class="navigation__item navigation__item_type_header">
                        <a href="#feedback"
                           class="navigation__link navigation__link_type_header link-transform">Отзывы</a>
                    </li>
                    <li class="navigation__item navigation__item_type_header">
                        <a href="#contacts" class="navigation__link navigation__link_type_header link-transform">Как нас
                            найти</a>
                    </li>
                </ul>
            </nav>
            
            <a href="tel:+7 (800) 333 55 99" class="header__phone link-transform" target="_blank">8 (800) 333-55-99</a>
            <ul class="contacts__social_type_header contacts__social">
                <li class="contacts__icon">
                    <a href="#" class="contacts__link link-transform" target="_blank">
                        <img class="contacts__image" src="./images/fb.svg" alt="иконка фейсбук">
                    </a>
                </li>
                <li class="contacts__icon">
                    <a href="#" class="contacts__link link-transform" target="_blank">
                        <img class="contacts__image" src="./images/insta.svg" alt="иконка инстаграм">
                    </a>
                </li>
                <li class="contacts__icon">
                    <a href="#" class="contacts__link link-transform" target="_blank">
                        <img class="contacts__image" src="./images/vk.svg" alt="иконка вконтакте">
                    </a>
                </li>
            </ul>
        </div>
        <button class="header__button button__menu"></button>
    </header>

    <main class="content page__content">
        <section class="main-banner">
            <div class="main-banner__background">
                <?php
                echo '<span class="main-banner__location">'.$city.'</span>';
                echo '<h1 class="main-banner__title">'.$name.'</h1>';
                echo '<p class="main-banner__subtitle">'.$slogan.'</p>';
                ?>
                <button class="button main-banner__button">Забронировать</button>
            </div>
        </section>

        <section class="advantages" id="adventages">
            <h2 class="advantages__title">Почему мы?</h2>
            <ul class="cards">
                <li class="cards__item">
                    <img class="cards__image" src="./images/temp.svg" alt="Иконка с градусником">
                    <h3 class="cards__title">Комфортная температура</h3>
                    <p class="cards__text">Во всех номерах поддерживается комфортная температура в пределах
                        23 - 25 градусов. В каждом номере можно дополнительно отрегулировать температуру. </p>
                </li>
                <li class="cards__item">
                    <img class="cards__image" src="./images/video.svg" alt="Иконка с камерой видеонаблюдения">
                    <h3 class="cards__title">Видеонаблюдение</h3>
                    <p class="cards__text">Мы предоставляем доступ в нашу систему. Вы сможете следить
                        за своим питомцем со своего смартфона или компьютера.</p>
                </li>
                <li class="cards__item">
                    <img class="cards__image" src="./images/taxi.svg" alt="Иконка с такси">
                    <h3 class="cards__title">Услуги Зоотакси</h3>
                    <p class="cards__text">Мы приедем за вашим питомцем в любой район Санкт-Петербурга.</p>
                </li>
                <li class="cards__item">
                    <img class="cards__image" src="./images/eat.svg" alt="Иконка с миской корма">
                    <h3 class="cards__title">Сбалансированное питание</h3>
                    <p class="cards__text">Вы можете привезти свой корм
                        или доверить рацион своего
                        питомца нашим профессионалам.</p>
                </li>
                <li class="cards__item">
                    <img class="cards__image" src="./images/walk.svg" alt="Иконка с кошкой на прогулке">
                    <h3 class="cards__title">Ежедневные прогулки</h3>
                    <p class="cards__text">По вашему желанию мы выгуливаем вашего питомца два раза в день
                        на специализированной закрытой территории.</p>
                </li>
                <li class="cards__item">
                    <img class="cards__image" src="./images/best.svg" alt="Иконка с рукой, бережно держащей лапку">
                    <h3 class="cards__title">Лучшие ветеринары</h3>
                    <p class="cards__text">В гостинице 24 часа дежурит ветеринарный врач, который окажет любую помощь в
                        случае необходимости.</p>
                </li>
            </ul>
        </section>

        <section class="rooms">
            <h2 class="rooms__title">Номера</h2>
            <ul class="rooms__list">
                <li class="rooms__item rooms__item_active">
                    <div class="rooms__cover">
                        <img class="rooms__image" src="./images/rooms_1.jpg" alt="Бежевая кошка на лежаке">
                        <div class="rooms__type">
                            <h3 class="rooms__value">Эконом плюс</h3>
                            <ul class="rooms__properties">
                                <li class="rooms__property">Площадь - 0,90 м2</li>
                                <li class="rooms__property">Размеры (ШхГхВ) — 90х100х180 см</li>
                                <li class="rooms__property">Цена за сутки: 200₽</li>
                            </ul>
                            <button class="button rooms__button">Забронировать</button>
                        </div>
                    </div>
                </li>
                <li class="rooms__item">
                    <div class="rooms__cover">
                        <img class="rooms__image" src="./images/rooms_2.jpg" alt="Серая кошка на лежаке">
                        <div class="rooms__type">
                            <h3 class="rooms__value">Комфорт</h3>
                            <ul class="rooms__properties">
                                <li class="rooms__property">Площадь - 1,13 м2</li>
                                <li class="rooms__property">Размеры (ШхГхВ) — 100х125х180 см</li>
                                <li class="rooms__property">Цена за сутки: 250₽</li>
                            </ul>
                            <button class="button rooms__button">Забронировать</button>
                        </div>
                    </div>
                </li>
                <li class="rooms__item">
                    <div class="rooms__cover">
                        <img class="rooms__image" src="./images/rooms_3.jpg" alt="Полосатая кошка на лежаке">
                        <div class="rooms__type">
                            <h3 class="rooms__value">Сьют</h3>
                            <ul class="rooms__properties">
                                <li class="rooms__property">Площадь - 1,56 м2</li>
                                <li class="rooms__property">Размеры (ШхГхВ) — 125х125х180 см</li>
                                <li class="rooms__property">Цена за сутки: 350₽</li>
                            </ul>
                            <button class="button rooms__button">Забронировать</button>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="rooms__navigation">
                <div class="selector__cover rooms__selector">
                    <span class="selector selector_active"></span>
                    <span class="selector"></span>
                    <span class="selector"></span>
                </div>
                <div class="toggle__cover rooms__toggle">
                    <span class="toggle toggle_position_left"></span>
                    <span class="toggle toggle_position_right"></span>
                </div>
            </div>
        </section>

        <section class="feedback" id="feedback">
            <h2 class="feedback__title">Отзывы</h2>
            <ul class="feedback__list">
                <li class="feedback__item">
                    <p class="feedback__text">Первый раз пришлось оставить нашего котика в гостинице,
                        очень переживали. Администратор Мария каждый день высылала нам фото нашего питомца,
                        рассказывала, как он себя чувствует. И мы и котик остались очень довольны!</p>
                    <div class="feedback__userdata">
                        <span class="feedback__data feedback__data_type_name">Валерия Гришаева</span>
                        <span class="feedback__data feedback__data_type_date">15 ноября, 2019</span>
                    </div>
                </li>
                <li class="feedback__item">
                    <p class="feedback__text">Гостиницу для питомцев нам посоветовали друзья.
                        Они всегда оставляют здесь своего кота, когда уезжают. В “Котейке” очень
                        хорошо заботятся о питомцах, в гостинице очень чисто. Всем рекомендую! Будем обращаться еще.</p>
                    <div class="feedback__userdata">
                        <span class="feedback__data feedback__data_type_name">Екатерина Минаева</span>
                        <span class="feedback__data feedback__data_type_date">10 октября, 2019</span>
                    </div>
                </li>
                <li class="feedback__item">
                    <p class="feedback__text">Мой кот — настоящая привереда, угодить ему сложно.
                        У меня были особые требования к уходу за ним, и “Котейка” отлично справились.
                        Я часто наблюдал по видео за питомцем со своего телефона, это очень удобно.</p>
                    <div class="feedback__userdata">
                        <span class="feedback__data feedback__data_type_name">Павел Нечаев</span>
                        <span class="feedback__data feedback__data_type_date">10 октября, 2019</span>
                    </div>
                </li>
            </ul>
            <div class="rooms__navigation">
                <div class="selector__cover feedback__selector">
                    <span class="selector selector_active"></span>
                    <span class="selector"></span>
                    <span class="selector"></span>
                </div>
                <div class="toggle__cover feedback__toggle">
                    <span class="toggle toggle_position_left"></span>
                    <span class="toggle toggle_position_right"></span>
                </div>
            </div>
        </section>

        <section class="contacts" id="contacts">
            <div class="contacts__cover">
                <h2 class="contacts__title">Как нас найти</h2>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <h3 class="contacts__name">Адрес</h3>
                        <?php
                            echo '<p class="contacts__text">'.$address.'</p>';
                        ?> 
                    </li>
                    <li class="contacts__item">
                        <h3 class="contacts__name">Режим работы</h3>
                        <?php
                        echo '<p class="contacts__text">'.$time_work.'</p>'

                        ?>
                    </li>
                    <li class="contacts__item">
                        <h3 class="contacts__name">Телефон</h3>
                        <p class="contacts__text">
                            <?php 
                                echo '<a href="tel:'.$phone.'" class="contacts__link link-transform" target="_blank">'.$phone.'</a>';                            
                            ?>
                            
                        </p>
                    </li>
                    <li class="contacts__item">
                        <h3 class="contacts__name">E-mail</h3>
                        <p class="contacts__text">
                            <?php
                                echo '<a href="mailto:'.$email.'" class="contacts__link link-transform" target="_blank">'.$email.'</a>';
                            ?>
                        </p>
                    </li>
                    <li class="contacts__item">
                        <h3 class="contacts__name">Социальные сети</h3>
                        <ul class="contacts__social">
                            <li class="contacts__icon">
                                <a href="#" class="contacts__link link-transform" target="_blank">
                                    <img class="contacts__image" src="./images/fb.svg" alt="иконка фейсбук">
                                </a>
                            </li>
                            <li class="contacts__icon">
                                <a href="#" class="contacts__link link-transform" target="_blank">
                                    <img class="contacts__image" src="./images/insta.svg" alt="иконка инстаграм">
                                </a>
                            </li>
                            <li class="contacts__icon">
                                <a href="#" class="contacts__link link-transform" target="_blank">
                                    <img class="contacts__image" src="./images/vk.svg" alt="иконка вконтакте">
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="contacts__cards-cover">
                <iframe class="contacts__yandex-card"
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A5263013b17bfa2b731864f32af87b8867157f389afe654385dc8b395ed74c923&amp;source=constructor"
                        width="798" height="580"></iframe>
            </div>
        </section>
    </main>

    <footer class="footer page__footer">
        <div class="footer__navigation-block">
            <a href="index.html" class="logo__link link-transform">
                <img class="logo" src="./images/logo.svg" alt="Логотип сайта 'Котейка'">
            </a>
            <nav class="navigation">
                <ul class="navigation__list navigation__list_type_footer">
                    <li class="navigation__item navigation__item_type_footer">
                        <a href="#adventages" class="navigation__link link-transform">Почему мы?</a>
                    </li>
                    <li class="navigation__item navigation__item_type_footer">
                        <a href="#" class="navigation__link link-transform">Номера</a>
                    </li>
                    <li class="navigation__item navigation__item_type_footer">
                        <a href="#" class="navigation__link link-transform">Отзывы</a>
                    </li>
                    <li class="navigation__item navigation__item_type_footer">
                        <a href="#" class="navigation__link link-transform">Как нас найти</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="footer__copyright-block">
            <span class="footer__copyright">&copy; 2019 Все права защищены</span>
            <span class="footer__copyright">Политика конфиденциальности</span>
        </div>
    </footer>
</div>
<script src='./scripts/header.js'></script>
</body>
</html>