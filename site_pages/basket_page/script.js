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
//   var cartData = getCartData(), // вытаскиваем все данные корзины
//       totalItems = '';
//   // если что-то в корзине уже есть, начинаем формировать данные для вывода
//   if(cartData !== null){
//     totalItems = '<table class="shopping_list"><tr><th>Наименование</th><th>Цена</th><th>Кол-во</th></tr>';
//     for(var items in cartData){
//       totalItems += '<tr>';
//       for(var i = 0; i < cartData[items].length; i++){
//         totalItems += '<td>' + cartData[items][i] + '</td>';
//       }
//       totalItems += '</tr>';
//     }
//     totalItems += '</table>';
//     cartCont.innerHTML = totalItems;
//   } else {
//     // если в корзине пусто, то сигнализируем об этом
//     cartCont.innerHTML = 'В корзине пусто!';
//   }
//   return false;
// }
// /* Открыть корзину */
// addEvent(document.getElementById('checkout'), 'click', openCart);
// /* Очистить корзину */
// addEvent(document.getElementById('clear_cart'), 'click', function(e){
//   localStorage.removeItem('cart');
//   cartCont.innerHTML = 'Корзина очишена.';
// });


cartCont = document.getElementById('cart_content'); // блок вывода данных корзины

function addEvent(elem, type, handler){
  if(elem.addEventListener){
    elem.addEventListener(type, handler, false);
  } else {
    elem.attachEvent('on'+type, function(){ handler.call( elem ); });
  }
  return false;
}

// Получаем данные из LocalStorage
function getCartData(){
  return JSON.parse(localStorage.getItem('cart'));
}

// Открываем корзину со списком добавленных товаров
function openCart(e){
  var cartData = getCartData(), // вытаскиваем все данные корзины
      totalItems = '';
  // если что-то в корзине уже есть, начинаем формировать данные для вывода
  if(cartData !== null){
    totalItems = '<div class="shopping_list">';
    for(let items in cartData){
      totalItems += '<div>';
      for(let i = 0; i < cartData[items].length; i++){
        totalItems += `<div class='${i}'>` + cartData[items][i] + '</div>'
      }
      totalItems += '</div>';
    }
    totalItems += '</div>';
    cartCont.innerHTML = totalItems;
  } else {
    // если в корзине пусто, то сигнализируем об этом
    cartCont.innerHTML = 'В корзине пусто!';
  }
  return false;
}
/* Открыть корзину */
addEvent(document.getElementById('checkout'), 'click', openCart);
/* Очистить корзину */
addEvent(document.getElementById('clear_cart'), 'click', function(e){
  localStorage.removeItem('cart');
  cartCont.innerHTML = 'Корзина очишена.';
});