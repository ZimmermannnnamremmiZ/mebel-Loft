// toggle menu's visibility for screen =<1024px
$('.menu__btn').click(function () {
  $('.menu__box').css({
    'visibility': 'visible',
    'transform': 'translate(2%)',
    'transition-duration': '0.3s'
  })
})

$('.menu__closeBtn').click(function () {
  $('.menu__box').css('visibility', 'hidden')
  $('.hamburger__midline').css('transform', 'scaleX(1)');
  $('.hamburger__botline').css('transform', 'scaleX(1)');
  $('.menu__box').css({
    'visibility': 'hidden',
    'transform': 'translate(-230px)',
    'transition-duration': '0.9s'
  })
})