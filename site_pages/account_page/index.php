<?php
  session_start();
  $cart = $_SESSION['cart'];
  if(count((is_countable($cart)?$cart:[])) > 0){
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
  <link rel="stylesheet" href="style.css">
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
        <section class="userData">
          <form class="userData__info">
            <p class="userData__title">Личные данные</p>
            <div class="flex">
              <p class="mt30 inputHeader-style">Имя</p>
              <p class="inputHeader-email mt30 inputHeader-style">E-mail</p>
            </div>
            <div class="flex">
              <input type="text" class="input-1 input_style">
              <input type="text" class="input-2 input_style">
            </div>
            <div class="mt10">
              <div class="flex">
                <p class="inputHeader-style">Фамилия</p>
                <p class="inputHeader-number inputHeader-style">Номер телефона</p>
              </div>
              <div class="flex">
                <input type="text" class="input-1 input_style">
                <input type="text" class="input-2 input_style">
              </div>
            </div>
            <div class="mt30">
                <p class="inputHeader-style">Город</p>
                <input type="text" class="input-1 input_style">
            </div>
            <div class="mt10">
                <p class="inputHeader-style">Улица</p>
                <input type="text" class="input-1 input_style w433">
            </div>
            <div class="mt10">
              <div class="flex">
                <p class="inputHeader-style">Дом/Корпус</p>
                <p class="inputHeader-flat inputHeader-style">Квартира</p>
              </div>
              <div class="flex">
                <input type="text" class="input-home input_style">
                <input type="text" class="input-flat input_style">
              </div>
            </div>
            <button class="change_button">
              Изменить
            </button>
          </form>
          <div class="userData__orders">
            <p class="userData__-title">Мои заказы</p>
          </div>
        </section>
      </div>
    </header>
