<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/reusable_css/header.css">
    <link rel="stylesheet" href="/reusable_css/hamburger_menu.css">
    <link rel="stylesheet" href="/reusable_css/owl_carousel.css">
    <link rel="stylesheet" href="/reusable_css/footer.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="header__sections">
                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                        <span class="hamburger__topline"></span>
                        <span class="hamburger__midline"></span>
                        <span class="hamburger__botline"></span>
                    </label>
                    <div class="menu__box">
                        <div class="menu__closeBtn"></div>
                        <div class="menu__h"><strong class="menu__menu">Меню</strong></div>
                        <div class="menu__item"><strong class="menu__home"><a href="/index.php">Главная</a></strong></div>
                        <div class="menu__item menu__about"><a href="/site_pages/about_page/index.php">О нас</a></div>
                        <div class="menu__item menu__contacts"><a
                                href="/site_pages/contacts_page/index.php">Контакты</a></div>
                        <div class="menu__h menu__category"><strong>Категории</strong></div>
                        <div class="menu__item menu__kitchen"><a href="/site_pages/catalog_page/index.php">Кухни</a>
                        </div>
                        <div class="menu__item menu__bedroom"><a href="/site_pages/catalog_page/index.php">Спальни</a>
                        </div>
                        <div class="menu__item menu__livingroom"><a
                                href="/site_pages/catalog_page/index.php">Гостинные</a></div>
                        <div class="menu__item menu__hallways"><a href="/site_pages/catalog_page/index.php">Прихожие</a>
                        </div>
                        <div class="menu__item menu__office"><a href="/site_pages/catalog_page/index.php">Офисная
                                мебель</a></div>
                        <div class="menu__item menu__childrensroom"><a
                                href="/site_pages/catalog_page/index.php">Детская</a></div>
                        <div class="menu__item menu__stock"><a href="/site_pages/catalog_page/index.php">Акция</a></div>
                        <div class="menu__item menu__novelty"><a href="/site_pages/catalog_page/index.php">Новинки</a>
                        </div>
                        <div class="menu__item menu__mattress"><a href="/site_pages/catalog_page/index.php">Матрасы</a>
                        </div>
                        <div class="menu__item menu__softFurniture"><a href="/site_pages/catalog_page/index.php">Мягкая
                                мебель</a></div>
                        <div class="menu__item menu__cupboard"><a href="/site_pages/catalog_page/index.php">Шкафы</a>
                        </div>
                    </div>
                </div>
                <a href="/index.php" class=""><img class="header__logo" src="/images/title_page/LOGO.svg" alt="logo"></a>
                <a class="header__sections-main" href="/index.php">Главная</a>
                <a class="header__sections-about" href="/site_pages/about_page/index.php">О нас</a>
                <a class="header__sections-contacts" href="/site_pages/contacts_page/index.php">Контакты</a>
                <input class="header__searchLine-input" name="search" id="search" placeholder="Поиск">
                <img class="header__phone-icon" src="/images/title_page/phone.svg">
                <a class="header__sections-phone" href="tel:89648999119">8 (964) 89 99 119</a>
                <a class="header__delivery-icon" href="#"></a>
                <a class="header__sections-delivery" href="#">Доставка</a>
                <img class="header__searchLine-wishlist" src="/images/title_page/wishlist-icon.svg" alt="search">
                <a class="header__searchLine-bag" href="/site_pages/basket_page/index.php" alt="search"></a>
                <?php
                        $cart = $_SESSION['cart'];
                        // указатель наличия товара в корзине
                        if(count((is_countable($cart)?$cart:[])) > 0){
                            echo '<img class="header__searchLine-alarm2" src="/images/title_page/оповещение.svg">';
                        };
                        if ( !isset($_SESSION['logged_user']) ) {
                            echo '<a class="header__searchLine-profile" href="/site_pages/autorisation/login.php"></a>';
                        } else {
                            echo '<a class="header__searchLine-profile" href="/site_pages/account_page/index.php"></a>';
                        }
                    ?>
            </div>
        </header>
    </div>
    <section class="about">
        <div class="about__flex-box">
            <div class="about__textBlock">
                <div class="about__textBlock-head">
                    О магазине
                </div>
                <h3 class="about__textBlock-title">
                    Интернет-магазин «Лофт Мебель»: <br>купите хорошую мебель в один клик!
                </h3>
                <div class="about__textBlock-text">
                    Уникальный формат интернет-магазина позволит вам купить лучшую мебель крупнейших российских фабрик
                    максимально быстро и по выгодной цене! <br><br>Мы благодарим за доверие более десятка
                    производителей, которые дали нам возможность представлять лучшие образцы их продукции в российском
                    интернет-пространстве. Прямые договоры на поставку мебели с фабрик обеспечивают наиболее
                    привлекательные условия для наших покупателей.
                </div>
            </div>
            <div class="about__pictureBlock">
                <div class="about__pictureBlock-coloredBlock"></div>
            </div>
        </div>
        <img class="about__pictureBlock-img" src="/images/about_images/image 1.png" alt="empty">
    </section>
    <div class="container">
    <section class="benefits">
        <div class="benefits__title">
            Покупайте с выгодой!
        </div>
        <div class="benefits__box ben_box_1">
            <div class="benefits__item">
                <img class="benefits__item-img" src="/images/about_images/profit.svg" alt="empty">
                <div class="benefits__item-textBox">
                    <div class="benefits__item-title">
                        Лучшая цена
                    </div>
                    <div class="benefits__item-text ">
                        Предлагаем близкие к оптовым цены, которые дают <br>возможность приобретать мебель дешевле,
                        чем в розничных <br>салонах и шоу-румах.
                    </div>
                </div>
            </div>
            <div class="benefits__item">
                <img class="benefits__item-img car_delivery_img" src="/images/about_images/Vector.svg" alt="empty">
                <div class="benefits__item-textBox benefits__text_box№2">
                    <div class="benefits__item-title">
                        Прямые поставки
                    </div>
                    <div class="benefits__item-text">
                        С ведущих мебельных фабрик уменьшают срок выполнения <br>вашего заказа, даже если речь идет
                        об изготовлении предметов <br>по индивидуальному проекту.
                    </div>
                </div>
            </div>
        </div>
        <div class="benefits__box ben_box_2">
            <div class="benefits__item">
                <img class="benefits__item-img" src="/images/about_images/time.svg" alt="empty">
                <div class="benefits__item-textBox">
                    <div class="benefits__item-title">
                        Экономие времени
                    </div>
                    <div class="benefits__item-text">
                        Не нашли оптимальный вариант или нет времени на поиски? <br>Оставьте онлайн-заявку с
                        критериями, и мы предложим <br>вам несколько достойных образцов.
                    </div>
                </div>
            </div>
            <div class="benefits__item">
                <img class="benefits__item-img" src="/images/about_images/production.svg" alt="empty">
                <div class="benefits__item-textBox benefits__text_box№4">
                    <div class="benefits__item-title">
                        Изготовление на заказ
                    </div>
                    <div class="benefits__item-text">
                        Принимаем заявки на изготовление
                        мебели по персональному <br>дизайн-проекту от покупателей из любой точки России.
                        Просим <br>быть готовыми к авансированной оплате персональных заказов.
                    </div>
                </div>
            </div>
        </div>
    </section>
                    </div>
    <section class="advantages">
        <div class="advantages__item">
            <div class="advantages__item-title">
                Самые «вкусные» предложения
            </div>
            <div class="advantages__item-line">
            </div>
            <div class="advantages__item-text">
                Мы делаем всё
                необходимое, чтобы покупатели получали доступ к актуальным новинкам, которые
                представляет российский мебельный рынок. Познакомиться с каждой моделью,
                сравнить цены на аналоги и выбрать лучшее вы можете прямо сейчас. Хотите
                первыми узнавать о самых выгодных предложениях? Тогда подписывайтесь на
                информационную рассылку!
            </div>
        </div>
        <div class="advantages__item ai_2">
            <div class="advantages__item-title">
                Гарантированное качество
            </div>
            <div class="advantages__item-line">
            </div>
            <div class="advantages__item-text">
                Вся продукция сопровождается
                гарантией производителя. В каталогах представлена только сертифицированная мебель. Собственный
                контроль качества тщательно проверяет каждый образец перед отправкой заказчику. Покупатели получают
                необходимые документы –
                гарантийный талон и чек.
            </div>
        </div>
        <div class="advantages__item ai_3">
            <div class="advantages__item-title">
                Впечатляющий ассортимент
            </div>
            <div class="advantages__item-line">
            </div>
            <div class="advantages__item-text">
                Ежедневно мы выбираем для
                наших каталогов идеальные образцы из товарной матрицы производителей по всей
                России. Модные расцветки, экологически безопасные материалы, надежные
                комплектующие – у нас вы найдете мебель своей мечты!
            </div>
        </div>
    </section>
    <div class="container">
    <section class="advantages2">
        <div class="advantages2__box adv2_box_1">
            <div class="advantages2__item">
                <div class="advantages2__item-icon">
                    <img src="/images/about_images/coop.svg" alt="empty" class="advantages2__item-img">
                </div>
                <div class="advantages2__item-title">
                    Особенные условия для оптовиков
                </div>
                <div class="advantages2__item-text">
                    Число наших оптовых
                    покупателей неуклонно возрастает и всё потому, <br>что мы сумели предложить владельцам мебельных
                    магазинов наиболее выгодные условия.
                </div>
            </div>
            <div class="advantages2__item">
                <div class="advantages2__item-icon">
                    <img src="/images/about_images/delivery-box.svg" alt="empty" class="advantages2__item-img">
                </div>
                <div class="advantages2__item-title">
                    Оперативная доставка
                </div>
                <div class="advantages2__item-text">
                    Собственная курьерская служба
                    быстро привезет купленную мебель по указанному адресу. В российские регионы
                    доставка осуществляется <br>силами транспортных компаний.
                </div>
            </div>
        </div>

        <div class="advantages2__box adv2_box_2">
            <div class="advantages2__item">
                <div class="advantages2__item-icon">
                    <img src="/images/about_images/support.svg" alt="empty" class="advantages2__item-img">
                </div>
                <div class="advantages2__item-title">
                    Внимательный сервис
                </div>
                <div class="advantages2__item-text">
                    Квалифицированные менеджеры
                    интернет-магазина ответят на все <br>вопросы по ассортименту и предоставляемым
                    возможностям, а также помогут оформить заказ и проконтролируют реализацию
                    клиентских пожеланий при заказе мебели.
                </div>
            </div>
            <div class="advantages2__item">
                <div class="advantages2__item-icon">
                    <img class="advantages2__item-img" src="/images/about_images/re.svg" alt="empty">
                </div>
                <div class="advantages2__item-title">
                    Каждый пятый покупатель заказывает у нас <br>повторно!
                </div>
                <div class="advantages2__item-text">
                    И мы благодарим всех, кто воспользовался нашим уникальным предложением, заказал мебель быстро и
                    недорого и порекомендовал
                    друзьям и
                    знакомым.
                </div>
            </div>
        </div>
    </section>
    <section class="weHelp">
        <h4 class="weHelp__title1">
            Мы поможем сэкономить время, силы и деньги!
        </h4>
        <div class="weHelp__itemBox">
            <div class="weHelp__item">
                <img class="weHelp__icon" src="/images/about_images/green_vector.svg" alt="empty">
                <div class="weHelp__item-text">
                    <div class="weHelp__item-title">Время.</div>
                    <p>Примем вашу заявку в кратчайшие сроки. <br>При необходимости
                        подберем для вас <br>достойные варианты по заданным <br>критериям.</p>
                </div>
            </div>
            <div class="weHelp__item">
                <img class="weHelp__icon" src="/images/about_images/green_vector.svg" alt="empty">
                <div class="weHelp__item-text">
                    <div class="weHelp__item-title">Силы.</div>
                    <p>Закупим оптом или закажем на фабрике, избавив от длительных
                        обсуждений заказа с исполнителем. Курируем все этапы работы над
                        заказом.</p>
                </div>
            </div>
            <div class="weHelp__item">
                <img class="weHelp__icon" src="/images/about_images/green_vector.svg" alt="empty">
                <div class="weHelp__item-text">
                    <div class="weHelp__item-title">Деньги.</div>
                    <p>Вы точно купите мебель дешевле, чем в розницу.</p>
                </div>
            </div>
        </div>
        <h4 class="weHelp__title2">
            На чем мы не экономим? <br>На вашем комфорте и качестве мебели!
        </h4>
    </section>
    </div>
    <footer class="footer footer_bottom">
        <div class="footer__content container">
            <div class="footer__navigation-leftSide">
                <div class="footer__navigation">
                    <p class="footer__navigation-title">
                        НАВИГАЦИЯ
                    </p>
                    <div class="footer__navigation-item">
                        <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Кухни</a>
                        <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Прихожие</a>
                        <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Шкафы</a>
                        <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Спальни</a>
                        <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Офисная
                            мебель</a>
                        <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Матрасы</a>
                        <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Гостинные</a>
                        <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Детская</a>
                        <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Мягкая
                            мебель</a>
                    </div>
                    <div class="footer__navigation-item2">
                        <a class="footer__navigation-stock" href="/site_pages/catalog_page/index.php">Акция</a>
                        <a class="footer__navigation-newItems" href="/site_pages/catalog_page/index.php">Новинки</a>
                    </div>
                </div>
            </div>
            <div class="footer__navigation-rightSide">
                <div class="footer__contacts">
                    <img class="footer__contacts-logo" src="/images/title_page/LM.svg" alt="empty">
                </div>
                <div class="footer__contacts-adres">
                    г. Анапа, Анапское шоссе,<br>30 Ж/К Черное море
                </div>
                <div class="footer__contacts-contacts">
                    <div class="footer__contacts-phone">
                        <img class='footer__contacts-phoneImg' src="/images/title_page/phone_in_footer.svg" alt="empty">
                        <p class="footer__contacts-phoneText">
                            8 (964) 89 99 119
                        </p>
                    </div>
                    <div class="footer__contacts-instagram">
                        <img class='footer__contacts-instagramImg' src="/images/title_page/inst.svg" alt="empty">
                        <p class="footer__contacts-instagramText">
                            INSTAGRAM
                        </p>
                    </div>
                    <div class="footer__contacts-mail">
                        <img class='footer__contacts-mailImg' src="/images/title_page/mail.svg" alt="empty">
                        <p class="footer__contacts-mailText">
                            mebel_loft_anapa@mail.ru
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../scripts/menu_for_1024px.js"></script>
</body>

</html>