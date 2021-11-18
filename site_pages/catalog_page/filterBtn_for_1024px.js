$(".catalog__filterBtn").click(function () {
    $(".catalog__menu-Container").css("display", "block");
    $(".catalog__menu").css("display", "flex");
    $(".hamburger-menu-2").css("margin-top", "10px")
    if ($(window).width() > 980) {
        $(".catalog__filterBtn-x").css("display", "none");
        $(".catalog__filterBtn").css("display", "none");
        $(".bestsellers__box").css({
            "grid-template-columns": "repeat(3, 1fr)",
            "margin-top": "30px",
            "margin-left": "30px"
        });
    } else if ($(window).width() > 740) {
        $(".catalog__filterBtn-x").css("display", "none");
        $(".catalog__filterBtn").css("display", "none");
        $(".bestsellers__box").css({
            "grid-template-columns": "repeat(2, 1fr)",
            "margin-top": "30px",
            "margin-left": "30px ",
            "width": "61%"
        });
        $(".catalog__menu-Container").css({
            "width": "30%"
        })
    } else if ($(window).width() > 630) {
        $(".catalog__filterBtn-x").css("display", "none");
        $(".catalog__filterBtn").css("display", "none");
        $(".bestsellers__box").css({
            "grid-template-columns": "repeat(2, 1fr)",
            "margin-top": "30px",
            "margin-left": "5px ",
            "width": "61%",
            "grid-gap": "5px"
        });
        $(".catalog__menu-Container").css({
            "width": "30%"
        })
    } else {
        $(".catalog__filterBtn-x").css({
            "display": "block",
            "padding": "0 10px"
        });
        $(".catalog__menu-Container").css({
            "display": "block",
            "position": "absolute",
            "width": "500px",
            "background-color": "#fff",
            "z-index": "2",
        });
        $(".catalog__filterBtnBox").css({
            "position": "absolute",
            "background-color": "inherit",
            "margin-top": "30px",
            "z-index": "3",
            "width": "540px"
        });
        $(".catalog__filterBtn").css({
            "position": "static",
            "margin-top": "0",
            "width": "100%",
            "background-color": "inherit",
            "font-size": "14px"
        });
        $(".catalog__menu").css("margin-top", "40px")
    }
})