// selects

$ (function () {
  let id = $(".subselect").val();
  $.ajax({
    type: "POST",
    url: "select_3.php",
    data: {id: id},
    success: function (data) {
      $(".select_3").html(data);
      $('select[name="select_3"]').change(function() {
        const elements = document.querySelectorAll('.bestsellers__box-item');
        const resultEl = document.querySelector('.bestsellers__box');
      
          [...elements].forEach((el) => {
            const itemCategory= el.querySelector(".bestsellers__item-category");
            const categoryText =  itemCategory.textContent;
          
            if ($.trim($('select[name="select_3"] option:selected').text()) === $.trim(categoryText)) {
              resultEl.appendChild(el);
              el.style.display = 'block';
            } else {
              el.style.display = 'none'
            }
          });
      });
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
