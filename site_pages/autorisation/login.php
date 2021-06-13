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
                 <p>Приветствуем, '.$_SESSION['logged_user']->login.'!<br>Можете перейти на <a href="/site_pages/title_page/index.php">главную</a> страницу!</p>
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

<link rel="stylesheet" href="style.css">

<form class="form_login" action="/site_pages/autorisation/login.php" method="POST">

  <p>
    <p><strong>Ваш логин</strong>:</p>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>">
  </p>

  <p>
  <p><strong>Ваш пароль</strong>:</p>
  <input type="password" name="password">
  </p>

  <p>
    <button type="submit" name="do_login">Войти</button>
  </p>

</form>