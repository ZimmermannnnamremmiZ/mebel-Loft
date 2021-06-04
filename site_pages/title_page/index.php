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
          <a class="header__sections-main mt-10" href="index.php">Главная</a>
          <a class="header__sections-about mt-10" href="/site_pages/about_page/index.html">О нас</a>
          <a class="header__sections-contacts mt-10" href="/site_pages/contacts_page/index.html">Контакты</a>
          <img class="header__phone-icon mt-10" src="/images/title_images/phone.svg">
          <a class="header__sections-phone mt-10" href="href=" tel:89648999119">8 (964) 89 99 119</a>
          <img class="header__delivery-icon" src="/images/title_images/delivery-icon.svg">
          <a class="header__sections-delivery mt-10" href="#">Доставка</a>
        </div>
        <div class="header__searchLine">
          <img class="header__logo" src="/images/LOGO.svg" alt="logo">
          <input class="header__searchLine-input" name="search" id="search" placeholder="Поиск">
          <img class="header__searchLine-wishlist" src="/images/wishlist-icon.svg" alt="search">
          <a class="header__searchLine-bag" href="/site_pages/basket_page/index.php" alt="search"></a>
          <img id="dota" class="header__searchLine-alarm" src="/images/оповещение.svg" hidden>
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
          }
        ?>

        <!--<div class="bestsellers__box-item" data-toggle-id="hidde__toBasket2">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-1.png" alt="empty" data-toggle-id="hidde__toBasket2">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket2">
            Толикс-2 White Gloss
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket2">
            Барные стулья
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket2">
            4 690₽
          </div>
          <div class="toBasket" id="hidde__toBasket2" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="2">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket3">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-2.png" alt="empty" data-toggle-id="hidde__toBasket3">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket3">
            Динс Velvet Yellow
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket3">
            Диваны
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket3">
            28 490₽
          </div>
          <div class="toBasket" id="hidde__toBasket3" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="3">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket4">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty" data-toggle-id="hidde__toBasket4">
          <img class="bestsellers__item-img" src="/images/image 2-3.png" alt="empty" data-toggle-id="hidde__toBasket4">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket4">
            Кускен Navy Blue
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket4">
            Диваны
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket4">
            2 300₽
          </div>
          <div class="toBasket" id="hidde__toBasket4" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="4">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket5">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-4.png" alt="empty" data-toggle-id="hidde__toBasket5">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket5">
            Шерона Barhat Grey
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket5">
            Двухспальные кровати
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket5">
            21 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket5" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="5">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket6">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-5.png" alt="empty" data-toggle-id="hidde__toBasket6">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket6">
            Авиньон-1
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket6">
            Буфеты
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket6">
            18 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket6" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="6">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item"  data-toggle-id="hidde__toBasket7">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-6.png" alt="empty"  data-toggle-id="hidde__toBasket7">
          <div class="bestsellers__item-name"  data-toggle-id="hidde__toBasket7">
            Стелла Дуб Сонома
          </div>
          <div class="bestsellers__item-category"  data-toggle-id="hidde__toBasket7">
            Комоды
          </div>
          <div class="bestsellers__item-price"  data-toggle-id="hidde__toBasket7">
            8 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket7" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="7">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket8">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-7.png" alt="empty" data-toggle-id="hidde__toBasket8">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket8">
            Равенна-1 Light
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket8">
            Комоды
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket8">
            14 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket8" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="8">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket9">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-8.png" alt="empty" data-toggle-id="hidde__toBasket9">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket9">
            Бенфлит Grey
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket9">
            Журнальные столы
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket9">
            7 290₽
          </div>
          <div class="toBasket" id="hidde__toBasket9" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="9">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket10">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-9.png" alt="empty" data-toggle-id="hidde__toBasket10">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket10">
            Тиффани Вудлайн Крем
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket10">
            Письменные столы
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket10">
            10 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket10" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="10">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket11">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-10.png" alt="empty" data-toggle-id="hidde__toBasket11">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket11">
            Валенсия Beige
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket11">
            Шкафы
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket11">
            19 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket11" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="11">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket12">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-11.png" alt="empty" data-toggle-id="hidde__toBasket12">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket12">
            Лайт-3-170-240 Белый
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket12">
            Шкафы
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket12">
            27 290₽
          </div>
          <div class="toBasket" id="hidde__toBasket12" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="12">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket13">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-12.png" alt="empty" data-toggle-id="hidde__toBasket13">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket13">
            Вилли Pink
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket13">
            Детский диван
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket13">
            21 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket13" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="13">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket14">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-13.png" alt="empty" data-toggle-id="hidde__toBasket14">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket14">
            Сан-Паулу Velvet Brown
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket14">
            Барные стулья
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket14">
            25 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket14" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add" data-id="14">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket15">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-14.png" alt="empty" data-toggle-id="hidde__toBasket15">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket15">
            Валенсия Beige
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket15">
            Барные стулья
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket15">
            10 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket15" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add" data-id="15">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket16">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-15.png" alt="empty" data-toggle-id="hidde__toBasket16">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket16">
            Валенсия Beige
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket16">
            Барные стулья
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket16">
            19 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket16" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="16">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket17">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-16.png" alt="empty" data-toggle-id="hidde__toBasket17">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket17">
            Шерона Barhat Grey
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket17">
            Двухспальные кровати
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket17">
            21 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket17" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="17">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket18">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-17.png" alt="empty" data-toggle-id="hidde__toBasket18">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket18">
            Авиньон-1
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket18">
            Буфеты
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket18">
            18 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket18" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="18">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket19">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-18.png" alt="empty" data-toggle-id="hidde__toBasket19">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket19">
            Стелла Дуб Сонома
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket19">
            Комоды
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket19">
            8 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket19" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="19">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket20">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-19.png" alt="empty" data-toggle-id="hidde__toBasket20">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket20">
            Равенна-1 Light
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket20">
            Комоды
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket20">
            14 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket20" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add" data-id="20">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket21">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-20.png" alt="empty" data-toggle-id="hidde__toBasket21">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket21">
            Бенфлит Grey
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket21">
            Журнальные столы
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket21">
            7 290₽
          </div>
          <div class="toBasket" id="hidde__toBasket21" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="21">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket22">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-21.png" alt="empty" data-toggle-id="hidde__toBasket22">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket22">
            Тиффани Вудлайн Крем
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket22">
            Письменные столы
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket22">
            10 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket22" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="22">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket23">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-22.png" alt="empty" data-toggle-id="hidde__toBasket23">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket23">
            Валенсия Beige
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket23">
            Шкафы
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket23">
            19 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket23" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="23">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket24">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-23.png" alt="empty" data-toggle-id="hidde__toBasket24">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket24">
            Лайт-3-170-240 Белый
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket24">
            Шкафы
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket24">
            27 290₽
          </div>
          <div class="toBasket" id="hidde__toBasket24" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="24">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket25">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-24.png" alt="empty" data-toggle-id="hidde__toBasket25">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket25">
            Вилли Pink
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket25">
            Детский диван
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket25">
            21 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket25" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="25">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket26">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-25.png" alt="empty" data-toggle-id="hidde__toBasket26">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket26">
            Сан-Паулу Velvet Brown
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket26">
            Барные стулья
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket26">
            25 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket26" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="26">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket27">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-26.png" alt="empty" data-toggle-id="hidde__toBasket27">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket27">
            Валенсия Beige
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket27">
            Барные стулья
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket27">
            10 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket27" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add"  data-id="27">Добавить в корзину</button>
          </div>
        </div>
        <div class="bestsellers__box-item" data-toggle-id="hidde__toBasket28">
          <img class="bestsellers__item-loverIcon" src="/images/список желаемого.svg" alt="empty">
          <img class="bestsellers__item-img" src="/images/image 2-27.png" alt="empty"  data-toggle-id="hidde__toBasket28">
          <div class="bestsellers__item-name" data-toggle-id="hidde__toBasket28">
            Валенсия Beige
          </div>
          <div class="bestsellers__item-category" data-toggle-id="hidde__toBasket28">
            Барные стулья
          </div>
          <div class="bestsellers__item-price" data-toggle-id="hidde__toBasket28">
            19 990₽
          </div>
          <div class="toBasket" id="hidde__toBasket28" hidden>
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
                <div class="toBasket__width-num">43 СМ</div>
                <div class="toBasket__depth-num">43 СМ</div>
                <div class="toBasket__height-num">77 СМ</div>
              </div>
              <button class="toBascet__add" data-id="28">Добавить в корзину</button>
          </div>
        </div> -->
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