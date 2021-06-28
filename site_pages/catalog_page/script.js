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