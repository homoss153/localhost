<!DOCTYPE html>
<html lang="ru">
<?php
    require_once("connect.php");
    $nut_icon = '<div class="icon icon_content_sunbed position__icon">
    <span class="icon__help icon__help_size_small">
        <span class="icon__text icon__text_fill_sunbed">Лежак</span>
    </span>
</div>';
    $scratching_icon = '<div class="icon icon_content_scratching-post position__icon">
        <span class="icon__help icon__help_size_small">
            <span class="icon__text icon__text_fill_scratching-post">Когтеточка</span>
        </span>
    </div>';
    $none_icon = '<div class="icon icon_content_zero position__icon">
    <span class="icon__help icon__help_size_small">
        <span class="icon__text icon__text_fill_zero">Пустой номер</span>
    </span>
</div>';
    $game_icon = '<div class="icon icon_content_skein position__icon">
    <span class="icon__help icon__help_size_big">
        <span class="icon__text icon__text_fill_skein">Игровой комплекс</span>
    </span>
</div>';
    $home_icon = '<div class="icon icon_content_house position__icon">
    <span class="icon__help icon__help_size_small">
        <span class="icon__text icon__text_fill_house">Домик</span>
    </span>
</div>';
?>

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./pages/catalog.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat hotel</title>
</head>
<body class="page">
<div class="page__cover">
    
    <header class="header page__header">
        <a href="index.html" class="logo__link link-transform">
            <img class="logo" src="./images/logo.svg" alt="Логотип сайта 'Котейка'">
        </a>

        <div class="header__container">
            <nav class="navigation navigation_type_header">
                <ul class="navigation__list navigation__list_type_header">
                    <li class="navigation__item navigation__item_type_header">
                        <a href="#adventages" class="navigation__link navigation__link_type_header link-transform">Почему
                            мы?</a>
                    </li>
                    <li class="navigation__item navigation__item_type_header">
                        <a href="catalog.html" class="navigation__link navigation__link_type_header link-transform">Номера</a>
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
        <section class="rooms-list">
            <div class="rooms-list__row">
                <h1 class="rooms-list__title">Наши номера</h1>
                <div class="rooms-list__filter-cover">
                    <button class="rooms-list__filter-show button" type="button">Фильтры</button>
                    <ul class="rooms-list__filter">
                        <li class="rooms-list__item rooms-list__item_active">
                            <a href="#" class="rooms-list__link">По площади</a>
                        </li>
                        <li class="rooms-list__item">
                            <a href="#" class="rooms-list__link">По площади</a>
                        </li>
                        <li class="rooms-list__item">
                            <a href="#" class="rooms-list__link">По цене</a>
                        </li>
                        <li class="rooms-list__item">
                            <a href="#" class="rooms-list__link">По цене</a>
                        </li>
                    </ul>
                    <button class="rooms-list__toggle button" type="button">
                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 7L7 1L1 7" stroke="#1A212F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="rooms-list__columns">
                <div class="filter">
                    <div class="filter__container">
                        <button class="filter__close close" type="button"></button>
                        <div class="filter__item">
                            <h3 class="filter__title">Цена за сутки, &#8381;</h3>
                            <div class="filter__cover">
                                <input class="filter__price" type="text" name="min-price" placeholder="от 100">
                                <input class="filter__price" type="text" name="max-price" placeholder="до 600">
                            </div>
                        </div>
                        <div class="filter__item">
                            <h3 class="filter__title">Площадь</h3>
                            <input class="filter__checkbox" type="checkbox" id="0.63"  value=off>
                            <label class="filter__label" for="0.63">0,63 м2</label>
                            <input class="filter__checkbox" type="checkbox" id="0.90"  value=off>
                            <label class="filter__label" for="0.90">0,90 м2</label>
                            <input class="filter__checkbox" type="checkbox" id="1.13"  value=off>
                            <label class="filter__label" for="1.13">1,13 м2</label>
                            <input class="filter__checkbox" type="checkbox" id="1.56"  value=off>
                            <label class="filter__label" for="1.56">1,56 м2</label>
                            <input class="filter__checkbox" type="checkbox" id="2.56"  value=off>
                            <label class="filter__label" for="2.56">2,56 м2</label>
                            <input class="filter__checkbox" type="checkbox" id="2.88"  value=off>
                            <label class="filter__label" for="2.88">2,88 м2</label>
                        </div>
                        <div class="filter__item">
                            <h3 class="filter__title">Оснащение номера</h3>
                            <?php
                            $game_complex = $_GET['checkGame_complex'];
                            $nut = $_GET['checkHut'];
                            $scratching = $_GET['checkScratching_post'];
                            $sunbed = $_GET['checkSunbed'];
                            $empty = $_GET['checkEmpty'];
                            echo '
                            <input class="filter__checkbox" type="checkbox" id="empty"  '.(isset($empty)? 'checked' : ' ').'>
                            <label class="filter__label" for="empty">Пустой номер</label>
                            <input class="filter__checkbox" type="checkbox" id="sunbed"  '.(isset($sunbed)? 'checked' : ' ').'>
                            <label class="filter__label" for="sunbed">Лежак</label>
                            <input class="filter__checkbox" type="checkbox" id="scratching_post"  '.(isset($scratching)? 'checked' : ' ').'>
                            <label class="filter__label" for="scratching_post">Когтеточка</label>
                            <input class="filter__checkbox" type="checkbox" id="game_complex"  '.(isset($game_complex)? 'checked' : ' ').'>
                            <label class="filter__label" for="game_complex">Игровой комплекс</label>
                            <input class="filter__checkbox" type="checkbox" id="hut"  '.(isset($nut)? 'checked' : ' ').'>
                            <label class="filter__label" for="hut">Домик</label>';
                            ?>
                        </div>
                        <div class="filter__button-cover">
                            <input class="button filter__button filter__button_type_submit" type="submit"
                                   value="Применить">
                            <input class="button filter__button filter__button_type_reset" type="reset"
                                   value="Сбросить фильтр">
                        </div>
                    </div>
                </div>
                <div class="assortment">
                    <ul class="assortment__cards">
                    <?php
                    $game_complex = $_GET['checkGame_complex'];
                    $nut = $_GET['checkHut'];
                    $scratching = $_GET['checkScratching_post'];
                    $sunbed = $_GET['checkSunbed'];
                    $empty = $_GET['checkEmpty'];

                    if (!isset($game_complex) and !isset($nut) and !isset($scratching) and !isset($empty) and !isset($sunbed)){
                        $a = mysqli_query($connect, 'SELECT * FROM catalog  ORDER BY `price` ASC');    
                    }else {
                        $arr = [];
                        if (isset($game_complex)){
                            $arr[] = ' game_complex=1 ';
                        }
                        if (isset($nut)){
                            $arr[] = ' nut=1 ';
                        }if (isset($scratching)){
                            $arr[] = ' scratching=1 ';
                        }if (isset($sunbed)){
                            $arr[] = ' sunbed=1 ';
                        }if (isset($empty)){
                            $arr[] = ' empty_house=1 ';
                        }

                        $arr = implode("OR", $arr);
                        
                        $quey = 'SELECT * FROM catalog WHERE '.$arr;
                        
                        $a = mysqli_query($connect, $quey);  
                    }

                    $a = $a->fetch_all();
                    foreach ($a as $value) {
                        echo '<li class="assortment__item">
                            <img class="assortment__image" src="'.$value[10].'" alt="Серый кот на лежаке">
                            <div class="assortment__cover">
                                <h4 class="assortment__title">'.htmlspecialchars($value[4], ENT_QUOTES, 'UTF-8').'</h4>
                                <ul class="assortment__list">
                                    <li class="assortment__part">
                                            <span class="assortment__text">
                                                Размеры (ШхГхВ)-'.$value[2].' см
                                            </span>
                                    </li>
                                    <li class="assortment__part">
                                            <span class="assortment__text">
                                                Площадь -'.$value[3].'м2
                                            </span>
                                    </li>
                                    <li class="assortment__part">
                                            <span class="assortment__text">
                                                Оснащение номера
                                            </span>
                                        '.(($value[9]) ? $none_icon : "").
                                        (($value[6]) ? $nut_icon : "").
                                        (($value[7]) ? $scratching_icon : "").
                                        (($value[5]) ? $game_icon : "").
                                        (($value[8]) ? $home_icon : "").'
                                        
                                        
                                    </li>
                                    <li class="assortment__part">
                                            <span class="assortment__text">
                                                Цена за сутки: 
                                                <span class="assortment__text_size_big">'.$value[1].'</span>
                                            </span>
                                    </li>
                                </ul>
                                <button class="button assortment__button" id='.$value[0].' type="button">Забронировать</button>
                            </div>
                        </li>';
                        }

                    ?>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__background">
                <h2 class="banner__title banner__title_size_small">Каждый 7-й день</h2>
                <h2 class="banner__title banner__title_size_big">бесплатно!</h2>
                <p class="banner__subtitle">Акция действует при размещении<br>
                    в номерах “Люкс” и “Супер-Люкс”</p>
                <button class="button banner__button">Забронировать</button>
            </div>
        </section>

        <section class="contacts">
            <div class="contacts__cover">
                <h2 class="contacts__title">Как нас найти</h2>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <h3 class="contacts__name">Адрес</h3>
                        <p class="contacts__text">Санкт-Петербург, <br>ул Большая Конюшенная, д 19</p>
                    </li>
                    <li class="contacts__item">
                        <h3 class="contacts__name">Режим работы</h3>
                        <p class="contacts__text">Ежедневно, с 9:00 до 20:00</p>
                    </li>
                    <li class="contacts__item">
                        <h3 class="contacts__name">Телефон</h3>
                        <p class="contacts__text">
                            <a href="tel:+7 (800) 333 55 99" class="contacts__link link-transform" target="_blank">8
                                (800) 333-55-99</a>
                        </p>
                    </li>
                    <li class="contacts__item">
                        <h3 class="contacts__name">E-mail</h3>
                        <p class="contacts__text">
                            <a href="mailto:info@cat-hotel.ru" class="contacts__link link-transform" target="_blank">info@cat-hotel.ru</a>
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
                <div class="contacts__card"></div>
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

    <section class="modal">
        <div class="modal__container">
            <button class="modal__close close" type="button"></button>
            <h2 class="modal__title">Забронировать номер</h2>
            <form class="modal__form" action="#">
                <input class="modal__item" id='name' type="text" placeholder="Ваше имя">
                <input class="modal__item" id='nameP'type="text" placeholder="Имя Питомца">
                <input class="modal__item" id='number' type="tel" placeholder="Телефон">
                <input class="modal__item" id='email' type="email" placeholder="E-mail">
                <div class="modal__cover">
                    <span class="modal__text modal__text_type_date">Дата заезда</span>
                    <div class="modal__dates">
                        <label class="modal__text" for="first-date"> с
                            <input class="modal__date" name="first-date" id ='date1' type="text" placeholder="26.01.2020">
                        </label>
                        <label class="modal__text" for="last-date"> по
                            <input class="modal__date" name="last-date" id ='date2' type="text" placeholder="26.02.2020">
                        </label>
                    </div>
                </div>
                <p id='form_error'></p>
                <button class="button modal__button" type="button">Отправить заявку</button>
            </form>
        </div>

        <div class="thanks">
            <button class="thanks__close close" type="button"></button>
            <h2 class="thanks__title">Спасибо за заявку!</h2>
            <p class="thanks__subtitle">Мы свяжемся с вами в ближайшее время</p>
            <button class="button thanks__button" type="button">Ок</button>
        </div>
    </section>
</div>
<script src='./scripts/header.js'></script>
<script src="./scripts/catalog.js"></script>
</body>
</html>