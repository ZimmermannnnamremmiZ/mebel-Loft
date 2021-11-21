<?php
  require "db.php";
  session_start();
  $data = $_POST;
  $cart = $_SESSION['cart'];
  $id = $_SESSION['logged_user']->id;
  $id = (int)$id;
    if ( isset($_POST['change'])) {
      $findUser = R::findOne('users', 'id = ?', [$id]);
            $findUser->name = $data['name'];
            $findUser->email = $data['email'];
            $findUser->surname = $data['surname'];
            $findUser->telephone = $data['telephone'];
            $findUser->city = $data['city'];
            $findUser->street = $data['street'];
            $findUser->house = $data['house'];
            $findUser->flat = $data['flat'];
            $_SESSION['logged_user']->name = $data['name'];
            $_SESSION['logged_user']->email = $data['email'];
            $_SESSION['logged_user']->surname = $data['surname'];
            $_SESSION['logged_user']->telephone = $data['telephone'];
            $_SESSION['logged_user']->city = $data['city'];
            $_SESSION['logged_user']->street = $data['street'];
            $_SESSION['logged_user']->house = $data['house'];
            $_SESSION['logged_user']->flat = $data['flat'];
            R::store($findUser);
    };
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
  <script src="../scripts/owl carousel/owl.carousel.min.js"></script>
</head>

<body>
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
              <div class="menu__item menu__livingroom"><a href="/site_pages/catalog_page/index.php">Гостинные</a></div>
              <div class="menu__item menu__hallways"><a href="/site_pages/catalog_page/index.php">Прихожие</a></div>
              <div class="menu__item menu__office"><a href="/site_pages/catalog_page/index.php">Офисная мебель</a></div>
              <div class="menu__item menu__childrensroom"><a href="/site_pages/catalog_page/index.php">Детская</a></div>
              <div class="menu__item menu__stock"><a href="/site_pages/catalog_page/index.php">Акция</a></div>
              <div class="menu__item menu__novelty"><a href="/site_pages/catalog_page/index.php">Новинки</a></div>
              <div class="menu__item menu__mattress"><a href="/site_pages/catalog_page/index.php">Матрасы</a></div>
              <div class="menu__item menu__softFurniture"><a href="/site_pages/catalog_page/index.php">Мягкая мебель</a>
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
        <p class="navigation__end">Личный кабинет</p>
      </section>
      <div class="bonus">
        <p class="bonus__title">Бонусная программа</p>
        <p class="bonus__points">У вас 0 бонусных баллов</p>
        <a class="bonus__rules" href="#">Правила бонусной программы</a>
      </div>
      <section class="benefits">
        <div class="benefits__el1">
          <img class="benefits__el1-img" src="/images/account_page/cashback.svg">
          <p class="benefits__el1-text">Возвращаем до 7% на бонусный счет</p>
        </div>
        <div class="benefits__el2">
          <img class="benefits__el2-img" src="/images/account_page/rub.svg">
          <p class="benefits__el2-text">1 бонус = 1 рубль</p>
        </div>
        <div class="benefits__el3">
          <img class="benefits__el3-img" src="/images/account_page/box.svg">
          <p class="benefits__el3-text">Оплачивайте бонусами до 20% от покупки</p>
        </div>
      </section>
      <div class="userData__head flex">
        <p class="userData__title">Личные данные</p>
        <p class="userData__title userData__title-myOrders">Мои заказы</p>
      </div>
      <section class="userData">
        <form class="userData__info" action="/site_pages/account_page/index.php" method="POST">
          <div class="flex">
            <p class="inputHeader-style">Имя</p>
            <p class="inputHeader-email mt30 inputHeader-style">E-mail</p>
          </div>
          <div class="flex">
            <input type="text" class="input-1 input_style" value="<?php echo $_SESSION['logged_user']->name ?>"
              name="name">
            <input type="text" class="input-2 input_style" value="<?php echo $_SESSION['logged_user']->email ?>"
              name="email">
          </div>
          <div class="mt10">
            <div class="flex">
              <p class="inputHeader-style">Фамилия</p>
              <p class="inputHeader-number inputHeader-style">Номер телефона</p>
            </div>
            <div class="flex">
              <input type="text" class="input-1 input_style" value="<?php echo $_SESSION['logged_user']->surname ?>"
                name="surname">
              <input type="text" class="input-2 input_style" value="<?php echo $_SESSION['logged_user']->telephone ?>"
                name="telephone">
            </div>
          </div>
          <div class="mt30">
            <p class="inputHeader-style">Город</p>
            <input type="text" class="input-1 input_style" value="<?php echo $_SESSION['logged_user']->city ?>"
              name="city">
          </div>
          <div class="mt10">
            <p class="inputHeader-style">Улица</p>
            <input type="text" class="input-1 input_style w433" value="<?php echo $_SESSION['logged_user']->street ?>"
              name="street">
          </div>
          <div class="mt10">
            <div class="flex">
              <p class="inputHeader-style">Дом/Корпус</p>
              <p class="inputHeader-flat inputHeader-style">Квартира</p>
            </div>
            <div class="flex">
              <input type="text" class="input-home input_style" value="<?php echo $_SESSION['logged_user']->house ?>"
                name="house">
              <input type="text" class="input-flat input_style" value="<?php echo $_SESSION['logged_user']->flat ?>"
                name="flat">
            </div>
          </div>
          <button class="change_button" type="submit" name="change">
            Изменить
          </button>
        </form>
        <div class="userData__orders">
          <div class="userData__orders-header flex">
            <div class="userData__header-product">Товар</div>
            <div class="userData__header-price">Цена</div>
            <div class="userData__header-date">Дата</div>
            <div class="userData__header-status">Статус</div>
          </div>
          <div class="userData__productUnit flex">
            <div class="userData__product flex">
              <img class="product-img" src="/images/title_page/image 2-1.png" alt="empty">
              <p class="product-name">Кускен Navy Blue</p>
            </div>
            <div class="userData__price">16990</div>
            <div class="userData__date">01.05.2020</div>
            <div class="userData__status">Ожидается</div>
          </div>
          <div class="userData__productUnit flex">
            <div class="userData__product flex">
              <img class="product-img" src="/images/title_page/image 2-4.png" alt="empty">
              <p class="product-name">Стелла Дуб Сонома</p>
            </div>
            <div class="userData__price">28490</div>
            <div class="userData__date">01.05.2020</div>
            <div class="userData__status2">Оплачено<br>50%</div>
          </div>
          <div class="userData__productUnit flex">
            <div class="userData__product flex">
              <img class="product-img" src="/images/title_page/image 2-10.png" alt="empty">
              <p class="product-name">Вилли Pink</p>
            </div>
            <div class="userData__price">21990</div>
            <div class="userData__date">01.05.2020</div>
            <div class="userData__status">Доставлено</div>
          </div>
          <div class="userData__productUnit flex">
            <div class="userData__product flex">
              <img class="product-img" src="/images/title_page/image 2-2.png" alt="empty">
              <p class="product-name">Шерона Barhat Grey</p>
            </div>
            <div class="userData__price">21990</div>
            <div class="userData__date">01.05.2020</div>
            <div class="userData__status">Отменен</div>
          </div>
          <a href="#" class="userData__all">
            Смотреть все
          </a>
        </div>
      </section>
      <?php if ( isset($_POST['change'])) {
            echo '<a id="main" href="/site_pages/account_page/index.php">
                    <div class="change__userData">
                      Данные успешно изменены
                    </div>
                  </a>';
          }
          ?>
    </div>
  </div>
  <div class="wrap_2">
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
  </div>
  <script type="text/javascript">
    setTimeout(function () {
      $('#main').fadeOut('fast');
    }, 2000); //
  </script>
  <script src="../scripts/menu_for_1024px.js"></script>
  <script src="script.js"></script>
  <script src="../scripts/owl carousel/owl_carousel_init.js"></script>
</body>

</html>