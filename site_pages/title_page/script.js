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


// let toBasketBox = document.querySelector('.toBasket');
// let bestsellerBoxItem = document.querySelectorAll('.bestsellers__box-item');
// bestsellerBoxItem.forEach((el) => {
//     el.addEventListener('click', (item) => {
//         if (item.target.querySelector('.toBasket').classList.contains('display-none')) {
//             item.target.querySelector('.toBasket').classList.remove('display-none');
//           } else {
//             item.target.querySelector('.toBasket').classList.add('display-none');
//           }
//           });
// })



// слушатель для скрытия и показа блока с доп. информацией и добавления товара в корзину
document.addEventListener('click', function(event) {
    let id = event.target.dataset.toggleId;
    if (!id) return;

    let elem = document.getElementById(id);

    elem.hidden = !elem.hidden;
  });