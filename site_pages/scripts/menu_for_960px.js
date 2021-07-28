// toggle menu's visibility for screen 960px (start)
$('.menu__btn').click(function () {
    $('.menu__box').css('visibility', 'visible')
  })
  
  $('.menu__closeBtn').click(function () {
    $('.menu__box').css('visibility', 'hidden')
    // $('.hamburger__topline').css{'transform' , 'scaleX(1)'}
    $('.hamburger__midline').css('transform' , 'scaleX(1)');
    $('.hamburger__botline').css('transform' , 'scaleX(1)');
  })
  // toggle menu's visibility for screen 960px (end)                             