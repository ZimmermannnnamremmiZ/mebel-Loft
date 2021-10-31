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
  });

  
});
// spaces in prices (end)











// const price = $(".bestsellers__item-price").text();
// const discont = $("bestsellers__discount-num").text();

// console.log(price)
// // function PriceWithoutDiscont (price, discont) {
// //   const res = (Number(price))/Number(discont)
// //   console.log(res)
// //   return res
// // }
// // $("bestsellers__discount").insertAfter(PriceWithoutDiscont(price, discont))