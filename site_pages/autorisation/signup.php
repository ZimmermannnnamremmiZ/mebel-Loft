<?php
  require "db.php";

  $data = $_POST; // все переменные по посту в переменную data
  if(isset($data['do_signup'])) {
    //проверки
    $errors = array();
    if(trim($data['login'] == '')) {
      $errors[] = 'Введите логин!';
    };
    if(trim($data['email'] == '')) {
      $errors[] = 'Введите Email!';
    };
    if(($data['password'] == '')) {
      $errors[] = 'Введите пароль!';
    };
    if(($data['password_2'] != $data['password'])) {
      $errors[] = 'Пароли не совпадают!';
    };
    if(R::count('users', "login = ?", array($data['login'])) > 0) {
      $errors[] = 'Пользователь с таким логином уже существует!';
    };
    if(R::count('users', "email = ?", array($data['email'])) > 0) {
      $errors[] = 'Пользователь с таким Email уже существует!';
    };

    if(empty($errors)){
      $user = R::dispense('users');
      $user->login = $data['login'];
      $user->email = $data['email'];
      $user->password = password_hash($data['password'], PASSWORD_DEFAULT);  // шифруем пароль
      R::store($user);
      echo '<div class="error">
              <p>Вы успешно зарегестрированы, <a href="/site_pages/autorisation/login.php">войти на сайт</a></p>
           </div>';
    } else {
      echo '<div class="error">
              <p>'.array_shift($errors).'</p>
            </div>';
    }
  }
?>

<link rel="stylesheet" href="style.css">

<form class="form_reg" action="/site_pages/autorisation/signup.php" method="POST">

  <p>
  <p><strong>Ваше имя</strong>:</p>
  <input type="text" name="name" value="<?php echo @$data['name']; ?>">
  </p>

  <p>
  <p><strong>Ваш логин</strong>:</p>
  <input type="text" name="login" value="<?php echo @$data['login']; ?>">
  </p>

  <p>
  <p><strong>Ваш Email</strong>:</p>
  <input type="email" name="email" value="<?php echo @$data['email']; ?>">
  </p>

  <p>
  <p><strong>Ваш пароль</strong>:</p>
  <input type="password" name="password">
  </p>

  <p>
  <p><strong>Введите ваш пароль ещё раз</strong>:</p>
  <input type="password" name="password_2">
  </p>

  <p>
    <button type="submit" name="do_signup">Зарегистрироваться</button>
  </p>

</form>