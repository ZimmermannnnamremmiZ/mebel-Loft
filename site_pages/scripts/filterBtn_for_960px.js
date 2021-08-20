$(".catalog__filterBtn").click(function() {
    $(".catalog__menu").css("display", "flex");
    $(".catalog__filterBtn").css("display", "none")
    $(".bestsellers__box").css({
        "width": "695px",
        "justify-content": "start",
        "margin-right": "100px",
        "margin-left": "100px"
    })                   
})