$(".catalog__filterBtn").click(function () {
    $(".catalog__menu-Container").css("display", "block");
    $(".catalog__menu").css("display", "flex");
    $(".hamburger-menu-2").css("margin-top", "10px")
    if ($(window).width() > 980) {
        $(".catalog__filterBtnBox").css("display", "none");
        $(".bestsellers__box").css({
            "grid-template-columns": "repeat(3, 1fr)",
            "margin-top": "30px",
            "margin-left": "30px"
        });
    } else if ($(window).width() > 740) {
        $(".catalog__filterBtnBox").css("display", "none");
        $(".bestsellers__box").css({
            "grid-template-columns": "repeat(2, 1fr)",
            "margin-top": "30px",
            "margin-left": "30px ",
            "width": "61%"
        });
    } else if ($(window).width() > 630) {
        $(".catalog__filterBtnBox").css("display", "none");
        $(".bestsellers__box").css({
            "grid-template-columns": "repeat(2, 1fr)",
            "margin-top": "30px",
            "margin-left": "5px ",
            "width": "61%",
            "grid-gap": "5px"
        });
    } else if ($(window).width() > 560) {
        $(".catalog__filterBtnBox").css("display", "flex");
        $(".catalog__filterBtn-x").css({
            "display": "block"
        });
        $(".catalog__menu-Container").css({
            "background-color": "#fff",
            "z-index": "3",
        });
        $(".catalog__filterBtnBox").css({
            "background-color": "inherit",
            "margin-top": "30px",
            "width": "inherit"
        });
        $(".catalog__filterBtn").css({
            "position": "static",
            "margin-top": "0",
            "width": "100%",
            "background-color": "inherit",
            "font-size": "14px"
        });
        $(".bestsellers__box").css("margin-top", "30px")
    } else if ($(window).width() > 500) {
        $(".catalog__filterBtn-x").css({
            "display": "block"
        });
        $(".catalog__menu-Container").css({
            "background-color": "#fff",
            "z-index": "2",
        });
        $(".catalog__filterBtnBox").css({
            "background-color": "inherit",
            "margin-top": "30px",
            "width": "inherit"
        });
        $(".catalog__filterBtn").css({
            "position": "static",
            "margin-top": "0",
            "width": "100%",
            "background-color": "inherit",
            "font-size": "14px"
        });
        $(".bestsellers__box").css("margin-top", "30px")
    } else if ($(window).width() > 300) {
        $(".catalog__filterBtn-x").css({
            "display": "block"
        });
        $(".catalog__menu-Container").css({
            "background-color": "#fff",
            "z-index": "2"
        });
        $(".catalog__filterBtnBox").css({
            "width": "inherit",
            "background-color": "inherit",
            "margin-top": "30px",
            "background-color": "inherit",
        });
        $(".catalog__filterBtn").css({
            "position": "static",
            "margin-top": "0",
            "width": "100%",
            "background-color": "inherit",
            "font-size": "14px"
        });
        $(".bestsellers__box").css("margin-top", "30px")
    } else {
        $(".catalog__filterBtn-x").css({
            "display": "block",
        });
        $(".catalog__menu-Container").css({
            "background-color": "#fff",
            "z-index": "2",
        });
        $(".catalog__filterBtnBox").css({
            "background-color": "inherit",
            "margin-top": "30px",
            "background-color": "inherit"
        });
        $(".catalog__filterBtn").css({
            "position": "static",
            "margin-top": "0",
            "width": "100%",
            "background-color": "inherit",
            "font-size": "14px"
        });
        $(".bestsellers__box").css("margin-top", "30px")
    }
})

$(".catalog__filterBtn-x").click(function () {
    $(".catalog__menu").css("display", "none");
    $(".catalog__menu-Container").css({
        "display": "none",
    });
    $(".catalog__filterBtnBox").css({
        "margin-top": "14px",
        "width": "auto",
    });
    $(".catalog__filterBtn").css({
        "width": "auto",
        "background-color": "#F9F9F9",
        "font-size": "12px"
    })
    $(".catalog__filterBtn-x").css({
        "display": "none",
    })
    $(".hamburger-menu-2").css("margin-top", "23px")
    $(".bestsellers__box").css("margin-top", "60px")
})