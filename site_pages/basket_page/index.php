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
            <img class="header__menu-kitchen-icon" src="/images/kitchen-icon.svg" alt="search">
            <h2 class="header__menu-kitchen-text">Кухни</h2>
            <img class="header__menu-bedroom-icon" src="/images/bedroom-icon.svg" alt="search">
            <h2 class="header__menu-bedroom-text">Спальни</h2>
            <img class="header__menu-livingroom-icon" src="/images/livingroom-icon.svg" alt="search">
            <h2 class="header__menu-livingroom-text">Гостинные</h2>
            <img class="header__menu-closet-icon" src="/images/closet-icon.svg" alt="search">
            <h2 class="header__menu-closet-text">Прихожие</h2>
            <img class="header__menu-office-icon" src="/images/office-icon.svg" alt="search">
            <h2 class="header__menu-office-text">Офисная мебель</h2>
            <img class="header__menu-childrensroom-icon" src="/images/childrensroom-icon.svg" alt="search">
            <h2 class="header__menu-childrensroom-text">Детская</h2>
            <h6 class="header__menu-stock-text">Акция</h6>
            <img class="header__menu-etc-icon" src="/images/etc.svg" alt="search">
          </div>
      </header>
      <section class="navigation">
        <p class="navigation__start">Главная</p>
        <p class="navigation__simbol">/</p>
        <p class="navigation__end">Корзина</p>
      </section>
      <div class="in-checkz" id="in-check">
        <div class="shopping__list">
          <div class="shoping__item">
            <img class="shoping__img" src="itemImg">
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
    <footer class="footer footer-bottom">
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