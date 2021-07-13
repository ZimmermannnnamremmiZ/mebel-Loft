// selects
function filterOnSelect_3() {
  const elements = document.querySelectorAll('.bestsellers__box-item');
  const resultEl = document.querySelector('.bestsellers__box');

    [...elements].forEach((el) => {
      const itemCategory= el.querySelector(".bestsellers__item-category");
      const categoryText =  itemCategory.textContent;
    
      if ($.trim($('.select_3 option:selected').text()) === $.trim(categoryText)) {
        resultEl.appendChild(el);
        el.style.display = 'block';
      } else {
        el.style.display = 'none'
      }
    });
}


$ (function () {
  let id = $(".subselect").val();
  $.ajax({
    type: "POST",
    url: "select_3.php",
    data: {id: id},
    success: function (data) {

      $(".select_3").html(data);
      $(".catalog__select").change(filterOnSelect_3);
      $(".select_3").change(filterOnSelect_3);


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
      $('.catalog__select').change(filterOnSelect_3);
      $('.select_3').change(filterOnSelect_3);
    }
  });
  });
  
  $(".catalog__select").change(function() {
    let id = $(".subselect").val();
    if(id == 0) {

    }
    $.ajax({
    type: "POST",
    url: "select_3.php",
    data: {id: id},
    success: function (data) {
      $(".select_3").html(data);
      $('.catalog__select').change(filterOnSelect_3);
      $('.select_3').change(filterOnSelect_3);
    }
  });
  });
});


