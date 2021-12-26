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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  </head>
    <body>
      <div class="container">
        <header class="header">
            <div class="header__sections">
              <img class="header__logo" src="/images/LOGO.svg" alt="logo">
              <a class="header__sections-main" href="/site_pages/title_page/index.php">Главная</a>
              <a class="header__sections-about" href="/site_pages/about_page/index.php">О нас</a>
              <a class="header__sections-contacts" href="index.php">Контакты</a>
              <input class="header__searchLine-input" name="search" id="search" placeholder="Поиск">
              <img class="header__phone-icon" src="/images/phone.svg">
              <a class="header__sections-phone" href="href=" tel:89648999119">8 (964) 89 99 119</a>
              <img class="header__delivery-icon" src="/images/delivery-icon.svg">
              <a class="header__sections-delivery" href="#">Доставка</a>
              <img class="header__searchLine-wishlist" src="/images/wishlist-icon.svg" alt="search">
              <a class="header__searchLine-bag" href="/site_pages/basket_page/index.php" alt="search"></a>
              <?php
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
        </header>
        <section class="navigation">
          <p class="navigation__start">Главная</p>
          <p class="navigation__simbol">/</p>
          <p class="navigation__end">lorem 1</p>
          <p class="navigation__simbol">/</p>
          <p class="navigation__end">lorem 2</p>
          <p class="navigation__simbol">/</p>
          <p class="navigation__end">lorem 3</p>
        </section>
        <section class="catalog">
          <div class="catalog__menu">
                <p class="catalog__header">
                  Раздел
                </p>
                <select class="catalog__select mt20">
                  <option class="catalog__select-item" value="0">Выбрать раздел</option>
                  <?php
                    $dbUser = 'root';
                    $dbName = 'selects';
                    $dbPass = '';
                    $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
                    $query = 'set names utf8';
                    $mysqli->query($query);
                    $query = 'select * from `select_1`';
                    $results = $mysqli->query($query);
                    while($row = $results->fetch_assoc()) {
                      echo "<option class='catalog__select-item' value='{$row["id"]}'>".$row["title"]."</option>";
                    }
                  ?>
                </select>
                <select class="cs subselect mt20" name="subselect"></select>
                <select class="cs select_3 mt20" name="select_3"></select>
                <p class="catalog__header mt20">
                  Цена
                </p>
                <div id='id66' class="range">
                  <div id='id66b' class='range__between'></div>
                    <div id='id661' class="range__button_1">
                      <div class="white-circle"></div>
                    </div>
                    <div id='id662' class="range__button_2">
                      <div class="white-circle"></div>
                    </div>
                    <div class="flex">
                      <input id='id66i1' class='range_inpt1' type='number' min='0' max='120000'>
                      <div class="line"></div>
                      <input id='id66i2' class='range_inpt2' type='number' min='0' max='120000'>
                    </div>
                </div>
                <p class="catalog__header colors">
                  Цвет
                </p>
                <div class="color">
                  <input type="checkbox" class="custom-checkbox" id="color1" name="color1" value="yes">
                  <label for="color1"></label>
                  <input type="checkbox" class="custom-checkbox" id="color2" name="color2" value="yes">
                  <label for="color2"></label>
                  <input type="checkbox" class="custom-checkbox" id="color3" name="color3" value="yes">
                  <label for="color3"></label>
                  <input type="checkbox" class="custom-checkbox" id="color4" name="color4" value="yes">
                  <label for="color4"></label>
                  <input type="checkbox" class="custom-checkbox" id="color5" name="color5" value="yes">
                  <label for="color5"></label>
                </div>
                <p class="catalog__header brands">
                  Бренд
                </p>
                <div class="brand">
                  <input type="checkbox" class="custom-checkbox" id="brand1" name="brand1" value="yes">
                  <label for="brand1">Динс</label>
                  <input type="checkbox" class="custom-checkbox" id="brand2" name="brand2" value="yes">
                  <label for="brand2">Кускен</label>
                  <input type="checkbox" class="custom-checkbox" id="brand3" name="brand3" value="yes">
                  <label for="brand3">Эби</label>
                  <input type="checkbox" class="custom-checkbox" id="brand4" name="brand4" value="yes">
                  <label for="brand4">Реджио</label>
                  <input type="checkbox" class="custom-checkbox" id="brand5" name="brand5" value="yes">
                  <label for="brand5">Сайле</label>
                  <div class="moreBrands">
                    <input type="checkbox" class="custom-checkbox" id="brand6" name="brand6" value="yes">
                    <label for="brand6">Лонск</label>
                    <input type="checkbox" class="custom-checkbox" id="brand7" name="brand7" value="yes">
                    <label for="brand7">Кусклер</label>
                    <input type="checkbox" class="custom-checkbox" id="brand8" name="brand8" value="yes">
                    <label for="brand8">Эбимекс</label>
                    <input type="checkbox" class="custom-checkbox" id="brand9" name="brand9" value="yes">
                    <label for="brand9">Ребноск</label>
                    <input type="checkbox" class="custom-checkbox" id="brand10" name="brand10" value="yes">
                    <label for="brand10">Дисмес</label>
                    <input type="checkbox" class="custom-checkbox" id="brand11" name="brand11" value="yes">
                    <label for="brand11">Рамлюр</label>
                  </div>
                  <button class="showMore">Показать ещё</button>
                </div>
          </div>
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
    <script src="script.js"></script>
    <script src="script_2.js"></script>
    <script src="price-picker.js"></script>
  </body>
</html>