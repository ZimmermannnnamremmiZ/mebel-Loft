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
  <link rel="stylesheet" href="../scripts/owl carousel/owl.carousel.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="myCart.js"></script>
  <script src="../scripts/owl carousel/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body onLoad="showMyCart()">
    <div class="container">
      <div class="wrap_1">
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
              <a href="/site_pages/title_page/index.php" class=""><img class="header__logo" src="/images/title_page/LOGO.svg" alt="logo"></a>
              <a class="header__sections-main" href="/site_pages/title_page/index.php">Главная</a>
              <a class="header__sections-about" href="/site_pages/about_page/index.php">О нас</a>
              <a class="header__sections-contacts" href="/site_pages/contacts_page/index.php">Контакты</a>
              <input class="header__searchLine-input" name="search" id="search" placeholder="Поиск">
              <img class="header__phone-icon" src="/images/title_page/phone.svg">
              <a class="header__sections-phone" href="tel:89648999119">8 (964) 89 99 119</a>
              <img class="header__delivery-icon" src="/images/title_page/delivery-icon-black.svg">
              <a class="header__sections-delivery" href="#">Доставка</a>
              <img class="header__searchLine-wishlist" src="/images/title_page/wishlist-icon.svg" alt="search">
              <a class="header__searchLine-bag" href="/site_pages/basket_page/index.php" alt="search"></a>
              <?php
                $cart = $_SESSION['cart'];
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
                <div class="header__menu-bedroom-icon carousel_icon"></div>
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
                <div class="header__menu-livingroom-icon carousel_icon"></div>
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
                <div class="header__menu-closet-icon carousel_icon"></div>
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
                <div class="header__menu-office-icon carousel_icon"></div>
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
                <div class="header__menu-childrensroom-icon carousel_icon"></div>
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
        <img class="header__menu-etc-icon" src="/images/title_page/etc.svg" alt="search">
            </header>
        <section class="navigation">
          <p class="navigation__start">Главная</p>
          <p class="navigation__simbol">/</p>
          <p class="navigation__end">Корзина</p>
        </section>
        <div class="bestsellers__modalWindow-box">
          Товар был успешно добавлен в корзину
        </div>

        <div class="in-check-box" id="in-check-box">
          <div class="total"></div>
        </div>

      <div class="totalSum"></div>
    </div>
    <div class="wrap_2">
      <div class="random4items__header">
        Вам может понравиться
      </div>
      <div class="random4items__box">
        <?php
              $dbUser = 'root';
              $dbName = 'мебель loft';
              $dbPass = '';
              $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
              $query = 'set names utf8';
              $mysqli->query($query);
              $query = 'SELECT * FROM products order by RAND() LIMIT 4';
              $results = $mysqli->query($query);

              while($row = $results->fetch_assoc()){
                echo '
                <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket'.$row["id"].'">
                <img class="bestsellers__item-loverIcon" src="/images/title_page/список желаемого.svg" alt="empty">
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
                      <img class="toBasket__x-svg1" src="/images/title_page/×.svg" alt="empty">
                      <img class="toBasket__x-svg2" src="/images/title_page/×.svg" alt="empty">
                    </div>
                    <div class="toBasket__num">
                      <div class="toBasket__width-num">'.$row["width"].' СМ</div>
                      <div class="toBasket__depth-num">'.$row["depth"].' СМ</div>
                      <div class="toBasket__height-num">'.$row["height"].' СМ</div>
                    </div>
                    <button class="toBascet__add" data-id="'.$row["id"].'" onClick="addToCart('.$row["id"].'), loadToCart()">Добавить в корзину</button>
                </div>
              </div>
                ';
              };
            ?>
      </div>
      <footer class="footer footer-bottom">
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
              <img class='footer__contacts-phoneImg' src="/images/title_page/phone_in_footer.svg" alt="empty">
              <p class="footer__contacts-phoneText">
                8 (964) 89 99 119
              </p>
              <img class='footer__contacts-instagramImg' src="/images/title_page/inst.svg" alt="empty">
              <p class="footer__contacts-instagramText">
                INSTAGRAM
              </p>
              <img class='footer__contacts-mailImg' src="/images/title_page/mail.svg" alt="empty">
              <p class="footer__contacts-mailText">
                mebel_loft_anapa@mail.ru
              </p>
            </div>
          </div>
        </footer>
      </div>
  </div>
  <script src="script.js"></script>
  <script src="../scripts/owl carousel/owl_carousel_init.js"></script>
  <script src="../scripts//menu_for_960px.js"></script>
</body>
</html>