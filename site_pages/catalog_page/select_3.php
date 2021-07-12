<script type="text/javascript">
  $(function() {
    $('select[name="select_3"]').change(function() {
      function priceInRange() {
      const elements = document.querySelectorAll('.bestsellers__box-item');
      const resultEl = document.querySelector('.bestsellers__box');
    
        [...elements].forEach((el) => {
          const itemCategory= el.querySelector(".bestsellers__item-category");
          const categoryText =  itemCategory.innerHTML;
        
          if ($.trim($('select[name="select_3"]').innerHTML) === $.trim(categoryText)) {
            resultEl.appendChild(el);
            el.style.display = 'block';
          } else {
            el.style.display = 'none'
          }
        });
       }
    });
  });
</script>
<?php
  $dbUser = 'root';
  $dbName = 'selects';
  $dbPass = '';
  $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
  $query = 'set names utf8';
  $mysqli->query($query);
  $id = intval($_POST['id']);
  $query = "select * from `select_3` where `id_select_2` = $id";
  $results = $mysqli->query($query);
  if (isset($_POST['id']) && !empty($_POST['id'])) {
    while($row = $results->fetch_assoc()) {
      echo "<option value='{$row["id"]}'>{$row["title"]}</option>";
    }
  } else {
      echo "<option value='0'>Сперва выберете раздел</></option>";
  }
?>