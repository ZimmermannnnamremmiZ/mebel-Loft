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
const shopingItems = document.querySelectorAll('.shoping__item');

document.addEventListener("DOMContentLoaded", function() {
  boxItems.forEach((el) => {
    let item = el.querySelector('.bestsellers__item-price').textContent;
    el.querySelector('.bestsellers__item-price').textContent = parseInt(item.trim()).toLocaleString('ru-RU') + "₽";
  });
});

document.addEventListener("DOMContentLoaded", function() {
  shopingItems.forEach((el) => {
    let item = el.querySelector('.item_price').textContent;
    el.querySelector('.item_price').textContent = parseInt(item.trim()).toLocaleString('ru-RU') + "₽";
  });
});

// spaces in prices (end)