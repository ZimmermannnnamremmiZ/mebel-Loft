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
  <link rel="icon" href="/images/favicon.png" type="images/x-icon">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/reusable_css/header.css">
  <link rel="stylesheet" href="/reusable_css/hamburger_menu.css">
  <link rel="stylesheet" href="../scripts/owl carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="/reusable_css/owl_carousel.css">
  <link rel="stylesheet" href="/reusable_css/footer.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="/site_pages/scripts/jQuery_touchErrorFix.js"></script>
  <script src="../scripts/owl carousel/owl.carousel.min.js"></script>
</head>

<body>
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
                <?php
                  for ($i = 1; $i <= 5; $i++) {
                    echo '
                      <div class="dropdown__linkBox">
                        <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                      </div>
                    ';
                  }
                ?>
              </div>
            </div>
            <div class="header__menu-cell bedroom slide">
              <div class="header__menu-bedroom-icon carousel_icon"></div>
              <h2 class="header__menu-bedroom-text header__menu-text">Спальни</h2>
              <div class="dropdown__bedroom dropdown">
                <?php
                  for ($i = 1; $i <= 3; $i++) {
                    echo '
                      <div class="dropdown__linkBox">
                        <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                      </div>
                    ';
                  }
                ?>
              </div>
            </div>
            <div class="header__menu-cell livingroom slide">
              <div class="header__menu-livingroom-icon carousel_icon"></div>
              <h2 class="header__menu-livingroom-text header__menu-text">Гостинные</h2>
              <div class="dropdown__livingroom dropdown">
                <?php
                  for ($i = 1; $i <= 10; $i++) {
                    echo '
                      <div class="dropdown__linkBox">
                        <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                      </div>
                    ';
                  }
                ?>
              </div>
            </div>
            <div class="header__menu-cell closet slide">
              <div class="header__menu-closet-icon carousel_icon"></div>
              <h2 class="header__menu-closet-text header__menu-text">Прихожие</h2>
              <div class="dropdown__closet dropdown">
                <?php
                  for ($i = 1; $i <= 7; $i++) {
                    echo '
                      <div class="dropdown__linkBox">
                        <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                      </div>
                    ';
                  }
                ?>
              </div>
            </div>
            <div class="header__menu-cell office slide">
              <div class="header__menu-office-icon carousel_icon"></div>
              <h2 class="header__menu-office-text header__menu-text">Офисная мебель</h2>
              <div class="dropdown__office dropdown">
                <?php
                  for ($i = 1; $i <= 12; $i++) {
                    echo '
                      <div class="dropdown__linkBox">
                        <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                      </div>
                    ';
                  }
                ?>
              </div>
            </div>
            <div class="header__menu-cell childrensroom slide">
              <div class="header__menu-childrensroom-icon carousel_icon"></div>
              <h2 class="header__menu-childrensroom-text header__menu-text">Детская</h2>
              <div class="dropdown__childrensroom dropdown">
                <?php
                  for ($i = 1; $i <= 8; $i++) {
                    echo '
                      <div class="dropdown__linkBox">
                        <a href="/site_pages/catalog_page/index.php">Lorem ipsum dolor</a>
                      </div>
                    ';
                  }
                ?>
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
        <form class="form" action="/site_pages/autorisation/login.php" method="POST">
          <?php
          require "db.php";
          $data = $_POST; // все переменные по посту в переменную data
          if ( isset($data['do_login']) ){
            $errors = array();
            $user = R::findOne('users', 'login = ?', array($data['login']));
            if( $user ) { // если пользователь существует
              if ( password_verify($data['password'], $user->password) ) {
                $_SESSION['logged_user'] = $user;
                echo '<div class="success">
                        <p>Приветствуем, '.$_SESSION['logged_user']->login.'<br>Можете перейти на <a href="/index.php">главную страницу</a> или в <a href="/site_pages/account_page/index.php">личный кабинет</a></p>
                      </div>';
              } else {
                $errors[] = 'Неверно введен пароль!';
              }

            } else {
              $errors[] = 'Пользователь с таким логином не сущеествует! <a href="/site_pages/autorisation/signup.php">Зарегистрироваться</a>';
            }

            if( !empty($errors) ){
              echo '<div class="error">
                      <p>'.array_shift($errors).'</p>
                    </div>';
            }
          }
        ?>
          <div class="formElement formElement__margin">
            <p class="formElement__header"><strong>Ваш логин</strong>:</p>
            <input class="formElement__input" type="text" name="login" value="<?php echo @$data['login']; ?>">
          </div>

          <div class="formElement formElement__margin">
            <p class="formElement__header"><strong>Ваш пароль</strong>:</p>
            <input class="formElement__input" type="password" name="password">
          </div>
          <button class="submit" type="submit" name="do_login">Войти</button>
        </form>
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
  </div>
  <script src="../scripts/menu_for_1024px.js"></script>
  <script src="../scripts/owl carousel/owl_carousel_init.js"></script>
</body>

</html>