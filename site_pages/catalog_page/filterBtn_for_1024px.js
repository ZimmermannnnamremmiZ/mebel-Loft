$(".catalog__filterBtn").click(function() {
    $(".catalog__menu").css("display", "flex");
    $(".catalog__filterBtn").css("display", "none")
    $(".bestsellers__box").css({
        "padding-left": "10px",
        "margin-top": "0"
    })                   
})