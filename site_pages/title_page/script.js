                      // Слайдер

/* Устанавливаем индекс слайда по умолчанию */
let slideIndex = 1;
showSlides(slideIndex);

/* Увеличиваем индекс на 1 — показываем следующий слайд*/
function nextSlide() {
    showSlides(slideIndex += 1);
}

/* Уменьшает индекс на 1 — показываем предыдущий слайд*/
function previousSlide() {
    showSlides(slideIndex -= 1);
}

/* Устанавливаем текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Функция перелистывания */
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("item");

    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

  /* Проходим по каждому слайду в цикле for */
    for (let slide of slides) {
        slide.style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}


// слушатель для скрытия и показа блока с доп. информацией и добавления товара в корзину
document.addEventListener('click', function(event) {
    let id = event.target.dataset.toggleId;
    if (!id) return;

    let elem = document.getElementById(id);

    elem.hidden = !elem.hidden;
    elem.parentElement.classList.toggle('box_withShadow');

  });


// // Реализация корзины
// var d = document,
//     itemBox = d.querySelectorAll('.item_box'); // блок каждого товара

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


// // Записываем данные в LocalStorage
// function setCartData(o){
//   localStorage.setItem('cart', JSON.stringify(o));
//   return false;
// }
// // Добавляем товар в корзину
// function addToCart(e){
//   this.disabled = true; // блокируем кнопку на время операции с корзиной
//   var cartData = getCartData() || {}, // получаем данные корзины или создаём новый объект, если данных еще нет
//       parentBox = this.parentNode, // родительский элемент кнопки "Добавить в корзину"
//       itemId = this.getAttribute('data-id'), // ID товара
//       itemTitle = parentBox.querySelector('.item_title').innerHTML, // название товара
//       itemPrice = parentBox.querySelector('.item_price').innerHTML; // стоимость товара
//   if(cartData.hasOwnProperty(itemId)){ // если такой товар уже в корзине, то добавляем +1 к его количеству
//     cartData[itemId][2] += 1;
//   } else { // если товара в корзине еще нет, то добавляем в объект
//     cartData[itemId] = [itemTitle, itemPrice, 1];
//   }
//   if(!setCartData(cartData)){ // Обновляем данные в LocalStorage
//     this.disabled = false; // разблокируем кнопку после обновления LS
//   }
//  return false;
// }
// // Устанавливаем обработчик события на каждую кнопку "Добавить в корзину"
// for(var i = 0; i < itemBox.length; i++){
//   addEvent(itemBox[i].querySelector('.add_item'), 'click', addToCart);
// }


// Реализация корзины
var d = document,
    itemBox = d.querySelectorAll('.item_box'); // блок каждого товара

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


// Записываем данные в LocalStorage
function setCartData(e){
  localStorage.setItem('cart', JSON.stringify(e));
  return false;
}
// Добавляем товар в корзину
function addToCart(e){
  this.disabled = true; // блокируем кнопку на время операции с корзиной
  var cartData = getCartData() || {}, // получаем данные корзины или создаём новый объект, если данных еще нет
      parentBox = this.parentNode, // родительский элемент кнопки "Добавить в корзину"
      itemId = this.getAttribute('data-id'), // ID товара
      itemTitle = parentBox.querySelector('.item_title').innerHTML, // название товара
      itemPrice = parentBox.querySelector('.item_price').innerHTML; // стоимость товара
  if(cartData.hasOwnProperty(itemId)){ // если такой товар уже в корзине, то добавляем +1 к его количеству
    cartData[itemId][2] += 1;
  } else { // если товара в корзине еще нет, то добавляем в объект
    cartData[itemId] = [itemTitle, itemPrice, 1];
  }
  if(!setCartData(cartData)){ // Обновляем данные в LocalStorage
    this.disabled = false; // разблокируем кнопку после обновления LS
  }
 return false;
}
// Устанавливаем обработчик события на каждую кнопку "Добавить в корзину"
for(var i = 0; i < itemBox.length; i++){
  addEvent(itemBox[i].querySelector('.add_item'), 'click', addToCart);
}