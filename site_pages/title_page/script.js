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


// spaces in prices (start)
const boxItems = document.querySelectorAll('.bestsellers__box-item');

boxItems.forEach((el) => {
    let item = el.querySelector('.bestsellers__item-price').textContent;
    el.querySelector('.bestsellers__item-price').textContent = parseInt(item.trim()).toLocaleString('ru-RU') + "₽";
  });
// spaces in prices (end)

$(document).ready(function(){
  const slider = $("#slider").owlCarousel({
      items: 7,
      loop: false,
      touchDrag: true,
      autoWidth:true,
      responsive:{
        0:{
            items:1
        },
        900:{
            items:3
        },
        1200:{
            items:7
        }
    }
  });
});