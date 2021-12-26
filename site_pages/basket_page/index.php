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
  <link rel="stylesheet" href="../scripts/owl carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="/reusable_css/owl_carousel.css">
  <link rel="stylesheet" href="/reusable_css/footer.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="../scripts/cart/myCart.js"></script>
  <script src="../scripts/owl carousel/owl.carousel.min.js"></script>
</head>

<body onLoad="showMyCart()">
  <div class="wrapper">
    <div class="wrap_1">
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
                <div class="menu__item menu__livingroom"><a href="/site_pages/catalog_page/index.php">Гостинные</a>
                </div>
                <div class="menu__item menu__hallways"><a href="/site_pages/catalog_page/index.php">Прихожие</a></div>
                <div class="menu__item menu__office"><a href="/site_pages/catalog_page/index.php">Офисная мебель</a>
                </div>
                <div class="menu__item menu__childrensroom"><a href="/site_pages/catalog_page/index.php">Детская</a>
                </div>
                <div class="menu__item menu__stock"><a href="/site_pages/catalog_page/index.php">Акция</a></div>
                <div class="menu__item menu__novelty"><a href="/site_pages/catalog_page/index.php">Новинки</a></div>
                <div class="menu__item menu__mattress"><a href="/site_pages/catalog_page/index.php">Матрасы</a></div>
                <div class="menu__item menu__softFurniture"><a href="/site_pages/catalog_page/index.php">Мягкая
                    мебель</a>
                </div>
                <div class="menu__item menu__cupboard"><a href="/site_pages/catalog_page/index.php">Шкафы</a></div>
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
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Модульные кухни</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Барная зона</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Кухонные уголки</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Обеденная зона</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Столешницы</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Стеновые панели</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Мойки, сушилки,<br>смесители для кухни</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Дополнительная<br>фурнитура</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Бытовыя техника</a>
                </div>
              </div>
            </div>
            <div class="header__menu-cell bedroom slide">
              <div class="header__menu-bedroom-icon carousel_icon"></div>
              <h2 class="header__menu-bedroom-text header__menu-text">Спальни</h2>
              <div class="dropdown__bedroom dropdown">
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit!</a>
                </div>
              </div>
            </div>
            <div class="header__menu-cell livingroom slide">
              <div class="header__menu-livingroom-icon carousel_icon"></div>
              <h2 class="header__menu-livingroom-text header__menu-text">Гостинные</h2>
              <div class="dropdown__livingroom dropdown">
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
              </div>
            </div>
            <div class="header__menu-cell closet slide">
              <div class="header__menu-closet-icon carousel_icon"></div>
              <h2 class="header__menu-closet-text header__menu-text">Прихожие</h2>
              <div class="dropdown__closet dropdown">
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
              </div>
            </div>
            <div class="header__menu-cell office slide">
              <div class="header__menu-office-icon carousel_icon"></div>
              <h2 class="header__menu-office-text header__menu-text">Офисная мебель</h2>
              <div class="dropdown__office dropdown">
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit!</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit!</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit!</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
              </div>
            </div>
            <div class="header__menu-cell childrensroom slide">
              <div class="header__menu-childrensroom-icon carousel_icon"></div>
              <h2 class="header__menu-childrensroom-text header__menu-text">Детская</h2>
              <div class="dropdown__childrensroom dropdown">
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                </div>
              </div>
            </div>
            <div class="header__menu-cell menu-stock slide">
              <h6 class="header__menu-stock-text">Акция</h6>
              <div class="dropdown__menu-stock dropdown">
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Новинки</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Шкафы</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Матрасы</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">Мягкая мебель</a>
                </div>
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
    </div>
    <div class="wrap_2">
      <div class="container">
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
                <div class="bestsellers__item-imgBox">
                  <img class="bestsellers__item-img" src="'.$row["image"].'" alt="empty" data-toggle-id="hidde__toBasket'.$row["id"].'">
                </div>
                <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket'.$row["id"].'">
                  '.$row["name"].'
                </div>
                <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket'.$row["id"].'">
                '.$row["category"].'
                </div>
                ';
                if($row["discount"]> 0) {
                  echo '
                  <div class="bestsellers__discount">
                  <img class="bestsellers__discount-logo" src="/images/title_page/Vector.svg" alt="empty">
                  <div class="bestsellers__discount-num">-'.$row["discount"].'%</div>
                  </div>
                  ';
                }
                echo '
                <div class="bestsellers__item-priceBox">
                  <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket'.$row["id"].'">
                  '.$row["price"].'₽
                  </div>
                  <div class="bestsellers__fullPrice"></div>
                </div>
                <div class="toBasket" id="hidde__toBasket'.$row["id"].'" hidden>
                  <div class="toBasket__sizesLable">Размеры</div>
                    <div class="toBasket__sizes">
                      <div class="toBasket__widthBox">
                        <div class="toBasket__width-text">ШИРИНА</div>
                        <div class="toBasket__width-num">'.$row["width"].' СМ</div>
                      </div>
                      <img class="toBasket__x-svg1" src="/images/title_page/×.svg" alt="empty">
                      <div class="toBasket__depthBox">
                        <div class="toBasket__depth-text">ГЛУБИНА</div>
                        <div class="toBasket__depth-num">'.$row["depth"].' СМ</div>
                      </div>
                      <img class="toBasket__x-svg2" src="/images/title_page/×.svg" alt="empty">
                      <div class="toBasket__heightBox">
                        <div class="toBasket__height-text">ВЫСОТА</div>
                        <div class="toBasket__height-num">'.$row["height"].' СМ</div>
                      </div>
                    </div>
                    <button class="toBascet__add" data-id="'.$row["id"].'" onClick="addToCart('.$row["id"].'), loadToCart()">Добавить в корзину</button>
                </div>
              </div>
                ';
              };
            ?>
        </div>
      </div>
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
  </div>
  <script src="../scripts/menu_for_1024px.js"></script>
  <script src="script.js"></script>
  <script src="../scripts/owl carousel/owl_carousel_init.js"></script>
</body>

</html>