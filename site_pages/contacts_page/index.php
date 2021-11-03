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
    <link rel="shortcut icon" href="/images/favicon_2.ico" type="images/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/reusable_css/header.css">
    <link rel="stylesheet" href="/reusable_css/hamburger_menu.css">
    <link rel="stylesheet" href="../scripts/owl carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/reusable_css/owl_carousel.css">
    <link rel="stylesheet" href="/reusable_css/footer.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../scripts/owl carousel/owl.carousel.min.js"></script>
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
                  <div class="menu__item menu__contacts"><a href="/site_pages/contacts_page/index.php">Контакты</a></div>
                  <div class="menu__h menu__category"><strong>Категории</strong></div>
                  <div class="menu__item menu__kitchen"><a href="/site_pages/catalog_page/index.php">Кухни</a></div>
                  <div class="menu__item menu__bedroom"><a href="/site_pages/catalog_page/index.php">Спальни</a></div>
                  <div class="menu__item menu__livingroom"><a href="/site_pages/catalog_page/index.php">Гостинные</a></div>
                  <div class="menu__item menu__hallways"><a href="/site_pages/catalog_page/index.php">Прихожие</a></div>
                  <div class="menu__item menu__office"><a href="/site_pages/catalog_page/index.php">Офисная мебель</a></div>
                  <div class="menu__item menu__childrensroom"><a href="/site_pages/catalog_page/index.php">Детская</a></div>
                  <div class="menu__item menu__stock"><a href="/site_pages/catalog_page/index.php">Акция</a></div>
                  <div class="menu__item menu__novelty"><a href="/site_pages/catalog_page/index.php">Новинки</a></div>
                  <div class="menu__item menu__mattress"><a href="/site_pages/catalog_page/index.php">Матрасы</a></div>
                  <div class="menu__item menu__softFurniture"><a href="/site_pages/catalog_page/index.php">Мягкая мебель</a></div>
                  <div class="menu__item menu__cupboard"><a href="/site_pages/catalog_page/index.php">Шкафы</a></div>
              </div>
            </div>
            <a href="/index.php" class=""><img class="header__logo" src="/images/title_page/LOGO.svg" alt="logo"></a>
            <a class="header__sections-main" href="/index.php">Главная</a>
            <a class="header__sections-about" href="/site_pages/about_page/index.php">О нас</a>
            <a class="header__sections-contacts" href="index.php">Контакты</a>
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
          <div class="header__menu owl-carousel" id="slider">
            <div class="header__menu-cell kitchen slide">
                <div class="header__menu-kitchen-icon carousel_icon"></div>
                <h2 class="header__menu-kitchen-text header__menu-text">Кухни</h2>
                <div class="dropdown__kitchen dropdown">
                  <a href="/site_pages/catalog_page/index.php">Модульные кухни</a>
                  <a href="/site_pages/catalog_page/index.php">Барная зона</a>
                  <a href="/site_pages/catalog_page/index.php">Кухонные уголки</a>
                  <a href="/site_pages/catalog_page/index.php">Обеденная зона</a>
                  <a href="/site_pages/catalog_page/index.php">Столешницы</a>
                  <a href="/site_pages/catalog_page/index.php">Стеновые панели</a>
                  <a href="/site_pages/catalog_page/index.php">Мойки, сушилки,<br>смесители для кухни</a>
                  <a href="/site_pages/catalog_page/index.php">Дополнительная<br>фурнитура</a>
                  <a href="/site_pages/catalog_page/index.php">Бытовыя техника</a>
                </div>
            </div>
            <div class="header__menu-cell bedroom slide">
                <div class="header__menu-bedroom-icon carousel_icon"></div>
                <h2 class="header__menu-bedroom-text header__menu-text">Спальни</h2>
                <div class="dropdown__bedroom dropdown">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur adipisicing elit!</a>
                </div>
            </div>
            <div class="header__menu-cell livingroom slide">
                <div class="header__menu-livingroom-icon carousel_icon"></div>
                <h2 class="header__menu-livingroom-text header__menu-text">Гостинные</h2>
                <div class="dropdown__livingroom dropdown">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
            </div>
            <div class="header__menu-cell closet slide">
                <div class="header__menu-closet-icon carousel_icon"></div>
                <h2 class="header__menu-closet-text header__menu-text">Прихожие</h2>
                <div class="dropdown__closet dropdown">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
            </div>
            <div class="header__menu-cell office slide">
                <div class="header__menu-office-icon carousel_icon"></div>
                <h2 class="header__menu-office-text header__menu-text">Офисная мебель</h2>
                <div class="dropdown__office dropdown">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur adipisicing elit!</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur adipisicing elit!</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur adipisicing elit!</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
            </div>
            <div class="header__menu-cell childrensroom slide">
                <div class="header__menu-childrensroom-icon carousel_icon"></div>
                <h2 class="header__menu-childrensroom-text header__menu-text">Детская</h2>
                <div class="dropdown__childrensroom dropdown">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
            </div>
            <div class="header__menu-cell menu-stock slide">
              <h6 class="header__menu-stock-text">Акция</h6>
                <div class="dropdown__menu-stock dropdown">
                  <a href="/site_pages/catalog_page/index.php">Новинки</a>
                  <a href="/site_pages/catalog_page/index.php">Шкафы</a>
                  <a href="/site_pages/catalog_page/index.php">Матрасы</a>
                  <a href="/site_pages/catalog_page/index.php">Мягкая мебель</a>
                </div>
            </div>
          </div>
          <img class="header__menu-etc-icon" src="/images/title_page/etc.svg" alt="search">
          </header>
        <section class="navigation">
          <p class="navigation__start">Главная</p>
          <p class="navigation__simbol">/</p>
          <p class="navigation__end">Контакты</p>
        </section>
        <section class="contacts">
          <div class="contacts__leftSideArea">
            <div class="contacts__title">
              Свяжитесь с нами
            </div>
            <form class="contacts__form" action="#" method="POST">
              <div class="contacts__form-nameMailLabels">
                <div class="contacts__form-nameLable">
                  Ваше имя
                </div>
                <div class="contacts__form-emailLable">
                  Ваш e-mail
                </div>
              </div>
                <input type="text" class="contacts__form-nameInput">
                <input type="text" class="contacts__form-emailInput">
                <div class="contacts__form-messageLable">
                  Сообщение
                </div>
                <textarea type="text" class="contacts__form-messageInput"></textarea>
                <div class="contacts__form-fileAndSubmit">
                  <div class="contacts__form-fileButton">
                    <input id="file" class="contacts__form-fileButtonInput" type="file" name="uploadFile"/>
                    <label class="contacts__form-fileButtonLable" for="file">
                        <i class="contacts__form-fileButtonIcon"></i>
                        <span class="contacts__form-fileButtonText">Прикрепить файл</span>
                    </label>
                </div>
                  <input class="contacts__form-submit" type="submit" value="Отправить">
                </div>
            </form>
          </div>
          <div class="contacts__rightSideArea">
            <div class="contacts__phoneAndMail">
              <img class="contacts__phone--img" src="/images/title_page/phone_in_footer.svg" alt="empty">
              <a class="contacts__phone" href="tel:89648999119">8 (964) 89 99 119</a>
              <img class="contacts__mail--img" src="/images/title_page/mail.svg" alt="empty">
              <a class="contacts__mail">mebel_loft_anapa@mail.ru</a>
            </div>
            <div class="contacts__instagram">
              <img class="contacts__instagram--img" src="/images/title_page/inst.svg" alt="empty">
              <a class="contacts__instagramText" href="#">INSTAGRAM</a>
            </div>
            <div class="contacts__address">
              Адрес: г. Анапа, Анапское шоссе, 30 Ж/К Черное море
            </div>
          </div>
        </section>
        <section class="map">
          <div class="map__title">Адрес нашей компании</div>
          <iframe class="map__map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A28aaf99b6c2226fc98b2c93140ff49f41ddb264d5ea9c6ec609ae974159dd938&amp;source=constructor" width="1140" height="400" frameborder="0" loading="lazy"></iframe>
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
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Офисная мебель</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Матрасы</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Гостинные</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Детская</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">Мягкая мебель</a>
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
    <script src="script.js"></script>
    <script src="../scripts/owl carousel/owl_carousel_init.js"></script>
  </body>
</html>