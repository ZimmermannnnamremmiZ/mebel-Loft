$(".catalog__filterBtn").click(function() {
    $(".catalog__menu-Container").css("display", "block");
    $(".catalog__menu").css("display", "flex");
    $(".catalog__filterBtn").css("display", "none");
    $(".bestsellers__box").css("width", "70%");
    $(".bestsellers__box-item").css("width", "32%")
})
