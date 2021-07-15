// слушатель для скрытия и показа блока с доп. информацией и добавления товара в корзину
document.addEventListener('click', function(event) {
  let id = event.target.dataset.toggleId;
  if (!id) return;

  let elem = document.getElementById(id);

  elem.hidden = !elem.hidden;
  elem.parentElement.classList.toggle('box_withShadow');

});
