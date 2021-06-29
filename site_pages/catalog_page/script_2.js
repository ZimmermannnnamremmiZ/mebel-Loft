// selects
$ (function () {
  let id = $(".select_2").val();
  $.ajax({
    type: "POST",
    url: "select_3.php",
    data: {id: id},
    success: function (data) {
      $(".select_3").html(data);
    }
  });
  $(".select_2").change(function() {
    let id = $(".select_2").val();
    if(id == 0) {

    }
    $.ajax({
    type: "POST",
    url: "select_3.php",
    data: {id: id},
    success: function (data) {
      $(".select_3").html(data);
    }
  });
  });
});