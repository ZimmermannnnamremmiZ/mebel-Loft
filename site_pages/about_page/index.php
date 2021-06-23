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
</head>
<body>
    <div class="container">
            <header class="header">
                <div class="header__sections">
                    <img class="header__logo" src="/images/LOGO.svg" alt="logo">
                    <a class="header__sections-main" href="/site_pages/title_page/index.php">Главная</a>
                    <a class="header__sections-about" href="/site_pages/about_page/index.php">О нас</a>
                    <a class="header__sections-contacts" href="/site_pages/contacts_page/index.php">Контакты</a>
                    <input class="header__searchLine-input" name="search" id="search" placeholder="Поиск">
                    <img class="header__phone-icon" src="/images/phone.svg">
                    <a class="header__sections-phone" href="href=" tel:89648999119">8 (964) 89 99 119</a>
                    <img class="header__delivery-icon" src="/images/delivery-icon.svg">
                    <a class="header__sections-delivery" href="#">Доставка</a>
                    <img class="header__searchLine-wishlist" src="/images/wishlist-icon.svg" alt="search">
                    <a class="header__searchLine-bag" href="/site_pages/basket_page/index.php" alt="search"></a>
                    <?php
                        $cart = $_SESSION['cart'];
                        // указатель наличия товара в корзине
                        if(count((is_countable($cart)?$cart:[])) > 0){
                            echo '<img class="header__searchLine-alarm2" src="/images/оповещение.svg">';
                        };
                        if ( !isset($_SESSION['logged_user']) ) {
                            echo '<a class="header__searchLine-profile" href="/site_pages/autorisation/login.php"></a>';
                        } else {
                            echo '<a class="header__searchLine-profile" href="/site_pages/account_page/index.php"></a>';
                        }
                    ?>
                </div>
            </header>
                <section class="about">
                    <div class="about__textBlock">
                        <div class="about__textBlock-head">
                            О магазине
                        </div>
                        <h3 class="about__textBlock-title">
                            Интернет-магазин «Лофт Мебель»:<br>купите хорошую мебель в один клик!
                        </h3>
                        <div class="about__textBlock-text">
                            Уникальный формат интернет-магазина позволит вам купить лучшую мебель крупнейших российских фабрик максимально быстро и по выгодной цене!<br><br>Мы благодарим за доверие более десятка производителей, которые дали нам возможность представлять лучшие образцы их продукции в российском интернет-пространстве. Прямые договоры на поставку мебели с фабрик обеспечивают наиболее привлекательные условия для наших покупателей.
                        </div>
                    </div>
                    <div class="about__pictureBlock">
                        <img class="about__pictureBlock-img" src="/images/about_images/image 1.png" alt="empty">
                        <div class="about__pictureBlock-coloredBlock"></div>
                    </div>
                </section>
                <section class="benefits">
                    <div class="benefits__title">
                        Покупайте с выгодой!
                    </div>
                    <div class="benefits__box">
                        <div class="benefits__item">
                            <img class="benefits__item-img" src="/images/about_images/profit.svg" alt="empty">
                            <div class="benefits__item-textBox">
                                <div class="benefits__item-title">
                                    Лучшая цена
                                </div>
                                <div class="benefits__item-text">
                                    Предлагаем близкие к оптовым цены, которые дают возможность приобретать мебель дешевле, чем в розничных салонах и шоу-румах.
                                </div>
                            </div>
                        </div>
                            <div class="benefits__item">
                                <img class="benefits__item-img" src="/images/about_images/Vector.svg" alt="empty">
                                <div class="benefits__item-textBox">
                                    <div class="benefits__item-title">
                                        Прямые поставки
                                    </div>
                                    <div class="benefits__item-text">
                                        С ведущих мебельных фабрик уменьшают срок выполнения вашего заказа, даже если речь идет об изготовлении предметов по индивидуальному проекту.
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="benefits__box">
                            <div class="benefits__item">
                                <img class="benefits__item-img" src="/images/about_images/time.svg" alt="empty">
                                <div class="benefits__item-textBox">
                                    <div class="benefits__item-title">
                                        Экономие времени
                                    </div>
                                    <div class="benefits__item-text">
                                        Не нашли оптимальный вариант или нет времени на поиски? Оставьте онлайн-заявку с критериями, и мы предложим вам несколько достойных образцов.
                                    </div>
                                </div>
                            </div>
                            <div class="benefits__item">
                                <img class="benefits__item-img" src="/images/about_images/production.svg" alt="empty">
                                <div class="benefits__item-textBox">
                                    <div class="benefits__item-title">
                                        Изготовление на заказ
                                    </div>
                                    <div class="benefits__item-text">
                                        Принимаем заявки на изготовление
                                        мебели по персональному дизайн-проекту от покупателей из любой точки России.
                                        Просим быть готовыми к авансированной оплате персональных заказов.
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
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
                    <div class="advantages__item">
                        <div class="advantages__item-title">
                            Гарантированное качество
                        </div>
                        <div class="advantages__item-line">
                        </div>
                        <div class="advantages__item-text">
                            Вся продукция сопровождается
                            гарантией производителя. В каталогах представлена только сертифицированная
                            мебель. Собственный контроль качества тщательно проверяет каждый образец
                            перед отправкой заказчику. Покупатели получают необходимые документы –
                            гарантийный талон и чек.
                        </div>
                    </div>
                    <div class="advantages__item">
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
                <section class="advantages2">
                    <div class="advantages2__box">
                        <div class="advantages2__item">
                            <div class="advantages2__item-icon">
                                <img src="/images/about_images/coop.svg" alt="empty" class="advantages2__item-img">
                            </div>
                            <div class="advantages2__item-title">
                                Особенные условия для оптовиков
                            </div>
                            <div class="advantages2__item-text">
                                Число наших оптовых
                                покупателей неуклонно возрастает и всё потому, что мы сумели предложить
                                владельцам мебельных магазинов наиболее выгодные условия.
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
                                доставка осуществляется силами транспортных компаний.
                            </div>
                        </div>
                    </div>

                    <div class="advantages2__box">
                        <div class="advantages2__item">
                            <div class="advantages2__item-icon">
                                <img src="/images/about_images/support.svg" alt="empty" class="advantages2__item-img">
                            </div>
                            <div class="advantages2__item-title">
                                Внимательный сервис
                            </div>
                            <div class="advantages2__item-text">
                                Квалифицированные менеджеры
                                интернет-магазина ответят на все вопросы по ассортименту и предоставляемым
                                возможностям, а также помогут оформить заказ и проконтролируют реализацию
                                клиентских пожеланий при заказе мебели.
                            </div>
                        </div>
                        <div class="advantages2__item">
                            <div class="advantages2__item-icon">
                                <img class="advantages2__item-img" src="/images/about_images/re.svg" alt="empty">
                            </div>
                            <div class="advantages2__item-title">
                                Каждый пятый покупатель заказывает у нас<br>повторно!
                            </div>
                            <div class="advantages2__item-text">
                                И мы благодарим всех, кто воспользовался нашим уникальным предложением, заказал мебель быстро и недорого и порекомендовал
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
                                <b>Время.</b><br>
                                Примем вашу заявку в кротчайшие сроки. При необходимости
                                подберем для вас достойные варианты по заданным критериям.
                            </div>
                        </div>
                        <div class="weHelp__item">
                            <img class="weHelp__icon" src="/images/about_images/green_vector.svg" alt="empty">
                            <div class="weHelp__item-text">
                                <b>Силы.</b><br>
                                Закупим оптом или закажем на фабрике, избавив от длительных
                                обсуждений заказа с исполнителем. Курируем все этапы работы над
                                заказом.
                            </div>
                        </div>
                        <div class="weHelp__item">
                            <img class="weHelp__icon" src="/images/about_images/green_vector.svg" alt="empty">
                            <div class="weHelp__item-text">
                                <b>Деньги.</b><br>
                                Вы точно купите мебель дешевле, чем в розницу.
                            </div>
                        </div>
                    </div>
                    <h4 class="weHelp__title2">
                        На чем мы не экономим?<br>На вашем комфорте и качестве мебели!
                    </h4>
                </section>
                <footer class="footer">
                    <div class="footer__navigation-leftSide">
                    <div class="footer__navigation">
                        <p class="footer__navigation-title">
                        НАВИГАЦИЯ
                        </p>
                        <div class="footer__navigation-item">
                        <a class="footer__navigation-itemText" href="#">Кухни</a>
                        <a class="footer__navigation-itemText" href="#">Прихожие</a>
                        <a class="footer__navigation-itemText" href="#">Шкафы</a>
                        <a class="footer__navigation-itemText" href="#">Спальни</a>
                        <a class="footer__navigation-itemText" href="#">Офисная мебель</a>
                        <a class="footer__navigation-itemText" href="#">Матрасы</a>
                        <a class="footer__navigation-itemText" href="#">Гостинные</a>
                        <a class="footer__navigation-itemText" href="#">Детская</a>
                        <a class="footer__navigation-itemText" href="#">Мягкая мебель</a>
                        </div>
                        <div class="footer__navigation-item2">
                        <a class="footer__navigation-stock" href="#">Акция</a>
                        <a class="footer__navigation-newItems" href="#">Новинки</a>
                        </div>
                    </div>
                    </div>
                    <div class="footer__navigation-rightSide">
                    <div class="footer__contacts">
                        <img class="footer__contacts-logo" src="/images/LM.svg" alt="empty">
                    </div>
                    <div class="footer__contacts-adres">
                        г. Анапа, Анапское шоссе,<br>30 Ж/К Черное море
                    </div>
                    <div class="footer__contacts-contacts">
                        <img class='footer__contacts-phoneImg' src="/images/phone_in_footer.svg" alt="empty">
                        <p class="footer__contacts-phoneText">
                        8 (964) 89 99 119
                        </p>
                        <img class='footer__contacts-instagramImg' src="/images/inst.svg" alt="empty">
                        <p class="footer__contacts-instagramText">
                        INSTAGRAM
                        </p>
                        <img class='footer__contacts-mailImg' src="/images/mail.svg" alt="empty">
                        <p class="footer__contacts-mailText">
                        mebel_loft_anapa@mail.ru
                        </p>
                        </div>
                    </div>
                </footer>
    </div>
</body>
</html>