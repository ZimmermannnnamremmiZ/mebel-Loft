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
            $('#in-check-box').html(response);  // добавляем response в контейнер с id in-check-box

            const shopingItems = document.querySelectorAll('.shoping__item');
            // spaces in prices (start)
            if (shopingItems.length > 0) {
                shopingItems.forEach((el) => {
                    let item = el.querySelector('.item_price').textContent;


                    let dis = el.querySelector('.shoping__item-discount-num')
                    if (dis !== null) {
                        const discount = dis.textContent.replace(/\D+/g,"");
                        const priceWithDiscountInPercent = 100 - discount;
                        const res = (item*100)/priceWithDiscountInPercent;
                        const fullRes = Math.round(res);
                        el.querySelector(".shoping__item_withoutDiscount").innerHTML = fullRes;

                    }






                    el.querySelector('.item_price').textContent = parseInt(item.trim()).toLocaleString('ru-RU') + "₽";
                });

                let totalSum = document.querySelector('.totalSumBox__totalSum')
                totalSum.textContent = parseInt(totalSum.textContent.trim()).toLocaleString('ru-RU') + "₽"
            }
            // spaces in prices (end)
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
        let check = $("#in-check-box");
        check.empty();
        showMyCart();
        $("html, body").animate({ scrollTop: $(document).height() });
}