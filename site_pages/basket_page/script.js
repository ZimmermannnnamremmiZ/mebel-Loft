// слушатель для скрытия и показа блока с доп. информацией и добавления товара в корзину
document.addEventListener('click', function(event) {
  let id = event.target.dataset.toggleId;
  if (!id) return;

  let elem = document.getElementById(id);

  elem.hidden = !elem.hidden;
  elem.parentElement.classList.toggle('box_withShadow');

});

// spaces in prices (start)
const boxItems = document.querySelectorAll('.bestsellers__box-item');

document.addEventListener("DOMContentLoaded", function() {
  boxItems.forEach((el) => {
    let item = el.querySelector('.bestsellers__item-price').textContent;
    el.querySelector('.bestsellers__item-price').textContent = parseInt(item.trim()).toLocaleString('ru-RU') + "₽";
    let itemPrice = (el.querySelector(".bestsellers__item-price").innerHTML).replace(/\D+/g, "");
    let disсount = el.querySelector(".bestsellers__discount-num");
    if (disсount !== null) {
      const discountNum = disсount.textContent.replace(/\D+/g, "");
      const priceWithDiscountInPercent = 100 - discountNum;
      const res = (itemPrice * 100) / priceWithDiscountInPercent;
      const fullRes = Math.round(res);
      el.querySelector(".bestsellers__fullPrice").innerHTML = fullRes.toLocaleString('ru-RU') + "₽";
    }
  });

  
});
// spaces in prices (end)
