<?php
session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'мебель loft');
$query = 'set names utf8';
$mysqli->query($query);
$total = 0;

$action = $_POST["action"];
if ($action == 'show') {
    if (!(isset($_SESSION['cart']))){
        echo 'У вас нет заказов';
        exit;
    };
    $cart = $_SESSION['cart'];
    if(count($cart) == 0) {
        echo 'У вас нет заказов';
        exit;
    }

    foreach($cart as $idProduct => $num) {
        $query = 'select * from products where id = '.$idProduct.'';
        $results = $mysqli->query($query);
        while($row = $results->fetch_assoc()){
            $pPrice = $row['price'];
            $quantity = $num;
            $priceA = array();
            $pushA = $pPrice * $quantity;
            array_push($priceA, $pushA);
            $bT = implode(",", $priceA);
            $total += $bT;
            $quantityAll += $num;


            echo'
            <div class="in-check" id="in-check">
                <div class="shopping__list">
                    <div class="shoping__item">
                        <img class="shoping__img" src="'.$row["image"].'">
                        <div class="item_title">'.$row["name"].'</div>
                        <div class="item_price">'.$row["price"].'₽</div>
                        <div class="item_textQuantity">Количество:</div>
                        <div class="item_quantity">'.$num.'</div>
                        <div class="item_size">Размер(Ш×Д×В):</div>
                        <div class="item_width">'.$row["width"].' СМ</div>
                        <div class="item_x"></div>
                        <div class="item_depth">'.$row["depth"].' СМ</div>
                        <div class="item_x2"></div>
                        <div class="item_height">'.$row["height"].' СМ</div>
                        <button class="item_delete" id="delete" onClick="delFromCart('.$row["id"].')"></button>
                    </div>
                </div>
            </div>
            ';
        }
    }
};

echo '
<div class="totalSumBox">
<div class="totalSumBox__text">Итоговая стоимость:</div>
<div class="totalSumBox__totalSum">'.$total.'₽</div>
<input class="totalSumBox__checkout" type="button" value="Оформить заказ">
</div>
';

    // склонения для числовых значений
    function num_word($value, $words, $show = true)
    {
        $num = $value % 100;
        if ($num > 19) {
            $num = $num % 10;
        }

        $out = ($show) ?  $value . ' ' : '';
        switch ($num) {
            case 1:  $out .= $words[0]; break;
            case 2:
            case 3:
            case 4:  $out .= $words[1]; break;
            default: $out .= $words[2]; break;
        }

        return $out;
    };

    echo '
    <div class="totalQuantity">
    <div class="totalQuantity__text">Ваша корзина</div>
    <div class="totalQuantity__num">'.num_word($quantityAll, array('предмет', 'предмета', 'предметов')).'</div>
    </div>
    ';


    // при наличии товара в корзине, возле неё появится точка
    if($quantityAll > 0){
                echo '
                <img class="header__searchLine-alarm" src="/images/оповещение.svg">
                ';
                };
#####################################
if ($action == 'add') {
    // Считываем уже имеющуюся корзину
    $cart = $_SESSION['cart'];
    // Считываем id продукта, который необходимо добавить
    $id = $_POST['id'];
    // Проверка на наличие товара в корзине
    if(isset($cart[$id])){
        //Товар уже в корзине, увеличиваем кол-во
        $cart[$id]++;
    } else {
        // если в корзине нет элемента - добавляем
        // По умолчанию будем добавлять в корзину одну единицу товара
        $cart[$id] = 1;
    }
    $_SESSION['cart'] = $cart;
}

#######################################
if ($action == 'del'){
    // id продукта для удаления
    $id = $_POST["id"];
    // Имеющаяся корзина
    $cart = $_SESSION['cart'];
    // Уничтожить элемент корзины с заданным ключом (ключ = id продукта)
    unset($cart[$id]);
    $_SESSION['cart'] = $cart;
}

?>