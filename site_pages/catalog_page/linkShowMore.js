// on click on show more
$(".showMore").click(function() {
  $(".moreBrands").css({"display":"flex", "flex-direction":"column"});
  $(".showMore").css({"display":"none"});
})

document.addEventListener('click', function(event) {
  let id = event.target.dataset.toggleId;
  if (!id) return;

  let elem = document.getElementById(id);

  elem.hidden = !elem.hidden;
  elem.parentElement.classList.toggle('box_withShadow');
});
