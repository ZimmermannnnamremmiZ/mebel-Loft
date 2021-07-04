// selects

$ (function () {
  let id = $(".subselect").val();
  $.ajax({
    type: "POST",
    url: "select_3.php",
    data: {id: id},
    success: function (data) {
      $(".select_3").html(data);
    }
  });
  $(".subselect").change(function() {
    let id = $(".subselect").val();
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