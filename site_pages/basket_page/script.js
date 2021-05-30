

// if(localStorage.getItem("cart") != null) {
//   const dot = document.getElementById('dota')
//   dot.hidden = false;
// }

// cartCont = document.getElementById('cart_content'); // блок вывода данных корзины

// function addEvent(elem, type, handler){
//   if(elem.addEventListener){
//     elem.addEventListener(type, handler, false);
//   } else {
//     elem.attachEvent('on'+type, function(){ handler.call( elem ); });
//   }
//   return false;
// }

// // Получаем данные из LocalStorage
// function getCartData(){
//   return JSON.parse(localStorage.getItem('cart'));
// }

// // Открываем корзину со списком добавленных товаров
// function openCart(e){
//   let cartData = getCartData(), // вытаскиваем все данные корзины
//       totalItems = '';
//   // если что-то в корзине уже есть, начинаем формировать данные для вывода
//   if(cartData !== null){
//     totalItems = '<div class="shopping__list">';
//     for(let items in cartData){
//       totalItems += '<div class="shoping__item">';
//       for(let i = 0; i < cartData[items].length; i++){
//         totalItems += `<div class='item_element${i}'>` + cartData[items][i] + '</div>';
//       }
//       totalItems += '</div>';
//     }
//     totalItems += '</div>';
//     cartCont.innerHTML = totalItems;
//   } else {
//     // если в корзине пусто, то сигнализируем об этом
//     cartCont.innerHTML = 'В корзине пусто!';
//   }

//   let del = document.querySelectorAll('.item_element8');
//   let arr = Array.prototype.slice.call(del);
//   arr.forEach((el) => {
//     el.addEventListener('click', () => {

//       localStorage.removeItem('cart');
//       cartCont.innerHTML = 'Корзина очишена.';
//       const dot = document.getElementById('dota');
//       if(localStorage.getItem("cart") != null) {
//         dot.hidden = false;
//       } else {dot.hidden = true}
//     })
//   })

//   return false;
// }

// openCart()