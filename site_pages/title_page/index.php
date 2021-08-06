<?php
  session_start();
  $cart = $_SESSION['cart'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Мебель Loft</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="owl.carousel.min.css">
  <link rel="stylesheet" href="owl.theme.default.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="/site_pages/basket_page/myCart.js"></script>
  <script src="owl.carousel.min.js"></script>
</head>

<body>
  <div class="container">
    <header class="header">
        <div class="header__sections">
          <a class="header__sections-main" href="index.php">Главная</a>
          <a class="header__sections-about" href="/site_pages/about_page/index.php">О нас</a>
          <a class="header__sections-contacts" href="/site_pages/contacts_page/index.php">Контакты</a>
          <svg class="header__phone-icon" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.12334 1H3.42857C2.08731 1 1 2.08731 1 3.42857V5.85714C1 12.5635 6.43654 18 13.1429 18H15.5714C16.9127 18 18 16.9127 18 15.5714V13.8933C18 13.4334 17.7401 13.0129 17.3288 12.8072L14.3951 11.3404C13.7342 11.01 12.9338 11.3415 12.7001 12.0425L12.3385 13.1272C12.1043 13.8299 11.3836 14.2481 10.6573 14.1029C7.75057 13.5215 5.47846 11.2494 4.89711 8.34268C4.75186 7.61643 5.17013 6.89567 5.87276 6.66146L7.21895 6.21273C7.8209 6.01208 8.16688 5.38181 8.01299 4.76625L7.30137 1.91978C7.16623 1.37922 6.68054 1 6.12334 1Z" stroke="white"/>
          </svg>
          <a class="header__sections-phone" href="tel:89648999119">8 (964) 89 99 119</a>
          <svg  class="header__delivery-icon" width="29" height="18" viewBox="0 0 29 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.85418 14.9584H5.43751C5.10401 14.9584 4.83334 14.6877 4.83334 14.3542C4.83334 14.0207 5.10401 13.75 5.43751 13.75H7.85418C8.18768 13.75 8.45834 14.0207 8.45834 14.3542C8.45834 14.6877 8.18768 14.9584 7.85418 14.9584Z" fill="white"/>
            <path d="M27.4896 14.9584H25.9792C25.6457 14.9584 25.375 14.6877 25.375 14.3542C25.375 14.0207 25.6457 13.75 25.9792 13.75H26.9881L27.8026 9.40971C27.7917 7.18879 25.8946 5.29171 23.5625 5.29171H19.5956L17.6731 13.75H21.1459C21.4794 13.75 21.75 14.0207 21.75 14.3542C21.75 14.6877 21.4794 14.9584 21.1459 14.9584H16.9167C16.733 14.9584 16.559 14.875 16.4442 14.7312C16.3294 14.5886 16.2859 14.4001 16.327 14.2213L18.5238 4.55462C18.5866 4.27792 18.8307 4.08337 19.1134 4.08337H23.5625C26.5604 4.08337 29 6.523 29 9.52087L28.0829 14.4654C28.0297 14.7517 27.7808 14.9584 27.4896 14.9584Z" fill="white"/>
            <path d="M23.5625 17.375C21.8974 17.375 20.5417 16.0205 20.5417 14.3542C20.5417 12.6879 21.8974 11.3334 23.5625 11.3334C25.2276 11.3334 26.5833 12.6879 26.5833 14.3542C26.5833 16.0205 25.2276 17.375 23.5625 17.375ZM23.5625 12.5417C22.5632 12.5417 21.75 13.3549 21.75 14.3542C21.75 15.3535 22.5632 16.1667 23.5625 16.1667C24.5618 16.1667 25.375 15.3535 25.375 14.3542C25.375 13.3549 24.5618 12.5417 23.5625 12.5417Z" fill="white"/>
            <path d="M10.2708 17.375C8.60576 17.375 7.25001 16.0205 7.25001 14.3542C7.25001 12.6879 8.60576 11.3334 10.2708 11.3334C11.9359 11.3334 13.2917 12.6879 13.2917 14.3542C13.2917 16.0205 11.9359 17.375 10.2708 17.375ZM10.2708 12.5417C9.27155 12.5417 8.45834 13.3549 8.45834 14.3542C8.45834 15.3535 9.27155 16.1667 10.2708 16.1667C11.2701 16.1667 12.0833 15.3535 12.0833 14.3542C12.0833 13.3549 11.2701 12.5417 10.2708 12.5417Z" fill="white"/>
            <path d="M7.85417 4.08337H3.02084C2.68734 4.08337 2.41667 3.81271 2.41667 3.47921C2.41667 3.14571 2.68734 2.87504 3.02084 2.87504H7.85417C8.18767 2.87504 8.45834 3.14571 8.45834 3.47921C8.45834 3.81271 8.18767 4.08337 7.85417 4.08337Z" fill="white"/>
            <path d="M7.85418 7.70837H1.81251C1.47901 7.70837 1.20834 7.43771 1.20834 7.10421C1.20834 6.77071 1.47901 6.50004 1.81251 6.50004H7.85418C8.18768 6.50004 8.45834 6.77071 8.45834 7.10421C8.45834 7.43771 8.18768 7.70837 7.85418 7.70837Z" fill="white"/>
            <path d="M7.85417 11.3334H0.604167C0.270667 11.3334 0 11.0627 0 10.7292C0 10.3957 0.270667 10.125 0.604167 10.125H7.85417C8.18767 10.125 8.45833 10.3957 8.45833 10.7292C8.45833 11.0627 8.18767 11.3334 7.85417 11.3334Z" fill="white"/>
            <path d="M16.9167 14.9584L12.6875 14.9584C12.354 14.9584 12.0833 14.6877 12.0833 14.3542C12.0833 14.0207 12.354 13.75 12.6875 13.75H16.4346L19.1799 1.66671H5.43751C5.10401 1.66671 4.83334 1.39604 4.83334 1.06254C4.83334 0.729041 5.10401 0.458374 5.43751 0.458374H19.9375C20.1212 0.458374 20.2952 0.541749 20.41 0.685541C20.5248 0.828124 20.5683 1.01662 20.5272 1.19546L17.5063 14.4871C17.4435 14.7638 17.1982 14.9584 16.9167 14.9584Z" fill="white"/>
          </svg>
          <a class="header__sections-delivery" href="#">Доставка</a>
        </div>
        <div class="header__searchLine">
          <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span class="hamburger__topline"></span>
              <span class="hamburger__midline"></span>
              <span class="hamburger__botline hamburge__topline"></span>
            </label>
            <div class="menu__box">
              <div class="menu__closeBtn"></div>
              <div class="menu__h"><strong class="menu__menu">Меню</strong></div>
              <div class="menu__item"><strong class="menu__home"><a href="/site_pages/title_page/index.php">Главная</a></strong></div>
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
          <a class="header__logo-link" href="/site_pages/title_page/index.php">
            <img class="header__logo" src="/images/LOGO.svg" alt="logo">
          </a>
          <input class="header__searchLine-input" name="search" id="search" placeholder="Поиск">
          <img class="header__searchLine-wishlist" src="/images/wishlist-icon.svg" alt="search">
          <a class="header__searchLine-bag" href="/site_pages/basket_page/index.php" alt="search"></a>
          <img class="header__searchLine-alarm1" src="/images/оповещение.svg">
          <?php
            if(count((is_countable($cart)?$cart:[])) > 0){
              echo '
              <img class="header__searchLine-alarm2" src="/images/оповещение.svg">
              ';
            }
            if ( !isset($_SESSION['logged_user']) ) {
              echo '<a class="header__searchLine-profile" href="/site_pages/autorisation/login.php"></a>';
            } else {
              echo '<a class="header__searchLine-profile" href="/site_pages/account_page/index.php"></a>';
            }
          ?>
        </div>
        <div class="header__menu owl-carousel" id="slider">
          <div class="header__menu-cell kitchen slide">
              <img class="header__menu-kitchen-icon" src="/images/kitchen-icon.svg" alt="search">
              <h2 class="header__menu-kitchen-text">Кухни</h2>
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
              <img class="header__menu-bedroom-icon" src="/images/bedroom-icon.svg" alt="search">
              <h2 class="header__menu-bedroom-text">Спальни</h2>
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
              <img class="header__menu-livingroom-icon" src="/images/livingroom-icon.svg" alt="search">
              <h2 class="header__menu-livingroom-text">Гостинные</h2>
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
              <img class="header__menu-closet-icon" src="/images/closet-icon.svg" alt="search">
              <h2 class="header__menu-closet-text">Прихожие</h2>
              <div class="dropdown__closet dropdown">
                <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
              </div>
          </div>
          <div class="header__menu-cell office slide">
              <img class="header__menu-office-icon" src="/images/office-icon.svg" alt="search">
              <h2 class="header__menu-office-text">Офисная мебель</h2>
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
              <img class="header__menu-childrensroom-icon" src="/images/childrensroom-icon.svg" alt="search">
              <h2 class="header__menu-childrensroom-text">Детская</h2>
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
        <img class="header__menu-etc-icon" src="/images/etc.svg" alt="search">
    </header>
    <section class="slider">
      <div class="slider__box">
        <div class="item">
          <img class="slider__box-img" src="/images/slide_1.png">
          <div class="slider__text-content_1">
            <h2 class="slider__title">
              loft<br>мебель
            </h2>
            <h6 class="slider__text">
              Современная и удобная мебель в Анапе
            </h6>
            <button class="slider__button">
              <div class="slider__button-text">
                смотреть каталог
              </div>
            </button>
          </div>
        </div>
        <div class="item">
          <img class="slider__box-img" src="/images/slide_2.png">
          <div class="slider__text-content_2">
            <h2 class="slider__title">
              loft<br>мебель
            </h2>
            <h6 class="slider__text">
              Современная и удобная мебель в Анапе
            </h6>
            <button class="slider__button">
              <div class="slider__button-text">
                смотреть каталог
              </div>
            </button>
          </div>
        </div>
        <div class="item">
          <img class="slider__box-img" src="/images/slide_3.png">
          <div class="slider__text-content_3">
            <h2 class="slider__title">
              loft<br>мебель
            </h2>
            <h6 class="slider__text">
              Современная и удобная мебель в Анапе
            </h6>
            <button class="slider__button">
              <div class="slider__button-text">
                смотреть каталог
              </div>
            </button>
          </div>
        </div>
        <a class="previous" onclick="previousSlide()">&#10094;</a>
        <a class="next" onclick="nextSlide()">&#10095;</a>
      </div>
    </section>
    <section class="bestsellers">
      <div class="bestsellers__modalWindow-box">
        Товар был успешно добавлен в корзину
      </div>
      <div class="bestsellers__head-text">
        Хиты продаж
      </div>
      <div class="bestsellers__discount">
        <img class="bestsellers__discount-logo" src="/images/title_images/Vector.svg" alt="empty">
        <div class="bestsellers__discount-num">-25%</div>
      </div>
      <div class="bestsellers__box">
        <?php
          $dbUser = 'root';
          $dbName = 'мебель loft';
          $dbPass = '';
          $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
          $query = 'set names utf8';
          $mysqli->query($query);
          $query = 'select * from products';
          $results = $mysqli->query($query);

          while($row = $results->fetch_assoc()){
            echo '
            <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket'.$row["id"].'">
            <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
            <img class="bestsellers__item-img" src="'.$row["image"].'" alt="empty" data-toggle-id="hidde__toBasket'.$row["id"].'">
            <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket'.$row["id"].'">
              '.$row["name"].'
            </div>
            <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket'.$row["id"].'">
            '.$row["category"].'
            </div>
            <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket'.$row["id"].'">
            '.$row["price"].'₽
            </div>
            <div class="toBasket" id="hidde__toBasket'.$row["id"].'" hidden>
              <div class="toBasket__sizesLable">Размеры</div>
                <div class="toBasket__sizes">
                  <div class="toBasket__width-text">ШИРИНА</div>
                  <div class="toBasket__depth-text">ГЛУБИНА</div>
                  <div class="toBasket__height-text">ВЫСОТА</div>
                </div>
                <div class="toBasket__x">
                  <img class="toBasket__x-svg1" src="/images/title_images/×.svg" alt="empty">
                  <img class="toBasket__x-svg2" src="/images/title_images/×.svg" alt="empty">
                </div>
                <div class="toBasket__num">
                  <div class="toBasket__width-num">'.$row["width"].' СМ</div>
                  <div class="toBasket__depth-num">'.$row["depth"].' СМ</div>
                  <div class="toBasket__height-num">'.$row["height"].' СМ</div>
                </div>
                <button class="toBascet__add" data-id="'.$row["id"].'" onClick="addToCart('.$row["id"].')">Добавить в корзину</button>
            </div>
          </div>
            ';
          };
        ?>
      </div>
    </section>
    <div id="cart_content"></div>
    <footer class="footer footer_bottom">
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
  <script src="script.js"></script>
  <script src="../scripts/menu_for_960px.js"></script>
</body>
</html>