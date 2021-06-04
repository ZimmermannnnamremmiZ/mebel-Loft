function addToCart(id) {
    console.log('add' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "/site_pages/basket_page/cart.php",
        dataType: "text",
        data: 'action=add&id=' + id,
        error: function () {
            alert("Не смог");
        },
        success: function (response) {
            alert('Товар был добавлен в корзину');
        }
    });
}

function showMyCart(){
    console.log('show');
    $.ajax({
        async: false,
        type: "POST",
        url: "/site_pages/basket_page/cart.php",
        data: "action=show",
        dataType: "text",
        error: function () {
            alert("Произошла ошибка при добавлении товара");
        },
        success: function (response) {
            $('#in-check').html(response);  // добавляем response в контейнер с id in-check
        }
    });
}

function delFromCart(id) {
    console.log('del' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "/site_pages/basket_page/cart.php",
        data: 'action=del&id=' + id,
        dataType: "text",
        error: function () {
            alert("Произошла ошибка при добавлении товара")
        },
        success: function (response) {
            showMyCart();
            console.log(response);
        }
    });
}
