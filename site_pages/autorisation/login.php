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
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
    <body>
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
                    <div class="menu__item"><strong class="menu__home"><a href="/site_pages/title_page/index.php">Главная</a></strong></div>
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
                    <div class="menu__item menu__softFurniture"><a href="/site_pages/catalog_page/index.php">Мягкая мебель</a></div>
                    <div class="menu__item menu__cupboard"><a href="/site_pages/catalog_page/index.php">Шкафы</a></div>
                </div>
              </div>
              <a href="/site_pages/title_page/index.php" class=""><img class="header__logo" src="/images/LOGO.svg" alt="logo"></a>
              <a class="header__sections-main" href="/site_pages/title_page/index.php">Главная</a>
              <a class="header__sections-about" href="/site_pages/about_page/index.php">О нас</a>
              <a class="header__sections-contacts" href="/site_pages/contacts_page/index.php">Контакты</a>
              <input class="header__searchLine-input" name="search" id="search" placeholder="Поиск">
              <img class="header__phone-icon" src="/images/phone.svg">
              <a class="header__sections-phone" href="tel:89648999119">8 (964) 89 99 119</a>
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
                        <p>Приветствуем, '.$_SESSION['logged_user']->login.'<br>Можете перейти на <a href="/site_pages/title_page/index.php">главную страницу</a> или в <a href="/site_pages/account_page/index.php">личный кабинет</a></p>
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
          <div class="formElement mt30">
            <p class="formElement__header"><strong>Ваш логин</strong>:</p>
            <input class="formElement__input" type="text" name="login" value="<?php echo @$data['login']; ?>">
          </div>

          <div class="formElement mt30">
            <p class="formElement__header"><strong>Ваш пароль</strong>:</p>
            <input class="formElement__input" type="password" name="password">
          </div>

          <button class="submit" type="submit" name="do_login">Войти</button>

      </form>

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
    <script src="../scripts/menu_for_960px.js"></script>
  </body>
</html>