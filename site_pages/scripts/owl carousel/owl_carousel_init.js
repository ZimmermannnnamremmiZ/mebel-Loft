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