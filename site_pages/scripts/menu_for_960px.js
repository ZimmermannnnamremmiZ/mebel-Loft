// toggle menu's visibility for screen 960px (start)
$('.menu__btn').click(function () {
  $('.menu__box').css({
    'visibility': 'visible',
    'transform': 'translate(230px)',
    'transition-duration': '0.3s'
  })
})

$('.menu__closeBtn').click(function () {
  $('.menu__box').css('visibility', 'hidden')
  $('.hamburger__midline').css('transform', 'scaleX(1)');
  $('.hamburger__botline').css('transform', 'scaleX(1)');
  $('.menu__box').css({
    'visibility': 'visible',
    'transform': 'translate(-230px)',
    'transition-duration': '0.9s'
  })
})
// toggle menu's visibility for screen 960px (end)