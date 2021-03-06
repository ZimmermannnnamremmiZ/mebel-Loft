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
  <link rel="icon" href="/images/favicon.png" type="images/x-icon">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="/site_pages/scripts/jQuery_touchErrorFix.js"></script>
  <link rel="stylesheet" href="/site_pages/scripts/owl carousel/owl.carousel.min.css">
  <script src="/site_pages/scripts/owl carousel/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="/reusable_css/fonts.css">
  <link rel="stylesheet" href="/reusable_css/lite_reset.css">
  <link rel="stylesheet" href="/reusable_css/footer_down.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/reusable_css/header.css">
  <link rel="stylesheet" href="/reusable_css/hamburger_menu.css">
  <link rel="stylesheet" href="/reusable_css/owl_carousel.css">
  <link rel="stylesheet" href="/reusable_css/footer.css">
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
                <div class="menu__h"><strong class="menu__menu">????????</strong></div>
                <div class="menu__item"><strong class="menu__home"><a href="/index.php">??????????????</a></strong></div>
                <div class="menu__item menu__about"><a href="/site_pages/about_page/index.php">?? ??????</a></div>
                <div class="menu__item menu__contacts"><a href="/site_pages/contacts_page/index.php">????????????????</a></div>
                <div class="menu__h menu__category"><strong>??????????????????</strong></div>
                <div class="menu__item menu__kitchen"><a href="/site_pages/catalog_page/index.php">??????????</a></div>
                <div class="menu__item menu__bedroom"><a href="/site_pages/catalog_page/index.php">??????????????</a></div>
                <div class="menu__item menu__livingroom"><a href="/site_pages/catalog_page/index.php">??????????????????</a>
                </div>
                <div class="menu__item menu__hallways"><a href="/site_pages/catalog_page/index.php">????????????????</a></div>
                <div class="menu__item menu__office"><a href="/site_pages/catalog_page/index.php">?????????????? ????????????</a>
                </div>
                <div class="menu__item menu__childrensroom"><a href="/site_pages/catalog_page/index.php">??????????????</a>
                </div>
                <div class="menu__item menu__stock"><a href="/site_pages/catalog_page/index.php">??????????</a></div>
                <div class="menu__item menu__novelty"><a href="/site_pages/catalog_page/index.php">??????????????</a></div>
                <div class="menu__item menu__mattress"><a href="/site_pages/catalog_page/index.php">??????????????</a></div>
                <div class="menu__item menu__softFurniture"><a href="/site_pages/catalog_page/index.php">????????????
                    ????????????</a>
                </div>
                <div class="menu__item menu__cupboard"><a href="/site_pages/catalog_page/index.php">??????????</a></div>
              </div>
            </div>
            <a href="/index.php" class=""><img class="header__logo" src="/images/title_page/LOGO.svg" alt="logo"></a>
            <a class="header__sections-main" href="/index.php">??????????????</a>
            <a class="header__sections-about" href="/site_pages/about_page/index.php">?? ??????</a>
            <a class="header__sections-contacts" href="index.php">????????????????</a>
            <input class="header__searchLine-input" name="search" id="search" placeholder="??????????">
            <img class="header__phone-icon" src="/images/title_page/phone.svg">
            <a class="header__sections-phone" href="tel:89648999119">8 (964) 89 99 119</a>
            <a class="header__delivery-icon" href="#"></a>
            <a class="header__sections-delivery" href="#">????????????????</a>
            <img class="header__searchLine-wishlist" src="/images/title_page/wishlist-icon.svg" alt="search">
            <a class="header__searchLine-bag" href="/site_pages/basket_page/index.php" alt="search"></a>
            <?php
                // ?????????????????? ?????????????? ???????????? ?? ??????????????
                if(count((is_countable($cart)?$cart:[])) > 0){
                  echo '<img class="header__searchLine-alarm2" src="/images/title_page/????????????????????.svg">';
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
              <h2 class="header__menu-kitchen-text header__menu-text">??????????</h2>
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
              <h2 class="header__menu-bedroom-text header__menu-text">??????????????</h2>
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
              <h2 class="header__menu-livingroom-text header__menu-text">??????????????????</h2>
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
              <h2 class="header__menu-closet-text header__menu-text">????????????????</h2>
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
              <h2 class="header__menu-office-text header__menu-text">?????????????? ????????????</h2>
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
              <h2 class="header__menu-childrensroom-text header__menu-text">??????????????</h2>
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
              <h6 class="header__menu-stock-text">??????????</h6>
              <div class="dropdown__menu-stock dropdown">
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">??????????????</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">??????????</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">??????????????</a>
                </div>
                <div class="dropdown__linkBox">
                  <a href="/site_pages/catalog_page/index.php">???????????? ????????????</a>
                </div>
              </div>
            </div>
          </div>
          <img class="header__menu-etc-icon" src="/images/title_page/etc.svg" alt="search">
        </header>
        <section class="navigation">
          <p class="navigation__start">??????????????</p>
          <p class="navigation__simbol">/</p>
          <p class="navigation__end">???????????? ??????????????</p>
        </section>
        <div class="bonus">
          <p class="bonus__title">???????????????? ??????????????????</p>
          <p class="bonus__points">?? ?????? 0 ???????????????? ????????????</p>
          <a class="bonus__rules" href="#">?????????????? ???????????????? ??????????????????</a>
        </div>
        <section class="benefits">
          <div class="benefits__el1">
            <img class="benefits__el1-img" src="/images/account_page/cashback.svg">
            <p class="benefits__el-text">???????????????????? ???? 7% ???? ???????????????? ????????</p>
          </div>
          <div class="benefits__el2">
            <img class="benefits__el2-img" src="/images/account_page/rub.svg">
            <p class="benefits__el-text">1 ?????????? = 1 ??????????</p>
          </div>
          <div class="benefits__el3">
            <img class="benefits__el3-img" src="/images/account_page/box.svg">
            <p class="benefits__el-text">?????????????????????? ???????????????? ???? 20% ???? ??????????????</p>
          </div>
        </section>
        <section class="userData">
          <div class="userData__info">
            <p class="userData__title">???????????? ????????????</p>
            <form class="userData__form" action="/site_pages/account_page/index.php" method="POST">
              <div class="userData__rowBox flex">
                <p class="inputHeader-left inputHeader-style">??????</p>
                <p class="inputHeader-right inputHeader-style">E-mail</p>
              </div>
              <div class="userData__rowBox flex">
                <input type="text" class="input-1 input_style" value="<?php echo $_SESSION['logged_user']->name ?>"
                  name="name" placeholder="Name">
                <input type="email" class="input-2 input_style" value="<?php echo $_SESSION['logged_user']->email ?>"
                  name="email" placeholder="Email">
              </div>
              <div class="userData__inputStack">
                <div class="userData__rowBox flex">
                  <p class="inputHeader-left inputHeader-style">??????????????</p>
                  <p class="inputHeader-right inputHeader-style">?????????? ????????????????</p>
                </div>
                <div class="userData__rowBox flex">
                  <input type="text" class="input-1 input_style" value="<?php echo $_SESSION['logged_user']->surname ?>"
                    name="surname">
                  <input type="tel" class="input-2 input_style"
                    value="<?php echo $_SESSION['logged_user']->telephone ?>" name="telephone"
                    placeholder="+x-xxx-xxx-xx-xx">
                </div>
              </div>
              <div class="userData__inputStack">
                <p class="inputHeader-style">??????????</p>
                <input type="text" class="input-1 input_style" value="<?php echo $_SESSION['logged_user']->city ?>"
                  name="city">
              </div>
              <div class="userData__inputStack">
                <p class="inputHeader-style">??????????</p>
                <input type="text" class="input-1 input_style userData__streetInput"
                  value="<?php echo $_SESSION['logged_user']->street ?>" name="street">
              </div>
              <div class="userData__inputStack">
                <div class="userData__inputHeaderBox flex">
                  <p class="inputHeader-style inputHeader-house">??????/????????????</p>
                  <p class="inputHeader-flat inputHeader-style">????????????????</p>
                </div>
                <div class="flex">
                  <input type="text" class="input-home input_style"
                    value="<?php echo $_SESSION['logged_user']->house ?>" name="house">
                  <input type="text" class="input-flat input_style" value="<?php echo $_SESSION['logged_user']->flat ?>"
                    name="flat">
                </div>
              </div>
              <button class="change_button" type="submit" name="change">
                ????????????????
              </button>
            </form>
          </div>
          <div class="userData__orders">
            <p class="userData__title userData__title-myOrders">?????? ????????????</p>
            <div class="userData__orders-header flex">
              <div class="userData__header-product">
                <div class="userData__header-productText">??????????</div>
              </div>
              <div class="userData__header-price">????????</div>
              <div class="userData__header-date">????????</div>
              <div class="userData__header-status">????????????</div>
            </div>
            <div class="userData__productUnit flex">
              <div class="userData__product flex">
                <img class="product-img" src="/images/title_page/image 2-1.png" alt="empty">
                <p class="product-name">???????????? Navy Blue</p>
              </div>
              <div class="userData__price">16990</div>
              <div class="userData__date">03.08.2021</div>
              <div class="userData__status">??????????????????</div>
            </div>
            <div class="userData__productUnit flex">
              <div class="userData__product flex">
                <img class="product-img" src="/images/title_page/image 2-4.png" alt="empty">
                <p class="product-name">???????????? ?????? ????????????</p>
              </div>
              <div class="userData__price">28490</div>
              <div class="userData__date">04.06.2021</div>
              <div class="userData__status2">???????????????? <br>50%</div>
            </div>
            <div class="userData__productUnit flex">
              <div class="userData__product flex">
                <img class="product-img" src="/images/title_page/image 2-10.png" alt="empty">
                <p class="product-name">?????????? Pink</p>
              </div>
              <div class="userData__price">21990</div>
              <div class="userData__date">02.03.2021</div>
              <div class="userData__status">????????????????????</div>
            </div>
            <div class="userData__productUnit flex">
              <div class="userData__product flex">
                <img class="product-img" src="/images/title_page/image 2-2.png" alt="empty">
                <p class="product-name">???????????? Barhat Grey</p>
              </div>
              <div class="userData__price">21990</div>
              <div class="userData__date">03.06.2021</div>
              <div class="userData__status">??????????????</div>
            </div>
            <a href="#" class="userData__all">
              ???????????????? ??????
            </a>
          </div>
        </section>
        <?php if ( isset($_POST['change'])) {
            echo '<div id="main" class="change__userData">
                      ???????????? ?????????????? ????????????????
                    </div>
                  ';
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
                ??????????????????
              </p>
              <div class="footer__navigation-item">
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">??????????</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">????????????????</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">??????????</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">??????????????</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">?????????????? ????????????</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">??????????????</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">??????????????????</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">??????????????</a>
                <a class="footer__navigation-itemText" href="/site_pages/catalog_page/index.php">???????????? ????????????</a>
              </div>
              <div class="footer__navigation-item2">
                <a class="footer__navigation-stock" href="/site_pages/catalog_page/index.php">??????????</a>
                <a class="footer__navigation-newItems" href="/site_pages/catalog_page/index.php">??????????????</a>
              </div>
            </div>
          </div>
          <div class="footer__navigation-rightSide">
            <div class="footer__contacts">
              <img class="footer__contacts-logo" src="/images/title_page/LM.svg" alt="empty">
            </div>
            <div class="footer__contacts-adres">
              ??. ??????????, ???????????????? ??????????,<br>30 ??/?? ???????????? ????????
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
  <script src="script.js"></script>
  <script src="../scripts/menu_for_1024px.js"></script>
  <script src="../scripts/owl carousel/owl_carousel_init.js"></script>
</body>

</html>