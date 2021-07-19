function addToCart(id) {
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
            $('.bestsellers__modalWindow-box').hide();
            setTimeout( function () {
                $('.bestsellers__modalWindow-box').show();
            }, 50)
            setTimeout( function () {
                $('.bestsellers__modalWindow-box').hide();
            }, 3000)
            $('.header__searchLine-alarm1').css("display", "block")
        }
    });

}

function showMyCart(){
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
            showMyCart(response);
        }
    });
}

// basket update
function loadToCart() {
        let check = $("#in-check");
        check.empty();
        showMyCart();
        $("html, body").animate({ scrollTop: $(document).height() });
}