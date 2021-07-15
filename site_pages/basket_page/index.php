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
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="myCart.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body onLoad="showMyCart()">
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
              if ( !isset($_SESSION['logged_user']) ) {
                echo '<a class="header__searchLine-profile" href="/site_pages/autorisation/login.php"></a>';
              } else {
                echo '<a class="header__searchLine-profile" href="/site_pages/account_page/index.php"></a>';
              }
           ?>
          </div>
          <div class="header__menu">
          <div class="header__menu-cell kitchen">
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
          <div class="header__menu-cell bedroom">
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
          <div class="header__menu-cell livingroom">
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
          <div class="header__menu-cell closet">
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
          <div class="header__menu-cell office">
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
          <div class="header__menu-cell childrensroom">
            <img class="header__menu-childrensroom-icon" src="/images/childrensroom-icon.svg" alt="search">
            <h2 class="header__menu-childrensroom-text">Детская</h2>
            <div class="dropdown__childrensroom dropdown">
              <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
              <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
              <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>

            </div>
          </div>
          <div class="header__menu-cell menu-stock">
            <h6 class="header__menu-stock-text">Акция</h6>
            <div class="dropdown__menu-stock dropdown">
              <a href="/site_pages/catalog_page/index.php">Новинки</a>
              <a href="/site_pages/catalog_page/index.php">Шкафы</a>
              <a href="/site_pages/catalog_page/index.php">Матрасы</a>
              <a href="/site_pages/catalog_page/index.php">Мягкая мебель</a>
            </div>
          </div>
          <img class="header__menu-etc-icon" src="/images/etc.svg" alt="search">
        </div>
          </header>
      <section class="navigation">
        <p class="navigation__start">Главная</p>
        <p class="navigation__simbol">/</p>
        <p class="navigation__end">Корзина</p>
      </section>
      <div class="bestsellers__modalWindow-box">
        Товар был успешно добавлен в корзину
      </div>
      <div class="in-checkz" id="in-check">
        <div class="shopping__list">
          <div class="shoping__item">
            <img class="shoping__img">
            <div class="item_title"></div>
            <div class="item_price"></div>
            <div class="item_textQuantity">Количество:</div>
            <div class="item_quantity"></div>
            <div class="item_width"></div>
            <div class="item_depth"></div>
            <div class="item_height"></div>
            <button id="delete" class="item_delete"></button>
          </div>
        </div>
        <div class="total"></div>
      </div>
    <div class="totalSum"></div>
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
</body>
</html>