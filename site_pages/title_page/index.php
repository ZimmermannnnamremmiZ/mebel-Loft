<?php
  session_start();
  $cart = $_SESSION['cart'];
  $id = $_POST['id'];
  if(count($cart) > 0){
    echo '
    <div class="container">
    <img class="header__searchLine-alarm2" src="/images/оповещение.svg">
    </div>
    ';
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="/site_pages/basket_page/myCart.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <header class="header">
      <div class="container">
        <div class="header__sections">
          <a class="header__sections-main" href="index.php">Главная</a>
          <a class="header__sections-about" href="/site_pages/about_page/index.html">О нас</a>
          <a class="header__sections-contacts" href="/site_pages/contacts_page/index.html">Контакты</a>
          <img class="header__phone-icon" src="/images/title_images/phone.svg">
          <a class="header__sections-phone" href="tel:89648999119">8 (964) 89 99 119</a>
          <img class="header__searchLine-alarm1" src="/images/оповещение.svg">
          <img class="header__delivery-icon" src="/images/title_images/delivery-icon.svg">
          <a class="header__sections-delivery" href="#">Доставка</a>
        </div>
        <div class="header__searchLine">
          <img class="header__logo" src="/images/LOGO.svg" alt="logo">
          <input class="header__searchLine-input" name="search" id="search" placeholder="Поиск">
          <img class="header__searchLine-wishlist" src="/images/wishlist-icon.svg" alt="search">
          <a class="header__searchLine-bag" href="/site_pages/basket_page/index.php" alt="search"></a>
          <img class="header__searchLine-profile" src="/images/profile-icon.svg" alt="search">
        </div>
        <div class="header__menu">
          <div class="header__menu-cell kitchen">
            <img class="header__menu-kitchen-icon" src="/images/kitchen-icon.svg" alt="search">
            <h2 class="header__menu-kitchen-text">Кухни</h2>
            <div class="dropdown__kitchen dropdown">
              <a href="#">Модульные кухни</a>
              <a href="#">Барная зона</a>
              <a href="#">Кухонные уголки</a>
              <a href="#">Обеденная зона</a>
              <a href="#">Столешницы</a>
              <a href="#">Стеновые панели</a>
              <a href="#">Мойки, сушилки,<br>смесители для кухни</a>
              <a href="#">Дополнительная<br>фурнитура</a>
              <a href="#">Бытовыя техника</a>
            </div>
          </div>
          <div class="header__menu-cell bedroom">
            <img class="header__menu-bedroom-icon" src="/images/bedroom-icon.svg" alt="search">
            <h2 class="header__menu-bedroom-text">Спальни</h2>
            <div class="dropdown__bedroom dropdown">
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor, sit amet consectetur</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit!</a>
            </div>
          </div>
          <div class="header__menu-cell livingroom">
            <img class="header__menu-livingroom-icon" src="/images/livingroom-icon.svg" alt="search">
            <h2 class="header__menu-livingroom-text">Гостинные</h2>
            <div class="dropdown__livingroom dropdown">
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
            </div>
          </div>
          <div class="header__menu-cell closet">
            <img class="header__menu-closet-icon" src="/images/closet-icon.svg" alt="search">
            <h2 class="header__menu-closet-text">Прихожие</h2>
            <div class="dropdown__closet dropdown">
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
            </div>
          </div>
          <div class="header__menu-cell office">
            <img class="header__menu-office-icon" src="/images/office-icon.svg" alt="search">
            <h2 class="header__menu-office-text">Офисная мебель</h2>
            <div class="dropdown__office dropdown">
              <a href="#">Lorem ipsum dolor, sit amet consectetur</a>
              <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit!</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit!</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit!</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
            </div>
          </div>
          <div class="header__menu-cell childrensroom">
            <img class="header__menu-childrensroom-icon" src="/images/childrensroom-icon.svg" alt="search">
            <h2 class="header__menu-childrensroom-text">Детская</h2>
            <div class="dropdown__childrensroom dropdown">
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>
              <a href="#">Lorem ipsum dolor</a>

            </div>
          </div>
          <div class="header__menu-cell menu-stock">
            <h6 class="header__menu-stock-text">Акция</h6>
            <div class="dropdown__menu-stock dropdown">
              <a href="#">Новинки</a>
              <a href="#">Шкафы</a>
              <a href="#">Матрасы</a>
              <a href="#">Мягкая мебель</a>
            </div>
          </div>
          <img class="header__menu-etc-icon" src="/images/etc.svg" alt="search">
        </div>
      </div>
    </header>
    <section class="slider">
      <div class="slider__box">
        <div class="item">
          <img class="slider__box-img" src="/images/slide_1.png">
        </div>
        <div class="item">
          <img class="slider__box-img" src="/images/slide_2.png">
        </div>
        <div class="item">
          <img class="slider__box-img" src="/images/slide_3.png">
        </div>
        <a class="previous" onclick="previousSlide()">&#10094;</a>
        <a class="next" onclick="nextSlide()">&#10095;</a>
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
    </section>
    <section class="bestsellers">
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
          $dbPass = 'root';
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
  <script src="script.js"></script>
</body>

</html>