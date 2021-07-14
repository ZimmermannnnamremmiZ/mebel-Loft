$(document).ready(function() {
    $("#select_1").change(function() {
        let select_1_val = parseInt( $("#select_1").val() );
        selectFromSelect_2(select_1_val);
    });
    $("#select_2").change(function() {
        let select_2_val = parseInt( $("#select_2").val() );
        selectFromSelect_3(select_2_val);
    });
    $("#select_3").change(filterOnSelect_3)
});

function selectFromSelect_2(select_1_val) {
    let select_2 = $("#select_2");

    $("#select_2-box, #select_3-box").hide();
    clear(select_2);
    clear($("#select_3"));

    if (select_1_val > 0) {
        $("#select_2-box").fadeIn("slow");
        select_2.attr("disabled", false);
        select_2.load(
            "index.php",
            {select_1_val: select_1_val}
        )
    }
}

function selectFromSelect_3(select_2_val) {
    let select_3 = $("#select_3");

    $("#select_3-box").hide();
    clear(select_3);

    if(select_2_val > 0) {
        $("#select_3-box").fadeIn("slow");
        select_3.attr("disabled", false);
        select_3.load(
            "index.php",
            {select_2_val: select_2_val}
        );
    }
}

function clear(val) {
    val.empty();
    val.attr("disabled", true);
     
}

function filterOnSelect_3() {
  const elements = document.querySelectorAll('.bestsellers__box-item');
  const resultEl = document.querySelector('.bestsellers__box');

    [...elements].forEach((el) => {
      const itemCategory= el.querySelector(".bestsellers__item-category");
      const categoryText =  itemCategory.textContent;
    
      if ($.trim($('#select_3 option:selected').text()) === $.trim(categoryText)) {
        resultEl.appendChild(el);
        el.style.display = 'block';
      } else {
        el.style.display = 'none'
      }
    });
}
