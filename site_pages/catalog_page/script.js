// selects
$ (function () {
  let id = $(".catalog__select").val();
  $.ajax({
    type: "POST",
    url: "subselect.php",
    data: {id: id},
    success: function (data) {
      $(".subselect").html(data);
    }
  });
  $(".catalog__select").change(function() {
    let id = $(".catalog__select").val();
    if(id == 0) {

    }
    $.ajax({
    type: "POST",
    url: "subselect.php",
    data: {id: id},
    success: function (data) {
      $(".subselect").html(data);
    }
  });
  });
});

// on click on show more
$(".showMore").click(function() {
  $(".moreBrands").css({"display":"flex", "flex-direction":"column"});
  $(".showMore").css({"display":"none"});
})