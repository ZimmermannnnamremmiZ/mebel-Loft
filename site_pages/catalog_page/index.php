<?php
  session_start();
  $cart = $_SESSION['cart'];
  require_once "selects_functions.php";

  if($_POST['select_1_val']) {
    $return = selectFromSelect_2();
    exit($return);
  }

  if($_POST['select_2_val']) {
    $return = selectFromSelect_3();
    exit($return);
  }

  $select_1 = catalogSelect();
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="/site_pages/basket_page/myCart.js"></script>
  </head>
    <body>
      <div class="container">
        <header class="header">
            <div class="header__sections">
              <a href="/site_pages/title_page/index.php" class=""><img class="header__logo" src="/images/LOGO.svg" alt="logo"></a>
              <a class="header__sections-main" href="/site_pages/title_page/index.php">Главная</a>
              <a class="header__sections-about" href="/site_pages/about_page/index.php">О нас</a>
              <a class="header__sections-contacts" href="index.php">Контакты</a>
              <input class="header__searchLine-input" name="search" id="search" placeholder="Поиск">
              <img class="header__phone-icon" src="/images/phone.svg">
              <a class="header__sections-phone" href="tel:89648999119">8 (964) 89 99 119</a>
              <img class="header__searchLine-alarm1" src="/images/оповещение.svg">
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
          <p class="navigation__end">lorem 1</p>
          <p class="navigation__simbol">/</p>
          <p class="navigation__end">lorem 2</p>
          <p class="navigation__simbol">/</p>
          <p class="navigation__end">lorem 3</p>
        </section>
        <button class="catalog__filterBtn">Фильтр</button>
        <section class="catalog">
          <div class="catalog__menu">
                <p class="catalog__header">
                  Раздел
                </p>
                <form action="" method="post">
                  <div>
                    <select class="catalog__select mt20" name="select_1" id="select_1">
                      <option class="catalog__select-item" value="0">Выбрать раздел</option>
                      <?php foreach($select_1 as $select_1_item): ?>
                        <option class='catalog__select-item' value='<?=$select_1_item['id_select_1'] ?>'><?=$select_1_item['title'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <div id="select_2-box" id="select_2-box">
                      <select class="select_2 cs mt20" name="select_2" id="select_2" disabled></select>
                    </div>
                    <div id="select_3-box" id="select_3-box">
                      <select class="select_3 cs mt20" name="select_3" id="select_3" disabled></select>
                    </div>
                  </div>
                </form>
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
                      <input id='id66i1' class='range__inpt1 inputright inputcurrency' type='number'>
                      <div class="line"></div>
                      <input id='id66i2' class='range__inpt2 inputright inputcurrency' type='number'>
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
                  <input type="checkbox" class="custom-checkbox brandItem" id="brand1" name="brand1" value="Динс">
                  <label for="brand1">Динс</label>
                  <input type="checkbox" class="custom-checkbox brandItem" id="brand2" name="brand2" value="Кускен">
                  <label for="brand2">Кускен</label>
                  <input type="checkbox" class="custom-checkbox brandItem" id="brand3" name="brand3" value="Шерона">
                  <label for="brand3">Шерона</label>
                  <input type="checkbox" class="custom-checkbox brandItem" id="brand4" name="brand4" value="Реджио">
                  <label for="brand4">Реджио</label>
                  <input type="checkbox" class="custom-checkbox brandItem" id="brand5" name="brand5" value="Сайле">
                  <label for="brand5">Сайле</label>
                  <div class="moreBrands">
                    <input type="checkbox" class="custom-checkbox brandItem brandItem" id="brand6" name="brand6" value="Равенна">
                    <label for="brand6">Равенна</label>
                    <input type="checkbox" class="custom-checkbox brandItem" id="brand7" name="brand7" value="Кусклер">
                    <label for="brand7">Кусклер</label>
                    <input type="checkbox" class="custom-checkbox brandItem" id="brand8" name="brand8" value="Авиньон">
                    <label for="brand8">Авиньон</label>
                    <input type="checkbox" class="custom-checkbox brandItem" id="brand9" name="brand9" value="Стелла">
                    <label for="brand9">Стелла</label>
                    <input type="checkbox" class="custom-checkbox brandItem" id="brand10" name="brand10" value="Бенфлит">
                    <label for="brand10">Бенфлит</label>
                    <input type="checkbox" class="custom-checkbox brandItem" id="brand11" name="brand11" value="Валенсия">
                    <label for="brand11">Валенсия</label>
                  </div>
                  <button class="showMore">Показать ещё</button>
                </div>
          </div>
      <div class="hamburger-menu">
          <input id="menu__toggle" type="checkbox" />
          <label class="menu__btn" for="menu__toggle">
            <span class="hamburger__topline"></span>
            <span class="hamburger__midline"></span>
            <span class="hamburger__botline"class="hamburge__topline"></span>
          </label>
          <ul class="menu__box">
            <li id="toMinPrice" class="menu__item">по убыванию цены</li>
			      <li id="toMaxPrice" class="menu__item">по возрастанию цены</a></li>
			      <li class="menu__item">по популярности</a></li>
          </ul>
      </div>
      <div class="bestsellers__box">
        <div class="bestsellers__modalWindow-box">
          Товар был успешно добавлен в корзину
        </div>
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
        <footer class="footer">
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
    <script src="linkShowMore.js"></script>
    <script src="../scripts/filterBtn_for_960px.js"></script>
    <script src="selects.js"></script>
    <script src="price-picker.js"></script>
    <script src="sort_products.js"></script>
    <script src="../basket_page/myCart.js"></script>
  </body>
</html>