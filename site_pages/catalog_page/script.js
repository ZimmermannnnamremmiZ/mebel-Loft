// selects
$ (function () {
  let id = $(".catalog__select").val();
  $.ajax({
    type: "POST",
    url: "subselect.php",
    data: {id: id},
    success: function (data) {

      $(".subselect").html(data);
      $(".select_3 option:last").prop('selected', true);
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
      $(".select_3 option:last").prop('selected', true);
    }
  });
  });
});

// on click on show more
$(".showMore").click(function() {
  $(".moreBrands").css({"display":"flex", "flex-direction":"column"});
  $(".showMore").css({"display":"none"});
})

document.addEventListener('click', function(event) {
  let id = event.target.dataset.toggleId;
  if (!id) return;

  let elem = document.getElementById(id);

  elem.hidden = !elem.hidden;
  elem.parentElement.classList.toggle('box_withShadow');
});
